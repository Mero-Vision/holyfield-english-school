<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SchoolBlogController extends Controller
{
    public function index($settingable_type = null, $settingable_id = null){

        $search=request()->query('search_keyword');
        
        $blogs = Blog::with('media')->where('status', 'active')
        ->when($search,function($query)use($search){
            $query->where('title','like','%'.$search.'%')
            ->orWhere('description', 'like', '%' . $search . '%');
            
        })->latest()->paginate(5);

        
        $recentBlogs = Blog::with('media')->where('status', 'active')->latest()->paginate(5);

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
        
        return view('school.blogs',compact('blogs', 'recentBlogs','data'));
    }

    public function show($slug, $settingable_type = null, $settingable_id = null)
    {
        $blog = Blog::with('media')->where('slug', $slug)->first();
        $recentBlogs = Blog::with('media')->where('status', 'active')->latest()->paginate(5);

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
        
       return view('school.blog_details',compact('blog', 'recentBlogs','data'));
    }
}