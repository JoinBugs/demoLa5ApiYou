<?php

use Alaouy\Youtube\Youtube;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	/*$api_key = 'AIzaSyCEj56CnHNikyzmGUJ95T9-EslKg1EWhTY'; 
	$you = new Youtube( $api_key );
	$video = $you -> getInfoVideo( ['vxrSAwtdtuQ'] );*/

	$video = Youtube::getVideoInfo('rie-hPVJ7Sw');
	
    return view('welcome', [ 'video' => $video ]);
});