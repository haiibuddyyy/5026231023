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

Route::get('satu', function () {
	return view('bootstrap1');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('test', function () {
	return view('test');
});
