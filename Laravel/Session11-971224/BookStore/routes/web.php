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

Route::get('books', 'BookController@index');

Route::get('rawData', function () {
    //$book = orm->getBookById(1);
    return 'Hello Laravel!';
});

Route::get('about/contact', function () {
    return view('about.contact');
});


