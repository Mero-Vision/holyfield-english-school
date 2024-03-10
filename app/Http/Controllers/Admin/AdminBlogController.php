<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index(){
        $blogs=Blog::where('status','active')->latest()->paginate(5);
       return view('admin.blogs.blogs',compact('blogs'));
    }


    public function create(){
        
        return view('admin.blogs.add_blogs');
    }
}