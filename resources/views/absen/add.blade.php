@extends('layout.bahagia')

@section('title', 'Menambah Data Absensi')
@section('judulhalaman', 'Tambah Data Absensi')

@section('konten')
    <div class="kembali">
        <a href="/absen" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        <form action="/absen/store" method="post" class="table-responsive">
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
                        <select name="idpegawai">
                            @foreach ($pegawai as $p)
                                <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>
                        <label for="tanggal">Tanggal</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <div class='input-group' id='datetimepicker1' data-td-target-input='nearest'
                            data-td-target-toggle='nearest'>
                            <input id='datetimepicker1Input' type='text' class='form-control' name="tanggal"
                                data-td-target='#datetimepicker1' required />
                            <span class='input-group-text' data-td-target='#datetimepicker1'
                                data-td-toggle='datetimepicker'>
                                <span class='fas fa-calendar'></span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="status">Status</label>
                    </td>
                    <td>
                        <label>:</label>
                    </td>
                    <td>
                        <input type="radio" id="hadir" name="status" value="H">
                        <label for="hadir">
                            Hadir
                        </label>
                        <br>
                        <input type="radio" id="html" name="status" value="I">
                        <label for="html">
                            Izin
                        </label>
                        <br>
                        <input type="radio" id="css" name="status" value="S" checked="checked">
                        <label for="css">
                            Sakit
                        </label>
                        <br>
                        <input type="radio" id="javascript" name="status" value="A">
                        <label for="javascript">
                            Alpha
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
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <script>
        new tempusDominus.TempusDominus(document.getElementById('datetimepicker1'), {
            hooks: {
                inputFormat: (context, date) => {
                    return moment(date).format('YYYY-MM-DD hh:mm:ss')
                }
            }
        });
    </script>
@endsection
