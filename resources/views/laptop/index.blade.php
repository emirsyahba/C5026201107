@extends('layout.bahagia')

@section('title', 'Data Laptop')
@section('judulhalaman', 'Tabel Data Laptop')

@section('konten')
    <div id="kotak">
        <div class="tambah">
            <a href="/laptop/tambah" type="button" class="btn btn-primary mb-3">+ Tambah Data Laptop</a>
        </div>
        <div class="container" align="center">
            <form action="/laptop/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari laptop berdasarkan merk ..."
                    value="{{ old('cari') }}">
                <input type="submit" class="btn btn-default" value="CARI">
            </form>
        </div>
        <table id="tabel" class="table table-striped table-hover table-bordered align-middle text-center">
            <tr>
                <th>Merk</th>
                <th>Stock</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            @foreach ($laptop as $p)
                <tr>
                    <td>{{ $p->merklaptop }}</td>
                    <td>{{ $p->stocklaptop }}</td>
                    <td>{{ $p->tersedia }}</td>
                    <td>
                        <a href="/laptop/view/{{ $p->kodelaptop }}" class="btn btn-success" style="width: 120px">View
                            Detail</a>
                        &nbsp;
                        <a href="/laptop/edit/{{ $p->kodelaptop }}" class="btn btn-warning" style="width: 76px">Edit</a>
                        &nbsp;
                        <a href="/laptop/hapus/{{ $p->kodelaptop }}" class="btn btn-danger" style="width: 76px">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>

        {{ $laptop->links() }}
    </div>
@endsection
