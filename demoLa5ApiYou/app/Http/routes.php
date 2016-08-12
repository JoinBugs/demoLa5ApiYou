<?php

use Youtube as y;


Route::get('/', function () 
{
    $video = Youtube::getVideoInfo('rie-hPVJ7Sw');
	$video = $array = get_object_vars($video);
	return $video;
});