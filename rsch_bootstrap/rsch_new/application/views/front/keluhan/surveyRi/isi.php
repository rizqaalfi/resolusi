<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Survey Kepuasan Pasien Rawat Inap</h2>

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

            <form id="surveyRiform" method="post" action="<?php echo base_url('keluhan/surveyRi'); ?>">

                <!-- data responden -->
                <div class="container border p-5">
                    <div class="row">
                        <center>
                            <h3>Data Responden</h3>
                            <br>
                        </center>

                        <!-- starts row -->
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="email"><span class="required"></span><b>
                                    <h6> Email<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control requiredField" placeholder="Your Answer..." required />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="respondenName"><span class="required"></span><b>
                                    <h6> Nama Responden<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="responden_name" id="respondenName" class="form-control requiredField" placeholder="Your Answer..." required />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="ageResponden"><span class="required"></span><b>
                                    <h6> Usia Responden<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="age" id="ageResponden" class="form-control requiredField" placeholder="Example : 20" required />
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
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="phoneResponden"><span class="required"></span><b>
                                    <h6> No. HP Responden (yang bisa dihubungi)<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phoneResponden" class="form-control requiredField" placeholder="Your Answer..." />
                        </div>
                    </div><!-- ends row -->
                </div>
                <!-- end data responden -->
                <br>
                <!-- data pasien -->
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
                            <label for="genderPx"><span class="required"></span><b>
                                    <h6> Jenis Kelamin Pasien<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="gender_px" value="Laki-laki"> Laki-laki<br>
                            <input type="radio" name="gender_px" value="Perempuan"> Perempuan<br>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="agePx"><span class="required"></span><b>
                                    <h6> Usia Pasien<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="age_px" id="agePx" class="form-control requiredField" placeholder="Example : 20" />
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                            <label for="treatmentRoom"><span class="required"></span><b>
                                    <h6> Kamar Perawatan</h6>
                                </b></label>
                            <input type="text" aria-required="true" size="30" value="" name="treatment_room" id="treatmentRoom" class="form-control requiredField" placeholder="Your Answer..." />
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="doctorName"><span class="required"></span> <b>
                                    <h6>Nama Dokter yang Merawat<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="doctor_name" value="Poli Penyakit Dalam (dr.Yuli Hermansyah, Sp.PD)"> Poli Penyakit Dalam (dr.Yuli Hermansyah, Sp.PD)<br>
                            <input type="radio" name="doctor_name" value="Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)"> Poli Penyakit Dalam (dr.Ach Syaiful Ludfi, Sp.PD)<br>
                            <input type="radio" name="doctor_name" value="Poli Penyakit Dalam (dr.Jualita Heidy, Sp.PD)"> Poli Penyakit Dalam (dr.Jualita Heidy, Sp.PD)<br>
                            <input type="radio" name="doctor_name" value="Poli Anak (dr.Natalia K, Sp.A)"> Poli Anak (dr.Natalia K, Sp.A)<br>
                            <input type="radio" name="doctor_name" value="Poli Anak (dr.Lukman Oktadianto, Sp.A)"> Poli Anak (dr.Lukman Oktadianto, Sp.A)<br>
                            <input type="radio" name="doctor_name" value="Poli Bedah Umum (dr.Primanto Bhakti, Sp.B)"> Poli Bedah Umum (dr.Primanto Bhakti, Sp.B)<br>
                            <input type="radio" name="doctor_name" value="Poli Bedah Umum (dr.Cynthia Tanaka, Sp.B)"> Poli Bedah Umum (dr.Cynthia Tanaka, Sp.B)<br>
                            <input type="radio" name="doctor_name" value="Poli Bedah Umum (dr.M. Arief H, Sp.B)"> Poli Bedah Umum (dr.M. Arief H, Sp.B)<br>
                            <input type="radio" name="doctor_name" value="Poli Kandungan (dr.Noviliana Eka, Sp.OG)"> Poli Kandungan (dr.Noviliana Eka, Sp.OG)<br>
                            <input type="radio" name="doctor_name" value="Poli Kandungan (dr.Zaki Afif, Sp.OG)"> Poli Kandungan (dr.Zaki Afif, Sp.OG)<br>
                            <input type="radio" name="doctor_name" value="Poli Mata (dr.Cosmas Hascariyanto, Sp.M)"> Poli Mata (dr.Cosmas Hascariyanto, Sp.M)<br>
                            <input type="radio" name="doctor_name" value="Poli Mata (dr.Bagas Kumoro, Sp.M)"> Poli Mata (dr.Bagas Kumoro, Sp.M)<br>
                            <input type="radio" name="doctor_name" value="Poli Saraf (dr.Lely Martha Uli, Sp.S)"> Poli Saraf (dr.Lely Martha Uli, Sp.S)<br>
                            <input type="radio" name="doctor_name" value="Poli Paru (dr.ST Boedi R, Sp.P)"> Poli Paru (dr.ST Boedi R, Sp.P)<br>
                            <input type="radio" name="doctor_name" value="Poli Paru (dr.Anik Sukmawati, Sp.P)"> Poli Paru (dr.Anik Sukmawati, Sp.P)<br>
                            <input type="radio" name="doctor_name" value="Poli Orthopedi (dr.Ainul Miftah, Sp.OT)"> Poli Orthopedi (dr.Ainul Miftah, Sp.OT)<br>
                            <input type="radio" name="doctor_name" value="Poli Jantung dan Pembuluh Darah (dr.Abdul Gofur, Sp.JP)"> Poli Jantung dan Pembuluh Darah (dr.Abdul Gofur, Sp.JP)<br>
                            <input type="radio" name="doctor_name" value="Poli Kulit dan Kelamin (dr.Anselma Dyah K, Sp.KK)"> Poli Kulit dan Kelamin (dr.Anselma Dyah K, Sp.KK)<br>
                            <input type="radio" name="doctor_name" value="Poli THT (dr.Hengky Wijaya, Sp.THT-KL)"> Poli THT (dr.Hengky Wijaya, Sp.THT-KL)<br>
                            <input type="radio" name="doctor_name" value="Poli THT (dr.Diah Ratnasari, Sp.THT-KL)"> Poli THT (dr.Diah Ratnasari, Sp.THT-KL)<br>
                            <input type="radio" name="doctor_name" value="Spesialiasi Penyakit Mulut (drg.Leni Rokhmah, Sp.PM)"> Spesialiasi Penyakit Mulut (drg.Leni Rokhmah, Sp.PM)<br>
                        </div>

                    </div><!-- ends row -->
                </div>
                <!--end data pasien -->
                <br>
                <!-- kuesioner pelayanan -->

                <center>
                    <h3>Kuesioner Pelayanan Rs Citra Husada</h3>
                </center>
                <br>
                <div class="container border p-5">

                    <div class="row">
                        <h3>Pelayanan Pendaftaran</h3>
                        <!-- starts row -->
                        <div class="form-group col-lg-6">
                            <label for="question1"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara terkait kesesuaian persyaratan yang harus dipenuhi dalam pengurusan pendaftaran pasien dengan jenis pelayanan yang diberikan?<font color="red"> *</font>
                                    </h6>
                                </b></label>
                            <input type="radio" name="question1" value="Tidak Sesuai"> Tidak Sesuai<br>
                            <input type="radio" name="question1" value="Kurang Sesuai"> Kurang Sesuai<br>
                            <input type="radio" name="question1" value="Sesuai"> Sesuai<br>
                            <input type="radio" name="question1" value="Sangat Sesuai"> Sangat Sesuai<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question2"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat Saudara tentang prosedur pelayanan yang dilaksanakan?<font color="red"> *</font>
                                    </h6>
                                </b> </label>
                            <input type="radio" name="question2" value="Tidak Mudah"> Tidak Mudah<br>
                            <input type="radio" name="question2" value="Kurang Mudah"> Kurang Mudah<br>
                            <input type="radio" name="question2" value="Mudah"> Mudah<br>
                            <input type="radio" name="question2" value="Sangat Mudah"> Sangat Mudah<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="question3"><span class="required"></span><b>
                                    <h6> 3. Bagaimana menurut Saudara tentang ketepatan waktu pelayanan pelayanan yang dilaksanakan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question3" value="Tidak Jelas"> Tidak Jelas<br>
                            <input type="radio" name="question3" value="Kurang Jelas"> Kurang Jelas<br>
                            <input type="radio" name="question3" value="Jelas"> Jelas<br>
                            <input type="radio" name="question3" value="Sangat Jelas"> Sangat Jelas<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question4"><span class="required"></span><b>
                                    <h6> 4. Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas pendaftaran?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question4" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question4" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question4" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question4" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                    </div><!-- ends row -->

                    <!-- end kuesioner pelayanan -->

                    <div class="row">
                        <hr>
                        <h3>Pelayanan Instalasi Gawat Darurat</h3>
                        <p>
                            <font color="red">(Mohon untuk tidak diisi jika Saudara TIDAK MELEWATI PELAYANAN ini)</font>
                        </p>
                        <div class="form-group col-lg-6">
                            <label for="question5"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara tentang ketepatan waktu petugas dalam memberikan pelayanan?</h6>
                                </b></label><br>
                            <input type="radio" name="question5" value="Tidak Tepat"> Tidak Tepat<br>
                            <input type="radio" name="question5" value="Kurang Tepat"> Kurang Tepat<br>
                            <input type="radio" name="question5" value="Tepat"> Tepat<br>
                            <input type="radio" name="question5" value="Sangat Tepat"> Sangat Tepat<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question6"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara terkait sikap petugas dalam memberikan pelayanan?</h6>
                                </b></label><br>
                            <input type="radio" name="question6" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question6" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question6" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question6" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question7"><span class="required"></span><b>
                                    <h6> 3. Bagaimana pendapat saudara dengan hasil pelayanan yang telah diberikan di Instalasi Gawat Darurat?</h6>
                                </b></label><br>
                            <input type="radio" name="question7" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question7" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question7" value="Puas"> Puas<br>
                            <input type="radio" name="question7" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <hr>
                        <h3>Pelayanan Perawat / Bidan Ruangan</h3>
                        <div class="form-group col-lg-6">
                            <label for="question8"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara tentang ketepatan waktu pelayanan oleh perawat / bidan ruangan? <font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question8" value="Tidak Tepat"> Tidak Tepat<br>
                            <input type="radio" name="question8" value="Kurang Tepat"> Kurang Tepat<br>
                            <input type="radio" name="question8" value="Tepat"> Tepat<br>
                            <input type="radio" name="question8" value="Sangat Tepat"> Sangat Tepat<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question9"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara tentang sikap petugas (perawat/bidan ruangan) dalam memberikan pelayanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question9" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question9" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question9" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question9" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question10"><span class="required"></span><b>
                                    <h6> 3. Bagaimana pendapat saudara dengan pelayanan yang telah diberikan oleh Perawat/Bidan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question10" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question10" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question10" value="Puas"> Puas<br>
                            <input type="radio" name="question10" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <hr>
                        <h3>Pelayanan Dokter Penanggung Jawab Pasien</h3>
                        <div class="form-group col-lg-6">
                            <label for="question11"><span class="required"></span><b>
                                    <h6> 1. Bagaimana menurut saudara tentang ketepatan waktu pelayanan oleh Dokter Penanggung Jawab Pasien?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question11" value="Tidak Tepat"> Tidak Tepat<br>
                            <input type="radio" name="question11" value="Kurang Tepat"> Kurang Tepat<br>
                            <input type="radio" name="question11" value="Tepat"> Tepat<br>
                            <input type="radio" name="question11" value="Sangat Tepat"> Sangat Tepat<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question12"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara mengenai hasil dari pelayanan yang telah diberikan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question12" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question12" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question12" value="Puas"> Puas<br>
                            <input type="radio" name="question12" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question13"><span class="required"></span><b>
                                    <h6> 3. Bagaiaman pendapat saudara tentang Sikap Dokter dalam memberikan pelayanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question13" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question13" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question13" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question13" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <hr>
                        <h3>Pelayanan Gizi</h3>
                        <div class="form-group col-lg-6">
                            <label for="question14"><span class="required"></span><b>
                                    <h6> 1. Bagaimana menurut saudara tentang ketepatan waktu pemberian makanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question14" value="Tidak Tepat"> Tidak Tepat<br>
                            <input type="radio" name="question14" value="Kurang Tepat"> Kurang Tepat<br>
                            <input type="radio" name="question14" value="Tepat"> Tepat<br>
                            <input type="radio" name="question14" value="Sangat Tepat"> Sangat Tepat<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question15"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara terkait Rasa dan Kualitas makanan yang telah diberikan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question15" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question15" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question15" value="Puas"> Puas<br>
                            <input type="radio" name="question15" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question16"><span class="required"></span><b>
                                    <h6> 3. Bagaimana pendapat saudara tentang sikap petugas pengantar makanan pasien?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question16" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question16" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question16" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question16" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <h3>
                            <hr>Sarana & Prasarana
                        </h3>
                        <div class="form-group col-lg-6">
                            <label for="question17"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara terkait kondisi fasilitas yang ada di Rumah Sakit? <font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question17" value="Tidak Baik"> Tidak Baik<br>
                            <input type="radio" name="question17" value="Kurang Baik"> Kurang Baik<br>
                            <input type="radio" name="question17" value="Baik"> Baik<br>
                            <input type="radio" name="question17" value="Sangat Baik"> Sangat Baik<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question18"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara terkait kebersihan ruang perawatan saudara?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question18" value="Tidak Bersih"> Tidak Bersih<br>
                            <input type="radio" name="question18" value="Kurang Bersih"> Kurang Bersih<br>
                            <input type="radio" name="question18" value="Bersih"> Bersih<br>
                            <input type="radio" name="question18" value="Sangat Bersih"> Sangat Bersih<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <h3>
                            <hr>Pelayanan Kasir (Administrasi)
                        </h3>
                        <div class="form-group col-lg-6">
                            <label for="question19"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara tentang prosedur pelayanan di bagian Administrasi (Kasir)?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question19" value="Tidak Mudah"> Tidak Mudah<br>
                            <input type="radio" name="question19" value="Kurang Mudah"> Kurang Mudah<br>
                            <input type="radio" name="question19" value="Mudah"> Mudah<br>
                            <input type="radio" name="question19" value="Sangat Mudah"> Sangat Mudah<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question20"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara tentang kewajaran biaya pelayanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question20" value="Tidak Wajar"> Tidak Wajar<br>
                            <input type="radio" name="question20" value="Kurang Wajar"> Kurang Wajar<br>
                            <input type="radio" name="question20" value="Wajar"> Wajar<br>
                            <input type="radio" name="question20" value="Sangat Wajar"> Sangat Wajar<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question21"><span class="required"></span><b>
                                    <h6> 3. Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas kasir?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question21" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question21" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question21" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question21" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <h3>
                            <hr>Pelayanan Petugas Keamanan
                        </h3>
                        <div class="form-group col-lg-6">
                            <label for="question22"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara terkait kepedulian petugas keamanan terhadap pasien dan keluarga?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question22" value="Tidak Peduli"> Tidak Peduli<br>
                            <input type="radio" name="question22" value="Kurang Peduli"> Kurang Peduli<br>
                            <input type="radio" name="question22" value="Peduli"> Peduli<br>
                            <input type="radio" name="question22" value="Sangat Peduli"> Sangat Peduli<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question23"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara terkait sikap Petugas Keamanan?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question23" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question23" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question23" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question23" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <h3>
                            <hr>Pelayanan Parkir
                        </h3>
                        <div class="form-group col-lg-6">
                            <label for="question24"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara terkait fasilitas parkir yang disediakan oleh Rumah Sakit?<font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question24" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question24" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question24" value="Puas"> Puas<br>
                            <input type="radio" name="question24" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question25"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara tentang keamanan parkir di Rumah Sakit? <font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question25" value="Tidak Aman"> Tidak Aman<br>
                            <input type="radio" name="question25" value="Kurang Aman"> Kurang Aman<br>
                            <input type="radio" name="question25" value="Aman"> Aman<br>
                            <input type="radio" name="question25" value="Sangat Aman"> Sangat Aman<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question26"><span class="required"></span><b>
                                    <h6> 3. Bagaimana pendapat saudara terkait sikap petugas parkir? <font color="red"> *</font>
                                    </h6>
                                </b></label><br>
                            <input type="radio" name="question26" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question26" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question26" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question26" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                    </div><!-- ends row -->

                </div>
                <br>
                <center>
                    <h3>Kuesioner Pelayanan Penunjang</h3>
                </center>
                <br>
                <div class="container border p-5">

                    <div class="row">
                        <h3>Pelayanan Laboratorium </h3>
                        <p>
                            <font color="red">(Mohon untuk tidak diisi jika pasien TIDAK MELEWATI PELAYANAN ini)</font>
                        </p>

                        <!-- starts row -->
                        <div class="form-group col-lg-6">
                            <label for="question27"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara terkait sikap petugas laboratorium?</h6>
                                </b></label>
                            <input type="radio" name="question27" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question27" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question27" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question27" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question28"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas laboratorium?</h6>
                                </b></label>
                            <input type="radio" name="question28" value="Tidak Jelas"> Tidak Jelas<br>
                            <input type="radio" name="question28" value="Kurang Jelas"> Kurang Jelas<br>
                            <input type="radio" name="question28" value="Jelas"> Jelas<br>
                            <input type="radio" name="question28" value="Sangat Jelas"> Sangat Jelas<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question29"><span class="required"></span><b>
                                    <h6> 3. Apakah saudara puas dengan pelayanan yang diberikan oleh Laboratorium?</h6>
                                </b></label><br>
                            <input type="radio" name="question29" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question29" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question29" value="Puas"> Puas<br>
                            <input type="radio" name="question29" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <hr>
                        <h3>Pelayanan Radiologi</h3>
                        <p>
                            <font color="red">(Radiologi merupakan pemeriksaan radiografi atau dikenal dengan Foto Rontgen)</font>
                        </p>
                        <!-- starts row -->
                        <div class="form-group col-lg-6">
                            <label for="question30"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara terkait sikap petugas Radiologi?</h6>
                                </b></label>
                            <input type="radio" name="question30" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question30" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question30" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question30" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question31"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas Radiologi?</h6>
                                </b></label>
                            <input type="radio" name="question31" value="Tidak Jelas"> Tidak Jelas<br>
                            <input type="radio" name="question31" value="Kurang Jelas"> Kurang Jelas<br>
                            <input type="radio" name="question31" value="Jelas"> Jelas<br>
                            <input type="radio" name="question31" value="Sangat Jelas"> Sangat Jelas<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question32"><span class="required"></span><b>
                                    <h6> 3. Apakah saudara puas dengan pelayanan yang diberikan oleh Radiologi?</h6>
                                </b></label><br>
                            <input type="radio" name="question32" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question32" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question32" value="Puas"> Puas<br>
                            <input type="radio" name="question32" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <hr>
                        <h3>Pelayanan Farmasi</h3>
                        <p>
                            <font color="red">(Farmasi atau yang juga dikenal dengan istilah Apotek)</font>
                        </p>
                        <!-- starts row -->
                        <div class="form-group col-lg-6">
                            <label for="question33"><span class="required"></span><b>
                                    <h6> 1. Bagaimana pendapat saudara terkait sikap petugas Farmasi?</h6>
                                </b></label>
                            <input type="radio" name="question33" value="Tidak Sopan dan Tidak Ramah"> Tidak Sopan dan Tidak Ramah<br>
                            <input type="radio" name="question33" value="Kurang Sopan dan Kurang Ramah"> Kurang Sopan dan Kurang Ramah<br>
                            <input type="radio" name="question33" value="Sopan dan Ramah"> Sopan dan Ramah<br>
                            <input type="radio" name="question33" value="Sangat Sopan dan Sangat Ramah"> Sangat Sopan dan Sangat Ramah<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question34"><span class="required"></span><b>
                                    <h6> 2. Bagaimana pendapat saudara terkait prosedur pelayanan farmasi?</h6>
                                </b></label>
                            <input type="radio" name="question34" value="Tidak Mudah"> Tidak Mudah<br>
                            <input type="radio" name="question34" value="Kurang Mudah"> Kurang Mudah<br>
                            <input type="radio" name="question34" value="Mudah"> Mudah<br>
                            <input type="radio" name="question34" value="Sangat Mudah"> Sangat Mudah<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question35"><span class="required"></span><b>
                                    <h6> 3. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas farmasi?</h6>
                                </b></label>
                            <input type="radio" name="question35" value="Tidak Jelas"> Tidak Jelas<br>
                            <input type="radio" name="question35" value="Kurang Jelas"> Kurang Jelas<br>
                            <input type="radio" name="question35" value="Jelas"> Jelas<br>
                            <input type="radio" name="question35" value="Sangat Jelas"> Sangat Jelas<br>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="question36"><span class="required"></span><b>
                                    <h6> 4. Apakah saudara puas dengan pelayanan di Farmasi?</h6>
                                </b></label><br>
                            <input type="radio" name="question36" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question36" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question36" value="Puas"> Puas<br>
                            <input type="radio" name="question36" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                    </div><!-- ends row -->
                </div>

                <br>
                <div class="container border p-5">
                    <center>
                        <h3>Kritik / Saran</h3>
                    </center>
                    <div class="row">
                        <!-- starts row -->
                        <div class="form-group col-lg-12">
                            <label for="question37"><span class="required"></span><b>
                                    <h6>Bagaimana pendapat Saudara tentang tindak lanjut/tanggapan dari pengaduan/saran/komplain yang saudara sampaikan kepada petugas ?</h6>
                                </b></label><br>
                            <input type="radio" name="question37" value="Tidak Puas"> Tidak Puas<br>
                            <input type="radio" name="question37" value="Kurang Puas"> Kurang Puas<br>
                            <input type="radio" name="question37" value="Puas"> Puas<br>
                            <input type="radio" name="question37" value="Sangat Puas"> Sangat Puas<br>
                        </div>
                    </div><!-- ends row -->
                    <div class="row">
                        <div class="form-group clearfix col-lg-6">
                            <label for="suggestion1"><b>
                                    <h6> Mohon berikan saran/kritik kepada pelayanan yang kami berikan sebagai upaya peningkatan kualitas pelayanan yang kami berikan</h6>
                                </b></label>
                            <textarea aria-required="true" rows="5" cols="45" name="suggestion1" id="suggestion1" class="form-control requiredField mezage" placeholder="Your Answer..."></textarea>
                        </div>
                        <div class="form-group clearfix col-lg-6">
                            <label for="suggestion2"><b>
                                    <h6> JIka Ada Kritik Mohon Sampaikan tanggal kejadian, agar kami dapat membenahi kekurangan pelayanan yang kami berikan</h6>
                                </b></label>
                            <textarea aria-required="true" rows="5" cols="45" name="suggestion2" id="suggestion2" class="form-control requiredField mezage" placeholder="Your Answer..."></textarea>
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