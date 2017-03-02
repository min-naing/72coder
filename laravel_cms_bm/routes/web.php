<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

date_default_timezone_set('Asia/Rangoon');

// Route::get('/','BooksController@home');
Route::get('/','IndexController@index');


/* Packages */
Route::get('/course', 'CoursesController@index');

/* Blog */
Route::get('/post', 'PostController@index');

/*********************** Services ******************/
// Route::get('/services','ServicesController@index');

/*********************** Class ******************/
Route::get('/class','ClassController@index');
Route::get('/class/web_design','ClassController@webDesign');
Route::get('/class/web_dev','ClassController@webDev');
Route::get('/class/android_dev','ClassController@androidDev');
Route::get('/class/android_adv','ClassController@androidAdv');
Route::get('/class/javase','ClassController@javaSe');
Route::get('/class/javaee','ClassController@javaEe');
//Route::get('/teachers','TeachersController@showAll');
//Route::get('/teachers/{id?}','TeachersController@showSingle');

/*********************** books ******************/

Route::get('/books','BooksController@index');

Route::get('/books/laravel','BooksController@laravelBook');
//
Route::get('/books/android_hack','BooksController@androidHackBook');
//
Route::get('/books/android_dev','BooksController@androidDevelopment');
//
//
Route::post('/books/{bookType?}', ['as' => 'books.order', 'uses' => 'BooksController@order']);
//
//Route::post('/shop','BooksController@storeShopInfo');
//Route::get('/user_info','BooksController@userInfo');
Route::post('/book/wish',['as' => 'book.wishes','uses' => 'BooksController@wish']);



/*for work*/
//Route::get('/works','WorkController@allwork');
//Route::get('/single_work/{work_type?}','WorkController@singleWork');
//Route::post('/single_work','WorkController@addWork');

/* Contact */

Route::get('/contact', 'ContactController@index');

