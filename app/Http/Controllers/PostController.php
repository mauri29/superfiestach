<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Post;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
    	Alert::info("{$post->price}.- CHF || {$post->weight} gr.", "{$post->title}")->persistent("Super Fiesta");
    	return view('post.post')->with([
    		'post' => $post,
    	]);
    }
}
