<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PublicWebController extends Controller
{
    //
    public function webpage()
    {
        $posts = Post::all();
        return view('webpage', ['posts' => $posts]);
    }
}
