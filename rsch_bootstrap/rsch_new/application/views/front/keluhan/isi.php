   <!-- ======= Appointment Section ======= -->
   <section id="appointment" class="appointment ">
     <div class="container " data-aos="fade-up">

       <div class="section-title">
         <h2> Saran dan Keluhan</h2>
       </div>
       <?php
        // Session 
        if ($this->session->flashdata('sukses')) {
          echo '<div class="alert alert-success">';
          echo $this->session->flashdata('sukses');
          echo '</div>';
        }
        // Error
        echo validation_errors('<div class="alert alert-success">', '</div>');
        ?>

       <div class="container border  p-5 rounded-top shadow p-4 mb-4 bg-white">
         <form action="<?php echo base_url('keluhan'); ?>" id="keluhanform" method="post" role="form" data-aos="fade-up" data-aos-delay="100">
           <h5>Silahkan Kirim Keluhan</h5>
           <div class="row">
             <div class="mb-3 col">
               <input type="text" name="name" class="form-control" id="keluhanName" placeholder="Nama Anda" required>
             </div>
             <div class="mb-3 col">
               <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
             </div>

           </div>
           <div class="row">
             <div class="col mb-3">
               <textarea class="form-control" name="messages" rows="5" placeholder="Tulis Keluhan Anda di Sini" required></textarea>
             </div>
           </div>
           <input type="submit" id="submit" class="btn btn-primary" name="submit" value="Kirim">
         </form>
       </div>
       <br>
       <br>

       <!-- comment -->

       <div class="container border  p-5 shadow-none p-4 mb-4 bg-white">
         <h2>Komentar</h2><br>
         <?php foreach ($keluhan as $v) {
            if ($v['status'] == 'publish') {
          ?>

             <div class="media">

               <div class="media-body">
                 <h6 class="mt-0"><?php echo $v['name'] ?></h6>
                 <small><i><?php echo $v['date'] ?></i></small>
                 <p><?php echo $v['messages']
                    ?>
                 </p>

                 <div class="media mt-3 ml-4">

                   <div class="media-body border-start border-5 border-primary shadow-sm bg-light p-3 mb-2 ml-4">
                     <i>
                       <h6 class="mt-0 text-grey">Admin Reply</h6>
                     </i>

                     <p><?php echo $v['reply'] ?></p>
                   </div>
                 </div>
               </div>
             </div>
             <hr>

         <?php }
          } ?>
       </div>

       <!--  end comment -->


     </div>
   </section><!-- End Appointment Section -->