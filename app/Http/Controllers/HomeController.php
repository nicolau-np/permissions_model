<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'title'=>"Permission Model",
            'menu'=>"home",
        ];
        return view('home', $data);
    }

    public function sobre(){
        return view('sobre');
    }
}