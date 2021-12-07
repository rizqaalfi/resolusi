<div id="k-body">
  <!-- content wrapper -->
  <div class="jumbotron" style="background-color:#003399">
    <center>
      <font color="white" size="8">Laser dan Estetika</font>
    </center>
  </div>

  <div class="container">
    <!-- container -->
    <div class="col-padded" align="justify">
      <!-- inner custom column -->
      <font size="4">
        <div class="wpb_text_column wpb_content_element ">
          <div class="wpb_wrapper">

            <tbody>
              <?php foreach ($laser as $v) {
                if ($v['position'] == 'laser') {
              ?>
                  <td><?php echo $v['information']; ?></td>

              <?php }
              } ?>
            </tbody>
          </div>
        </div>
      </font>
    </div>
  </div>
</div>