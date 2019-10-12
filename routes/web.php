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


use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/signin', 'authController@showLogin')->name('signIn');
Route::post('/signin', 'authController@processLogin')->name('processLogin');

Route::get('/signup', 'authController@showRegi')->name('signUp');
Route::post('/signup', 'authController@processRegi')->name('processSignup');

Route::get('/logout','authController@logout')->name('logout');

Route::get('/store/genedated','StoreGenerated@store');


