<?php
//memanggil file folder fungsi
require_once 'fungsi/file.php';
require_once 'fungsi/perhitungan.php';

//memanggil txt
$filename = 'cetak/CetakAll.txt';
$result = getData($filename, "circle");

// get data from file
$data_all = getData($filename) ?? [];

$triangle = [
    "total" => calculateTotalOfEachshape($data_all, "triangle"),
    "percentage" => percentage($data_all, "triangle")
];
$square = [
    "total" => calculateTotalOfEachshape($data_all, "square"),
    "percentage" => percentage($data_all, "square")
];
$circle = [
    "total" => calculateTotalOfEachshape($data_all, "circle"),
    "percentage" => percentage($data_all, "circle")
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Sri Ayu Ningsih</title>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-info"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Luas Bangun Datar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="view/segitiga/v_segitiga.php">Segitiga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view/persegi/v_persegi.php">Persegi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view/lingkaran/v_lingkaran.php">Lingkaran</a>
        </li>
    <!-- <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
    </div> -->
    
      </ul>
    </div>
  </div>
</nav>
<!-- judul-->
<div class="card">
  <div class="card-header">
 
  </div>
  <div class="card-body">
    <center><b><h5 class="card-title">PERHITUNGAN LUAS BANGUN DATAR</h5></b></center>
    <center>Website ini dapat digunakan untuk menghitung luas bangun datar segitiga, persegi, dan lingkaran</center>
    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
  </div>
</div>
 <!-- Card Analisis Total dan Persentase -->
 <div class="card p-3 bg-light mb-3">
            <div class="card-body">
                <div class="row mb-3">

                    <!-- Segitiga -->
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-light">
                                Perhitungan Segitiga Yang Telah Dilakukan
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="card">
                                            <b>Total</b>
                                            <h1><?= $triangle["total"] ?></h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <b>Persentase</b>
                                            <h1><?= $triangle["percentage"] ?></h1>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Persegi -->
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-light">
                                Perhitungan Persegi Yang Telah Dilakukan
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="card">
                                            <b>Total</b>
                                            <h1><?= $square["total"] ?></h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <b>Persentase</b>
                                            <h1><?= $square["percentage"] ?></h1>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lingkaran -->
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 mb-3">
                        <div class="card text-center">
                            <div class="card-header bg-dark text-light">
                                Perhitungan Lingkaran Yang Telah Dilakukan
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="card">
                                            <b>Total</b>
                                            <h1><?= $circle["total"] ?></h1>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <b>Persentase</b>
                                            <h1><?= $circle["percentage"] ?></h1>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>    
</body>
</html>