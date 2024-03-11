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
                'start' => Carbon::now(), // Assuming start_date is a field in your Event model
                'end' =>Carbon::now(),    // Assuming end_date is a field in your Event model
                'className' => 'bg-primary',   // Example class name, you can customize this
            ];
        }

        // Return the formatted events
        return response()->json($formattedEvents);
    }
}