<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use App\Category;
use App\Tag;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $categories = Category::all();
        $tags = Tag::all(); 
        return view('posts.create')->withCategories($categories)->withTags($tags);
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
            'category_id' => 'required|integer',
            'body' => 'required'
        ));

        //Store in DB
        $post = new Post;
        
        $post->title = $request->title;
        $post->slug= $request->slug;
        $post->category_id = $request->category_id;
        $post->body = $request->body;

        $post->save();

        $post->tags()->sync($request->tags, false);

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
        $categories = Category::all();
        $cats = array();
        foreach($categories as $category){
            $cats[$category->id] = $category->name;
        }

        $tags=Tag::all();
        $tags2=array();
        foreach($tags as $tag)
        {
            $tags2[$tag->id] = $tag->name;
        }

        //  Return the view and pass in the previously created variable
        return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
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
        $post=Post::find($id);

        if($request->input('slug') == $post->slug){
            $this->validate($request, array(
                'title' => 'required|max:150',
                'category_id' => 'required|integer',
                'body' => 'required'
            ));
        }else{
            $this->validate($request, array(
                'title' => 'required|max:150',
                'slug' => 'required|alpha_dash|min:5|max:200|unique:posts,slug',
                'category_id' => 'required|integer',
                'body' => 'required'
            ));
        }

        //  Save Data to DB
        $post = Post::find($id);
        
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');

        $post->save();

        if(isset($request->tags)){

        $post->tags()->sync($request->tags, true);

    }else{
        $post->tags()->sync(array());
    }
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
        $post->tags()->detach();
        $post->delete();

        Session::flash('success', 'Post successfully deleted');
        return redirect()->route('post.index');
    }
}
