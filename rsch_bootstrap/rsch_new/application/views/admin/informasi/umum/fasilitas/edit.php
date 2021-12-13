<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        file_browser_callback: function(field, url, type, win) {
            tinyMCE.activeEditor.windowManager.open({
                file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
                title: 'KCFinder',
                width: 700,
                height: 500,
                inline: true,
                close_previous: false
            }, {
                window: win,
                input: field
            });
            return false;
        },
        selector: "#isi",
        height: 250,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>




<?php
// Session 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

// File upload error
if (isset($error)) {
    echo '<div class="alert alert-success">';
    echo $error;
    echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">', '</div>');
?>

<form action="<?php echo base_url('admin/informasi/edit_fasilitas/' . $fasilitas['fasilitas_id']) ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group input-group-lg">
            <label>Title</label>
            <input type="text" name="judul" class="form-control" value="<?php echo $fasilitas['judul'] ?>" required placeholder="Title">
        </div>
        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control" id="imagePreview">
            <div><img id="file" src="<?php echo base_url('assets/upload/image/thumbs/' . $fasilitas['image']) ?>" width="250px" height="300px"></div>
        </div>
        <div class="form-group input-group-lg">
            <label>Image Name</label>
            <input type="text" name="image_name" class="form-control" value="<?php echo $fasilitas['image_name'] ?>" required placeholder="Title">
        </div>
    </div>
    </div>
    <div class="col-md-12">
        <div class="form-group input-group-lg">
            <label>Description</label><br>
            <textarea name="deskripsi" value="" placeholder="Content Blog" id="isi"><?php echo $fasilitas['deskripsi'] ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
            <input type="reset" name="reset" value="Reset" class="btn btn-default">
        </div>
    </div>

</form>

<script>
    function lihatFoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#file').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imagePreview").change(function() {
        lihatFoto(this);
    });
</script>