@extends('layout.bahagia')

@section('title', 'Data Absensi')
@section('judulhalaman', 'Tabel Data Absensi')

@section('konten')
    <div id="kotak">
        <div class="tambah">
            <a href="/absen/add" type="button" class="btn btn-primary mb-3">+ Tambah Data Absensi</a>
        </div>
        <table id="tabel" class="table table-striped table-hover table-bordered align-middle text-center">
            <tr>
                <th>ID Pegawai</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
            @foreach ($absen as $a)
                <tr>
                    <td>{{ $a->IDPegawai }}</td>
                    <td>{{ $a->Tanggal }}</td>
                    <td>{{ $a->Status }}</td>
                    <td>
                        <a href="/absen/edit/{{ $a->ID }}" class="btn btn-warning" style="width: 76px">Edit</a>
                        &nbsp;
                        <a href="/absen/hapus/{{ $a->ID }}" class="btn btn-danger" style="width: 76px">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <p>
            Keterangan Status: <br>
            I : Izin <br>
            S : Sakit <br>
            A : Alpha <br>
        </p>
    </div>
@endsection
