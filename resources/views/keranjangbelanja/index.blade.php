@extends('layout.bahagia')

@section('title', 'Data Keranjang Belanja')
@section('judulhalaman', 'Tabel Data Keranjang Belanja')

@section('konten')
    <div id="kotak">
        <table id="tabel" class="table table-striped table-hover table-bordered align-middle text-center">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach ($keranjangbelanja as $p)
                <tr>
                    <td>{{ $p->ID }}</td>
                    <td>{{ $p->KodeBarang }}</td>
                    <td>{{ $p->Jumlah }}</td>
                    <td>{{ number_format($p->Harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($p->Jumlah * $p->Harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="/keranjangbelanja/tambah/  " class="btn btn-warning" style="width: 76px">Beli</a>
                        &nbsp;
                        <a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger"
                            style="width: 76px">Batal</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $keranjangbelanja->links() }}
    </div>
@endsection
