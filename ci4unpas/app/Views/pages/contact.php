<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Contact Page</h1>
      <?php foreach ($alamat as $a) : ?>

        <ul>
          <li>Jalan : <?= $a['jalan']; ?></li>
          <li>Kota : <?= $a['kota']; ?></li>
          <li>Provinsi : <?= $a['provinsi']; ?></li>
          <li>Negara : <?= $a['negara']; ?></li>
        </ul>


      <?php endforeach; ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>