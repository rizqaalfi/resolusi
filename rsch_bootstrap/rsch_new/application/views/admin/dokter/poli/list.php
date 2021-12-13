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
        <a href="<?php echo base_url('admin/poli/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Create New Poli</a>
    </p>

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Nama Poli</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($poli as $list) { ?>
                <tr class="odd gradeX">
                    <td width="25px"><?php echo $i; ?></td>
                    <td><?php echo $list['nama_poli']; ?></td>
                    <td class="text-center" width="150px">
                        <a href="<?php echo base_url('admin/poli/edit/' . $list['poli_id']); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url('admin/poli/delete_poli/' . $list['poli_id']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php $i++;
            } ?>
        </tbody>
    </table>