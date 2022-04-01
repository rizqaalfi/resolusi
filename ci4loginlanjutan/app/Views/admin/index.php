<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>


<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">User List</h1> -->


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User List</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>#</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($user as $us) : ?>
            <tr>

              <td><?= $i++; ?></td>
              <td><?= $us->username; ?></td>
              <td><?= $us->email; ?></td>
              <td><?= $us->name; ?></td>
              <td>
                <a href="<?= base_url('admin/' . $us->userid); ?>" class="btn btn-info">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>