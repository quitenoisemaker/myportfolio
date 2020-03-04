<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\post;
use App\User;
use App\photo;
use App\category;

class MyPortfolio extends Controller
{
    //


     public function post(){

        $posts=post::all();

        return view('portfolio.index', compact('posts'));
    }
}
