<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Sambutan Direktur</h2>

    </div>
    <?php foreach ($sambutan as $x) { ?>
      <div class="row">

        <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
          <center><img class="img-fluid" src="<?php echo base_url('assets/upload/image/' . $x['image']); ?>" style="margin-bottom:50px;height: 300px"></center>
          <p>
            <?php echo $x['sambutan']; ?>
          </p>
        </div>
      </div>
    <?php } ?>

  </div>
</section><!-- End About Us Section -->