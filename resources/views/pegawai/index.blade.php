@extends('templateBootstrap')

@section('content')

<h2>Data Pegawai</h2>

<br>
<a href="/pegawai/tambah" class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-4 rounded mb-3">+ Tambah Pegawai Baru</a>

<br>
<br>
<label class="visually-hidden" for="cari">Cari</label>
<form action="/pegawai/cari" method="GET" class="row g-2 mb-4">
    <div class="col-auto">
        <input type="text" name="cari" id="cari" placeholder="Cari Pegawai .." class="form-control">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-outline-primary">Cari</button>
    </div>
</form>

<table class="table table-striped table-hover">
    <thead class="table-light">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $pegawai->links() }}

@endsection
