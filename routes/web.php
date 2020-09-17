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

Route::get('/php_basics1', function () {
    return view('php_basics1');
})->middleware('auth');

Route::get('/php_basics2', function () {
    return view('php_basics2');
})->middleware('auth');

Route::get('/php_basics3', function () {
    return view('php_basics3');
})->middleware('auth');

Route::get('/laravel_basics1', function () {
    return view('laravel_basics1');
})->middleware('auth');

Route::get('/laravel_basics2', function () {
    return view('laravel_basics2');
})->middleware('auth');

Route::get('/laravel_basics3', function () {
    return view('laravel_basics3');
})->middleware('auth');

Route::get('/aws_basics1', function () {
    return view('aws_basics1');
})->middleware('auth');

Route::get('/aws_basics2', function () {
    return view('aws_basics2');
})->middleware('auth');

Route::get('/aws_basics3', function () {
    return view('aws_basics3');
})->middleware('auth');


