<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('estate', function(){

    return view('main');

});

Route::get('hq', function () {

    return view('hq');

});

Route::get('about', function () {

    return view('about');

});


Route::get('products', function () {

    return view('house_details');

});

Route::get('contact', function() {

    return view('contact_us');

});

Route::get('terms', function () {

    return view('terms_conditions');

});

Route::get('faq', function () {

    return view('faq');

});
