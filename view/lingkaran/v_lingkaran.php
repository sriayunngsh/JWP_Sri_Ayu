<?php
//memanggil file folder fungsi
require_once '../../fungsi/file.php';
require_once '../../fungsi/perhitungan.php';

//memanggil txt
$filename = '../../cetak/CetakAll.txt';
$result = getData($filename, "circle") ?? [];
$circle_total = calculateTotalOfEachshape($result, "circle");
?>
<!DOCTY
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
          <a class="nav-link" href="#">Lingkaran</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="view/persegi/v_persegi.php">Persegi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view/lingkaran/v_lingkaran.php">Lingkaran</a>
        </li> -->
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
    Lingkaran
  </div>
  <div class="card-body">
      <!-- btn tambah -->
  <a href="tambah_lingkaran.php" class="mb-2 btn btn-primary">Tambah Perhitungan</a>
  <table class="table table-success table-striped">
  <thead>
  <tr class='text-center'>
          <th>No</th>
          <th>Jari-jari</th>
          <th>Hasil</th>
          <th>Tanggal Rekam</th>
      </tr>
  </thead>
  <tbody>
  <?php
                        if (is_array($result) && $circle_total != 0) {

                            foreach ($result as $key => $values) {

                                if (!empty($values["id_circle"])) {

                                    echo "<tr class='text-center'>";

                                    foreach ($values as $keyData => $data) {
                                        if (!empty($data)) {
                                            if ($keyData === "datetime") {
                                                // change the date format to day/month/year hours:minute
                                                $date = date_create($data);
                                                echo "<td>" . date_format($date, "d/m/Y H:i") . "</td>";
                                            } else {
                                                if ($keyData === "result") {
                                                    echo "<td>" . $data . " cm2</td>";
                                                } else {
                                                    echo "<td>" . $data . "</td>";
                                                }
                                            }
                                        }
                                    }
                                    echo "</tr>";
                                }
                            }
                        } else {
                            echo "<td colspan='5' class='p-4 bg-light text-center text-danger fw-bold'>Data Tidak Ditemukan</td>";
                        }
                        ?>
  </tbody>
  </table>
  </div>
</div>

<!-- agar dapat mengakses bootstrap maka menggunakan .. -->
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>    
</body>
</html>