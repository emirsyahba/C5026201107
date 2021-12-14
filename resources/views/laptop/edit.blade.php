@extends('layout.bahagia')

@section('title', 'Mengedit Data Laptop')
@section('judulhalaman', 'Edit Data Laptop')

@section('konten')
    <div class="kembali">
        <a href="/laptop" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        @foreach ($laptop as $p)
            <form action="/laptop/update" method="post" class="table-responsive">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $p->kodelaptop }}"> <br />
                <table class="table table-borderless">
                    <tr>
                        <td>
                            <label for="merk">Merk</label>
                        </td>
                        <td>
                            <label>:</label>
                        </td>
                        <td>
                            <input class="container form-control" type="text" name="merk" value="{{ $p->merklaptop }}"
                                id="inputmerk" required>
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
                            <input class="container form-control" type="text" name="stock" value="{{ $p->stocklaptop }}"
                                id="inputstock" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tersedia">Tersedia</label>
                        </td>
                        <td>
                            <label>:</label>
                        </td>
                        <td>
                            <input type="radio" id="html" name="tersedia" value="Y" @if ($p->tersedia === 'H') checked="checked" @endif>
                            <label for="html">
                                Ya
                            </label>
                            <br>
                            <input type="radio" id="html" name="tersedia" value="T" @if ($p->tersedia === 'I') checked="checked" @endif>
                            <label for="html">
                                Tidak
                            </label>
                        </td>
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            &nbsp;
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </td>
                    </tr>
                </table>
            </form>
        @endforeach
    </div>
@endsection
