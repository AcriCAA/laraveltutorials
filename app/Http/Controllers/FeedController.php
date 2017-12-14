<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class FeedController extends Controller
{
    //
      public function saveApiData()
    {
        $client = new Client();


       // $response = $client->request('GET', 'search?query=driverless');




        // $res = $client->request('POST', 'https://backend.theedge.ai/api/v2/links/search?query=driverless', [
        //     'form_params' => [
        //         'client_id' => 'test_id',
        //         'secret' => 'test_secret',
        //     ]
        // ]);

       $response = $client->get('https://backend.theedge.ai/api/v2/links/search?query=driverless');
    // $response = $client->delete('http://httpbin.org/delete');
    // $response = $client->head('http://httpbin.org/get');
    // $response = $client->options('http://httpbin.org/get');
    // $response = $client->patch('http://httpbin.org/patch');
    // $response = $client->post('http://httpbin.org/post');
    // $response = $client->put('http://httpbin.org/put');
       
        $result = json_decode($response->getBody()->getContents());

        echo $result; 
        

  }


  //   public function index()
  //   {

  //     // latest()->get() orders them in descending order
  //     $posts = Post::latest()->get(); 
  //     return view('posts.index', compact('posts')); 
  //   }



  // public function show(Post $post){ 


  //   return view('posts.show', compact('post'));

  // }

	public function show(){ 

		// $articles = FeedController::saveApiData(); 
FeedController::saveApiData(); 
  //   $articles = {1,2,3,4}

		// return view('feeds.feedhome', compact('articles'));

	}



}
