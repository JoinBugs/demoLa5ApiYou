<?php

use Alaouy\Youtube\Youtube;


Route::get('/', function () {
    
	$TEST_API_KEY = 'AIzaSyDDefsgXEZu57wYgABF7xEURClu4UAzyB8';
    $youtube = new Youtube($TEST_API_KEY);

    $vID = 'rie-hPVJ7Sw';
    $video = $youtube->getVideoInfo($vID);

	//$video = Youtube::getVideoInfo('rie-hPVJ7Sw');
	return view( 'welcome', [ 'video' => $video ] );
});