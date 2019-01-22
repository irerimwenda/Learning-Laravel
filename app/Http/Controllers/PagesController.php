<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $first = "Brian";
        $mydata = [];
        $mydata['firstname'] = $first;

        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();

        return view('pages.welcome')->withPosts($posts)->withMydata($mydata);
    }

    public function getAbout()
    {
        $first = "Brian";
        $last = "Ireri";
        $fullname = $first . " " . $last;
        $email = "iambrian@gmail.me";
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages.about') ->withData($data);
    }

    public function getContact()
    {
        return view('pages.contact');
    }
    
    public function getPost()
    {
        return view('posts.create');
    }
}

