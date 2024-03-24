<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\GalleryCreateRequest;
use App\Http\Services\MediaService;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminGalleryController extends Controller
{
    public function index()
    {

        return view('admin.gallery.gallery');
    }

    public function store(GalleryCreateRequest $request)
    {

        

        try {
            $gallery = DB::transaction(function () use ($request) {

                $gallery = Gallery::create([
                    'published_by' => auth()->user()->name,
                    'title' => $request->title,

                ]);
                if ($request->gallery_image) {
                    $filename = $request->gallery_image->getClientOriginalName();
                    $image = MediaService::uploadCompressImage($request->gallery_image);
                    $gallery->addMediaFromStream($image)->usingFileName($filename)->toMediaCollection('gallery_image');
                }

                return $gallery;
            });
            if($gallery){
                return back()->with('success','Image uploaded successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}