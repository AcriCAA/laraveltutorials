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

       $data = $response->getBody()->getContents();
       
        $result = json_decode($data, true);

        return $result; 

       // return $data; 
        

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
$articles = FeedController::saveApiData(); 

// echo is_array($articles) ? 'Array' : 'not an Array';
  //   $articles = {1,2,3,4}
// var_dump($articles);
// return view('feeds.feedhome', compact('articles'));
return view('posts-album.index', ['articles' => $articles]);

	}

  public function directions(){

    $client = new Client();

    $key = config('services.google_directions.apikey');

    $url = 'https://maps.googleapis.com/maps/api/directions/json?origin=place_id:ChIJF_6CulHGxokR95q8du3mxfs&destination=place_id:ChIJj6watKfIxokRp8O5hETvhyA&mode=bicycling&key='.$key; 

       $response = $client->get($url);
    // $response = $client->delete('http://httpbin.org/delete');
    // $response = $client->head('http://httpbin.org/get');
    // $response = $client->options('http://httpbin.org/get');
    // $response = $client->patch('http://httpbin.org/patch');
    // $response = $client->post('http://httpbin.org/post');
    // $response = $client->put('http://httpbin.org/put');

       $data = $response->getBody()->getContents();
       
        $result = json_decode($data, true);

        echo '<pre>';
        var_dump($data);
        echo '</pre>';

        echo '<pre>';
        var_dump($result);
        echo '</pre>';

  }



}
