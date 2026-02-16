<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackEndController extends Controller
{
    public function index(Request $request) {
        return view('backend.dashboard');
    }
}
