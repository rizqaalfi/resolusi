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
                <label>Email<font color="red"> *</font></label>
                <input type="text" name="email" class="form-control" required value="<?php echo $surveyRi['email'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Nama Responden<font color="red"> *</font></label>
                <input type="text" name="responden_name" class="form-control" required value="<?php echo $surveyRi['responden_name'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Usia Responden<font color="red"> *</font></label>
                <input type="text" name="age" class="form-control" required value="<?php echo $surveyRi['age'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin Responden<font color="red"> *</font></label>
                <input type="text" name="gender" class="form-control" required value="<?php echo $surveyRi['gender'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Hubungan Responden dengan Pasien<font color="red"> *</font></label>
                <input type="text" name="relation" class="form-control" required value="<?php echo $surveyRi['relation'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Tingkat Pendidikan Responden<font color="red"> *</font></label>
                <input type="text" name="education" class="form-control" required value="<?php echo $surveyRi['education'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Alamat Responden<font color="red"> *</font></label>
                <input type="text" name="address" class="form-control" required value="<?php echo $surveyRi['address'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>No. HP Responden<font color="red"> *</font></label>
                <input type="text" name="phone" class="form-control" required value="<?php echo $surveyRi['phone'] ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <center>
                <h3>Data Pasien</h3>
            </center>
            <div class="form-group">
                <label>Nama Pasien<font color="red"> *</font></label>
                <input type="text" name="patient_name" class="form-control" required value="<?php echo $surveyRi['patient_name'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin Pasien<font color="red"> *</font></label>
                <input type="text" name="gender_px" class="form-control" required value="<?php echo $surveyRi['gender_px'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Usia Pasien<font color="red"> *</font></label>
                <input type="text" name="age_px" class="form-control" required value="<?php echo $surveyRi['age_px'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>kamar Perawatan</label>
                <input type="text" name="treatment_room" class="form-control" required value="<?php echo $surveyRi['treatment_room'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>Nama Dokter yang Merawat<font color="red"> *</font></label>
                <input type="text" name="doctor_name" class="form-control" required value="<?php echo $surveyRi['doctor_name'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <center>
            <h3>Kuensioner Pelayanan Rs Citra Husada</h3>
        </center>
        <br>
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Pendaftaran</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara terkait kesesuaian persyaratan yang harus dipenuhi dalam pengurusan pendaftaran pasien dengan jenis pelayanan yang diberikan?<font color="red"> *</font></label>
                <input type="text" name="question1" class="form-control" required value="<?php echo $surveyRi['question1'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara tentang prosedur pelayanan di bagian Pendaftaran?<font color="red"> *</font></label>
                <input type="text" name="question2" class="form-control" required value="<?php echo $surveyRi['question2'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaimana pendapat saudara tentang penjelasan yang diberikan oleh petugas dalam memberikan informasi?<font color="red"> *</font></label>
                <input type="text" name="question3" class="form-control" required value="<?php echo $surveyRi['question3'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>4. Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas pendaftaran?<font color="red"> *</font></label>
                <input type="text" name="question4" class="form-control" required value="<?php echo $surveyRi['question4'] ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Instalasi Gawat Darurat</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara tentang ketepatan waktu petugas dalam memberikan pelayanan?</label>
                <input type="text" name="question5" class="form-control" required value="<?php echo $surveyRi['question5'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara terkait sikap petugas dalam memberikan pelayanan?</label>
                <input type="text" name="question6" class="form-control" required value="<?php echo $surveyRi['question6'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaimana pendapat saudara dengan hasil pelayanan yang telah diberikan di Instalasi Gawat Darurat?</label>
                <input type="text" name="question7" class="form-control" required value="<?php echo $surveyRi['question7'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Perawat / Bidan Ruangan</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara tentang ketepatan waktu pelayanan oleh perawat / bidan ruangan?<font color="red"> *</font></label>
                <input type="text" name="question8" class="form-control" required value="<?php echo $surveyRi['question8'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara tentang sikap petugas (perawat/bidan ruangan) dalam memberikan pelayanan?<font color="red"> *</font></label>
                <input type="text" name="question9" class="form-control" required value="<?php echo $surveyRi['question9'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaimana pendapat saudara dengan pelayanan yang telah diberikan oleh Perawat/Bidan?<font color="red"> *</font></label>
                <input type="text" name="question10" class="form-control" required value="<?php echo $surveyRi['question10'] ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Dokter Penanggung Jawab Pasien</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana menurut saudara tentang ketepatan waktu pelayanan oleh Dokter Penanggung Jawab Pasien?<font color="red"> *</font></label>
                <input type="text" name="question11" class="form-control" required value="<?php echo $surveyRi['question11'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara mengenai hasil dari pelayanan yang telah diberikan?<font color="red"> *</font></label>
                <input type="text" name="question12" class="form-control" required value="<?php echo $surveyRi['question12'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaiaman pendapat saudara tentang Sikap Dokter dalam memberikan pelayanan?<font color="red"> *</font></label>
                <input type="text" name="question13" class="form-control" required value="<?php echo $surveyRi['question13'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Gizi</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana menurut saudara tentang ketepatan waktu pemberian makanan?<font color="red"> *</font></label>
                <input type="text" name="question14" class="form-control" required value="<?php echo $surveyRi['question14'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara terkait Rasa dan Kualitas makanan yang telah diberikan?<font color="red"> *</font></label>
                <input type="text" name="question15" class="form-control" required value="<?php echo $surveyRi['question15'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaimana pendapat saudara tentang sikap petugas pengantar makanan pasien?<font color="red"> *</font></label>
                <input type="text" name="question16" class="form-control" required value="<?php echo $surveyRi['question16'] ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <center>
                <h3>Sarana & Prasarana</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara terkait kondisi fasilitas yang ada di Rumah Sakit?<font color="red"> *</font></label>
                <input type="text" name="question17" class="form-control" required value="<?php echo $surveyRi['question17'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara terkait kebersihan ruang perawatan saudara?<font color="red"> *</font></label>
                <input type="text" name="question18" class="form-control" required value="<?php echo $surveyRi['question18'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Kasir (Administrasi)</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara tentang prosedur pelayanan di bagian Administrasi (Kasir)?<font color="red"> *</font></label>
                <input type="text" name="question19" class="form-control" required value="<?php echo $surveyRi['question19'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara tentang kewajaran biaya pelayanan?<font color="red"> *</font></label>
                <input type="text" name="question20" class="form-control" required value="<?php echo $surveyRi['question20'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas kasir?<font color="red"> *</font></label>
                <input type="text" name="question21" class="form-control" required value="<?php echo $surveyRi['question21'] ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Petugas Keamanan</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara terkait kepedulian petugas keamanan terhadap pasien dan keluarga?<font color="red"> *</font></label>
                <input type="text" name="question22" class="form-control" required value="<?php echo $surveyRi['question22'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara terkait sikap Petugas Keamanan?<font color="red"> *</font></label>
                <input type="text" name="question23" class="form-control" required value="<?php echo $surveyRi['question23'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Parkir</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara terkait fasilitas parkir yang disediakan oleh Rumah Sakit?<font color="red"> *</font></label>
                <input type="text" name="question24" class="form-control" required value="<?php echo $surveyRi['question24'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara tentang keamanan parkir di Rumah Sakit?<font color="red"> *</font></label>
                <input type="text" name="question25" class="form-control" required value="<?php echo $surveyRi['question25'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaimana pendapat saudara terkait sikap petugas parkir?<font color="red"> *</font></label>
                <input type="text" name="question26" class="form-control" required value="<?php echo $surveyRi['question26'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <center>
            <h3>Kuensioner Pelayanan Penunjang</h3>
        </center>
        <br>
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Laboratorium</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara terkait sikap petugas laboratorium?</label>
                <input type="text" name="question27" class="form-control" required value="<?php echo $surveyRi['question27'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas laboratorium?</label>
                <input type="text" name="question28" class="form-control" required value="<?php echo $surveyRi['question28'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Apakah saudara puas dengan pelayanan yang diberikan oleh Laboratorium?</label>
                <input type="text" name="question29" class="form-control" required value="<?php echo $surveyRi['question29'] ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Radiologi</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara terkait sikap petugas Radiologi?</label>
                <input type="text" name="question30" class="form-control" required value="<?php echo $surveyRi['question30'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas Radiologi?</label>
                <input type="text" name="question31" class="form-control" required value="<?php echo $surveyRi['question31'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Apakah saudara puas dengan pelayanan yang diberikan oleh Radiologi?</label>
                <input type="text" name="question32" class="form-control" required value="<?php echo $surveyRi['question32'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <center>
                <h3>Pelayanan Farmasi</h3>
            </center>
            <div class="form-group">
                <label>1. Bagaimana pendapat saudara terkait sikap petugas Farmasi?</label>
                <input type="text" name="question33" class="form-control" required value="<?php echo $surveyRi['question33'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>2. Bagaimana pendapat saudara terkait prosedur pelayanan farmasi?</label>
                <input type="text" name="question34" class="form-control" required value="<?php echo $surveyRi['question34'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>3. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas farmasi?</label>
                <input type="text" name="question35" class="form-control" required value="<?php echo $surveyRi['question35'] ?>" disabled>
            </div>
            <div class="form-group">
                <label>4. Apakah saudara puas dengan pelayanan di Farmasi?</label>
                <input type="text" name="question36" class="form-control" required value="<?php echo $surveyRi['question36'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <center>
            <h3>Saran / Kritik</h3>
        </center>
        <br>
        <div class="col-md-6">
            <div class="form-group">
                <label>Bagaimana pendapat Saudara tentang tindak lanjut/tanggapan dari pengaduan/saran/komplain yang saudara sampaikan kepada petugas?</label>
                <input type="text" name="question37" class="form-control" required value="<?php echo $surveyRi['question37'] ?>" disabled>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-6">
            <div class="form-group">
                <label>Mohon berikan saran/kritik kepada pelayanan yang kami berikan sebagai upaya peningkatan kualitas pelayanan yang kami berikan</label>
                <textarea name="suggestion1" rows="5" cols="45" placeholder="Saran Responden" class="form-control" disabled><?php echo $surveyRi['suggestion1'] ?></textarea>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>JIka Ada Kritik Mohon Sampaikan tanggal kejadian, agar kami dapat membenahi kekurangan pelayanan yang kami berikan</label>
                <textarea name="suggestion2" rows="5" cols="45" placeholder="Saran Responden" class="form-control" disabled><?php echo $surveyRi['suggestion2'] ?></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <a class="btn btn-danger" href="<?php echo base_url('admin/keluhans/surveyRi/'); ?>">Cancel</a>
        </div>
    </div>

</form>