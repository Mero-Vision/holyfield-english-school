<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\TeacherCreateRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminTeacherController extends Controller
{
    public function index(){
       return view('admin.teachers.add_teacher');
    }

    public function viewTeachersIndex(){

        $teachers=Teacher::latest()->paginate(10);
        return view('admin.teachers.view_teachers',compact('teachers'));
    }

    public function store(TeacherCreateRequest $request){

        try{

            $teacher=DB::transaction(function()use($request){

                $teacher=Teacher::create([
                    'teacher_name'=>$request->teacher_name,
                    'dob'=>$request->dob,
                    'email'=>$request->email,
                    'gender'=>$request->gender,
                    'mobile_no'=>$request->mobile_no,
                    'address'=>$request->address,
                    'joining_date'=>$request->joining_date,
                    'education_qualification'=>$request->education_qualification,
                    'position'=>$request->position
                ]);

                if ($request->profile_image) {
                    $teacher->addMedia($request->profile_image)->toMediaCollection('teacher_image');
                }
                return $teacher;
                
            });
            if($teacher){
                return back()->with('success','Teacher data saved successfully!');
            }
            
        }
        catch(\Exception $e){
            return back()->with('error',$e->getMessage());
            
        }
            
        
        
    }
}