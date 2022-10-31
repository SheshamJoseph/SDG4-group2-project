<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    

    public function donate(){
        return view('donate');
    }
    public function newsletter(){
        return view('newsletter');
    }
    public function volunteer(){
        return view('volunteer');
    }

    public function volunteerform(){
        return view('volunteerform');
    }

    public function material(){
        return view('material');
    }
    public function partner(){
        return view('partner');
    }
    public function account(){
        return view('account');
    }
    public function partnerwus(){
        return view('partnerwus');
    }
}
