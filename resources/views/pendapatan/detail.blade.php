@extends('layout.bahagia')

@section('title', 'Melihat Data Pendapatan')
@section('judulhalaman', 'Melihat Data Pendapatan')

@section('konten')
    <div class="kembali">
        <a href="/pendapatan" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        @foreach ($pendapatan as $p)
            <table>
                <tr>
                    <td class="isi-tabel">ID Pegawai</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->IDPegawai }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Nama</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->pegawai_nama }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Bulan</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->Bulan }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Tahun</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->Tahun }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Gaji</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->Gaji }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Tunjangan</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->Tunjangan }}</td>
                </tr>
            </table>
        @endforeach
    </div>
@endsection
