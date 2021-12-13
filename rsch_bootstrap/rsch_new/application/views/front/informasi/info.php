<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Informasi Kesehatan</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Artikel Kesehatan</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Rekanan</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Kegiatan</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Fasilitas Umum</h4>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <!-- Artikel -->
                        <?php foreach ($artikels as $list) { ?>


                            <!-- artikel baru -->
                            <div class="container mt-3">
                                <div class="media border p-3">
                                    <a title="<?php echo $list['title']; ?>"><img src="<?php echo base_url('assets/upload/image/' . $list['image']); ?>" alt="Featured image 4" class="mr-3 mt-3 " style="width:200px;" />
                                    </a>

                                    <div class="media-body">

                                        <h1> <a href="<?php echo base_url('informasi/detil_artikel/' . $list['slug_artikel']); ?>" title="<?php echo $list['title']; ?>"><?php echo $list['title']; ?></a></h1>
                                        <small>
                                            <span class="news-meta-date"><?php echo date('l, d/m/Y', strtotime($list['date_post'])); ?></span></small>
                                        <article>
                                            <?php echo $list['content']  ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!--  end artikel baru -->



                        <?php } ?>

                        <!-- end Artikel -->
                    </div>
                    <div class="tab-pane rekanan" id="tab-2">
                        <!-- rekanan -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#as">Asusransi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#nonas">Nonasuransi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#rs">Rumah sakit & Klinik</a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div id="as" class="tab-pane active"><br>
                                <?php foreach ($rekanan as $x) { ?>
                                    <img src="<?php echo base_url('assets/upload/image/rekanan/' . $x['image']); ?>" alt="abda" class=" rounded rekanan-pic">
                                <?php } ?>
                            </div>
                            <div id="nonas" class="tab-pane fade"><br>
                                <?php foreach ($rekanan2 as $x) { ?>
                                    <img src="<?php echo base_url('assets/upload/image/rekanan/' . $x['image']); ?>" alt="abda" class=" rounded rekanan-pic">
                                <?php } ?>
                            </div>
                            <div id="rs" class="tab-pane fade"><br>
                                <?php foreach ($rekanan3 as $x) { ?>
                                    <img src="<?php echo base_url('assets/upload/image/rekanan/' . $x['image']); ?>" alt="abda" class="  rounded rekanan-pic">
                                <?php } ?>
                            </div>
                        </div>
                        <!-- end rekanan -->
                    </div>
                    <div class="tab-pane" id="tab-3">

                        <?php foreach ($kegiatans as $list) { ?>

                            <!-- kegiatan baru -->
                            <div class="container mt-3">
                                <div class="media border p-3">
                                    <a title="<?php echo $list['title']; ?>"><img src="<?php echo base_url('assets/upload/image/' . $list['image']); ?>" alt="Featured image 4" class="mr-3 mt-3 " style="width:200px;" />
                                    </a>

                                    <div class="media-body">

                                        <h1> <a href="<?php echo base_url('informasi/detil_kegiatan/' . $list['slug_kegiatan']); ?>" title="<?php echo $list['title']; ?>"><?php echo $list['title']; ?></a></h1>
                                        <small>
                                            <span class="news-meta-date"><?php echo date('l, d/m/Y', strtotime($list['date_post'])); ?></span></small>
                                        <article>
                                            <?php echo $list['content']  ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end kegiatan baru -->



                        <?php } ?>

                    </div>
                    <div class="tab-pane" id="tab-4">
                        <?php foreach ($fasilitas as $list) { ?>

                            <!-- fsilitas baru -->
                            <div class="container mt-3">
                                <div class="media border p-3">

                                    <a><img src="<?php echo base_url('assets/upload/image/' . $list['image']); ?>" alt="Featured image 4" class=" mr-3 mt-3 " style="width: 200px;" />
                                    </a>

                                    <div class="media-body">

                                        <h2> <?php echo $list['judul']; ?></h2>
                                        <small><i><?php echo $list['date'] ?></i></small>
                                        <article>
                                            <?php echo $list['deskripsi']  ?>
                                        </article>


                                    </div>
                                </div>
                            </div>
                            <!--end  fsilitas baru -->


                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Departments Section -->



<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo base_url('assets/readmore-master/readmore.js'); ?> "></script>


<script>
    $('article').readmore({
        collapsedHeight: 120
    });
</script>