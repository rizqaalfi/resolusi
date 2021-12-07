   <section id="about" class="about">
       <div class="container" data-aos="fade-up">

           <div class="section-title">
               <h2>Intensive Care Unit</h2>

           </div>
           <?php foreach ($icu as $v) {
                if ($v['position'] == 'icu') {
            ?>
                   <td><?php echo $v['information']; ?></td>

           <?php }
            } ?>

       </div>
   </section><!-- End About Us Section -->