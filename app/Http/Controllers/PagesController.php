<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    
    public function getHome(){ 

    	return view('index');
    }
    public function getCourses()
    {
        return view('courses');
    }
    public function getAboutPage()
    {
        return view('about');
    }
    public function getContactPage()
    {
        return view('contact');
    }
    
    public function getGallaryPage()
    {
        return view('gallary');
    }
    public function getBlogPage()
    {
        return view('blog');
    }

    public function getAdminDashBoard()
    {
        return view('admin.index');
    }
    
}
