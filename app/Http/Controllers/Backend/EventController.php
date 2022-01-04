<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'role:Administrator|Support']);
    }

    public function index()
    {
 
       $events = [];
       $data = Event::all();
       if($data->count()){
          foreach ($data as $key => $value) {
            $events[] = \Calendar::event(
                $value->title,
                false,
                new \DateTime($value->start),
                new \DateTime($value->end)
            );
          }
       }
      $calendar = \Calendar::addEvents($events); 
      return view('backend.calendar.calendar', compact('calendar'));
    }
}
