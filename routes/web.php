<?php

use Illuminate\Support\Facades\Route;
//import java.io -> USE IN PHP
//imlluminate/Support/Facaedes tuh kyk packages di java, yg belakang nama class

//di java . di php ::
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuandua', function () {
    return view('pertemuandua');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('validasi1', function () {
    return view('validasi1');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('test', function () {
	return view('test');
});

Route::get('ets', function () {
    return view('index');
});

Route::get('frontend', function () {
    return view('frontend');
});

