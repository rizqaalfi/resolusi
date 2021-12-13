<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Promosi</h2>

    </div>
    <?php
    foreach ($promosi as $v) { ?>
      <div data-aos="fade">
        <center>
          <img src="<?php echo base_url('assets/upload/image/' . $v['image']); ?>" class="img-fluid" alt="promosi">
        </center>
        <p><?php echo $v['information']; ?></p>

      </div>
    <?php
    } ?>
  </div>
</section><!-- End About Us Section -->