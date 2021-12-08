@extends('layout.bahagia')

@section('title', 'Data Pegawai')
@section('judulhalaman', 'Tabel Data Pegawai')

@section('konten')
    <div id="kotak">
        <div class="tambah">
            <a href="/pegawai/tambah" type="button" class="btn btn-primary mb-3">+ Tambah Data Pegawai</a>
        </div>
        <table id="tabel" class="table table-striped table-hover table-bordered align-middle text-center">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach ($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning" style="width: 76px">Edit</a>
                        &nbsp;
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger" style="width: 76px">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
