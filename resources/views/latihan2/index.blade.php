<body>
    @extends('templateBootstrap')
    @section('content')
    <h3>Data Karyawan</h3>

	{{-- <form action="/meja/cari" method="GET" class="form-inline">
         <label class="form-label">Cari Data Meja :</label>
		<input type="text" name="cari" placeholder="Cari Meja ..." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form> --}}

    <table class="table table-striped">
        <tr>
            <th>Kode</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai}}</td>
                <td>{{ strtoupper($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ strtolower($p->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-flex justify-content-between align-items-center mb-3">
        {{ $karyawan->links() }} <!-- hanya bisa dipake dengan paginate, saat get() harus dihapus -->
        <a href="/karyawan/tambah" class="btn btn-info"> + Tambah Karyawan Baru</a>
    </div>
    @endsection

</body>
