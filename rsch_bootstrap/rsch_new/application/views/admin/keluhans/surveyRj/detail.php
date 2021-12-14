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

<form action="#" enctype="multipart/form-data">

    <div class="col-md-12">
        <div class="col-md-6">
            <center>
                <h3>Data Responden</h3>
            </center>
            <div class="form-group">
                <label>Nama Responden<font color="red"> *</font></label>
                <input type="text" name="responden_name" class="form-control" required value="<?php echo $surveyRj['responden_name'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Usia Responden<font color="red"> *</font></label>
                <input type="text" name="age" class="form-control" required value="<?php echo $surveyRj['age'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Nomor Telfon Responden<font color="red"> *</font></label>
                <input type="text" name="phone" class="form-control" required value="<?php echo $surveyRj['phone'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin Responden<font color="red"> *</font></label>
                <input type="text" name="gender" class="form-control" required value="<?php echo $surveyRj['gender'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Hubungan Responden dengan Pasien<font color="red"> *</font></label>
                <input type="text" name="relation" class="form-control" required value="<?php echo $surveyRj['relation'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Tingkat Pendidikan Responden<font color="red"> *</font></label>
                <input type="text" name="education" class="form-control" required value="<?php echo $surveyRj['education'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Alamat Responden<font color="red"> *</font></label>
                <input type="text" name="address" class="form-control" required value="<?php echo $surveyRj['address'] ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <center>
                <h3>Data Pasien</h3>
            </center>
            <div class="form-group">
                <label>Nama Pasien<font color="red"> *</font></label>
                <input type="text" name="patient_name" class="form-control" required value="<?php echo $surveyRj['patient_name'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin Pasien</label>
                <input type="text" name="gender_px" class="form-control" required value="<?php echo $surveyRj['gender_px'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Usia Pasien</label>
                <input type="text" name="age_px" class="form-control" required value="<?php echo $surveyRj['age_px'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Poliklinik yang Dituju<font color="red"> *</font></label>
                <input type="text" name="poli" class="form-control" required value="<?php echo $surveyRj['poli'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Tanggal Kunjungan Poli<font color="red"> *</font></label>
                <input type="text" name="date_px" class="form-control" required value="<?php echo $surveyRj['date_px'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <center>
            <h3>Indikator Pelayanan</h3>
        </center>
        <br>
        <div class="col-md-6">
            <div class="form-group">
                <label>1. Bagaimana menurut Saudara dengan kesesuaian persyaratan yang harus dipenuhi dalam pengurusan pelayanan dengan hasil jenis pelayanan yang diberikan?<font color="red"> *</font></label>
                <input type="text" name="question1" class="form-control" required value="<?php echo $surveyRj['question1'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat Saudara tentang prosedur pelayanan yang dilaksanakan?<font color="red"> *</font></label>
                <input type="text" name="question2" class="form-control" required value="<?php echo $surveyRj['question2'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaimana menurut Saudara tentang ketepatan waktu pelayanan pelayanan yang dilaksanakan?<font color="red"> *</font></label>
                <input type="text" name="question3" class="form-control" required value="<?php echo $surveyRj['question3'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>4. Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan?<font color="red"> *</font></label>
                <input type="text" name="question4" class="form-control" required value="<?php echo $surveyRj['question4'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>5. Bagaimana pendapat Saudara dengan hasil dari pelayanan yang telah diberikan?<font color="red"> *</font></label>
                <input type="text" name="question5" class="form-control" required value="<?php echo $surveyRj['question5'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>6. Bagaimana pendapat Saudara tentang kemampuan/ketrampilan petugas dalam memberikan pelayanan?<font color="red"> *</font></label>
                <input type="text" name="question6" class="form-control" required value="<?php echo $surveyRj['question6'] ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>7. Bagaimana pendapat Saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan?<font color="red"> *</font></label>
                <input type="text" name="question7" class="form-control" required value="<?php echo $surveyRj['question7'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>8. Bagaimana pendapat Saudara tentang pelaksanaan Maklumat Pelayanan/Janji Layanan yang telah dijanjikan oleh penyelenggara pelayanan?<font color="red"> *</font></label>
                <input type="text" name="question8" class="form-control" required value="<?php echo $surveyRj['question8'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>9. Bagaimana pendapat Saudara tentang tindak lanjut/tanggapan dari pengaduan/saran/komplain yang saudara sampaikan kepada petugas?<font color="red"> *</font></label>
                <input type="text" name="question9" class="form-control" required value="<?php echo $surveyRj['question9'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>10. Bagaimana kelengkapan fasilitas poliklinik (kursi tunggu, toilet, dll)</label>
                <input type="text" name="question10" class="form-control" required value="<?php echo $surveyRj['question10'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>11. Bagaimana Kebersihan Fasilitas Poliklinik?</label>
                <input type="text" name="question11" class="form-control" required value="<?php echo $surveyRj['question11'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Mohon berikan saran/kritik kepada pelayanan yang kami berikan sebagai upaya peningkatan kualitas pelayanan yang kami berikan</label>
                <textarea name="suggestion" rows="5" cols="45" placeholder="Saran Responden" class="form-control" disabled><?php echo $surveyRj['suggestion'] ?></textarea>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <a class="btn btn-danger" href="<?php echo base_url('admin/keluhans/surveyRj/'); ?>">Cancel</a>
        </div>
    </div>

</form>