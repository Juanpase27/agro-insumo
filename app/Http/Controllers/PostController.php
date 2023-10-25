<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::where('user_id', 1)->get();
        //orderBy('id', 'desc')->paginate(15);
        return view('posts.index', compact('posts'));
    }
}
