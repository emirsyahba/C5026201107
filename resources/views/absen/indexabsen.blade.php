@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Tabel Data Absensi')

@section('konten')
    <div id="kotak">
        <div class="tambah">
            <a href="/absen/add" type="button" class="btn btn-primary mb-3">+ Tambah Data Absensi</a>
        </div>
        <div class="container" align="center">
            <form action="/absen/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari Absen berdasarkan nama ..."
                    value="{{ old('cari') }}">
                <input type="submit" class="btn btn-default" value="CARI">
            </form>
        </div>
        <table id="tabel" class="table table-striped table-hover table-bordered align-middle text-center">
            <tr>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
            @foreach ($absen as $a)
                <tr>
                    <td>{{ $a->pegawai_nama }}</td>
                    <td>{{ $a->Tanggal }}</td>
                    <td>{{ $a->Status }}</td>
                    <td>
                        <a href="/absen/view/{{ $a->ID }}" class="btn btn-success" style="width: 120px">View
                            Detail</a>
                        <a href="/absen/edit/{{ $a->ID }}" class="btn btn-warning" style="width: 76px">Edit</a>
                        &nbsp;
                        <a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger" style="width: 76px">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $absen->links() }}
        <p>
            Keterangan Status: <br>
            I : Izin <br>
            S : Sakit <br>
            A : Alpha <br>
        </p>
    </div>
@endsection
