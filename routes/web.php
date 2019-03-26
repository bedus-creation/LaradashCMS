<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/fileupload', function () {
    return view('fileupload');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
