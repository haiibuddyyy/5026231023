<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\BolpenController;
use App\Http\Controllers\PageCounterController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\MyKaryawanController;

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

Route::get('dosen',[DosenController::class,'index']);
Route::get('welcome',[DosenController::class,'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']); //PASSING VALUE PAKE ADDRESS
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);


Route::get('/bolpen', [BolpenController::class, 'index']);
Route::get('/bolpen/tambah', [BolpenController::class, 'tambah']);
Route::post('/bolpen/store', [BolpenController::class, 'store']);
Route::get('/bolpen/edit/{id}', [BolpenController::class, 'edit']);
Route::post('/bolpen/update', [BolpenController::class, 'update']);
Route::get('/bolpen/hapus/{id}', [BolpenController::class, 'hapus']);
Route::get('/bolpen/cari', [BolpenController::class, 'cari']);

Route::get('/pagecounter', [PageCounterController::class, 'index']);

//route karyawanDB
Route::get('/karyawan', [KaryawanDBController::class, 'index']);
Route::get('/karyawan/tambah', [KaryawanDBController::class, 'tambah']);
Route::post('/karyawan/store', [KaryawanDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::post('/karyawan/update',[KaryawanDBController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanDBController::class, 'hapus']);

//route KaryawanEASDB
Route::get('/eas', [MyKaryawanController::class, 'index']);
Route::get('/eas/edit/{kodepegawai}', [MyKaryawanController::class, 'edit']);
Route::post('/eas/update',[MyKaryawanController::class, 'update']);
Route::get('/eas/view/{kodepegawai}', [MyKaryawanController::class, 'view']);
