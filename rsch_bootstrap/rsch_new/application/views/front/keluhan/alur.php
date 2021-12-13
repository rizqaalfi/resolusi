<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Prosedur Pelayanan</h2>

    </div>
    <?php
    foreach ($galleries as $v) {
      if ($v['position'] == 'alur_pengaduan') { ?>
        <div data-aos="fade">
          <center>
            <img src="<?php echo base_url('assets/upload/image/' . $v['image']); ?>" class="img-fluid" alt="promosi">
          </center>
        </div>
    <?php
      }
    } ?>
  </div>
</section><!-- End About Us Section -->