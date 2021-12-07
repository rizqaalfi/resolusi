<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <!-- container -->
        <div class="section-title">
            <h2>SUSUNAN PEJABAT STRUKTURAL DI LINGKUNGAN RUMAH SAKIT CITRA HUSADA JEMBER </h2>

        </div>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th scope="col" class="text-center" colspan="2">
                    </th>
                </tr>
            </tbody>
            <br><br>
            <tbody>

                <?php
                $r = 1;
                foreach ($pejabat as $v) { ?>
                    <tr class="odd gradeX">
                        <td><?php echo $r ?></td>
                        <td><?php echo $v['jabatan']; ?></td>
                        <td><?php echo $v['nama_pejabat']; ?></td>

                    </tr>

                <?php
                    $r++;
                } ?>


            </tbody>
        </table>


    </div>
</section>