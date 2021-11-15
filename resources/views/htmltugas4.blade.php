<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Kalkulator Gas Ideal</title>
    <script>
        function tekanangasideal() {
            var v = document.getElementById("volume").value;
            var n = document.getElementById("mol").value;
            var T = document.getElementById("suhu").value;
            var K = (273 + parseFloat(T));
            var R = 8.314;
            let result = (n * R * K) / v;
            return result;
        }
        function result() {
            document.getElementById("result").innerHTML = tekanangasideal();
        }
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("https://bashooka.com/wp-content/uploads/2018/04/scg-canvas-background-animation-24.jpg");
            background-size: cover;
            height: 100vh;
        }

        #calculator .container #calculator-row #calculator-column #calculator-box {
            margin-top: 10px;
            max-width: 600px;
            height: 350px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
        }

        #calculator .container #calculator-row #calculator-column #calculator-box #calculator-form {
            padding: 20px;
        }

        #calculator .container #calculator-row #calculator-column #calculator-box #calculator-form #register-link {
            margin-top: -85px;
        }

        .hasil {
            margin-top: 25px;
            text-align: center;
            color: #17a2b8;
        }
    </style>
</head>

<body>
    <div id="calculator">
        <h2 class="text-center text-white pt-5">Kalkulator Tekanan Gas pada Persamaan Gas Ideal</h2>
        <div class="container">
            <div id="calculator-row" class="row justify-content-center align-items-center">
                <div id="calculator-column" class="col-md-6">
                    <div id="calculator-box" class="col-md-12">
                        <h3 class="text-center text-info">Masukkan Nilai</h3>
                        <div class="form-group">
                            <label for="volume" class="text-info">Berapa volume gas (liter)?</label><br>
                            <input type="number" name="volume" id="volume" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mol" class="text-info">Berapa jumlah mol gas (mol)?</label><br>
                            <input type="number" name="mol" id="mol" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="suhu" class="text-info">Berapa suhunya (Celcius)?</label><br>
                            <input type="number" name="suhu" id="suhu" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-dark" id="hasil" onclick="result();">Hitung</button>
                        <div class="hasil">
                            <div class="row justify-content-center align-items-center">
                                <br>
                                <h4>Tekanan gasnya adalah</h4>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="card">
                                    <div class="card-body" id="result">
                                    </div>
                                </div>
                            </div>
                            <h6>atm</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
