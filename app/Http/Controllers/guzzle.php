<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class guzzle extends Controller
{
    public function getGuzzle()
    {
        
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        return $response;
    }
}
