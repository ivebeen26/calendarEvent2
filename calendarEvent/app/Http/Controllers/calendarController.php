<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\calendarEvent;

class calendarController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        return response()->json(calendarEvent::orderBy('created_at', 'desc')->first());
    }

    public function addEvent(Request $request)
    {
        $calendar = new calendarEvent;
        $calendar->event = $request->event;
        $calendar->from = $request->from;
        $calendar->to = $request->to;
        $calendar->days = json_encode($request->days);
        $calendar->save();

        return response()->json($calendar);
    }
}
