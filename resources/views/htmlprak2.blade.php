<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>

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
            background-image: url("https://3.bp.blogspot.com/-1-EI-hYRRqc/Xd2zFunH65I/AAAAAAAARyU/9lC8yiPTk04zG8t5lIbIc3A-tIwqKxBvwCLcBGAsYHQ/w919-h516-p-k-no-nu/sunrise-illustration-digital-art-uhdpaper.com-4K-4.1963-wp.thumbnail.jpg");
            background-size: cover;
            background-position: -450px 0px;
            display: block;
            overflow: auto;
            height: 100vh;
        }

        #form .container #form-row #form-column #form-box #form-form {
            padding: 30px;
        }

        #form .container #form-row #form-column #form-box #form-form #register-link {
            margin-top: -85px;
        }

        #form .container #form-row #form-column #form-box {
            margin-top: 40px;
            max-width: 600px;
            height: 770px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        .footer {
            text-align: center;
        }
    </style>

    <script>
        function submitform() {
            var name = document.regform.name;
            var address = document.regform.address;
            var email = document.regform.email;
            var password = document.regform.password;
            var telephone = document.regform.telephone;
            var course = document.regform.course;
            var zip = document.regform.zip;

            if (valid_name(name)) {
                if (valid_address(address)) {
                    if (valid_email(email)) {
                        if (valid_password(password)) {
                            if (valid_telephone(telephone)) {
                                if (valid_course(course)) {
                                    if (valid_zip(zip)) {
                                        return true;
                                    }
                                }
                            }
                        }
                    }
                }
            }
            return false;
        }

        function valid_name(name) {
            var letters = /^[A-Za-z\s]+$/;
            if (name.value.match(letters)) {
                return true;
            }
            else if (name.value == '') {
                window.alert('Masukkan nama!');
                return false;
            }
            else {
                window.alert('Nama harus berupa alfabet, tidak bisa berupa angka');
                name.focus();
                return false;
            }
        }

        function valid_address(address) {
            if (address.value == '') {
                window.alert('Alamat harus diisi!');
                return false;
            }
            else {
                address.focus();
                return true;
            }
        }

        function valid_email(email) {
            var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (email.value.match(format)) {
                return true;
            }
            else {
                window.alert('Email harus diisi!');
                email.focus();
                return false;
            }
        }

        function valid_password(pass) {
            var password_length = password.value.length;
            if (password_length == 0) {
                alert('Password harus diisi!');
                return false;
            }

            else if (password_length <= 7 || password_length >= 17) {
                alert('Panjang password harus 8 sampai 16 karakter');
                return false;
            }

            else {
                password.focus();
                return true;
            }
        }

        function valid_telephone(telephone) {
            var numbers = /^[0-9]+$/;
            var telephone_length = telephone.value.length;
            if (telephone_length == 0) {
                alert('Nomor telpon tidak boleh kosong');
                return false;
            }

            else if (telephone_length < 7) {
                alert('Nomor telpon minimal terdiri dari 7 angka');
                return false;
            }

            else if (telephone.value.match(numbers)) {
                telephone.focus();
                return true;
            }
        }

        function valid_course(course) {
            if (course.selectedIndex == 0) {
                alert('Pilih course yang tersedia');
                course.focus();
                return false;
            }
            else {
                return true;
            }
        }

        function valid_zip(zip) {
            var zips = /^[0-9]+$/;
            var zip_length = zip.value.length;
            if (zip_length == 0) {
                alert('Kode pos harus diisi');
                return false;
            }

            else if (zip_length != 6) {
                alert('Kode pos harus terdiri dari 6 angka');
                return false;
            }

            else if (zip.value.match(zips)) {
                zip.focus();
                return true;
            }
        }
    </script>

</head>

<body>
    <div id="form">
        <div class="container">
            <div id="form-row" class="row justify-content-center align-items-center">
                <div id="form-column" class="col-md-6">
                    <div id="form-box" class="col-md-12">
                        <form name="regform" onsubmit="return submitform()" method="post" action="https://google.com">
                            <br>
                            <h2 class=" text-center text-info">REGISTRATION FORM</h2>
                            <br>
                            <div class="form-group">
                                <label for="name"><b>Name:</b></label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="address"><b>Address:</b></label>
                                <input type="text" class="form-control" id="address">
                            </div>
                            <div class="form-group">
                                <label for="email"><b>Email Address:</b></label>
                                <input type="email" class="form-control" placeholder="contoh@mail.com" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password"><b>Password:</b></label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <label for="telephone"><b>Telephone:</b></label>
                                <input type="number" class="form-control" id="telephone">
                            </div>
                            <div class="form-group">
                                <label for="course"><b>Select Your Course:</b></label>
                                <select id="course" name="course" class="form-control">
                                    <option></option>
                                    <option>BTECH</option>
                                    <option>BBA</option>
                                    <option>BCA</option>
                                    <option>B.COM</option>
                                    <option>GEEKFORGEEKS</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="zip"><b>ZIP Code:</b></label>
                                <input type="number" class="form-control" name="zip">
                            </div>
                            <div class="button">
                                <button type="submit" class="btn btn-info btn-md">Send</button>
                                <button type="reset" class="btn btn-info bg-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <footer class="text-white mt-3">Emirsyah Bayu Aji / 5026201107 / Pemrograman Web C</footer>
        </div>
    </div>
</body>

</html>
