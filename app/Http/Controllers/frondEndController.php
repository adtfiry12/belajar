<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frondEndController extends Controller
{
    public function index(){
        return view('frontend.dashboard');
    }

    public function project(){
        return view('frontend.project');
    }

    public function about(){
        return view('frontend.about');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
