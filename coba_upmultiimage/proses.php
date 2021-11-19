<?php
// $files = $_FILES;

// echo "<pre>";
// print_r($files);
// echo "<pre>";

$folderUpload = "./assets/uploads";

// periksa apakah folder tersedia
if (!is_dir($folderUpload)) {
  // jika tidak ada maka buat
  mkdir($folderUpload, 0777, $rekursif = true);
}

$files = $_FILES;
$jumlahFile = count($files['listGambar']['name']);

for ($i = 0; $i < $jumlahFile; $i++) {
  $namaFile = $files['listGambar']['name'][$i];
  $lokasiTmp = $files['listGambar']['tmp_name'][$i];

  echo "nama: $namaFile, tmp: {$lokasiTmp}<br>";
}
