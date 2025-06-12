<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{
    public function index()
    {
        $record= DB::table('pagecounter')->where('id',1)->first();

        DB::table('pagecounter')->where('id',1)->update([
            'jumlah'=> $record-> jumlah + 1
        ]);

        $updated = DB::table ('pagecounter')->where('id', 1)->first();

        return view('latihan1.index', ['jumlah' => $updated->jumlah]);
    }
}
