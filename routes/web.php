<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function () {
    if(session()->has('email')){
        session()->forget('email');
        return redirect('/login');
    }
});

Route::get('/profile','App\Http\Controllers\ProfileController@index');
Route::post('/profile/changeprofile/{id}','App\Http\Controllers\ProfileController@updateProfile');
Route::post('/profile/changepass/{id}','App\Http\Controllers\ProfileController@updatePassword');
Route::get('/profile/edit/{id}','App\Http\Controllers\ProfileController@edit');
Route::get('/profile/changepass/{id}','App\Http\Controllers\ProfileController@changepass');

Route::view('register','registration');
Route::post('register','App\Http\Controllers\RegisterController@Register');

Route::get('login','App\Http\Controllers\LoginController@login');
Route::post('login','App\Http\Controllers\LoginController@postLogin');

