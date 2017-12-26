<?php

Route::get('/','WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home','HomeController@postIndex');

Route::get('/contact','ContactController@getContact')->name('contact');

Route::post('/contact','ContactController@postContact');

Route::get('/map','ContactController@map')->name('map');

Route::get('/posts','PostController@show')->name('posts');

Route::get('/delete/{id}','PostController@getDestroy')->name('destroy');

Route::get('/team','TeamController@team')->name('team');

Route::get('/message','MessageController@message')->name('message');

Route::get('/introduction','TeamController@about')->name('intro');

Route::get('/testinominal','TeamController@test')->name('testinominal');

Route::get('/study-abroad','StudyController@abroad')->name('usa');

Route::get('/services','StudyController@service')->name('service');