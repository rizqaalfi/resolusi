  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2><?php echo $kegiatan['title']; ?></h2>

      </div>
      <center><img src="<?php echo base_url('assets/upload/image/' . $kegiatan['image']); ?>" alt="Featured image 4" class="img-fluid" /></center>

      <span class="news-meta-date"><?php echo date('l, d/m/Y', strtotime($kegiatan['date_post'])); ?></span>
      <p><?php echo $kegiatan['content']; ?></p>
    </div>
  </section>