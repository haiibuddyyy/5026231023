<body>
    @extends('templateBootstrap')
    @section('content')
    <h3>Data Karyawan</h3>

    <table class="table table-striped">
        <tr>
            <th>Kode</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mykaryawan as $p)
            <tr>
                <td>{{ $p->kodepegawai}}</td>
                <td>{{ ucwords(strtolower($p->namalengkap)) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ ($p->departemen) }}</td>
                <td>
                    <a href="/eas/edit/{{ $p->kodepegawai }}"class="btn btn-danger btn-sm">Edit</a>
                    <a href="/eas/view/{{ $p->kodepegawai }}" class="btn btn-warning btn-sm">View</a>
                </td>
            </tr>
        @endforeach
    </table>
    @endsection

</body>
