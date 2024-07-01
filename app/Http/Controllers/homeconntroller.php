<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeconntroller extends Controller
{
    //
    public function index(){
        return view('homepage');   
    }
}
