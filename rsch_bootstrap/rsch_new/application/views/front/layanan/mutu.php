<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Mutu & Kinerja</h2>

        </div>
        <?php foreach ($mutu as $v) {
            if ($v['position'] == 'mutu') {
        ?>
                <td><?php echo $v['information']; ?></td>

        <?php }
        } ?>

    </div>
</section><!-- End About Us Section -->