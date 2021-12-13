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
        <a href="<?php echo base_url('admin/jadwal/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Create New Jadwal</a>
    </p>

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>#</th>
                <th>Poli</th>
                <th>Nama Dokter</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($jadwal as $list) { ?>
                <tr class="odd gradeX">
                    <td width="25px"><?php echo $i; ?></td>
                    <td><?php echo $list['nama_poli']; ?></td>
                    <td>
                        <?php echo substr(strip_tags($list['nama_dokter']), 0, 50) ?>
                    </td>
                    <td><?php echo $list['hari']; ?></td>
                    <td><?php echo $list['jam']; ?></td>
                    <td class="center" width="100px">
                        <a href="<?php echo base_url('admin/jadwal/edit/' . $list['jadwal_id']); ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url('admin/jadwal/delete_jadwal/' . $list['jadwal_id']); ?>" class="btn btn-danger" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php $i++;
            } ?>
        </tbody>
    </table>