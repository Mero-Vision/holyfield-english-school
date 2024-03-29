<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class AdminEventController extends Controller
{
    public function index(){
        return view('admin.events.events');
    }

    public function eventData()
    {
        $events = Event::all();

       
        $formattedEvents = [];
        foreach ($events as $event) {
            $formattedEvents[] = [
                'title' => $event->event_name,
                'start' => Carbon::parse($event->event_date)->format('Y-m-d H:i:s'), 
                'end' => Carbon::parse($event->event_date)->format('Y-m-d H:i:s'),    
                'className' => 'bg-primary',   
            ];
        }

       
        return response()->json($formattedEvents);
    }

    public function addEventIndex(){
        return view('admin.events.add_event');
    }

    public function store(Request $request){

        $request->validate([
            'event_name'=>['required','string'],
            'event_date'=>['required'],
            'start_time'=>['required'],
            'end_time'=>['required'],
            'event_address'=>['required']
            
        ]);


        try{

            $event=DB::transaction(function()use($request){
                $event=Event::create([
                    'published_by'=>auth()->user()->name,
                    'event_name'=>$request->event_name,
                    'event_date'=>$request->event_date,
                    'start_time'=>$request->start_time,
                    'end_time'=>$request->end_time,
                    'address'=>$request->event_address,
                    
                    
                ]);
                return $event;
                
            });
            if($event){
                return back()->with('success','Event created successfully!');
            }
            
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
            
        }
    }
}