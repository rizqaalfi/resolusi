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
                <th>Lokasi Rs</th>
                <th>Jam Operasional</th>
                <th>Emergency Call</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($infoRs as $list) {
            ?>
                <tr class="odd gradeX">
                    <td width="25px"><?php echo $i; ?></td>
                    <td><?php echo $list['infoRs']; ?></td>
                    <td><?php echo $list['jamRs']; ?></td>
                    <td><?php echo $list['call']; ?></td>
                    <td class="text-center" width="100px">
                        <a href="<?php echo base_url('admin/infoRs/edit/' . $list['info_id']); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
            <?php $i++;
            } ?>
        </tbody>
    </table>