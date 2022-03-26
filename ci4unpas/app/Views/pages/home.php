<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">

      <h1>Home Pages</h1>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor voluptatum cupiditate vitae, inventore quaerat nisi nulla iusto mollitia unde alias atque dolores voluptas numquam optio, ipsam tempore vero! Culpa, dolore?</p>

      <?php //echo dd($angka); 
      ?>
      <!-- Ini merupakan pengganti var_dump() -->
      <!-- d() atau dd() = var_dump + die artinya tidak menjalankan kode setelahnya-->

    </div>
  </div>
</div>
<?= $this->endSection(); ?>