<section id="departments" class="departments">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Informasi Layanan</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Alur Pendaftaran</h4>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Hak dan Kewajiban Pasien</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Tata Tertib dan Jam Kunjung</h4>

                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">

                        <?php foreach ($layanan as $x) { ?>
                            <div class="">
                                <h3>Alur Pendaftaran</h3>


                                <center><a class="gallery-lightbox" href="<?php echo base_url('assets/upload/image/' . $x['image']); ?>"><img src="<?php echo base_url('assets/upload/image/' . $x['image']); ?>" class="img-fluid" alt="alur daftar"></a></center>

                            </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <?php foreach ($layanan as $x) { ?>
                            <div class="">
                                <h3>Hak dan Kewajiaban Pasien</h3>


                                <p><?php echo $x['hak'] ?></p>

                            </div>
                        <?php } ?>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <?php foreach ($layanan as $x) { ?>
                            <div class="">
                                <h3>Tata Tertib</h3>


                                <p><?php echo $x['tatib'] ?></p>

                            </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>