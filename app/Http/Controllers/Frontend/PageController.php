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

    public function tickets(){
        return view('Frontend.pages.tickets');
    }

    public function sponsors(){
        return view('Frontend.pages.sponsors');
    }

    public function member(){
        return view('Frontend.pages.membership');
    }

    public function about(){
        return view('Frontend.pages.about');
    }

    public function gallery(){
        return view('Frontend.pages.gallery');
    }

    public function video(){
        return view('Frontend.pages.video');
    }

    public function contact(){
        return view('Frontend.pages.contact');
    }
}
