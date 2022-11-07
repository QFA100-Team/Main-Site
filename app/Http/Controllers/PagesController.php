<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $var = 'QFA100 Team';
        $sb = 'test';
        return view('pages.home', compact('var', 'sb'));
    }

    public function about(){
        return view('pages.about');
    }

    public function news(){
        return view('pages.news');
    }

    public function team(){
        return view('pages.team');
    }

    public function route(){
        return view('pages.route');
    }

    public function roster(){
        return view('pages.roster');
    }
}
