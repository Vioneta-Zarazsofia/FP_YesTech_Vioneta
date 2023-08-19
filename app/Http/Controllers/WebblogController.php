<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebblogController extends Controller
{
    public function webblog()
    {
        $posts = Post::all();
        return view('webblog', ['posts' => $posts]);
    }
}