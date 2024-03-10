<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolAboutController extends Controller
{
    public function index(){
        return view('school.about');
    }
}