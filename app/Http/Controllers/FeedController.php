<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    //
	public function saveApiData()
    {
        $client = new Client([

        	'base_uri' => 'https://backend.theedge.ai/api/v2/links/search?query=', 
        	'timeout' => 2.0, 

        ]);


       $response = $client->request('GET', 'driverless');




        // $res = $client->request('POST', 'https://backend.theedge.ai/api/v2/links/search?query=driverless', [
        //     'form_params' => [
        //         'client_id' => 'test_id',
        //         'secret' => 'test_secret',
        //     ]
        // ]);

        $result= $response->getBody();
        dd($result);

	}



}
