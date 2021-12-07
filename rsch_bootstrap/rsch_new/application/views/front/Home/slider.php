 <!-- ======= Hero Section ======= -->
 <!-- End Hero -->

 <div id="demo" class="carousel slide" data-ride="carousel">

   <!-- The slideshow -->
   <div class="carousel-inner">

     <?php
      $i = 0;
      foreach ($galleries as $gallery) {
        if ($gallery['position'] == 'slider') { ?>
         <?php if ($i == 0) {
          ?>
           <div class="carousel-item active">
             <center><img src="<?php echo base_url('assets/upload/image/' . $gallery['image']); ?>" alt="Image slide 3" /></center>
           </div>
         <?php } else { ?>
           <div class="carousel-item">
             <center><img src="<?php echo base_url('assets/upload/image/' . $gallery['image']); ?>" alt="Image slide 3" /></center>
           </div>
         <?php
          } ?>
       <?php     } ?>

     <?php $i++;
      }
      ?>
   </div>

   <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#demo" role="button" data-bs-slide="prev">
     <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
   </a>

   <a class="carousel-control-next" href="#demo" role="button" data-bs-slide="next">
     <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>

   </a>

 </div>