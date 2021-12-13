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
<p><a href="<?php echo base_url('admin/profil/create_struktur') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Create struktur</a></p>



<table class="table table-striped table-bordered table-hover">
<thead>
    <tr>
        <th>#</th>
        <th>Image</th>
        <th width="150px">Action</th>
    </tr>
</thead>
<tbody>
	<?php $i=1; foreach($struktur as $list) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i; ?></td>
        <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$list['image']);?>" width="150px">
        </td>    
        <td class="center">
        <a href="<?php echo base_url('admin/profil/edit_struktur/'.$list['struktur_id']);?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
        <!-- End Modals-->        
        <a href="<?php echo base_url('admin/profil/delete_struktur/'.$list['struktur_id']);?>" class="btn btn-danger" onClick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>
       
        </td>
    </tr>
    <?php $i++; } ?>
</tbody>
</table>