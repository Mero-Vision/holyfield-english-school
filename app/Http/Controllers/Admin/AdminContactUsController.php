<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AdminContactUsController extends Controller
{
    public function index(){
        $contacts=ContactUs::latest()->get();
        return view('admin.contact_us.view_contact_us',compact('contacts'));
    }
}