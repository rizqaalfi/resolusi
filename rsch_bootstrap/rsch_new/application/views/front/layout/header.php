<?php
$site = $this->mConfig->list_config();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo base_url('assets/upload/image/' . $site['icon']) ?>" rel="shortcut icon">
  <title><?php echo $title; ?></title>

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png') ?> " rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png') ?> " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?> " rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css') ?> " rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/aos/aos.css') ?> " rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?> " rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?> " rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css') ?> " rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css') ?> " rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css') ?> " rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets/css/style.css') ?> " rel="stylesheet">
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <div style="margin-top:120px">