@extends('layout.bahagia')

@section('title', 'Menambah Data Belanja')
@section('judulhalaman', 'Tambah Data Belanja')

@section('konten')
    <div class="kembali">
        <a href="/keranjangbelanja" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        <form action="/keranjangbelanja/store" method="post" class="table-responsive">
            {{ csrf_field() }}
            <table class="table table-borderless">
                <tr>
                    <td>
                        <label for="kodebarang">Kode Barang</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" name="kodebarang" required="required">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jumlah=">Jumlah Pembelian</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" name="jumlah" required="required">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <label for="harga">Harga per item</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input class="container form-control" type="text" name="harga" required="required">
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
