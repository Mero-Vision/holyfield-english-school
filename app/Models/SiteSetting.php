<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SiteSetting extends BaseModel implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public static $keys = [

        "school_name" => [
            "type" => "text",
            "element" => "text",
            "visible" => 1,
            "display_text" => "School Name"
        ],

        "logo" => [
            "type" => "image",
            "element" => "image",
            "visible" => 1,
            "display_text" => "Site Logo"
        ],


    ];
}