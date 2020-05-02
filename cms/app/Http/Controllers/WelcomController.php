<?php

namespace App\Http\Controllers;

use App\Post;

use App\Tag;

use App\category;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function index()
    {
        return view('welcome')
            ->with('categories', Category::all())
            ->with('tags', Tag::all())
            ->with('posts', Post::all());
    }
}
