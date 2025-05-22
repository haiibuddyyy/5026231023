<?php

namespace App\Http\Controllers; //dijava itu package

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        //return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com<h1>";
    	$nama = "Nadya Luthfiyah Rahma";
        $umur = 20;
        $alamat = "Malang City";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('biodata',['nama'=>$nama, 'usia'=> $umur, 'alamat' => $alamat, 'matkul'=>$pelajaran]); //=> assignment value array
    }

    public function welcome(){
        return view('welcome');
    }


}
