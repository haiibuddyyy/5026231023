<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BolpenController extends Controller
{
    public function index(Request $request)
    {
        // diambill parameter sort & order
        $sort = $request->get('sort', 'ID'); // default: ID
        $order = $request->get('order', 'asc'); // default: ascending

        // mengambil data dan diruutkan
        $bolpen = DB::table('bolpen')
            ->orderBy($sort, $order)
            ->paginate(10)
            ->appends(['sort' => $sort, 'order' => $order]); // biar pagination tetap bawa sort

        return view('bolpen.index', compact('bolpen', 'sort', 'order'));
    }

    public function tambah()
    {
        return view('bolpen.tambah');
    }

    public function store(Request $request)
    {
        DB::table('bolpen')->insert([
            'merkbolpen' => $request->merkbolpen,
            'hargabolpen' => $request->hargabolpen,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/bolpen');
    }

    public function edit($id)
    {
        $bolpen = DB::table('bolpen')->where('id', $id)->get();
        return view('bolpen.edit', ['bolpen' => $bolpen]);
    }

    public function update(Request $request)
    {
        DB::table('bolpen')->where('id', $request->id)->update([
            'merkbolpen' => $request->merkbolpen,
            'hargabolpen' => $request->hargabolpen,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        return redirect('/bolpen');
    }

    public function hapus($id)
    {
        DB::table('bolpen')->where('id', $id)->delete();
        return redirect('/bolpen');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $sort = $request->get('sort', 'ID');
        $order = $request->get('order', 'asc');

        $bolpen = DB::table('bolpen')
            ->where('merkbolpen', 'like', "%$cari%")
            ->orWhere('hargabolpen', 'like', "%$cari%")
            ->orWhere('berat', 'like', "%$cari%")
            ->orderBy($sort, $order)
            ->paginate(10)
            ->appends(['cari' => $cari, 'sort' => $sort, 'order' => $order]);

        return view('bolpen.index', compact('bolpen', 'sort', 'order'));
    }

    public function toggleTersedia(Request $request)
    {
        $bolpen = DB::table('bolpen')->where('id', $request->id)->first();

        if ($bolpen) {
            $newStatus = $bolpen->tersedia ? 0 : 1;

            DB::table('bolpen')->where('id', $request->id)->update([
                'tersedia' => $newStatus
            ]);

            return response()->json(['status' => $newStatus]);
        }

        return response()->json(['error' => 'Not Found'], 404);
    }
}
