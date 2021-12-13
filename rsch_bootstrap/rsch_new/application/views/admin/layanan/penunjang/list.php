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


    <table class="table table-stried table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>#</th>
                <th>information Penunjang Medis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($penunjang as $list) {
                if ($list['position'] == 'penunjang') {
            ?>
                    <tr class="odd gradeX">
                        <td width="25px"><?php echo $i; ?></td>
                        <td><?php echo $list['information']; ?></td>
                        <td class="text-center" width="100px">
                            <a href="<?php echo base_url('admin/layanan/editPenunjang/' . $list['info_id']); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        </td>
                    </tr>
            <?php $i++;
                }
            } ?>
        </tbody>
    </table>