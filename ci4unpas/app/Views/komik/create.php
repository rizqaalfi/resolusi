<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2 mb-2">Tambah data Komik</h1>
      <form action="/komik/save" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="row mb-3">
          <label for="judul" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
            <div id="validationServer03Feedback" class="invalid-feedback">
              <?= $validation->getError('judul'); ?>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
          </div>
        </div>
        <div class="row mb-3">
          <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
          <div class="col-sm-3">
            <img src="/img/default.jpg" class="img-thumbnail img-preview">
          </div>
          <div class="col-sm-7">
            <div class="mb-3">
              <input class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" type="file" id="sampul" name="sampul" onchange="previewImg()">
              <div id="validationServer03Feedback" class="invalid-feedback">
                <?= $validation->getError('sampul'); ?>
              </div>

            </div>
          </div>
        </div>


        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>