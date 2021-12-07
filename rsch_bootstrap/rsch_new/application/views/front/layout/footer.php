  <!-- ======= Footer ======= -->


  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Panggilan Darurat</h3>
              <p>

                <strong>Phone:</strong> <?php foreach ($infoRs as $v) { ?>
                  <td><?php echo $v['call']; ?></td>
                <?php } ?><br>

              </p>
              <br>
              <h3>Media Sosial</h3>
              <div class="social-links mt-3">
                <a href="<?php echo $site['youtube']; ?>" class="youtube"><i class="bx bxl-youtube"></i></a>
                <a href="<?php echo $site['facebook']; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="<?php echo $site['instagram']; ?>" class="instagram"><i class="bx bxl-instagram"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h3>Lokasi Kami</h3>
            <p>
              <?php foreach ($infoRs as $v) { ?>
                <td><?php echo $v['infoRs']; ?></td>
              <?php } ?>
            </p>
            <iframe width="200" height="250" frameborder="0" style="border:0" src="<?php echo $site['google_maps']; ?>" allowfullscreen></iframe>
          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h3>Jam Operasional</h3>
            <p><?php foreach ($infoRs as $v) { ?>
                <td><?php echo $v['jamRs']; ?></td>
              <?php } ?>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Humas Marketing Citra Husada</span></strong>.
      </div>

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/aos/aos.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

  </body>

  </html>