<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Struktur Organisasi</h2>

    </div>
    <?php foreach ($struktur as $list) {

    ?>
      <br>
      <img src="<?php echo base_url('assets/upload/image/' . $list['image']); ?>" class="img-fluid" alt="Responsive image">
      <br>

    <?php
    } ?>
  </div>
</section><!-- End About Us Section -->