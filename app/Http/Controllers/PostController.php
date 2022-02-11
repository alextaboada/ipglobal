<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts')->with('posts',Post::all());
    }

    public function show($id)
    {
        return view('post')->with('post',Post::find($id));
    }
}
