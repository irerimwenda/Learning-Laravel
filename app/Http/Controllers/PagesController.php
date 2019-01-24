<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

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

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10']);

            $data = array(
                'email' => $request->email,
                'subject' => $request->subject,
                'bodyMessage' => $request->message
            );

            Mail::send('emails.contact', $data, function($message) use ($data)
        {
            $message->from($data['email']);
            $message->to('brian.ireri@students.dkut.ac.ke');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your email was sent');

        return redirect()->url('/');
    }
    
    public function getPost()
    {
        return view('posts.create');
    }
}

