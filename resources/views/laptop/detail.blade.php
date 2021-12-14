@extends('layout.bahagia')

@section('title', 'Melihat Data Laptop')
@section('judulhalaman', 'Melihat Data laptop')

@section('konten')
    <div class="kembali">
        <a href="/laptop" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        @foreach ($laptop as $p)
            <table>
                <tr>
                    <td class="isi-tabel">Kode Laptop</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->kodelaptop }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Merk</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->merklaptop }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Stock</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->stocklaptop }}</td>
                </tr>
                <tr>
                    <td class="isi-tabel">Tersedia</td>
                    <td>
                        <label>: </label>
                    </td>
                    <td class="isi-tabel"> {{ $p->tersedia }}</td>
                </tr>
            </table>
        @endforeach
    </div>
@endsection
