<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1 class="mt-2">Daftar Orang</h1>

      <form action="" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Keyword" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
          <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">


      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (6 * ($currentPage - 1)); ?>
          <?php foreach ($orang as $o) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $o['nama']; ?></td>
              <td><?= $o['alamat']; ?></td>
              <td><a href="" class="btn btn-success">Detail</a></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>

      <!-- sesuai dengan orang dan yng di template -->
      <?= $pager->links('orang', 'orang_pagination'); ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>