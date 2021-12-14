<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('Frontend.pages.home');
    }

    public function schedule(){
        return view('Frontend.pages.schedule');
    }
}
