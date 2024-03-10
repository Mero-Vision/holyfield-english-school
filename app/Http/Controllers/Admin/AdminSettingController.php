<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function generalSettingIndex(){
        return view('admin.settings.general_settings');
    }

    public function localizationSettingIndex()
    {
        return view('admin.settings.localization_settings');
    }
}