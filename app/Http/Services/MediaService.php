<?php

namespace App\Http\Services;

use Intervention\Image\ImageManager;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaService
{
    
    public static function uploadCompressImage($image)
    {
        $manager = new ImageManager(['driver' => 'gd']);
        $image = $manager->make($image)->stream('jpg', 30);

        return $image;
    }
}