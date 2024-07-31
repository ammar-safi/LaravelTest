<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $data = Movie::all() ;
        return view("index" , compact("data")) ;
    }
}
