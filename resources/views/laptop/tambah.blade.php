@extends('layout.bahagia')

@section('title', 'Menambah Data Laptop')
@section('judulhalaman', 'Tambah Data Laptop')

@section('konten')
    <div class="kembali">
        <a href="/laptop" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        <form action="/laptop/store" method="post" class="table-responsive">
            {{ csrf_field() }}
            <table class="table table-borderless">
                <tr>
                    <td>
                        <label for="merk">Merk</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" name="merk" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="stock">Stock</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" name="stock" required="required">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <label for="tersedia">Tersedia</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input type="radio" id="hadir" name="tersedia" value="Y">
                        <label for="hadir">
                            Ya
                        </label>
                        <br>
                        <input type="radio" id="html" name="tersedia" value="T">
                        <label for="html">
                            Tidak
                        </label>
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
