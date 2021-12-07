    <div id="k-body">
        <!-- content wrapper -->

        <div class="jumbotron" style="background-color:#003399">
            <center>
                <font color="white" size="8">Daftar Dokter RS Citra Husada Jember</font>
            </center>
        </div>


        <div class="container">
            <!-- container -->

            <div class="col-padded" align="justify">
                <!-- inner custom column -->

      
                    <center>
                        <h1 class="display-4">Dokter Spesialist</h1>
                    </center>

                    <div class="row gutter k-equal-height">
                        <!-- row -->
                        <?php foreach ($galleries as $gallery){ ?>
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    	<a href="<?php echo base_url('assets/upload/image/'.$gallery['image']);?>" title="<?php echo $gallery['gallery_name'];?>" data-fancybox-group="gallery-bssb" class="fancybox"><img src="<?php echo base_url('assets/upload/image/'.$gallery['image']);?>" alt="<?php echo $gallery['gallery_name'];?>" class="img-thumbnail" width="200px" height="200px" /></a>
                                </div>
                            <?php } ?>
                    </div><!-- row end -->
            </div>

            <center>
                <button onclick="history.go(-1);">Kembali </button>
            </center>

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

        </div><!-- row end -->

    </div><!-- container end -->

    </div><!-- content wrapper end -->
