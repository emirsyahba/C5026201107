<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETS PWEB C - Emirsyah Bayu Aji</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        body {
            background-image: url("https://www.pixelstalk.net/wp-content/uploads/2016/04/Desktop-simple-wallpaper-backgrounds.jpg");
            background-size: cover;
            display: block;
            overflow: auto;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        /* #form .container {} */

        #form .container #form-row #form-column #form-box #form-form {
            padding: 30px;
        }

        #form .container #form-row #form-column #form-box #form-form #register-link {
            margin-top: -85px;
        }

        #form .container #form-row #form-column #form-box {
            margin-top: 40px;
            max-width: 600px;
            height: 445px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        .footer {
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="form">
        <div class="container">
            <div id="form-row" class="row justify-content-center align-items-center">
                <div id="form-column" class="col-md-6">
                    <div id="form-box" class="col-md-12">
                        <form name="inputform" onsubmit="return submitform()" method="post"
                            action="https://my.its.ac.id/">
                            <br>
                            <h6>Emirsyah Bayu Aji</h6>
                            <h6>Aji</h6>
                            <h6>5026201107</h6>
                            <br>
                            <h4 class="text-center">Form Input Peminjaman Buku</h4>
                            <br>
                            <!-- Judul Buku -->
                            <div class="row">
                                <div class="col-5">
                                    <label for="judulbuku"><b>Judul Buku</b></label>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" id="judulbuku">
                                </div>
                            </div>
                            <!-- No Buku -->
                            <div class="row">
                                <div class="col-5">
                                    <label for="nomor"><b>No Buku</b></label>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-6">
                                    <input type="number" class="form-control" id="nomor">
                                </div>
                            </div>
                            <!-- Jenis Peminjaman -->
                            <div class="row">
                                <div class="col-5">
                                    <label for="jenis"><b>Jenis Peminjaman</b></label>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-6">
                                    <select id="jenis" name="jenis" class="form-control">
                                        <option hidden></option>
                                        <option>Biasa</option>
                                        <option>Kilat</option>
                                        <option>Lama</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Tanggal Peminjaman -->
                            <div class="row">
                                <div class="col-5">
                                    <label for="tanggal"><b>Tanggal Peminjaman</b></label>
                                </div>
                                <div class="col-1">
                                    <p>:</p>
                                </div>
                                <div class="col-6">
                                    <input type="date" class="form-control error" name="tanggal">
                                </div>
                            </div>
                            <br>
                            <div class="button d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary m-2 w-25">Simpan</button>
                                <button type="reset" class="btn btn-success m-2 w-25">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function submitform() {
        var title = document.inputform.judulbuku;
        var number = document.inputform.nomor;
        var type = document.inputform.jenis;
        var date = document.inputform.tanggal;

        if (valid_title(title)) {
            if (valid_number(number)) {
                if (valid_type(type)) {
                    if (valid_date(date)) {
                        return true;
                    }
                }
            }
        }
        return false;
    }

    function valid_title(title) {
        var let_length = title.value.length;
        if (let_length == 0) {
            window.alert('Judul buku harus diisi');
            return false;
        }
        else if (let_length < 10) {
            window.alert('Judul buku harus 10 karakter');
            return false;
        }
        else {
            title.focus();
            return true;
        }
    }

    function valid_number(number) {
        var numbers = /^[0-9]+$/;
        var number_length = number.value.length;
        if (number_length == 0) {
            window.alert('Nomor buku harus diisi');
            return false;
        }

        else if (number_length != 5) {
            window.alert('Nomor buku minimal terdiri dari 5 angka');
            return false;
        }

        else if (number.value.match(numbers)) {
            number.focus();
            return true;
        }
    }

    function valid_type(type) {
        if (type.selectedIndex == 0) {
            alert('Pilih type yang tersedia');
            return false;
        }
        else {
            return true;
            type.focus();
        }
    }

    function valid_date(date) {
        var date_length = date.value.length;
        if (date_length == 0) {
            window.alert('Tanggal peminjaman harus diisi');
            return false;
        }
        return true;
        date.focus();
    }
</script>

</html>
