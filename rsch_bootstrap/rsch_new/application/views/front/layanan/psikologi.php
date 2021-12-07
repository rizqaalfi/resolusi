   <section id="about" class="about">
       <div class="container" data-aos="fade-up">

           <div class="section-title">
               <h2>Pemeriksaan Psikologi</h2>

           </div>

           <?php foreach ($psikologi as $v) {
                if ($v['position'] == 'psikologi') {
            ?>

                   <?php echo $v['information']; ?>




           <?php }
            } ?>

       </div>
   </section><!-- End About Us Section -->