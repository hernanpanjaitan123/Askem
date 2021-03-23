<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function getMovie(){
    	$client = new \GuzzleHttp\Client();
	    $request = $client->get('http://149.56.24.226/page/3/');
	    $response = $request->getBody();
	    return $response;
    }
}
