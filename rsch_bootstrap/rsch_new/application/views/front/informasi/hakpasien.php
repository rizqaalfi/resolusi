<div id="k-body"><!-- content wrapper -->
    <div class="jumbotron" style="background-color:#003399">
        <center><font color="white" size="8">Informasi Layanan</font></center>
    </div>

    <div class="container"><!-- container -->
        <div class="tab-content">
            <div class="col-lg-3">
                <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                    <ul class="nav nav-list flex-column mb-4 show-bg-active">
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('informasi/layanan') ?>">Alur Pendaftaran</a></li>
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('informasi/layanan_hak') ?>">Hak dan Kewajiban Pasien</a></li>
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('informasi/tatatertib') ?>">Tata Tertib & Jam Kunjung</a></li>
                    </ul>
                </aside>
            </div>
        </div>

        <div class="col-padded" align="justify"><!-- inner custom column -->
        
        <center><h1 class="display-4">Hak dan Kewajiban Pasien</h1></center> <br>

        <div class="col-lg-9">
            <?php foreach ($hak as $x) { ?>
              <div id="" class="">
                 <?php echo $x['hak']; ?>

                        <div class="row gutter"><!-- row -->

                            <div class="col-lg-12">

                                <ul class="pagination pull-right"><!-- pagination -->
                                  <?php if(isset($pagin)) { echo $pagin; }  ?>
                                </ul><!-- pagination end -->

                            </div>

                        </div><!-- row end -->
              </div>
            <?php } ?>
          </div>

            
        </div>
                
                        
                
        </div><!-- row end -->
    
    </div><!-- container end -->

</div><!-- content wrapper end -->


