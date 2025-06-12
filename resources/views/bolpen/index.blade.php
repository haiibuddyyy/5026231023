@extends('templateBootstrap')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>📋 Data Bolpen</h2>
    <a href="/bolpen/tambah" class="btn btn-pink bg-pink-500 text-white shadow rounded">+ Tambah Bolpen</a>
</div>

<form action="/bolpen/cari" method="GET" class="mb-4 row g-2">
    <div class="col-md-4">
        <input type="text" name="cari" placeholder="Cari merk, harga, atau berat..."
               value="{{ request('cari') }}"
               class="form-control border border-pink-300 shadow-sm">
    </div>
    <div class="col-md-auto">
        <button type="submit" class="btn btn-pink bg-pink-500 text-white shadow-sm">
            Cari
        </button>
    </div>
</form>

@php
    if (!function_exists('sortLink')) {
        function sortLink($field, $label, $sort, $order) {
            $newOrder = ($sort === $field && $order === 'asc') ? 'desc' : 'asc';
            $arrow = '';

            if ($sort === $field) {
                $arrow = $order === 'asc'
                    ? '<i class="fas fa-sort-up ms-1 text-success"></i>'
                    : '<i class="fas fa-sort-down ms-1 text-danger"></i>';
            } else {
                $arrow = '<i class="fas fa-sort text-muted ms-1"></i>';
            }

            return "<a href='?sort=$field&order=$newOrder' class='text-decoration-none text-dark fw-semibold'>$label $arrow</a>";
        }
    }
@endphp

<table class="table table-bordered table-striped table-hover shadow-sm">
    <thead class="table-light text-center">
        <tr>
            <th>{!! sortLink('merkbolpen', 'Merk', $sort, $order) !!}</th>
            <th>{!! sortLink('hargabolpen', 'Harga', $sort, $order) !!}</th>
            <th>{!! sortLink('tersedia', 'Tersedia', $sort, $order) !!}</th>
            <th>{!! sortLink('berat', 'Berat', $sort, $order) !!}</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bolpen as $b)
        <tr class="align-middle text-center">
            <td>{{ $b->merkbolpen }}</td>
            <td>Rp {{ number_format($b->hargabolpen, 0, ',', '.') }}</td>
            <td class="text-center">
                <button class="btn btn-sm toggle-tersedia {{ $b->tersedia ? 'btn-success' : 'btn-secondary' }}"
                    data-id="{{ $b->id }}">
                    {{ $b->tersedia ? '✓ Tersedia' : '✕ Tidak Tersedia' }}
                </button>
            </td>
            <td>{{ $b->berat }} gr</td>
            <td>
                <a href="/bolpen/edit/{{ $b->id }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/bolpen/hapus/{{ $b->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus bolpen ini?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-3">
    {{ $bolpen->links() }}
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(document).on('click', '.toggle-tersedia', function () {
            var btn = $(this);
            var id = btn.data('id');
            console.log('ID yang diklik:', id);

            $.ajax({
                url: '/bolpen/toggle-tersedia',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                success: function (res) {
                    console.log('Respon:', res);

                    if (res.status == 1) {
                        btn.removeClass('btn-secondary').addClass('btn-success').text('✓ Tersedia');
                    } else {
                        btn.removeClass('btn-success').addClass('btn-secondary').text('✕ Tidak Tersedia');
                    }

                }
            });
        });
    });
    </script>
@endsection
