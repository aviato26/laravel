<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('greet');
    return view('signin');
});

Route::get('/apicall', 'ApiCall@getListOfCharacters');

Route::get('/docs', function(){
  return view('docs');
});

Route::get('/greet', function(){
      // From URL to get webpage contents.
    $url = "https://swapi.co/api/people/";

    // Initialize a CURL session.
    $ch = curl_init();

    // Return Page contents.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //grab URL and pass it to the variable.
    curl_setopt($ch, CURLOPT_URL, $url);

    $result = curl_exec($ch);

    $parsed = json_decode($result, true);

    return $result;
  //return view('greet');
});
