<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class SchoolBlogController extends Controller
{
    public function index(){
        $blogs = Blog::with('media')->where('status', 'active')->latest()->paginate(5);
        return view('school.blogs',compact('blogs'));
    }
}