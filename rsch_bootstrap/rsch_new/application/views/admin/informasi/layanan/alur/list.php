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
        <th>Image</th>
        <th>Image Name</th>
        <th width="150px">Action</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($alur as $list) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$list['image']);?>" width="150px">
        </td>     
        <td><?php echo $list['nama_alur'] ?></td>
        <td class="center">
        <a href="<?php echo base_url('admin/informasi/edit_alur/'.$list['layanan_id']);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>