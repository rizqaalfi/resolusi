<?php
// Session 
if ($this->session->flashdata('sukses')) {
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
// Error
echo validation_errors('<div class="alert alert-success">', '</div>');
?>

<!--  Modals-->
<div class="panel-body">
  <p>
    <a href="<?php echo base_url('admin/layanan/createInfo_ri') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Create New</a>
  </p>


  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
      <tr>
        <th>#</th>
        <th>Informasi Umum</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($info as $list) { ?>
        <tr class="odd gradeX">
          <td width="25px"><?php echo $i; ?></td>
          <td><?php echo $list['informasi']; ?></td>
          <td><?php echo $list['nama']; ?></td>
          <td class="text-center" width="100px">
            <a href="<?php echo base_url('admin/layanan/editInfo_ri/' . $list['info_id']); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
            <?php if ($list['info_id'] > 1) { ?>
              <a href="<?php echo base_url('admin/layanan/delete_info_ri/' . $list['info_id']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
            <?php  } ?>
          </td>
        </tr>
      <?php $i++;
      } ?>
    </tbody>
  </table>