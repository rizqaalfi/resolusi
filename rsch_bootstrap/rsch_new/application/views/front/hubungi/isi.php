<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Lokasi Kami</h2>

        </div>
        <center><iframe class="maps" frameborder="0" style="border:0" src="<?php echo $site['google_maps']; ?>" allowfullscreen></iframe>
            <?php foreach ($infoRs as $v) { ?>
                <p><?php echo $v['infoRs']; ?></p>
                <p><?php echo $v['call']; ?> / 2 (Emergency Call)</p>
            <?php } ?>
        </center>
    </div>
</section><!-- End About Us Section -->