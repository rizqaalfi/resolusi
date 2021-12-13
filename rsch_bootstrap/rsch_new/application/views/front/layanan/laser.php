<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Laser dan Estetika</h2>

    </div>
    <?php foreach ($laser as $v) {
      if ($v['position'] == 'laser') {
    ?>
        <td><?php echo $v['information']; ?></td>

    <?php }
    } ?>

  </div>
</section><!-- End About Us Section -->