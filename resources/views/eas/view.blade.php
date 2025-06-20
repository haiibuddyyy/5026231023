@extends('templateBootstrap')
 @section('content')

    <div class="container mt-5 mb-5">
    <a href = /eas class="btn bg-pink-500 text-white mb-3">Kembali</a>
        <div class="card">
            <div class="card-header bg-pink-500 text-white">
                Detail Data Pegawai
            </div>
            <div class="card-body">


            {{-- action mengarah ke karyawan/store untuk dilakukan routing --}}
            @foreach ($mykaryawan as $p)
                    <form action="/eas/update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->kodepegawai}}">

                        <div class="mb-3">
                            <label for="kodepegawai" class="form-label">Kode</label>
                            <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" value="{{ $p->kodepegawai }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="namalengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="{{ $p->namalengkap }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="divisi" class="form-label">Divisi</label>
                            <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $p->divisi}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="departemen" class="form-label">Departemen</label>
                            <input type="text" class="form-control" id="departemen" name="departemen" value="{{ $p->departemen}}" required>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
@endsection


