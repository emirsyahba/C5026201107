@extends('layout.bahagia')

@section('title', 'Mengedit Data Absensi')
@section('judulhalaman', 'Tambah Data Pegawai')

@section('konten')
    <div class="kembali">
        <a href="/pegawai" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        <form action="/pegawai/store" method="post" class="table-responsive">
            {{ csrf_field() }}
            <table class="table table-borderless">
                <tr>
                    <td>
                        <label for="nama">Nama</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" name="nama" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jabatan">Jabatan</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" name="jabatan" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="umur">Umur</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="number" name="umur" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <textarea class="container form-control" type="number" name="alamat" required="required"></textarea>
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
    {{-- {{ csrf_field() }}
    Nama <input type="text" name="nama" required="required"> <br />
    Jabatan <input type="text" name="jabatan" required="required"> <br />
    Umur <input type="number" name="umur" required="required"> <br />
    Alamat <textarea name="alamat" required="required"></textarea> <br />
    <input type="submit" value="Simpan Data">
    </form> --}}
@endsection
