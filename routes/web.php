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

Route::get('/', function () {
    return view('welcome', ['username'=>'Kushwanth', 'location'=>'piscataway']);
})->name('home');

/*Route::get('/aboutus', function(){
    return view('pages.about', ['username'=>'Kushwanth', 'location'=>'piscataway']);
})->name("aboutus");*/

Route::get('/aboutus', 'PagesController@about');

Route::get('/aboutus', [
    'uses'=>'PagesController@about',
    'as'=>'aboutus'
]);