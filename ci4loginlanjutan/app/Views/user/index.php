<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">My Profile</h1>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('/template/img/' . user()->user_image); ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <ul class="list-group list-group-flush">
        <?php if (user()->fullname) : ?>
          <li class="list-group-item"><?= user()->fullname; ?></li>
        <?php endif; ?>
        <li class="list-group-item"><?= user()->username; ?></li>
        <li class="list-group-item"><?= user()->email; ?></li>
      </ul>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>