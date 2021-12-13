<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>

<!--  Modals-->
<div class="panel-body">

<table class="table table-striped table-bordered table-hover">
<thead>
    <tr>
        <th width="25px">#</th>
        <th>Tata Tertib & Jam Kunjung</th>
        <th width="150px">Action</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($tatib as $list) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>   
        <td><?php echo $list['tatib'] ?></td>
        <td class="center">
        <a href="<?php echo base_url('admin/informasi/edit_tatib/'.$list['layanan_id']);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
        </td>
    </tr>
    <?php } ?>
</tbody>
</table>