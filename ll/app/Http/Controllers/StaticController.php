<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticController extends Controller
{
    public function about_view(){
    	return view('static_pages.aboutus');
    }

    public function concept_view(){
    	return view('static_pages.concept');
    }





}
