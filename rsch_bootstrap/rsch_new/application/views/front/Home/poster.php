<div class="container">

  <?php foreach ($galleries as $list) {
    if ($list['position'] == 'poster') {
  ?>
      <br>
      <img src="<?php echo base_url('assets/upload/image/' . $list['image']); ?>" class="img-fluid" alt="Responsive image">
      <br>

  <?php }
  } ?>
</div>