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

<style>
    #imagePreview {
        margin-top: 7px;
        width: 458px;
        height: 355px;
        background-position: center center;
        background-size: cover;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
    }
</style>
<script type="text/javascript">
    $(function() {
        $("#file").on("change", function() {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function() { // set image data as background of div
                    $("#imagePreview").css("background-image", "url(" + this.result + ")");
                }
            }
        });
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

<form action="<?php echo base_url('admin/layanan/createJadwal') ?>" method="post" enctype="multipart/form-data">

    <div class="col-md-12">
        <div class="form-group input-group-lg">
            <label>Poli</label>
            <select id="Poli_id" class="form-control" name="poli_id">
                <option value="">Pilih Poli</option>
                <?php foreach ($poli as $poli) { ?>
                    <option value="<?php echo $poli['poli_id'] ?>"><?php echo $poli['nama_poli'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group input-group-lg">
            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter" class="form-control" value="<?php echo set_value('nama_dokter') ?>" required placeholder="Nama Dokter">
        </div>
        <div class="form-group input-group-lg">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="<?php echo set_value('hari') ?>" required placeholder="Hari">
        </div>
        <div class="form-group input-group-lg">
            <label>Jam</label>
            <input type="text" name="jam" class="form-control" value="<?php echo set_value('jam') ?>" required placeholder="jam">
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" name="submit" value="Create" class="btn btn-primary">
            <input type="reset" name="reset" value="Reset" class="btn btn-default">
        </div>
    </div>

</form>