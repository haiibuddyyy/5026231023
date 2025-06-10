@extends('templateBootstrap')
@section('content')

<h3>Data Pegawai</h3>

<a href="/pegawai">Kembali</a>

<br />
<br />

{{-- Form Tambah Data Pegawai --}}
<form action="/pegawai/store" method="post">
    {{ csrf_field() }}

    <div class="row p-1 mb-3">
        <label class="col-2 col-form-label">Nama</label>
        <div class="col-6">
            <input type="text" name="nama" required class="form-control">
        </div>
    </div>

    <div class="row p-1 mb-3">
        <label class="col-2 col-form-label">Jabatan</label>
        <div class="col-6">
            <input type="text" name="jabatan" required class="form-control">
        </div>
    </div>

    <div class="row p-1 mb-3">
        <label class="col-2 col-form-label">Umur</label>
        <div class="col-6">
            <input type="number" name="umur" required class="form-control">
        </div>
    </div>

    <div class="row p-1 mb-4">
        <label class="col-2 col-form-label">Alamat</label>
        <div class="col-6">
            <input type="text" name="alamat" required class="form-control">
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <input type="submit" value="Simpan Data" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded">
        </div>
    </div>
</form>

@endsection
