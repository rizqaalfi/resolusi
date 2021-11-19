<?php

function compressImage($source, $destination, $quality)
{
  // info img
  $imgInfo = getimagesize($source);
  $mime = $imgInfo['mime'];
  // membuat img baru
  switch ($mime) {
      // memilih type img
    case 'image/jpeg':
      $image = imagecreatefromjpeg($source);
      break;
    case 'image/png':
      $image = imagecreatefrompng($source);
      break;
    case 'image/gif':
      $image = imagecreatefromgif($source);
      break;
    default:
      $image = imagecreatefromjpeg($source);
  }

  //menyimpan img dengan ukuran baru
  imagejpeg($image, $destination, $quality);

  // return image
  return $destination;
}

// path folder upload yg telah di buat
$uploadPath = "upload/";

// jika form upload file sudah di submit
$status = $statusMsg = '';
if (isset($_POST['submit'])) {
  $status = 'error';
  if (!empty($_FILES['image']['name'])) {
    // file info
    $fileName = basename($_FILES['image']['name']);
    $imageUploadPath = $uploadPath . $fileName;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

    // Type format yg boleh
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
      // image temp source
      $imageTemp = $_FILES['image']['tmp_name'];

      // $size = filesize($imageTemp); - mendapatkan ukuran file dalam bits

      // ukuran kompresi 75( bisa di ganti )
      // berarti menurunkan kualitas sebesar 75% dari gambar aslinya.
      // nilai quality antara 0-100 ( 0 - worst quality, 100- best quality)

      $compressedImage = compressImage($imageTemp, $imageUploadPath, 75);

      if ($compressedImage) {
        $status = 'success';
        $statusMsg = "gambar sukses dikompress";
      } else {
        $statusMsg = "gambar gagal di kompress";
      }
    } else {
      $statusMsg = 'type tidak sesuai';
    }
  } else {
    $statusMsg = 'pilih file untuk di upload';
  }
}


echo $statusMsg;
