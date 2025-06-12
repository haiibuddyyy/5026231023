@extends('templateBootstrap')

@section('content')
<h2 class="mb-4">✏️ Edit Data Bolpen</h2>

@foreach ($bolpen as $b)
<form action="/bolpen/update" method="post" class="shadow p-4 bg-white rounded">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $b->id }}">

    <div class="form-group mb-3">
        <label>Merk Bolpen</label>
        <input type="text" name="merkbolpen" class="form-control" value="{{ $b->merkbolpen }}" required>
    </div>

    <div class="form-group mb-3">
        <label>Harga Bolpen</label>
        <input type="number" name="hargabolpen" class="form-control" value="{{ $b->hargabolpen }}" required>
    </div>

    <div class="form-group mb-3">
        <label>Tersedia</label><br>
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
        <input type="number" name="berat" class="form-control" value="{{ $b->berat }}" step="0.1" required>
    </div>

    <button type="submit" class="btn btn-success shadow"> Update</button>
</form>
@endforeach
@endsection
