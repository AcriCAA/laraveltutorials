<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio; 

class MentorController extends Controller
{
    //

    public function testSMS(){

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
