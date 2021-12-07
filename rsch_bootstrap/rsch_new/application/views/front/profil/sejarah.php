<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Sejarah</h2>

        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="<?php echo base_url('assets/upload/image/sejarah.jpg"') ?> class=" img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                <p>
                    <?php foreach ($sejarah as $x) { ?>
                        <?php echo $x['deskripsi']; ?>
                    <?php  } ?></p>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->