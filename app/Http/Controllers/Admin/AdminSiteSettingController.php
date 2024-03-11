<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SiteSetting\SiteSettingCreateRequest;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSiteSettingController extends Controller
{
    // public function index($settingable_type = null, $settingable_id = null)
    // {
    //     $setting = SiteSetting::all();

    //     $site_setting = SiteSetting::where("settingable_type", $settingable_type)
    //         ->where("settingable_id", $settingable_id)
    //         ->get();
    //     $data = [];
    //     foreach ($site_setting as $item) {
    //         if ($item->type == 'image') {
    //             $data[$item->key] = $item->getFirstMediaUrl();
    //         } else {
    //             $data[$item->key] = $item->value;
    //         }
    //     }


    //     return view('admin.setting.setting', compact('data'));
    // }

    public function store(SiteSettingCreateRequest $request)

    {

        try {

            DB::transaction(function () use ($request) {

                foreach (SiteSetting::$keys as $key => $data) {
                    if (!isset($request->$key))
                        continue;
                    $value = (($data["type"] == "image") ? $request->file($key) : $request->get($key));
                    if (!$value) {
                        if ($data["type"] != "image")
                            SiteSetting::where('key', $key)->delete();
                        continue;
                    }
                    $site_setting = SiteSetting::updateOrCreate([
                        "key" => $key,
                    ], [
                        "value" => $data["type"] == "text" ? $value : (($data["type"] == "array") ? json_encode($value) : null),
                        "type" => $data["type"]
                    ]);
                    if ($data["type"] == "image") {
                        $site_setting->clearMediaCollection();
                        $site_setting->addMedia($request->file($key))->toMediaCollection();
                    }
                }
            });
            sweetalert()->addSuccess("Site setting added successfully!");
            return back();
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

}