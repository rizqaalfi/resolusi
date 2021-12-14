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
                <th>Nama Responden</th>
                <th>Nama Pasien</th>
                <th>Hubungan Responden</th>
                <th>Tanggal Survey</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($surveyRi as $list) {
            ?>
                <tr class="odd gradeX">
                    <td width="25px"><?php echo $i; ?></td>
                    <td><?php echo $list['responden_name']; ?></td>
                    <td><?php echo $list['patient_name']; ?></td>
                    <td><?php echo $list['relation']; ?></td>
                    <td><?php echo $list['date']; ?></td>
                    <td class="text-center" width="100px">
                        <a href="<?php echo base_url('admin/keluhans/detail_surveyRi/' . $list['respon_id']); ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                        <a href="<?php echo base_url('admin/keluhans/delete_surveyRi/' . $list['respon_id']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php $i++;
            } ?>
        </tbody>
    </table>