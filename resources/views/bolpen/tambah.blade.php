@extends('templateBootstrap')

@section('content')
<h3 class="mb-4">🖊️ Tambah Data Bolpen</h3>

<form action="/bolpen/store" method="post" class="shadow p-4 bg-white rounded">
    {{ csrf_field() }}
    <div class="form-group mb-3">
        <label>Merk Bolpen</label>
        <input type="text" name="merkbolpen" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label>Harga Bolpen</label>
        <input type="number" name="hargabolpen" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label class="mb-2 d-block">Tersedia</label>
        <div class="btn-group d-flex gap-3" role="group">
            <div>
                <input type="radio" class="btn-check" name="tersedia" id="ya" value="1" checked>
                <label class="btn btn-outline-success px-4 py-2" for="ya">Ya</label>
            </div>
            <div>
                <input type="radio" class="btn-check" name="tersedia" id="tidak" value="0">
                <label class="btn btn-outline-danger px-4 py-2" for="tidak">Tidak</label>
            </div>
        </div>
    </div>


    <div class="form-group mb-4">
        <label>Berat (gram)</label>
        <input type="number" name="berat" class="form-control" step="0.1" required>
    </div>

    <button type="submit" class="btn btn-pink bg-pink-500 text-white shadow rounded">Simpan Data</button>
</form>
@endsection
