<!-- ======= Frequently Asked Questioins Section ======= -->
<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Intansi Gawat Darurat</h2>
    </div>

    <?php foreach ($rawatinap as $x) {


      if ($x['nama'] == 'informasi umum') { ?>

        <p><?php echo $x['informasi'] ?></p>

      <?php  } else { ?>

        <ul class="faq-list">
          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#tab-<?php echo $x['info_id'] ?>"><?php echo $x['nama'] ?><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="tab-<?php echo $x['info_id'] ?>" class="collapse" data-bs-parent=".faq-list">

              <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                  <?php foreach ($ruang as $y) {
                    if ($x['info_id'] == $y['info_id']) {

                  ?>


                      <a class="gallery-lightbox" href="<?php echo base_url('assets/upload/image/thumbs/ruang/' . $y['nama_gambar']); ?>">
                        <img class="ruang" src="<?php echo base_url('assets/upload/image/thumbs/ruang/' . $y['nama_gambar']); ?>" class="img-fluid" alt=""></a>

                  <?php  }
                  } ?>
                </div>
                <div class="swiper-pagination"></div>
              </div>
              <p>
                <?php echo $x['informasi'] ?>
              </p>
            </div>
          </li>
        </ul>
    <?php
      }
    } ?>

  </div>
</section><!-- End Frequently Asked Questioins Section -->