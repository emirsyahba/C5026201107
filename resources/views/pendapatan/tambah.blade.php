@extends('layout.bahagia')

@section('title', 'Menambah Data Pendapatan')
@section('judulhalaman', 'Tambah Data Pendapatan')

@section('konten')
    <div class="kembali">
        <a href="/pendapatan" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        <form action="/pendapatan/store" method="post" class="table-responsive">
            {{ csrf_field() }}
            <table class="table table-borderless">
                <tr>
                    <td>
                        <label for="idpegawai">ID Pegawai</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="number" name="idpegawai" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="bulan">Bulan</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="number" name="bulan" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tahun">Tahun</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" name="tahun" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gaji">Gaji</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="number" name="gaji" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tunjangan">Tunjangan</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="number" name="tunjangan" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                </tr>
            </table>
        </form>
    </div>
@endsection
