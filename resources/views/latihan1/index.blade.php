@extends('templateBootstrap')

@section('content')

<div class="container mt-5">
    <div class="text-center bg-pink-100 text-pink-800 border border-pink-300 rounded-lg shadow p-4 mt-5" style="font-size: 1.3rem;">
        <strong>Anda Pengunjung ke:</strong> {{ $jumlah }}
    </div>
</div>
@endsection
