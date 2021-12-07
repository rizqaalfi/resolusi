   <!-- ======= Gallery Section ======= -->
   <section id="gallery" class="gallery">
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Dokter Kami</h2>

       </div>

       <div class="gallery-slider swiper">
         <div class="swiper-wrapper align-items-center">

           <?php foreach ($galleries as $gallery) {
              if ($gallery['position'] == 'dokter') { ?>
               <div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo base_url('assets/upload/image/' . $gallery['image']); ?>"><img src="<?php echo base_url('assets/upload/image/' . $gallery['image']); ?>" class="img-fluid" alt=""></a></div>

           <?php }
            } ?>
         </div>
         <div class="swiper-pagination"></div>
       </div>

     </div>
   </section><!-- End Gallery Section -->