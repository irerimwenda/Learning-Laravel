<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Create variable and store in fromDB
        $posts = Post::orderBy('created_at', 'desc') -> paginate(5);

        //Return view and pass variable
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $this->validate($request, array(
            'title' => 'required|max:150',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'body' => 'required'
        ));

        //Store in DB
        $post = new Post;
        $post->title = $request->title;
        $post->slug= $request->slug;
        $post->body = $request->body;

        $post->save();

        Session::flash('success', 'Blog post successfully posted');

        //Redirect
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  Find Post in DB and save as a variable
        $post = Post::find($id);

        //  Return the view and pass in the previousl created variable
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  Validate Data
        $this->validate($request, array(
            'title' => 'required|max:150',
            'slug' => 'required|alpha_dash|min:5|max:200|unique:posts,slug',
            'body' => 'required'
        ));

        //  Save Data to DB
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug - $request->input('slug');
        $post->body = $request->input('body');

        $post->save();

        //  Set Flash data with success message
        Session::flash('success', 'Post successfully updated!');

        //  Redirect with Flash data to show request
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE FROM DB
        $post = Post::find($id);
        $post->delete();

        Session::flash('success', 'Post successfully deleted');
        return redirect()->route('post.index');
    }
}
