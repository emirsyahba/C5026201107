@extends('layout.bahagia')

@section('title', 'Mengedit Data Absensi')
@section('judulhalaman', 'Edit Data Absensi')

@section('konten')
    {{-- <h3>{{ $judul }}</h3> --}}
    <div class="kembali">
        <a href="/absen" type="button" class="btn btn-primary mb-3">Kembali</a>
    </div>
    <div id="box">
        @foreach ($absen as $a)
            <form action="/absen/update" method="post" class="table-responsive">
                {{ csrf_field() }}
                <table class="table table-borderless">
                    <tr>
                        <input type="hidden" name="id" value="{{ $a->ID }}">
                        <td>
                            <label for="idpegawai">ID Pegawai</label>
                        </td>
                        <td>
                            <label>:</label>
                        </td>
                        <td>
                            <select name="idpegawai">
                                @foreach ($pegawai as $p)
                                    <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai) selected="selected" @endif>
                                        {{ $p->pegawai_nama }}
                                    </option>
                                @endforeach
                            </select>
                        </td>
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
                                <input id='datetimepicker1Input' value="{{ $a->Tanggal }}" type='text'
                                    class='form-control' name="tanggal" data-td-target='#datetimepicker1' required />
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
                            <input type="radio" id="html" name="status" value="H" @if ($a->Status === 'H') checked="checked" @endif>
                            <label for="html">
                                Hadir
                            </label>
                            <br>
                            <input type="radio" id="html" name="status" value="I" @if ($a->Status === 'I') checked="checked" @endif>
                            <label for="html">
                                Izin
                            </label>
                            <br>
                            <input type="radio" id="css" name="status" value="S" @if ($a->Status === 'S') checked="checked" @endif>
                            <label for="css">
                                Sakit
                            </label>
                            <br>
                            <input type="radio" id="javascript" name="status" value="A" @if ($a->Status === 'A') checked="checked" @endif>
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
    @endforeach
@endsection
