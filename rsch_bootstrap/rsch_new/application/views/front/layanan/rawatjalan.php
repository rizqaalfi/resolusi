<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Rawat Jalan</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Informasi Umum</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Dokter Kami</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Jadwal Dokter</h4>

                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-9">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <p>
                            <?php foreach ($info as $v) {
                                if ($v['position'] == 'infoRj') {
                            ?>
                                    <td><?php echo $v['information']; ?></td>

                            <?php }
                            } ?>
                        </p>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <!-- ======= Doctors Section ======= -->
                        <section id="doctors" class="doctors">
                            <div class="container" data-aos="fade-up">
                                <div class="row">
                                    <?php foreach ($galleries as $x) { ?>

                                        <div class="col-lg-4 col-md-4 col-sm-6 d-flex align-items-stretch">
                                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                                <div class="member-img">
                                                    <img src="<?php echo base_url('assets/upload/image/' . $x['image']); ?>" class="" alt="image not found">

                                                </div>

                                            </div>
                                        </div>
                                    <?php } ?>




                                </div>

                            </div>
                        </section><!-- End Doctors Section -->

                    </div>
                    <div class="tab-pane" id="tab-3">
                        <!-- jadwal dokter -->
                        <div id="dokter" class="">
                            <div id="jadwal" class="">
                                <table class="table table-borderless ">
                                    <div class="container">
                                        <!-- container -->


                                        <div class="table-responsive">
                                            <table class="table table-hover" id="myTable">

                                                <thead>
                                                    <tr>
                                                        <th scope="col" rowspan="2" class="text-center">
                                                            <h5>POLI</h5>
                                                        </th>
                                                        <th scope="col" rowspan="2" class="text-center">
                                                            <h5>NAMA DOKTER</h5>
                                                        </th>
                                                        <th scope="col" colspan="2" class="text-center">
                                                            <h5>JADWAL PRAKTEK</h5>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" class="text-center">Hari</th>
                                                        <th scope="col" class="text-center">Jam</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $r = 1;
                                                    foreach ($jadwal as $key) {
                                                    ?>
                                                        <tr>
                                                            <?php
                                                            $key2 = $this->db->query("select * from jadwal where poli_id='$key[poli_id]'");
                                                            $tot_key2 = $key2->num_rows();
                                                            $key3 = $key2->result_array();
                                                            ?>
                                                            <?php if ($r === 1 || $tot_key2 === 1) { ?>
                                                                <!-- add baris -->
                                                                <td style="font-weight: bold;" rowspan="<?php echo $tot_key2; ?>"><?php echo $key['nama_poli']; ?></td>
                                                                <?php foreach ($key3 as $key3) { ?>
                                                                    <td> <?php echo substr(strip_tags($key3['nama_dokter']), 0, 50) ?></td>
                                                                    <td><?php echo $key3['hari']; ?></td>
                                                                    <td><?php echo $key3['jam']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                <?php $r = $key['poli_id'];
                                                            } elseif ($r === $key['poli_id']) {
                                                                continue;
                                                            } else {
                                                                $r = 1;
                                                            } ?>
                                            <?php

                                                    } ?>

                                                </tbody>
                                            </table>
                                        </div>
                                        <br><br><br>

                                        <div>

                                            <?php
                                            foreach ($date as $list) {
                                            } ?>
                                            <p align="left">Tanggal Update : <?php echo $list['updated']; ?> </p>


                                            <div>



                                            </div><!-- row end -->

                                        </div><!-- container end -->



                                    </div><!-- content wrapper end -->
                                </table>

                            </div><!-- row end -->
                        </div>
                        <!-- jadwal dokter -->
                    </div>

                </div>
            </div>
        </div>

    </div>
</section><!-- End Departments Section -->