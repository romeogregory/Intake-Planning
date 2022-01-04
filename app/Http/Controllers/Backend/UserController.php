<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Laravel\Fortify\Rules\Password;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'role:Administrator']);
    }

    public function index()
    {
        $users = User::all();
        return view('backend.user.user-list')->with('users', $users);
    }

    public function create()
    {
        return view('backend.user.user-new');
    }

    protected function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed'];
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'          => ['required', 'string', 'max:30'],
            'lastname'      => ['required', 'string', 'max:30'],
            'email'         => ['required', 'email', 'max:50', 'unique:users,email'],
            'phone_number'  => ['required' ,'numeric'],
            'role'          => ['required', 'in:Prospect,Klant,Support,Administrator'],
            'company_name'  => ['required', 'string', 'max:50'],
            'password'      => $this->passwordRules(),
        ]);

        /* create user */
        $user = User::create([
            'name'          => $request['name'],
            'lastname'      => $request['lastname'],
            'company_name'  => $request['company_name'],
            'phone_number'  => $request['full_number'],
            'email'         => $request['email'],
            'password'      => Hash::make($request['password']),
        ]);
        /* create user end */

        $user->assignRole($request['role']);

        $user->sendEmailVerificationNotification();
    }

    public function delete($id)
    {
        $delete = User::where('id', $id)->delete();

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = __('sweetalert.User deleted successfully');
        } else {
            $success = false;
            $message = __('sweetalert.User not found');
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
