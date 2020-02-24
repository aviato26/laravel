<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiCall extends Controller
{
    public function getListOfCharacters(){
      $client = new Client();
      $response = $client->get('https://swapi.co/api/people/');
      $body = $response->getBody();
      echo $body;
    }
}
