<?php

Route::get('/', function(){
	return view('welcome');
});

get('about', function(){
	return 'About Page';
});

get('reporting', function(){
	return 'Reporting feature';
});
