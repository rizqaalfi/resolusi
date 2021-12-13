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
<p><a href="<?php echo base_url('admin/informasi/create_rekanan') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Create New Rekanan</a></p>



<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th width="150px">Image</th>
        <th>Image Name</th>
        <th>Position</th>
        <th width="150px">Action</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($rekanan as $list) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$list['image']);?>" width="150px">
        </td>
        <td>
        <?php echo substr(strip_tags($list['image_name']),0,20) ?>
        </td>       
        <td><?php echo $list['position'] ?></td>
        <td class="center">
        <a href="<?php echo base_url('admin/informasi/edit_rekanan/'.$list['rekanan_id']);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a> 
        <a href="<?php echo base_url('admin/informasi/delete_rekanan/'.$list['rekanan_id']);?>" class="btn btn-danger" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>