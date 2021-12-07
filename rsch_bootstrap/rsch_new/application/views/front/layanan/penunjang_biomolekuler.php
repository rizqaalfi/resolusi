<div id="k-body">
    <!-- content wrapper -->
    <div class="jumbotron" style="background-color:#003399">
        <center>
            <font color="white" size="8">PENUNJANG MEDIS</font>
        </center>
    </div>
    <br>
    <div class="container">
        <!-- container -->


        <div class="tab-content">
            <div class="col-lg-3">
                <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                    <ul class="nav nav-list flex-column mb-4 show-bg-active">
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('layanan/lab') ?>">Instalasi Laboratorium</a></li>
                        <ul><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('layanan/patologi') ?>">• Patologi Klinik</a></ul>
                        <ul><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('layanan/biomolekuler') ?>">• Biomolekuler</a></ul>
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('layanan/radiologi') ?>">Instalasi Radiologi</a></li>
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('layanan/farmasi') ?>">Instalasi Farmasi</a></li>
                        <li><a data-toogle="tab" class="nav-link" data-hash data-hash-offset="110" href="<?php echo base_url('layanan/homecare') ?>">Home Care</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-9">
                <div id="biomolekuler">
                    <tbody>
                        <?php foreach ($penunjang as $v) {
                            if ($v['info_id'] == '11') {
                        ?>
                                <td><?php echo $v['information']; ?></td>
                        <?php }
                        } ?>
                </div>
            </div>
        </div>

    </div><!-- container end -->
</div><!-- content wrapper end -->