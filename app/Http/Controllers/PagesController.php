<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex()
    {
        $first = "Brian";
        $mydata = [];
        $mydata['firstname'] = $first;
        return view('pages.welcome')->withMydata($mydata);
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

