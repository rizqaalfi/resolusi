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

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($sejarah as $list) { ?>
                <tr class="odd gradeX">
                    <td><?php echo $list['deskripsi']; ?></td>
                    <td class="text-center" width="100px">
                        <a href="<?php echo base_url('admin/profil/edit_sejarah/' . $list['sejarah_id']); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
            <?php 
            } ?>
        </tbody>
    </table> 