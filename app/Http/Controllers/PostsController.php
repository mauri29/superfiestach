<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
    	return view('blog.blog')->with(['posts' => $post->latestFirst()->isLive()->get(), 'posts' => Post::paginate(22)]);
    }

    public function tagged(Tag $tag)
    {
    	return view('posts.tag')->with([
    		'posts' => $tag->posts()->latestFirst()->isLive()->get(),
    		'tag' => $tag,
    		//'posts' => $post->latestFirst()->get(),
    	]);
    }
}
