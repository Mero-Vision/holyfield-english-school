<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SchoolAboutController extends Controller
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
       
        return view('school.about',compact('data'));
    }
}