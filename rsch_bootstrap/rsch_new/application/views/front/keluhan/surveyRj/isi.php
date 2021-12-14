<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Survey Kepuasan Pasien Rawat Jalan</h2>

        </div>
        <div class="container">
            <!-- container -->

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

            <form id="surveyRjform" method="post" action="<?php echo base_url('keluhan/surveyRj'); ?>">
                <div class="container border p-5">
                    <div class="row">
                        <center>
                            <h3>Data Responden</h3>
                            <br>
                        </center>
                        <!-- starts row -->
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="respondenName"><span class="required"></span><b>
                                    <h6> Nama Responden <font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="responden_name" id="respondenName" class="form-control requiredField" placeholder="Your Answer..." />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="ageResponden"><span class="required"></span><b>
                                    <h6> Usia Responden<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="age" id="ageResponden" class="form-control requiredField" placeholder="Example : 20" />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="phoneResponden"><span class="required"></span><b>
                                    <h6> Nomor Telfon Responden (bisa menerima telfon)<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phoneResponden" class="form-control requiredField" placeholder="Your Answer..." />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="gender"><span class="required"></span><b>
                                    <h6> Jenis Kelamin Responden<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="gender" value="Laki-laki"> Laki-laki<br>
                            <input type="radio" name="gender" value="Perempuan"> Perempuan<br>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="relation"><span class="required"></span><b>
                                    <h6> Hubungan Responden dengan Pasien<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="relation" value="Saya Sebagai Pasien"> Saya Sebagai Pasien<br>
                            <input type="radio" name="relation" value="Orang Tua"> Orang Tua<br>
                            <input type="radio" name="relation" value="Anak"> Anak<br>
                            <input type="radio" name="relation" value="Istri Suami"> Istri / Suami<br>
                            <input type="radio" id="chkYes" name="relation" value="xx" /> Lain-lain...
                            <input type="text" id="txtBox" name="relation" value="" disabled="true" class="xx" /><br>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="education"><span class="required"></span><b>
                                    <h6> Tingkat Pendidikan Responden<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="education" id="box" value="SMA"> SMA<br>
                            <input type="radio" name="education" id="box" value="Diploma Sederajat"> Diploma / Sederajat<br>
                            <input type="radio" name="education" id="box" value="S1 Sederajat"> S1 / Sederajat<br>
                            <input type="radio" name="education" id="box" value="S2 Sederajat"> S2 / Sederajat<br>
                            <input type="radio" name="education" id="Yes" value="yy" /> Lain-lain...
                            <input type="text" id="Box" name="education" value="" disabled="true" class="yy" /><br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="address"><span class="required"></span><b>
                                    <h6> Alamat Responden<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <textarea aria-required="true" rows="5" cols="45" name="address" id="address" class="form-control requiredField mezage" placeholder="Your Answer..."></textarea>
                        </div>
                    </div><!-- ends row -->
                </div>
                <br>

                <div class="container border p-5">
                    <div class="row">
                        <center>
                            <h3>Data Pasien</h3>
                            <br>
                        </center>
                        <!-- starts row -->
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="patientName"><span class="required"></span><b>
                                    <h6> Nama Pasien<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="patient_name" id="patientName" class="form-control requiredField" placeholder="Your Answer..." />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="genderPx"></span><b>
                                    <h6> Jenis Kelamin Pasien</h6>
                                </b></label><br>
                            <input type="radio" name="gender_px" value="Laki-laki"> Laki-laki<br>
                            <input type="radio" name="gender_px" value="Perempuan"> Perempuan<br>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="agePx"></span><b>
                                    <h6> Usia Pasien</h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="age_px" id="agePx" class="form-control requiredField" placeholder="Example : 20" />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="datePx"><span class="required"></span><b>
                                    <h6> Tanggal Kunjungan Poli<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="date" aria-required="true" size="30" value="" name="date_px" id="datePx" class="form-control requiredField" />
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="poli"><span class="required"></span> <b>
                                    <h6>Poliklinik yang Dituju<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="poli" value="Poli Umum"> Poli Umum<br>
                            <input type="radio" name="poli" value="Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)"> Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)<br>
                            <input type="radio" name="poli" value="Poli Penyakit Dalam (dr.Yuli Hermansyah, Sp.PD)"> Poli Penyakit Dalam (dr.Yuli Hermansyah, Sp.PD)<br>
                            <input type="radio" name="poli" value="Poli Anak (dr.Natalia K, Sp.A)"> Poli Anak (dr.Natalia K, Sp.A)<br>
                            <input type="radio" name="poli" value="Poli Anak (dr.Lukman Oktadianto, Sp.A)"> Poli Anak (dr.Lukman Oktadianto, Sp.A)<br>
                            <input type="radio" name="poli" value="Poli Kandungan (dr.Dion Januar Fitra, Sp.OG)"> Poli Kandungan (dr.Dion Januar Fitra, Sp.OG)<br>
                            <input type="radio" name="poli" value="Poli Kandungan (dr.Zaki Afif, Sp.OG)"> Poli Kandungan (dr.Zaki Afif, Sp.OG)<br>
                            <input type="radio" name="poli" value="Poli Kandungan (dr.Noviliana Eka, Sp.OG)"> Poli Kandungan (dr.Noviliana Eka, Sp.OG)<br>
                            <input type="radio" name="poli" value="Poli Jantung dan Pembuluh Darah (dr.Abdul Gofur, Sp.JP)"> Poli Jantung dan Pembuluh Darah (dr.Abdul Gofur, Sp.JP)<br>
                            <input type="radio" name="poli" value="Poli Bedah Umum (dr.M. Arief H, Sp.B)"> Poli Bedah Umum (dr.M. Arief H, Sp.B)<br>
                            <input type="radio" name="poli" value="Poli Bedah Umum (dr.Primanto Bhakti, Sp.B)"> Poli Bedah Umum (dr.Primanto Bhakti, Sp.B)<br>
                            <input type="radio" name="poli" value="Poli Bedah Umum (dr.Cynthia Tanaka, Sp.B)"> Poli Bedah Umum (dr.Cynthia Tanaka, Sp.B)<br>
                            <input type="radio" name="poli" value="Poli Saraf (dr.Lely Martha Uli, Sp.S)"> Poli Saraf (dr.Lely Martha Uli, Sp.S)<br>
                            <input type="radio" name="poli" value="Poli Paru (dr.ST Boedi R, Sp.P)"> Poli Paru (dr.ST Boedi R, Sp.P)<br>
                            <input type="radio" name="poli" value="Poli Paru (dr.Anik Sukmawati, Sp.P)"> Poli Paru (dr.Anik Sukmawati, Sp.P)<br>
                            <input type="radio" name="poli" value="Poli Mata (dr.Bagas Kumoro, Sp.M)"> Poli Mata (dr.Bagas Kumoro, Sp.M)<br>
                            <input type="radio" name="poli" value="Poli Mata (dr.Cosmas Hascariyanto, Sp.M)"> Poli Mata (dr.Cosmas Hascariyanto, Sp.M)<br>
                            <input type="radio" name="poli" value="Poli Kulit dan Kelamin (dr.Anselma Dyah K, Sp.KK)"> Poli Kulit dan Kelamin (dr.Anselma Dyah K, Sp.KK)<br>
                            <input type="radio" name="poli" value="Poli Orthopedi (dr.Ainul Miftah, Sp.OT)"> Poli Orthopedi (dr.Ainul Miftah, Sp.OT)<br>
                            <input type="radio" name="poli" value="Poli Gigi dan Mulut Spesialiasi Penyakit Mulut (drg.Leny Rokhma Dewi, Sp.PM)"> Poli Gigi dan Mulut Spesialiasi Penyakit Mulut (drg.Leny Rokhma Dewi, Sp.PM)<br>
                            <input type="radio" name="poli" value="Poli Gigi dan Mulut (Dokter Gigi Umum)"> Poli Gigi dan Mulut (Dokter Gigi Umum)<br>
                            <input type="radio" name="poli" value="Poli THT (dr.Hengky, Sp.THT-KL)"> Poli THT (dr.Hengky, Sp.THT-KL)<br>
                            <input type="radio" name="poli" value="Poli THT (dr.Dyah, Sp.THT-KL)"> Poli THT (dr.Dyah, Sp.THT-KL)<br>
                            <input type="radio" name="poli" value="Poli Penyakit Dalam (dr.Jualita Heidy, Sp.PD)"> Poli Penyakit Dalam (dr.Jualita Heidy, Sp.PD)<br>
                        </div>

                    </div><!-- ends row -->
                </div>

                <br>
                <div class="container border p-5">
                    <div class="row">
                        <center>
                            <h3>Indikator Pelayanan</h3>
                            <br>
                        </center>
                        <!-- starts row -->
                        <div class="form-group col-lg-12">
                            <label for="question1"><span class="required"></span><b>
                                    <h6> 1. Bagaimana menurut Saudara dengan kesesuaian persyaratan yang harus dipenuhi dalam pengurusan pelayanan dengan hasil jenis pelayanan yang diberikan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question1" value="Tidak Sesuai"> Tidak Sesuai<br>
                            <input type="radio" name="question1" value="Kurang Sesuai"> Kurang Sesuai<br>
                            <input type="radio" name="question1" value="Sesuai"> Sesuai<br>
                            <input type="radio" name="question1" value="Sangat Sesuai"> Sangat Sesuai<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question2"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat Saudara tentang prosedur pelayanan yang dilaksanakan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question2" value="Tidak Mudah"> Tidak Mudah<br>
                            <input type="radio" name="question2" value="Kurang Mudah"> Kurang Mudah<br>
                            <input type="radio" name="question2" value="Mudah"> Mudah<br>
                            <input type="radio" name="question2" value="Sangat Mudah"> Sangat Mudah<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question3"><span class="required"></span><b>
                                    <h6> 3. Bagaimana menurut Saudara tentang ketepatan waktu pelayanan pelayanan yang dilaksanakan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question3" value="Tidak Tepat"> Tidak Tepat<br>
                            <input type="radio" name="question3" value="Kurang Tepat"> Kurang Tepat<br>
                            <input type="radio" name="question3" value="Tepat"> Tepat<br>
                            <input type="radio" name="question3" value="Sangat Tepat"> Sangat Tepat<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question4"><span class="required"></span><b>
                                    <h6> 4. Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question4" value="Tidak Wajar"> Tidak Wajar<br>
                            <input type="radio" name="question4" value="Kurang Wajar"> Kurang Wajar<br>
                            <input type="radio" name="question4" value="Wajar"> Wajar<br>
                            <input type="radio" name="question4" value="Sangat Wajar"> Sangat Wajar<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question5"><span class="required"></span><b>
                                    <h6> 5. Bagaimana pendapat Saudara dengan hasil dari pelayanan yang telah diberikan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question5" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question5" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question5" value="Puas"> Puas<br>
                            <input type="radio" name="question5" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question6"><span class="required"></span><b>
                                    <h6> 6. Bagaimana pendapat Saudara tentang kemampuan/ketrampilan petugas dalam memberikan pelayanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question6" value="Tidak Mampu"> Tidak Mampu<br>
                            <input type="radio" name="question6" value="Kurang Mampu"> Kurang Mampu<br>
                            <input type="radio" name="question6" value="Mampu"> Mampu<br>
                            <input type="radio" name="question6" value="Sangat Mampu"> Sangat Mampu<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question7"><span class="required"></span><b>
                                    <h6> 7. Bagaimana pendapat Saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question7" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question7" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question7" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question7" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question8"><span class="required"></span><b>
                                    <h6> 8. Bagaimana pendapat Saudara tentang pelaksanaan Maklumat Pelayanan/Janji Layanan yang telah dijanjikan oleh penyelenggara pelayanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question8" value="Tidak Tepat"> Tidak Tepat<br>
                            <input type="radio" name="question8" value="Kurang Tepat"> Kurang Tepat<br>
                            <input type="radio" name="question8" value="Tepat"> Tepat<br>
                            <input type="radio" name="question8" value="Sangat Tepat"> Sangat Tepat<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question9"><span class="required"></span><b>
                                    <h6> 9. Bagaimana pendapat Saudara tentang tindak lanjut/tanggapan dari pengaduan/saran/komplain yang saudara sampaikan kepada petugas?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question9" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question9" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question9" value="Puas"> Puas<br>
                            <input type="radio" name="question9" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question10"></span><b>
                                    <h6> 10. Bagaimana kelengkapan fasilitas poliklinik (kursi tunggu, toilet, dll)</h6>
                                </b></label><br>
                            <input type="radio" name="question10" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question10" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question10" value="Puas"> Puas<br>
                            <input type="radio" name="question10" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="question11"></span><b>
                                    <h6> 11. Bagaimana Kebersihan Fasilitas Poliklinik?</h6>
                                </b></label><br>
                            <input type="radio" name="question11" value="Tidak Bersih"> Tidak Bersih<br>
                            <input type="radio" name="question11" value="Kurang Bersih"> Kurang Bersih<br>
                            <input type="radio" name="question11" value="Bersih"> Bersih<br>
                            <input type="radio" name="question11" value="Sangat Bersih"> Sangat Bersih<br>
                        </div>
                        <div class="form-group clearfix col-lg-12">
                            <label for="suggestion"></span><b>
                                    <h6> Mohon berikan saran/kritik kepada pelayanan yang kami berikan sebagai upaya peningkatan kualitas pelayanan yang kami berikan</h6>
                                </b></label>
                            <textarea aria-required="true" rows="5" cols="45" name="suggestion" id="suggestion" class="form-control requiredField mezage" placeholder="Your Answer..."></textarea>
                        </div>
                    </div><!-- ends row -->

                </div>
                <br>
                <div class="row">
                    <!-- starts row -->
                    <div class="form-group clearfix col-lg-12 text-left remove-margin-bottom">
                        <input type="submit" value="Kirim Survey" id="submit" name="submit" class="btn btn-primary" />
                    </div>
                </div><!-- ends row -->

            </form>
        </div>


    </div>
</section><!-- End About Us Section -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[type=radio][name=relation]').click(function() {
            var related_class = $(this).val();
            $('.' + related_class).prop('disabled', false);

            $('input[type=radio][name=relation]').not(':checked').each(function() {
                var other_class = $(this).val();
                $('.' + other_class).prop('disabled', true);
            });
        });
    });

    $(document).ready(function() {
        $('input[type=radio][name=education]').click(function() {
            var related_class = $(this).val();
            $('.' + related_class).prop('disabled', false);

            $('input[type=radio][name=education]').not(':checked').each(function() {
                var other_class = $(this).val();
                $('.' + other_class).prop('disabled', true);
            });
        });
    });
</script>