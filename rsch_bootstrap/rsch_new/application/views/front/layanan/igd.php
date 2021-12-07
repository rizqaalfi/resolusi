<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Instalasi Gawat Darurat</h2>

        </div>
        <?php foreach ($igd as $v) {
            if ($v['position'] == 'igd') {
        ?>
                <td><?php echo $v['information']; ?></td>

        <?php }
        } ?>

    </div>
</section><!-- End About Us Section -->