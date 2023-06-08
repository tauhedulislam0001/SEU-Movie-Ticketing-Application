<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() 
    {
        return view('frontend.pages.home.home');
        // return view('welcome');
    }
}
