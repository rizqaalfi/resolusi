<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Penunjang Medis</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Instalasi Laboratorium</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Instalasi Radiologi</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Instalasi Farmasi</h4>

                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Home Care</h4>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">


                        <p> <?php foreach ($penunjang as $v) {
                                if ($v['info_id'] == '9') {
                            ?>
                                    <?php echo $v['information']; ?>
                            <?php }
                            } ?></p>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <p> <?php foreach ($penunjang as $v) {
                                if ($v['info_id'] == '12') {
                            ?>
                                    <td><?php echo $v['information']; ?></td>
                            <?php }
                            } ?>
                        </p>
                    </div>
                    <div class="tab-pane" id="tab-3">

                        <p> <?php foreach ($penunjang as $v) {
                                if ($v['info_id'] == '13') {
                            ?>
                                    <td><?php echo $v['information']; ?></td>
                            <?php }
                            } ?>
                        </p>
                    </div>
                    <div class="tab-pane" id="tab-4">

                        <p><?php foreach ($penunjang as $v) {
                                if ($v['info_id'] == '14') {
                            ?>
                                    <td><?php echo $v['information']; ?></td>
                            <?php }
                            } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Departments Section -->