<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ILLuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::select("SELECT * FROM posts;");
        dd($posts);
        //return view('posts.index');
    }
}
