<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $var = 'QFA100 Team';
        return view('pages.home', compact('var'));
    }

    public function about(){
        return view('pages.about');
    }

    public function pilots(){
        return view('pages.pilots');
    }

    public function route(){
        return view('pages.route');
    }
}
