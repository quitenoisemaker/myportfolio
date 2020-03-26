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

        $posts=post::latest()->take(3)->get();



        return view('portfolio.index', compact('posts'));
    }

  



     public function allpost(){

        $posts=post::latest()->paginate(5);

        return view('allpost.index', compact('posts'));
    }
}