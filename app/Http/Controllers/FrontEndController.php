<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use App\Models\Slide;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(Request $request){
        $slides = Slide::get();
        $projects = Project::get();
        $about = About::first();
        return view('frontend.dashboard', compact('slides', 'projects', 'about'));
    }

    public function project(){
        $projects = Project::get();
        return view('frontend.project', compact('projects'));
    }

    public function about(){
        $about = About::First();
        return view('frontend.about', compact('about'));
    }

    public function contact(){
        return view('frontend.contact');
    }
}
