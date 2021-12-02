<!DOCTYPE html>
<html>

<head>
    <title>CRUD Tabel Absen</title>
</head>

<body>

    <h2>Daftar Absensi Pegawai</h2>


    <a href="/absen/add"> + Tambah Absensi</a>

    <br />
    <br />

    <table border="1">
        <tr>

            <th>IDPegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach ($absen as $a)
            <tr>

                <td>{{ $a->absen_idPegawai }}</td>
                <td>{{ $a->absen_tanggal }}</td>
                <td>{{ $a->absen_status }}</td>
                <td>
                    <a href="/absen/edit/{{ $a->absen_id }}">Edit Absensi</a>
                    |
                    <a href="/absen/hapus/{{ $a->absen_id }}">Delete Absensi</a>
                </td>
            </tr>
        @endforeach
    </table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
    </p>

</body>

</html>
