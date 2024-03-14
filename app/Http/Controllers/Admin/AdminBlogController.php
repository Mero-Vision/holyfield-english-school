<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBlogController extends Controller
{
    public function index(){
        $blogs=Blog::with('media')->where('status','active')->latest()->paginate(5);
       return view('admin.blogs.blogs',compact('blogs'));
    }


    public function create(){
        
        return view('admin.blogs.add_blogs');
    }

    public function store(Request $request){

        try{

            $blog=DB::transaction(function()use($request){
                $blog=Blog::create([
                    'published_by'=>auth()->user()->name,
                    'title'=>$request->title,
                    'description'=> $request->Input('description')
                    
                ]);

                if ($request->blog_image) {
                    $blog->addMedia($request->blog_image)->toMediaCollection('blog_image');
                }
                return $blog;
                
            });
            if($blog){
                return back()->with('success','Blog published successfully!');
            }
            
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
            
        }
        
    }
}