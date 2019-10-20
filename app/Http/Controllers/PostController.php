<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        return view('posts.create');
    }

    public function save(Request $request) {
        Post::create([
            'name' => $request['name'],
            'is_completed' => 0
        ]);
        return "created a new task successfully";
    }
}
