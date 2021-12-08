@extends('layout.bahagia')

@section('title', 'Data Pendapatan')
@section('judulhalaman', 'Tabel Data Pendapatan')

@section('konten')
    <div id="kotak">
        <div class="tambah">
            <a href="/pendapatan/tambah" type="button" class="btn btn-primary mb-3">+ Tambah Data Pendapatan</a>
        </div>
        <table id="tabel" class="table table-striped table-hover table-bordered align-middle text-center">
            <tr>
                <th>ID Pegawai</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Gaji</th>
                <th>Tunjangan</th>
                <th>Opsi</th>
            </tr>
            @foreach ($pendapatan as $p)
                <tr>
                    <td>{{ $p->IDPegawai }}</td>
                    <td>{{ $p->Bulan }}</td>
                    <td>{{ $p->Tahun }}</td>
                    <td>{{ $p->Gaji }}</td>
                    <td>{{ $p->Tunjangan }}</td>
                    <td>
                        <a href="/pendapatan/edit/{{ $p->ID }}" class="btn btn-warning" style="width: 76px">Edit</a>
                        &nbsp;
                        <a href="/pendapatan/hapus/{{ $p->ID }}" class="btn btn-danger" style="width: 76px">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
