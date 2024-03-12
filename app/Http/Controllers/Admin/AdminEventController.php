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


        try{

            $event=DB::transaction(function()use($request){
                $event=Event::create([
                    'user_id'=>auth()->user()->id,
                    'event_name'=>$request->event_name,
                    'event_date'=>$request->event_date,
                    
                    
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