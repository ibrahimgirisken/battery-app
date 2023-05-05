<?php

namespace App\Http\Controllers\Sliders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function getSliders(){
        return view('backend.sliders.sliders');
    }
    public function sliderAdd(){
        return view('backend.sliders.slider-add');
    }
    public function sliderEdit(){
        return view('backend.sliders.slider-edit');
    }
}
