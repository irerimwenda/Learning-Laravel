<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

    public function getIndex()
    {
        $post = Post::paginate(3);
        return view('blog.index')->withPosts($post);
    }

    public function getSingle($slug)
    {
        // Fetch from the DB based on slug
            $post = Post::where('slug', '=', $slug)->first();
        //Return view and pass in the post object
            return view('blog.single')->withPost($post);
    }

}
