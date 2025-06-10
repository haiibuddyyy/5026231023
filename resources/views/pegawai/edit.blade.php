@extends('templateBootstrap')

@section('content')
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header bg-pink-500 text-white">
            Edit Data Pegawai
        </div>
        <div class="card-body">

            @foreach ($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}" required>
                </div>

                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}" required>
                </div>

                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}" required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $p->pegawai_alamat }}</textarea>
                </div>

                <button type="submit" class="btn bg-pink-500 text-white">Simpan Data</button>
            </form>
            @endforeach

        </div>
    </div>
</div>
@endsection
