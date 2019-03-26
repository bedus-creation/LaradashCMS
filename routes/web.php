<?php



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'action'],function(){
    Route::resource('posts','PostController');
});

Route::get('/fileupload',function(){
    return view('fileupload');
});

Route::get('sitemap.xml','Utils\SitemapController');