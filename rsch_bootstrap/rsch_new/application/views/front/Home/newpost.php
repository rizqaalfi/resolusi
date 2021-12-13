   <!-- ======= Featured Services Section ======= -->
   <section id="featured-services" class="featured-services">
     <div class="container" data-aos="fade-up">

       <div class="row">
         <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
           <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
             <h4 class="title"><a href="">Artikel Terbaru</a></h4>

             <?php
              $c = 1;
              foreach ($artikels as $x) {
                if ($c == 1) { ?>

                 <img src="<?php echo base_url('assets/upload/image/' . $x['image']); ?>" style="height:90px" />
                 <br>
                 <h2 class="title"><a href=""><?php echo  $x['title'] ?></a></h2>
                 <p class="description"><?php echo  substr($x['content'], 0, 100) ?><a href="<?php echo base_url('informasi/artikel/') ?>">..detail selengkapnya</a></p>

             <?php $c++;
                }
              } ?>


           </div>
         </div>

         <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
           <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
             <h4 class="title"><a href="">Karir Terbaru</a></h4>
             <?php
              $c1 = 1;
              foreach ($karirs as $y) {
                if ($c1 == 1) { ?>

                 <img src="<?php echo base_url('assets/upload/image/' . $y['image']); ?>" style="height:90px" />
                 <br>
                 <h2 class="title"><a href=""><?php echo  $y['title'] ?></a></h2>
                 <p class="description"><?php echo  substr($y['content'], 0, 100) ?><a href="">..detail selengkapnya</a></p>

             <?php $c1++;
                }
              } ?>
           </div>
         </div>

         <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
           <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
             <h4 class="title"><a href="">Kegiatan Terbaru</a></h4>
             <?php
              $c2 = 1;
              foreach ($kegiatans as $z) {
                if ($c2 == 1) { ?>

                 <img src="<?php echo base_url('assets/upload/image/' . $z['image']); ?>" style="height:90px" />
                 <br>
                 <h2 class="title"><a href=""><?php echo  $z['title'] ?></a></h2>
                 <p class="description"><?php echo  substr($z['content'], 0, 100) ?><a href="">..detail selengkapnya</a></p>

             <?php $c2++;
                }
              } ?>
           </div>
         </div>
       </div>

     </div>
   </section><!-- End Featured Services Section -->