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
    return view('main.index');
});

Route::get('/portfolio', function () {
    return view('main.portfolio');
});

Route::get('/about-us', function () {
    return view('main.aboutus');
});

Route::get('/contactus', function () {
    return view('main.contactus');
});

Route::get('/services', function () {
    return view('main.services');
});

Route::get('contact-us', 'ContactUsController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactUSPost']);