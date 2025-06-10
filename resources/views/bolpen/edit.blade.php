@extends('templateBootstrap')

@section('content')
<h2 class="mb-4">✏️ Edit Data Bolpen</h2>

@foreach ($bolpen as $b)
<form action="/bolpen/update" method="post" class="shadow p-4 bg-white rounded">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $b->ID }}">

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
        <div class="btn-group" role="group">
            <input type="radio" class="btn-check" name="tersedia" id="edit-ya" value="1" {{ $b->tersedia ? 'checked' : '' }}>
            <label class="btn btn-outline-success" for="edit-ya">Ya</label>

            <input type="radio" class="btn-check" name="tersedia" id="edit-tidak" value="0" {{ !$b->tersedia ? 'checked' : '' }}>
            <label class="btn btn-outline-danger" for="edit-tidak">Tidak</label>
        </div>
    </div>

    <div class="form-group mb-4">
        <label>Berat (gram)</label>
        <input type="number" name="berat" class="form-control" value="{{ $b->berat }}" step="0.1" required>
    </div>

    <button type="submit" class="btn btn-success shadow">💾 Update</button>
</form>
@endforeach
@endsection
