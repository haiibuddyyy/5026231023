@extends('templateBootstrap')

@section('content')
<h2 class="mb-4">✏️ Edit Data Bolpen</h2>

<form action="/bolpen/update" method="post" class="shadow p-4 bg-white rounded">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $bolpen[0]->id }}">

    <div class="form-group mb-3">
        <label>Merk Bolpen</label>
        <input type="text" name="merkbolpen" class="form-control" value="{{ $bolpen[0]->merkbolpen }}" required>
    </div>

    <div class="form-group mb-3">
        <label>Harga Bolpen</label>
        <input type="number" name="hargabolpen" class="form-control" value="{{ $bolpen[0]->hargabolpen }}" required>
    </div>

    <label class="mb-2 d-block">Tersedia</label>
    <div class="form-switch-wrapper align-start">
        <input type="checkbox"
               id="switch-tersedia"
               class="toggle-tersedia"
               {{ $bolpen[0]->tersedia ? '' : 'checked' }}> {{-- toggle kanan = tidak tersedia = 0 --}}
        <label for="switch-tersedia" class="switch-label">
            <span class="label-left">Tidak Tersedia</span>
            <span class="label-right">Tersedia</span>
            <div class="knob"></div>
        </label>
    </div>

    <input type="hidden" name="tersedia" id="tersedia-value" value="{{ $bolpen[0]->tersedia }}">

    <div class="form-group mb-4">
        <label>Berat (gram)</label>
        <input type="number" name="berat" class="form-control" value="{{ $bolpen[0]->berat }}" step="0.01" required>
    </div>

    <button type="submit" class="btn btn-success shadow">Update</button>
</form>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const checkbox = document.querySelector('.toggle-tersedia');
  const hiddenInput = document.querySelector('#tersedia-value');

  checkbox.addEventListener('change', function () {
    hiddenInput.value = checkbox.checked ? 0 : 1;
  });
});
</script>
@endsection
