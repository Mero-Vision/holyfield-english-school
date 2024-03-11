<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class AdminEventController extends Controller
{
    public function index(){
        return view('admin.events.events');
    }

    public function eventData()
    {
        $events = Event::all();

        // Transform events into the format expected by the calendar
        $formattedEvents = [];
        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->event_name,
                'start' => Carbon::parse($event->event_date)->format('Y-m-d H:i:s'), 
                'end' => Carbon::parse($event->event_date)->format('Y-m-d H:i:s'),    
                'className' => 'bg-primary',   
            ];
        }

        // Return the formatted events
        return response()->json($formattedEvents);
    }
}