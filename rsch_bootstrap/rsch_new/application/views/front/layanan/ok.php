<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Instalasi Kamar Operasi</h2>

        </div>
        <?php foreach ($operasi as $v) {
            if ($v['position'] == 'ok') {
        ?>
                <td><?php echo $v['information']; ?></td>

        <?php }
        } ?>

    </div>
</section><!-- End About Us Section -->