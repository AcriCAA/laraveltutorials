<?php

namespace App;


class Post extends Model
{
    //
	public function comments()
	{

	return $this->hasMany(Comment::class); 
	}


	public function addComment($body){

		
		
		// this is the equivalent 
		$this->comments()->create(compact('body'));

		//of this

		  // Comment::create([
    //         'body' => request('body'), 
    //         'post_id' => this->id
    //     ]);



	}

}
