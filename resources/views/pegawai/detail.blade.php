@extends('layout.bahagia')

@section('title', 'Melihat Data Pegawai')
@section('judulhalaman', 'Melihat Data Pegawai')

@section('konten')
    <div class="kembali">
        <a href="/pegawai" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        @foreach ($pegawai as $p)
            <table>
                <tr>
                    <td class="isi-tabel">ID Pegawai</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->pegawai_id }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Nama</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->pegawai_nama }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Jabatan</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->pegawai_jabatan }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Umur</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->pegawai_umur }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Alamat</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->pegawai_alamat }}</td>
                </tr>
            </table>
        @endforeach
    </div>
@endsection
