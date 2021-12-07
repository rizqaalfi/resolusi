<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Medical Check Up</h2>

        </div>
        <?php foreach ($medical as $v) {
            if ($v['position'] == 'medical') {
        ?>
                <td><?php echo $v['information']; ?></td>

        <?php }
        } ?>

    </div>
</section><!-- End About Us Section -->