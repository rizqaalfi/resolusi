<div id="k-body">
    <!-- content wrapper -->

    <div class="jumbotron" style="background-color:#003399">
        <center>
            <font color="white" size="8">Informasi Umum</font>
        </center>
    </div>

    <div class="container">
        <!-- container -->

        <div class="tab-content">
            <div class="col-lg-3">
                <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                    <ul class="nav nav-list flex-column mb-4 show-bg-active">
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('informasi/artikel') ?>"><b>Artikel Kesehatan</b></a></li>
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('informasi/rekanan') ?>"><b>Rekanan</b></a></li>
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('informasi/kegiatan') ?>"><b>Kegiatan</b></a></li>
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('informasi/fasilitas') ?>"><b>Fasilitas Umum</b></a></li>
                    </ul>
                </aside>
            </div>
        </div>
        <h3>Fasilitas Umum</h3>
        <div class="col-lg-9">

            <div id="kegiatan">

                <div class="row">
                    <!-- row -->

                    <div class="row no-gutter">
                        <!-- row -->

                        <div class="col-padded">
                            <!-- inner custom column -->

                            <div class="row gutter">
                                <!-- row -->
                                <div class="k-article-summary col-lg-12 col-md-12">

                                    <?php foreach ($fasilitas as $list) { ?>


                                        <h5><?php echo $list['judul']; ?></h5>

                                        <img class="img-fluid" src="<?php echo base_url('assets/upload/image/' . $list['image']); ?>" style="margin-bottom:0px;height: 200px">
                                        <?php echo $list['deskripsi']; ?>

                                    <?php } ?>
                                </div>
                            </div><!-- row end -->

                            <div class="row gutter">
                                <!-- row -->

                                <div class="col-lg-12">

                                    <ul class="pagination pull-right">
                                        <!-- pagination -->
                                        <?php if (isset($pagin)) {
                                            echo $pagin;
                                        }  ?>
                                    </ul><!-- pagination end -->

                                </div>

                            </div><!-- row end -->

                        </div><!-- inner custom column end -->

                    </div><!-- row end -->

                </div>

            </div>

        </div><!-- container end -->

    </div><!-- content wrapper end -->