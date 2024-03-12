<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index(){
       return view('admin.teachers.add_teacher');
    }
}