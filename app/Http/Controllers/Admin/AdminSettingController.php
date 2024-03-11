<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function generalSettingIndex($settingable_type = null, $settingable_id = null)
    {

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

        return view('admin.settings.general_settings', compact('data'));
    }

    public function localizationSettingIndex()
    {
        return view('admin.settings.localization_settings');
    }

    public function socialLinksIndex()
    {
        return view('admin.settings.social_links');
    }
}