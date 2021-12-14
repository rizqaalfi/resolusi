   <!-- ======= Top Bar ======= -->
   <div id="topbar" class="d-flex align-items-center fixed-top">
     <div class="container d-flex align-items-center justify-content-center justify-content-md-between">

       <div class="d-flex align-items-center">
         <i class="bi bi-phone"></i> <strong>Emergency call:</strong> <?php foreach ($infoRs as $v) { ?>
           <td><?php echo $v['call']; ?></td>
         <?php } ?>
       </div>
     </div>
   </div>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
     <div class="container d-flex align-items-center">

       <a href="<?php echo base_url(); ?>" class="logo me-auto"><img src="<?php echo base_url('assets/upload/image/thumbs/' . $site['logo']); ?>" alt="Site Logo" class="img-responsive" /></a>
       <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

       <nav id="navbar" class="navbar order-last order-lg-0">
         <ul>

           <li><a class="nav-link scrollto " href="<?php echo base_url(); ?>">Beranda</a></li>
           <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a href="<?php echo base_url('profil/tentang'); ?>">Tentang RSCH</a></li>
               <li><a href="<?php echo base_url('profil/sambutan'); ?>">Sambutan DIrektur</a></li>
               <li><a href="<?php echo base_url('profil/sejarah'); ?>">Sejarah</a></li>
               <li><a href="<?php echo base_url('profil/pejabat'); ?>">Daftar Pejabat</a></li>
               <li><a href="<?php echo base_url('profil/struktur'); ?>">Struktur Organisasi</a></li>
             </ul>
           </li>
           <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a href="<?php echo base_url('layanan/igd'); ?>">Instalasi Gawat Darurat</a></li>
               <li><a href="<?php echo base_url('layanan/rawatjalan'); ?>">Rawat Jalan</a></li>
               <li><a href="<?php echo base_url('layanan/rawatinap'); ?>">Rawat Inap</a></li>
               <li><a href="<?php echo base_url('layanan/ok'); ?>">Kamar Operasi</a></li>
               <li><a href="<?php echo base_url('layanan/icu'); ?>">Intensive Care Unit</a></li>
               <li><a href="<?php echo base_url('layanan/penunjang'); ?>">Penunjang Medis</a></li>
               <li><a href="<?php echo base_url('layanan/medical'); ?>">Medical Checkup</a></li>
               <li><a href="<?php echo base_url('layanan/psikologi'); ?>">Pemeriksaan Psikologis</a></li>
               <li><a href="<?php echo base_url('layanan/mutu'); ?>">Mutu & Kinerja</a></li>
               <li><a href="<?php echo base_url('layanan/laser'); ?>">Laser dan Estetika</a></li>
             </ul>
           </li>
           <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a href="<?php echo base_url('informasi/artikel'); ?>">Informasi Umum</a></li>
               <li><a href="<?php echo base_url('informasi/layanan'); ?>">Informasi Layanan</a></li>
             </ul>
           </li>


           <li><a class="nav-link scrollto" href="<?php echo base_url('karir'); ?>">Karir</a></li>
           <li><a class="nav-link scrollto" href="<?php echo base_url('hubungi'); ?>" title="">Hubungi Kami</a></li>
           <li class="dropdown"><a href="#"><span>Saran & Aduan</span> <i class="bi bi-chevron-down"></i></a>
             <ul>
               <li><a href="<?php echo base_url('keluhan/alur'); ?>">Alur Pengaduan</a></li>
               <li><a href="<?php echo base_url('keluhan/surveyRj'); ?>">Survey Kepuasan Pasien Rawat Jalan</a></li>
               <li><a href="<?php echo base_url('keluhan/surveyRi'); ?>">Survey Kepuasan Pasien Rawat Inap</a></li>
               <li><a href="<?php echo base_url('keluhan/index'); ?>">Tulis Saran dan Aduan</a></li>
               <li><a href="<?php echo base_url('keluhan/hasil'); ?>">Hasil Penanganan Pengaduan</a></li>
             </ul>
           </li>
           <li><a class="nav-link scrollto" href="<?php echo base_url('promosi'); ?>">Promosi</a></li>

         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
       </nav><!-- .navbar -->

       <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Beri</span> Penilaian</a>

     </div>
   </header><!-- End Header -->