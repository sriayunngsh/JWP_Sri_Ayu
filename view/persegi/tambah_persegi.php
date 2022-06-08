<?php
date_default_timezone_set("Asia/Singapore");
require_once '../../fungsi/file.php';
require_once '../../fungsi/perhitungan.php';

// mengolah data hasil import form
if (isset($_POST["submit"])) {

    // filename where to save
    $filename = '../../cetak/CetakAll.txt';

     // fungsi yang ada difolder file, triangle fungsi untuk perhitungan
    $getData = getData($filename, "square");

    // fetch the last index of array
    if (!is_null($getData)) {
        $lastRow = count($getData) - 1;
    }

    //  cek id segitiga - untuk ditambahkan (validasi)
    $id = (is_null($getData)) ? 1 : $getData[$lastRow]['id_square'] + 1;

    // parameter sisi
    $cal_result = square($_POST["sisi"]);

    // data array (atribut) yang ingin disimpan ke tabel dan file txt
    $data = [
        'id_triangle' => null,
        'id_square' =>  $id,
        'id_circle' => null,
        'base_triangle' => null,
        'height_triangle' => null,
        'side_square' =>  $_POST["sisi"],
        'radius_circle' => null,
        'result' => $cal_result,
        'datetime' => date("Y-m-d h:i:sa")
    ];

    // save data on file
    $result = save($filename, "square", $data);

    // if the result process is successful
    // or equivalent to true or otherwise false
    // it will raise an alert and redirect user
    // to circle.php
    if ($result) {
      echo "<script type='text/javascript'>
              alert('Data berhasil disimpan...!');
              document.location.href = '../../view/persegi/v_persegi.php';
          </script>";
  } else {
      echo "<script type='text/javascript'>
              alert('Data GAGAL disimpan...!');
              document.location.href = '../../view/persegi/tambah_persegi.php';
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
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
          <a class="nav-link" href="#">Persegi</a>
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

<!-- tabel -->
<div class="card">
  <div class="card-header">
    <b>Persegi</b>
  </div>
  <div class="card-header">
    Rumus Luas Persegi<b>  Sisi x Sisi</b>
  </div>
  <form action="" method="POST">
  <div class="card">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sisi</label>
    <input type="text" name="sisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div>
  <input type="submit" class="btn btn-primary" name="submit" value="hitung">
  </div>
</form>
</div>
</div>

<!-- agar dapat mengakses bootstrap maka menggunakan .. -->
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>    
</body>
</html>