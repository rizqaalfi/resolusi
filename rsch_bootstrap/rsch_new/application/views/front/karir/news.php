<section id="faq" class="faq section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Informasi Lowongan</h2>
    </div>

    <?php foreach ($karir as $x) { ?>

      <center>
        <a class="gallery-lightbox" href="<?php echo base_url('assets/upload/image/' . $x['image']); ?>">
          <img class="karir" src="<?php echo base_url('assets/upload/image/' . $x['image']); ?>" alt=""></a>
      </center>
      <br>
      <h4><?php echo $x['title'] ?></h4>
      <br>
      <ul class="faq-list">

        <!-- kualifikasi -->
        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#kual-<?php echo $x['karir_id'] ?>">Kualifikasi<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="kual-<?php echo $x['karir_id'] ?>" class="collapse" data-bs-parent=".faq-list">
            <p>
              <?php echo $x['content'] ?>
            </p>
          </div>
        </li>
        <!-- end kualifikasi -->

        <!-- dateline -->
        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#date-<?php echo $x['karir_id'] ?>">Dateline<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="date-<?php echo $x['karir_id'] ?>" class="collapse" data-bs-parent=".faq-list">
            <p>
              <?php echo $x['deadline'] ?>
            </p>
          </div>
        </li>
        <!-- end dateline -->

        <!-- link -->
        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#apply-<?php echo $x['karir_id'] ?>">Daftar<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="apply-<?php echo $x['karir_id'] ?>" class="collapse" data-bs-parent=".faq-list">
            <p> <a href="<?php echo $x['apply'] ?>">Klik Untuk Mendaftar</a></p>
          </div>
        </li>
        <!--  end link -->
      </ul>
    <?php

    } ?>

  </div>
</section>