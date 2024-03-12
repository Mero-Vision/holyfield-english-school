<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\SiteSetting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($settingable_type = null, $settingable_id = null){

        $site_setting = SiteSetting::where("settingable_type", $settingable_type)
            ->where("settingable_id", $settingable_id)
            ->get();
        $data = [];
        foreach ($site_setting as $item) {
            if ($item->type == 'image') {
                $data[$item->key] = $item->getFirstMediaUrl();
            } else {
                $data[$item->key] = $item->value;
            }
        }
        $upComingEvents = Event::whereRaw("STR_TO_DATE(event_date, '%d-%m-%Y') >= CURDATE()")
        ->orderBy('event_date', 'DESC')
        ->get();
        

       

        
        return view('school.index',compact('data', 'upComingEvents'));
    }
}