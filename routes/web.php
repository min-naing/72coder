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




    Route::get('/', 'IndexController@index');

    /* Tutorials */
    Route::get('/tutorial/home', 'PageController@tutorial');

    /* Blog */
//Route::get('/post', 'PostController@index');


    /*********************** Class ******************/
    Route::get('/class/home', 'ClassController@index');
    Route::get('/class/web_design', 'ClassController@webDesign');
    Route::get('/class/web_dev', 'ClassController@webDev');
    Route::get('/class/android_dev', 'ClassController@androidDev');
    Route::get('/class/android_adv', 'ClassController@androidAdv');
    Route::get('/class/javase', 'ClassController@javaSe');
    Route::get('/class/javaee', 'ClassController@javaEe');
//Route::get('/teachers','TeachersController@showAll');
//Route::get('/teachers/{id?}','TeachersController@showSingle');

    /*********************** books ******************/

    Route::get('/books/home', 'BooksController@index');

    Route::get('/books/laravel', 'BooksController@laravelBook');
//
    Route::get('/books/android_hack', 'BooksController@androidHackBook');
//
    Route::get('/books/android_dev', 'BooksController@androidDevelopment');
//
//
    Route::post('/books/{bookType?}', ['as' => 'books.order', 'uses' => 'BooksController@order']);

//Route::get('/user_info','BooksController@userInfo');
    Route::post('/book/wish', ['as' => 'book.wishes', 'uses' => 'BooksController@wish']);

    /*********************** Services ******************/
    Route::get('/services/{title?}', 'PageController@service');


    /*for work*/
//Route::get('/works','WorkController@allwork');
//Route::get('/single_work/{work_type?}','WorkController@singleWork');
//Route::post('/single_work','WorkController@addWork');

    /* Contact */

    Route::get('/contact', 'ContactController@index');

    /* App */

    Route::get('/app/{title?}', 'AppController@app');

    Route::post('/app/{title?}/reviews/store', ['as' => 'app.reviews.store', 'uses' => 'AppController@reviews_store']);


    Auth::routes();


    /* Activity */

    Route::get('/activity/home', 'PageController@activity');


    /* Test Mail */

    Route::get('test-mail', 'IndexController@testMail');


/* user activation */
Route::get('register/verify/{token}', 'Auth\RegisterController@verify');

