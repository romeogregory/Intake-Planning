<?php

namespace App\Http\Controllers\Backend;

use App\Mail\IntakeConfirmEmail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Intake;
use App\Models\Event;
use App\Models\User;

class IntakeController extends Controller
{
    public function index()
    {
        return view('backend.intake.intake');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => ['required', 'string', 'max:30'],
            'lastname' => ['required', 'string', 'max:30'],
            'email_intake' => ['required', 'email', 'max:50', 'unique:intakes,email'],
            'phone_number' => ['required' ,'numeric'],
            'company_name' => ['required', 'string', 'max:50'],
            'explanation' => ['required', 'string', 'max:500'],
        ]);


        $token = (string) Str::uuid(); // generate unique token

        $intake = Intake::create([
            'name'          => $request['name'],
            'lastname'      => $request['lastname'],
            'email'         => $request['email_intake'],
            'phone_number'  => $request['full_number'],
            'company_name'  => $request['company_name'],
            'explanation'   => $request['explanation'],
            'token'         => $token,
            'manually'      => 0,

        ]);

        $data = [
            'name'          => $request['name'],
            'lastname'      => $request['lastname'],
            'email'         => $request['email_intake'],
            'phone_number'  => $request['full_number'],
            'company_name'  => $request['company_name'],
            'explanation'   => $request['explanation'],
        ];

        Mail::to($request['email_intake'])->send(new IntakeConfirmEmail($data));

        return response()->view('backend.intake.intake-success', compact('data'), 200) 
        ->header("Refresh", "5;url=https://serointech.com"); 

    }

    private function rand_string( $length ) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        return substr(str_shuffle($chars),0,$length);
    }

    public function storeManual(Request $request)
    {
        $data = $request->validate([
            'name'          => ['required', 'string', 'max:30'],
            'lastname'      => ['required', 'string', 'max:30'],
            'email_intake'  => ['required', 'email', 'max:50', 'unique:intakes,email', 'unique:users,email'],
            'phone_number'  => ['required' ,'numeric'],
            'company_name'  => ['required', 'string', 'max:50'],
            'explanation'   => ['required', 'string', 'max:500'],
            'teams_link'    => ['required', 'string'],
            'start'         => ['required', 'date'],
            'end'           => ['required', 'date'],
        ]);


        $token = (string) Str::uuid(); // generate unique token

        /* create user */
        $user = User::create([
            'name'          => $request['name'],
            'lastname'      => $request['lastname'],
            'company_name'  => $request['company_name'],
            'phone_number'  => $request['full_number'],
            'email'         => $request['email_intake'],
            'password'      => Hash::make($this->rand_string(15)),
        ]);
        /* create user end */

        /* create intake */
        $intake = Intake::create([
            'name'          => $request['name'],
            'lastname'      => $request['lastname'],
            'email'         => $request['email_intake'],
            'phone_number'  => $request['full_number'],
            'company_name'  => $request['company_name'],
            'explanation'   => $request['explanation'],
            'notes'         => $request['notes'],
            'teams_link'    => $request['teams_link'],
            'token'         => $token,
            'customer_id'   => $user->id,
            'manually'      => 1,
            'status'        => 1,

        ]);
        /* create user end */
        
        /* create event */
        $event = Event::create([
            'title'         => __('event.title', ['naam' => $intake->name]),
            'start'         => $request['start'],
            'end'           => $request['end'],
            'intake_id'     => $intake->id,
        ]);
        /* create event end */

    }

    public function delete($id)
    {
        $delete = Intake::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = __('sweetalert.Intake deleted successfully');
        } else {
            $success = false;
            $message = __('sweetalert.Intake not found');
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function intakes()
    {
        $intakes = Intake::all();
        return view('backend.intake.intake-list')->with('intakes', $intakes);
    }

    public function IntakePlanner(Intake $intake)
    {
        return view('backend.intake.intake-planner')->with('intake', $intake);
    }

    public function intakeNew()
    {
        return view('backend.intake.intake-new');
    }
}
