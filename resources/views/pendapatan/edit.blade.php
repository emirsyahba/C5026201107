<!DOCTYPE html>
<html>

<head>
    <title>Kuliah Pertemuan 13</title>
</head>

<body>

    <h2>Emirsyah Bayu Aji</h2>
    <h3>Data Pendapatan</h3>

    <a href="/pendapatan"> Kembali</a>

    <br />
    <br />

    @foreach ($pendapatan as $p)
        <form action="/pendapatan/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->ID }}"> <br />
            IDPegawai <input type="number" name="idpegawai" required="required" value="{{ $p->IDPegawai }}"> <br />
            Bulan <input type="number" name="bulan" required="required" value="{{ $p->Bulan }}"> <br />
            Tahun <input type="text" name="tahun" required="required" value="{{ $p->Tahun }}"> <br />
            Gaji <input type="number" name="gaji" required="required">{{ $p->Gaji }} <br />
            Tunjangan <input type="number" name="tunjangan" required="required">{{ $p->Tunjangan }} <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach


</body>

</html>
