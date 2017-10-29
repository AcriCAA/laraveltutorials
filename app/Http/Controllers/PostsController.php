<?php

namespace App\Http\Controllers;

use App\Post;


use Illuminate\Http\Request;



class PostsController extends Controller
{
    //

    public function index()
    {

    	// latest()->get() orders them in descending order
    	$posts = Post::latest()->get(); 
    	return view('posts.index', compact('posts')); 
    }



	public function show(Post $post){ 


		return view('posts.show', compact('post'));

	}

    public function create()
    {
    	return view('posts.archive');
    }

	public function store()

	{

		$this->validate(request(), [

			'title' => 'required|max:20', 
			'body' => 'required'

		]);
		

		//Creates a new post and requests the array passed in and saves it to the db
		//IMPORTANT: BE EXPLICIT! only pass the fields you are comfortable submitted to the server
		Post::create(request(['title','body']));
		/*

		^^^ that does the same as this:
		$post = new Post; 
		//Create a new post using the request data
		$post->title = request('title'); 
		$post->body = request('body'); 
		$post->save(); 
		// Save it to the database */

		// And then redirect to the homepage
		return redirect('/');

	}

}
