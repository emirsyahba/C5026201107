<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hasil Perhitungan Tekanan Gas Ideal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("https://bashooka.com/wp-content/uploads/2018/04/scg-canvas-background-animation-24.jpg");
            background-size: cover;
            height: 100vh;
        }

        .container {
            margin-top: 10px;
            max-width: 600px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="text-center text-white pt-5">Nilai Variabel dan Hasil Tekanan Gas pada Persamaan Gas Ideal</h2>
        <div class="alert alert-success">
            <div class="container">
                <div class="row">
                    <div class="card">
                        Volume gas (liter): <?php $volume = $_GET["volume"];
                                            echo $volume; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        Mol gas (mol) : <?php $mol = $_GET["mol"];
                                        echo $mol; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        Suhu (Celcius) : <?php $suhu = $_GET["suhu"];
                                            echo $suhu; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        Tekanan gas ideal :
                        <?php
                        $v = $_GET["volume"];
                        $n = $_GET["mol"];
                        $T = $_GET["suhu"];
                        $convertT = 273;
                        $K = $T + $convertT;
                        $R = 8.314;

                        $result = ($n * $R * $K) / $v;
                        echo $result;
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
