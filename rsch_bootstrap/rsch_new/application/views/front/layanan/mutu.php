    <div id="k-body">
        <!-- content wrapper -->

        <div class="jumbotron" style="background-color:#003399">
            <center>
                <font color="white" size="8">Mutu & Kinerja</font>
            </center>
        </div>

        <div class="container">
            <!-- container -->
            <tbody>
                <?php foreach ($mutu as $v) {
                    if ($v['position'] == 'mutu') {
                ?>
                        <td><?php echo $v['information']; ?></td>

                <?php }
                } ?>
            </tbody>

        </div><!-- container end -->

    </div><!-- content wrapper end -->