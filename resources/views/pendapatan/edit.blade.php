@extends('layout.bahagia')

@section('title', 'Mengedit Data Absensi')
@section('judulhalaman', 'Edit Data Pendapatan')

@section('konten')
    <div class="kembali">
        <a href="/pendapatan" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        @foreach ($pendapatan as $p)
            {{-- <form action="/pendapatan/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->ID }}"> <br />
            IDPegawai <input type="number" name="idpegawai" required="required" value="{{ $p->IDPegawai }}"> <br />
            Bulan <input type="number" name="bulan" required="required" value="{{ $p->Bulan }}"> <br />
            Tahun <input type="text" name="tahun" required="required" value="{{ $p->Tahun }}"> <br />
            Gaji <input type="number" name="gaji" required="required">{{ $p->Gaji }}> <br />
            Tunjangan <input type="number" name="tunjangan" required="required">{{ $p->Tunjangan }}> <br />
            <input type="submit" value="Simpan Data">
        </form> --}}

            <form action="/pendapatan/update" method="post" class="table-responsive">
                {{ csrf_field() }}
                <table class="table table-borderless">
                    <tr>
                        <input type="hidden" name="id" value="{{ $p->ID }}">
                        <td>
                            <label for="idpegawai">ID Pegawai</label>
                        </td>
                        <td>
                            <label>:</label>
                        </td>
                        <td>
                            <input class="container form-control" type="number" name="idpegawai" required="required"
                                value="{{ $p->IDPegawai }}">
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
                            <input class="container form-control" type="number" name="bulan" required="required"
                                value="{{ $p->Bulan }}">
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
                            <input class="container form-control" type="text" name="tahun" required="required"
                                value="{{ $p->Tahun }}">
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
                            <input class="container form-control" type="number" name="gaji" required="required"
                                value="{{ $p->Gaji }}">
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
                            <input class="container form-control" type="number" name="tunjangan" required="required"
                                value="{{ $p->Tunjangan }}">
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
        @endforeach
    </div>
@endsection
