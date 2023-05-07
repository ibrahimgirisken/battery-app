<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        return view("frontend.index");
    }
    public function services(){
        return view("frontend.pages.services");
    }
    public function projects(){
        return view("frontend.pages.project");
    }
    public function contact(){
        return view("frontend.pages.contact");
    }
    public function blog(){
        return view("frontend.pages.blog");
    }

    public function about(){
        return view("frontend.pages.about");
    }
}
