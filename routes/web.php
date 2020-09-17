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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', function () {
    if(Auth::user() == ''){
        return view('auth.login');
    }else{
        Session::flush();
        return view('auth.login');
    }   
})->name('login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', function () {
    if(Auth::user() == ''){
        return view('auth.login');
    }else{
        Session::flush();
        return view('auth.login');
    }
});

Route::get('/list', function () {
    return view('index');
})->middleware('auth');

Route::get('/php', function () {
    return view('php-tutorials');
})->middleware('auth');
Route::get('/laravel', function () {
    return view('laravel-tutorials');
})->middleware('auth');

Route::get('/aws', function () {
    return view('aws-tutorials');
})->middleware('auth');
