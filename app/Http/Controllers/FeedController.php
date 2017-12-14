<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class FeedController extends Controller
{
    //


	public function show(){ 

		$articles = saveApiData(); 

		echo view('feeds.feedhome', compact('articles'));

	}



}
