<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyKaryawanController extends Controller{
    public function index()
    {
        $mykaryawan = DB::table('mykaryawan')->get();

        return view('eas.index',['mykaryawan' => $mykaryawan]);
    }

    public function edit($kodepegawai)
    {
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->get();
        return view('eas.edit', ['mykaryawan' => $mykaryawan]);
    }

    public function update(Request $request)
    {
        // update data karyawan
        DB::table('mykaryawan')
        ->where('kodepegawai',$request->kodepegawai)
        ->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman mykaryawan
        return redirect('/eas');

    }

    public function view ($kodepegawai){
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->get();
        return view('eas.view', ['mykaryawan' => $mykaryawan]);
    }
}
