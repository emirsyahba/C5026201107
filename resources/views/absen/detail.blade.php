@extends('layout.bahagia')

@section('title', 'Melihat Data Absen')
@section('judulhalaman', 'Melihat Data Absen')

@section('konten')
    <div class="kembali">
        <a href="/absen" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        @foreach ($absen as $p)
            <table>
                <tr>
                    <td class="isi-tabel">ID Pegawai</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->IDPegawai }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Nama Pegawai</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->pegawai_nama }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Tanggal</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->Tanggal }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Status</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->Status }}</td>
                </tr>
            </table>
        @endforeach
    </div>
@endsection
