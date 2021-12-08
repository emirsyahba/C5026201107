<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js"
        integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css"
        rel="stylesheet">
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            font-size: 14px;
            line-height: 1.8;
            font-weight: normal;
            background: #fff;
            color: #000;
        }

        a {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
            color: #808080;
        }

        a:hover,
        a:focus {
            text-decoration: none !important;
            outline: none !important;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        button {
            -webkit-transition: .3s all ease;
            -o-transition: .3s all ease;
            transition: .3s all ease;
        }

        button:hover,
        button:focus {
            text-decoration: none !important;
            outline: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5 {
            text-align: center;
            line-height: 1.5;
            font-weight: 550;
            font-family: "Poppins", Arial, sans-serif;
            color: #000;
        }

        .img {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }

        .wrapper {
            width: 100%;
        }

        #sidebar {
            min-width: 300px;
            max-width: 300px;
            background: #0F3057;
            color: #E7E7DE;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            position: relative;
        }

        #sidebar .h6 {
            color: #E7E7DE;
        }

        #sidebar.active {
            margin-left: -300px;
        }

        #sidebar.active .custom-menu {
            margin-right: -50px;
        }

        #sidebar.active .btn.btn-primary:before {
            content: "\f053";
            font-family: "FontAwesome";
            right: 2px !important;
        }

        #sidebar.active .btn.btn-primary:after {
            display: none;
        }

        #sidebar h1 {
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 20px;
        }

        #sidebar h1 .logo {
            color: #E7E7DE;
            display: block;
            padding: 10px 30px;
            background: #00587A;
        }

        #sidebar ul.components {
            padding: 0;
        }

        #sidebar ul li {
            font-size: 16px;
        }

        #sidebar ul li>ul {
            margin-left: 10px;
        }

        #sidebar ul li>ul li {
            font-size: 14px;
        }

        #sidebar ul li a {
            padding: 15px 30px;
            display: block;
            color: #E7E7DE;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        #sidebar ul li a span.notif {
            position: relative;
        }

        #sidebar ul li a span.notif small {
            position: absolute;
            top: -3px;
            bottom: 0;
            right: -3px;
            width: 12px;
            height: 12px;
            content: '';
            background: red;
            border-radius: 50%;
            font-family: "Poppins", Arial, sans-serif;
            font-size: 8px;
        }

        #sidebar ul li a:hover {
            color: #E7E7DE;
            background: #00587A;
            border-bottom: 1px solid #00587A;
        }

        #sidebar ul li.active>a {
            background: transparent;
            color: #E7E7DE;
        }

        #sidebar ul li.active>a:hover {
            background: #00587A;
            border-bottom: 1px solid #00587A;
        }

        @media (max-width: 991.98px) {
            #sidebar {
                margin-left: -300px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #sidebar .custom-menu {
                margin-right: -60px !important;
                top: 10px !important;
            }
        }

        #sidebar .custom-menu {
            display: inline-block;
            position: absolute;
            top: 20px;
            right: 0;
            margin-right: -35px;
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        @media (prefers-reduced-motion: reduce) {
            #sidebar .custom-menu {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }
        }

        #sidebar .custom-menu .btn.btn-primary {
            background: #0F3057;
            border-color: transparent;
            position: relative;
            color: #000;
            width: 30px;
            height: 30px;
        }

        #sidebar .custom-menu .btn.btn-primary:after,
        #sidebar .custom-menu .btn.btn-primary:before {
            position: absolute;
            top: 2px;
            left: 0;
            right: 0;
            bottom: 0;
            font-family: "FontAwesome";
            color: #E7E7DE;
        }

        #sidebar .custom-menu .btn.btn-primary:after {
            content: "\f054";
            left: 2px;
        }

        .bg-wrap {
            width: 100%;
            position: relative;
            z-index: 0;
        }

        .bg-wrap:after {
            z-index: -1;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            background: #000;
            opacity: .3;
        }

        .bg-wrap .user-logo .img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            margin-bottom: 10px;
        }

        .bg-wrap .user-logo h3 {
            color: #E7E7DE;
            font-size: 18px;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 0;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        @media (max-width: 991.98px) {
            #sidebarCollapse span {
                display: none;
            }
        }

        #content {
            width: 100%;
            padding: 0;
            min-height: 100vh;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        .btn.btn-primary {
            background: #008891;
            border-color: #008891;
        }

        .btn.btn-primary:hover,
        .btn.btn-primary:focus {
            background: #00587A !important;
            border-color: #00587A !important;
        }

        .footer p {
            color: rgba(255, 255, 255, 0.5);
        }

        .form-control {
            height: 40px !important;
            background: #fff;
            color: #000;
            font-size: 13px;
            border-radius: 4px;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: transparent;
        }

        .form-control:focus,
        .form-control:active {
            border-color: #000;
        }

        .form-control::-webkit-input-placeholder {
            /* Chrome/Opera/Safari */
            color: rgba(255, 255, 255, 0.5);
        }

        .form-control::-moz-placeholder {
            /* Firefox 19+ */
            color: rgba(255, 255, 255, 0.5);
        }

        .form-control:-ms-input-placeholder {
            /* IE 10+ */
            color: rgba(255, 255, 255, 0.5);
        }

        .form-control:-moz-placeholder {
            /* Firefox 18- */
            color: rgba(255, 255, 255, 0.5);
        }

        .subscribe-form .form-control {
            background: #00587A;
        }

        .bxl-instagram,
        .bxl-github,
        .bxl-linkedin {
            font-size: 17px;
            color: #E7E7DE;
        }

        #tabel {
            border-collapse: collapse;
            width: 100%;
        }

        #tabel td,
        #tabel th {
            border: 1px solid #0F3057;
            padding: 8px;
        }

        #tabel tr:nth-child(even) {
            background-color: #fff;
        }

        #tabel tr:nth-child(odd) {
            background-color: #e7e7de7c;
        }

        #tabel tr:hover {
            background-color: #0f2f5755;
        }

        #tabel th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #0F3057;
            color: white;
        }

        #kotak {
            width: 100%;
            margin: 0 auto;
            padding-top: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-left: 50px;
            border: solid #00587A 2px;
            border-radius: 15px;
            background-color: white;
        }

        #box {
            width: 100%;
            margin: 0 auto;
            padding-top: 30px;
            padding-right: 30px;
            padding-bottom: 30px;
            padding-left: 50px;
            border: solid #00587A 2px;
            border-radius: 15px;
            background-color: #E7E7DE;
        }

    </style>
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(/images/fototugasweek14/bg.png);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(/images/fototugasweek14/profil.jpg);"></div>
                    <h3>Emirsyah Bayu Aji</h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li>
                    <a href="/pegawai"><i class='bx bxs-user'></i> Pegawai</a>
                </li>
                <li>
                    <a href="/absen"><i class='bx bxs-calendar-check'></i> Absen</a>
                </li>
                <li>
                    <a href="/pendapatan"><i class='bx bxs-wallet'></i> Pendapatan</a>
                </li>
                <li>
                    <a href="#"><i class='bx bxs-edit-alt'></i> Minggu Depan</a>
                </li>
                <li>
                    <a href="#"><i class='bx bx-desktop'></i> Praktikum</a>
                </li>
            </ul>
            <div class="footer">
                <div class="copyright" style="text-align: center">
                    © 2021 <br> Emirsyah Bayu Aji 5026201107
                </div>
                <div class="socmed d-flex justify-content-center">
                    <a target="_blank" href="https://www.instagram.com/emirsyahba/"><i class='bx bxl-instagram'></i></a>
                    <a target="_blank" href="https://github.com/emirsyahba"><i class='bx bxl-github'></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/emirsyah-b-98760711a/"><i
                            class='bx bxl-linkedin'></i></a>
                </div>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h1>@yield('judulhalaman')</h1>

            @section('konten')

            @show
        </div>
    </div>

    <script>
        (function($) {

            "use strict";

            var fullHeight = function() {

                $('.js-fullheight').css('height', $(window).height());
                $(window).resize(function() {
                    $('.js-fullheight').css('height', $(window).height());
                });

            };
            fullHeight();

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });

        })(jQuery);
    </script>


</body>

</html>
