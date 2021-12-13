<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li><a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-wrench"></i> Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/dashboard/config') ?>">General Settings</a></li>
                    <li><a href="<?php echo base_url('admin/dashboard/logo') ?>">Logo</a></li>
                    <li><a href="<?php echo base_url('admin/dashboard/icon') ?>">Icon</a></li>
                    <li><a href="<?php echo base_url('admin/dashboard/locations') ?>">Locations</a></li>
                    <li><a href="<?php echo base_url('admin/dashboard/social') ?>">Social Campaign</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-users"></i> Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/users/admin') ?>">List Admin</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-hospital-o"></i> Profile<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="#">Tentang RSCH<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="<?php echo base_url('admin/profil/tentang_vismis') ?>">Visi-Misi</a></li>
                            <li><a href="<?php echo base_url('admin/profil/tentang_nilai') ?>">Nilai-Nilai</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('admin/profil/sambutan') ?>">Sambutan Direktur</a></li>
                    <li><a href="<?php echo base_url('admin/profil/sejarah') ?>">Sejarah</a></li>
                    <li><a href="<?php echo base_url('admin/profil/pejabat') ?>">Daftar Pejabat</a></li>
                    <li><a href="<?php echo base_url('admin/profil/struktur') ?>">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-user-md"></i> Service<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/layanan/igd') ?>">IGD</a></li>
                    <li><a href="#">Rawat Jalan<span class="fa arrow"></a>
                        <ul class="nav nav-third-level">
                            <li><a href="<?php echo base_url('admin/layanan/info') ?>">Informasi Umum</a>
                            <li><a href="<?php echo base_url('admin/layanan/jadwal') ?>">Jadwal</a>
                            <li><a href="<?php echo base_url('admin/layanan/poli') ?>">Poli</a>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('admin/rawatinap') ?>">Rawat Inap<span class="fa arrow"></a>
                        <ul class="nav nav-third-level">
                            <li><a href="<?php echo base_url('admin/layanan/info_ri') ?>">Informasi Umum</a>
                            <li><a href="<?php echo base_url('admin/layanan/ruang_ri') ?>">Ruang</a>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('admin/layanan/ok') ?>">Kamar Operasi</a></li>
                    <li><a href="<?php echo base_url('admin/layanan/icu') ?>">ICU</a></li>
                    <li><a href="<?php echo base_url('admin/layanan/penunjang') ?>">Penunjang Medis</a></li>
                    <li><a href="<?php echo base_url('admin/layanan/medical') ?>">Medical Checkup</a></li>
                    <li><a href="<?php echo base_url('admin/layanan/psikologi') ?>">Pemeriksaan Psikologis</a></li>
                    <li><a href="<?php echo base_url('admin/layanan/mutu') ?>">Mutu & Kinerja</a></li>
                    <li><a href="<?php echo base_url('admin/layanan/laser') ?>">Laser & Estetika</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-info-circle"></i> Information<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="">Informasi Umum<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="<?php echo base_url('admin/informasi/artikel') ?>">Artikel Kesehatan</a></li>
                            <li><a href="<?php echo base_url('admin/informasi/rekanan') ?>">Rekanan</a></li>
                            <li><a href="<?php echo base_url('admin/informasi/kegiatan') ?>">Kegiatan</a></li>
                            <li><a href="<?php echo base_url('admin/informasi/fasilitas') ?>">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li><a href="">Informasi Layanan<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li><a href="<?php echo base_url('admin/informasi/alur') ?>">Alur Pendaftaran</a></li>
                            <li><a href="<?php echo base_url('admin/informasi/hak') ?>">Hak dan kewajiban</a></li>
                            <li><a href="<?php echo base_url('admin/informasi/tatib') ?>">Tatib & Jam Kunjungan</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-paper-plane-o"></i> Career<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li><a href="<?php echo base_url('admin/karirs') ?>">List Career</a></li>
                    <li><a href="<?php echo base_url('admin/karirs/create') ?>">Create Career</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> Customer Complain<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/keluhans/inbox') ?>">Inbox</a></li>
                    <li><a href="<?php echo base_url('admin/keluhans/hasil') ?>">Hasil Penanganan Pengaduan</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-bullhorn"></i> Promotion<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/promosi/index') ?>">List</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-image"></i> Galleries<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/galleries') ?>">List Galleries</a></li>
                    <li><a href="<?php echo base_url('admin/galleries/create') ?>">Create Galleries</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-pencil"></i> Info Rs<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="<?php echo base_url('admin/infoRs/index') ?>">List</a></li>
                </ul>
            </li>

        </ul>
    </div>

</nav>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">


        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2><?php echo $title ?></h2>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">