<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class SchoolBlogController extends Controller
{
    public function index(){

        $search=request()->query('search_keyword');
        
        $blogs = Blog::with('media')->where('status', 'active')
        ->when($search,function($query)use($search){
            $query->where('title','like','%'.$search.'%')
            ->orWhere('description', 'like', '%' . $search . '%');
            
        })->latest()->paginate(5);

        
        $recentBlogs = Blog::with('media')->where('status', 'active')->latest()->paginate(5);
        return view('school.blogs',compact('blogs', 'recentBlogs'));
    }
}