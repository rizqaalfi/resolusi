 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question1', ''],
             <?php foreach ($chartBar as $bar) {
                    echo "['" . strval($bar['question1']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question2', ''],
             <?php foreach ($chartBar2 as $bar) {
                    echo "['" . strval($bar['question2']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question3', ''],
             <?php foreach ($chartBar3 as $bar) {
                    echo "['" . strval($bar['question3']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question4', ''],
             <?php foreach ($chartBar4 as $bar) {
                    echo "['" . strval($bar['question4']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question5', ''],
             <?php foreach ($chartBar5 as $bar) {
                    echo "['" . strval($bar['question5']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart5'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question6', ''],
             <?php foreach ($chartBar6 as $bar) {
                    echo "['" . strval($bar['question6']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart6'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question7', ''],
             <?php foreach ($chartBar7 as $bar) {
                    echo "['" . strval($bar['question7']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart7'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question8', ''],
             <?php foreach ($chartBar8 as $bar) {
                    echo "['" . strval($bar['question8']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart8'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question9', ''],
             <?php foreach ($chartBar9 as $bar) {
                    echo "['" . strval($bar['question9']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart9'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question10', ''],
             <?php foreach ($chartBar10 as $bar) {
                    echo "['" . strval($bar['question10']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart10'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question11', ''],
             <?php foreach ($chartBar11 as $bar) {
                    echo "['" . strval($bar['question11']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart11'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question12', ''],
             <?php foreach ($chartBar12 as $bar) {
                    echo "['" . strval($bar['question12']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart12'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question13', ''],
             <?php foreach ($chartBar13 as $bar) {
                    echo "['" . strval($bar['question13']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart13'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question14', ''],
             <?php foreach ($chartBar14 as $bar) {
                    echo "['" . strval($bar['question14']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart14'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question15', ''],
             <?php foreach ($chartBar15 as $bar) {
                    echo "['" . strval($bar['question15']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart15'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question16', ''],
             <?php foreach ($chartBar16 as $bar) {
                    echo "['" . strval($bar['question16']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart16'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question17', ''],
             <?php foreach ($chartBar17 as $bar) {
                    echo "['" . strval($bar['question17']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart17'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question18', ''],
             <?php foreach ($chartBar18 as $bar) {
                    echo "['" . strval($bar['question18']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart18'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question19', ''],
             <?php foreach ($chartBar19 as $bar) {
                    echo "['" . strval($bar['question19']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart19'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question20', ''],
             <?php foreach ($chartBar20 as $bar) {
                    echo "['" . strval($bar['question20']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart20'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question21', ''],
             <?php foreach ($chartBar21 as $bar) {
                    echo "['" . strval($bar['question21']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart21'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question22', ''],
             <?php foreach ($chartBar22 as $bar) {
                    echo "['" . strval($bar['question22']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart22'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question23', ''],
             <?php foreach ($chartBar23 as $bar) {
                    echo "['" . strval($bar['question23']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart23'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question24', ''],
             <?php foreach ($chartBar24 as $bar) {
                    echo "['" . strval($bar['question24']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart24'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question25', ''],
             <?php foreach ($chartBar25 as $bar) {
                    echo "['" . strval($bar['question25']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart25'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question26', ''],
             <?php foreach ($chartBar26 as $bar) {
                    echo "['" . strval($bar['question26']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart26'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question27', ''],
             <?php foreach ($chartBar27 as $bar) {
                    echo "['" . strval($bar['question27']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart27'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question28', ''],
             <?php foreach ($chartBar28 as $bar) {
                    echo "['" . strval($bar['question28']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart28'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question29', ''],
             <?php foreach ($chartBar29 as $bar) {
                    echo "['" . strval($bar['question29']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart29'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question30', ''],
             <?php foreach ($chartBar30 as $bar) {
                    echo "['" . strval($bar['question30']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart30'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question31', ''],
             <?php foreach ($chartBar31 as $bar) {
                    echo "['" . strval($bar['question31']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart31'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question32', ''],
             <?php foreach ($chartBar32 as $bar) {
                    echo "['" . strval($bar['question32']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart32'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question33', ''],
             <?php foreach ($chartBar33 as $bar) {
                    echo "['" . strval($bar['question33']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart33'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question34', ''],
             <?php foreach ($chartBar34 as $bar) {
                    echo "['" . strval($bar['question34']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart34'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question35', ''],
             <?php foreach ($chartBar35 as $bar) {
                    echo "['" . strval($bar['question35']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart35'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question36', ''],
             <?php foreach ($chartBar36 as $bar) {
                    echo "['" . strval($bar['question36']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart36'));

         chart.draw(data, options);
     }
 </script>

 <script type="text/javascript">
     google.charts.load('current', {
         'packages': ['corechart']
     });
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

         var data = google.visualization.arrayToDataTable([
             ['Question37', ''],
             <?php foreach ($chartBar37 as $bar) {
                    echo "['" . strval($bar['question37']) . "', " . $bar['num'] . "],";
                } ?>
         ]);

         var options = {
             title: ''
         };

         var chart = new google.visualization.PieChart(document.getElementById('piechart37'));

         chart.draw(data, options);
     }
 </script>

 <style type="text/css">
     [aria-expanded="false"]>.expanded,
     [aria-expanded="true"]>.collapsed {
         display: none;
     }
 </style>


 <div class="row">
     <center>
         <h3>Pelayanan Pendaftaran</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara terkait kesesuaian persyaratan yang harus dipenuhi dalam pengurusan pendaftaran pasien dengan jenis pelayanan yang diberikan?
                     </a>
                 </div>
                 <div id="menuone" class="collapse">
                     <div class="card-body">
                         <div id="piechart"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwo" aria-expanded="false" aria-controls="menutwo">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat Saudara tentang prosedur pelayanan yang dilaksanakan?
                     </a>
                 </div>
                 <div id="menutwo" class="collapse">
                     <div class="card-body">
                         <div id="piechart2"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthree" aria-expanded="false" aria-controls="menuthree">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Bagaimana menurut Saudara tentang ketepatan waktu pelayanan pelayanan yang dilaksanakan?
                     </a>
                 </div>
                 <div id="menuthree" class="collapse">
                     <div class="card-body">
                         <div id="piechart3"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menufour" aria-expanded="false" aria-controls="menufour">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         4. Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas pendaftaran?
                     </a>
                 </div>
                 <div id="menufour" class="collapse">
                     <div class="card-body">
                         <div id="piechart4"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Instalasi Gawat Darurat</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menufive" aria-expanded="false" aria-controls="menufive">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara tentang ketepatan waktu petugas dalam memberikan pelayanan?
                     </a>
                 </div>
                 <div id="menufive" class="collapse">
                     <div class="card-body">
                         <div id="piechart5"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menusix" aria-expanded="false" aria-controls="menusix">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara terkait sikap petugas dalam memberikan pelayanan?
                     </a>
                 </div>
                 <div id="menusix" class="collapse">
                     <div class="card-body">
                         <div id="piechart6"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuseven" aria-expanded="false" aria-controls="menuseven">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Bagaimana pendapat saudara dengan hasil pelayanan yang telah diberikan di Instalasi Gawat Darurat?
                     </a>
                 </div>
                 <div id="menuseven" class="collapse">
                     <div class="card-body">
                         <div id="piechart7"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Perawat / Bidan Ruangan</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menueight" aria-expanded="false" aria-controls="menueight">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara tentang ketepatan waktu pelayanan oleh perawat / bidan ruangan?
                 </div>
                 <div id="menueight" class="collapse">
                     <div class="card-body">
                         <div id="piechart8"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menunine" aria-expanded="false" aria-controls="menunine">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara tentang sikap petugas (perawat/bidan ruangan) dalam memberikan pelayanan?
                     </a>
                 </div>
                 <div id="menunine" class="collapse">
                     <div class="card-body">
                         <div id="piechart9"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuten" aria-expanded="false" aria-controls="menuten">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Bagaimana pendapat saudara dengan pelayanan yang telah diberikan oleh Perawat/Bidan?
                     </a>
                 </div>
                 <div id="menuten" class="collapse">
                     <div class="card-body">
                         <div id="piechart10"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Dokter Penanggung Jawab Pasien</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menueleven" aria-expanded="false" aria-controls="menueleven">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana menurut saudara tentang ketepatan waktu pelayanan oleh Dokter Penanggung Jawab Pasien?
                 </div>
                 <div id="menueleven" class="collapse">
                     <div class="card-body">
                         <div id="piechart11"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwelve" aria-expanded="false" aria-controls="menutwelve">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara mengenai hasil dari pelayanan yang telah diberikan?
                     </a>
                 </div>
                 <div id="menutwelve" class="collapse">
                     <div class="card-body">
                         <div id="piechart12"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirteen" aria-expanded="false" aria-controls="menuthirteen">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Bagaiaman pendapat saudara tentang Sikap Dokter dalam memberikan pelayanan?
                     </a>
                 </div>
                 <div id="menuthirteen" class="collapse">
                     <div class="card-body">
                         <div id="piechart13"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Gizi</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menufourteen" aria-expanded="false" aria-controls="menufourteen">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana menurut saudara tentang ketepatan waktu pemberian makanan?
                 </div>
                 <div id="menufourteen" class="collapse">
                     <div class="card-body">
                         <div id="piechart14"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menufifteen" aria-expanded="false" aria-controls="menufifteen">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara terkait Rasa dan Kualitas makanan yang telah diberikan?
                     </a>
                 </div>
                 <div id="menufifteen" class="collapse">
                     <div class="card-body">
                         <div id="piechart15"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menusixteen" aria-expanded="false" aria-controls="menusixteen">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Bagaimana pendapat saudara tentang sikap petugas pengantar makanan pasien?
                     </a>
                 </div>
                 <div id="menusixteen" class="collapse">
                     <div class="card-body">
                         <div id="piechart16"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Sarana & Prasarana</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuseventeen" aria-expanded="false" aria-controls="menuseventeen">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara terkait kondisi fasilitas yang ada di Rumah Sakit?
                 </div>
                 <div id="menuseventeen" class="collapse">
                     <div class="card-body">
                         <div id="piechart17"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menueighteen" aria-expanded="false" aria-controls="menueighteen">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara terkait kebersihan ruang perawatan saudara?
                     </a>
                 </div>
                 <div id="menueighteen" class="collapse">
                     <div class="card-body">
                         <div id="piechart18"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Kasir (Administrasi)</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menunineteen" aria-expanded="false" aria-controls="menunineteen">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara tentang prosedur pelayanan di bagian Administrasi (Kasir)?
                 </div>
                 <div id="menunineteen" class="collapse">
                     <div class="card-body">
                         <div id="piechart19"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty" aria-expanded="false" aria-controls="menutwenty">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara tentang kewajaran biaya pelayanan?
                     </a>
                 </div>
                 <div id="menutwenty" class="collapse">
                     <div class="card-body">
                         <div id="piechart20"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-one" aria-expanded="false" aria-controls="menutwenty-one">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Bagaimana pendapat saudara tentang kesopanan dan keramahan petugas kasir?
                     </a>
                 </div>
                 <div id="menutwenty-one" class="collapse">
                     <div class="card-body">
                         <div id="piechart21"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Petugas Keamanan</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-two" aria-expanded="false" aria-controls="menutwenty-two">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara terkait kepedulian petugas keamanan terhadap pasien dan keluarga?
                 </div>
                 <div id="menutwenty-two" class="collapse">
                     <div class="card-body">
                         <div id="piechart22"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-three" aria-expanded="false" aria-controls="menutwenty-three">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara terkait sikap Petugas Keamanan?
                     </a>
                 </div>
                 <div id="menutwenty-three" class="collapse">
                     <div class="card-body">
                         <div id="piechart23"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Parkir</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-four" aria-expanded="false" aria-controls="menutwenty-four">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara terkait fasilitas parkir yang disediakan oleh Rumah Sakit?
                 </div>
                 <div id="menutwenty-four" class="collapse">
                     <div class="card-body">
                         <div id="piechart24"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-five" aria-expanded="false" aria-controls="menutwenty-five">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara tentang keamanan parkir di Rumah Sakit?
                     </a>
                 </div>
                 <div id="menutwenty-five" class="collapse">
                     <div class="card-body">
                         <div id="piechart25"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-six" aria-expanded="false" aria-controls="menutwenty-six">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Bagaimana pendapat saudara terkait sikap petugas parkir?
                     </a>
                 </div>
                 <div id="menutwenty-six" class="collapse">
                     <div class="card-body">
                         <div id="piechart26"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Laboratorium</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-seven" aria-expanded="false" aria-controls="menutwenty-seven">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara terkait sikap petugas laboratorium?
                 </div>
                 <div id="menutwenty-seven" class="collapse">
                     <div class="card-body">
                         <div id="piechart27"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-eight" aria-expanded="false" aria-controls="menutwenty-eight">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas laboratorium?
                     </a>
                 </div>
                 <div id="menutwenty-eight" class="collapse">
                     <div class="card-body">
                         <div id="piechart28"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menutwenty-nine" aria-expanded="false" aria-controls="menutwenty-nine">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Apakah saudara puas dengan pelayanan yang diberikan oleh Laboratorium?
                     </a>
                 </div>
                 <div id="menutwenty-nine" class="collapse">
                     <div class="card-body">
                         <div id="piechart29"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Radiologi</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirty" aria-expanded="false" aria-controls="menuthirty">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara terkait sikap petugas Radiologi?
                 </div>
                 <div id="menuthirty" class="collapse">
                     <div class="card-body">
                         <div id="piechart30"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirty-one" aria-expanded="false" aria-controls="menuthirty-one">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas Radiologi?
                     </a>
                 </div>
                 <div id="menuthirty-one" class="collapse">
                     <div class="card-body">
                         <div id="piechart31"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirty-two" aria-expanded="false" aria-controls="menuthirty-two">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Apakah saudara puas dengan pelayanan yang diberikan oleh Radiologi?
                     </a>
                 </div>
                 <div id="menuthirty-two" class="collapse">
                     <div class="card-body">
                         <div id="piechart32"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Pelayanan Farmasi</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirty-three" aria-expanded="false" aria-controls="menuthirty-three">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana pendapat saudara terkait sikap petugas Farmasi?
                 </div>
                 <div id="menuthirty-three" class="collapse">
                     <div class="card-body">
                         <div id="piechart33"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirty-four" aria-expanded="false" aria-controls="menuthirty-four">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         2. Bagaimana pendapat saudara terkait prosedur pelayanan farmasi?
                     </a>
                 </div>
                 <div id="menuthirty-four" class="collapse">
                     <div class="card-body">
                         <div id="piechart34"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirty-five" aria-expanded="false" aria-controls="menuthirty-five">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         3. Bagaimana pendapat saudara terkait kejelasan informasi yang diberikan oleh petugas farmasi?
                     </a>
                 </div>
                 <div id="menuthirty-five" class="collapse">
                     <div class="card-body">
                         <div id="piechart35"></div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirty-six" aria-expanded="false" aria-controls="menuthirty-six">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         4. Apakah saudara puas dengan pelayanan di Farmasi?
                     </a>
                 </div>
                 <div id="menuthirty-six" class="collapse">
                     <div class="card-body">
                         <div id="piechart36"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <hr>
 <div class="row">
     <center>
         <h3>Saran / Kritik</h3>
     </center><br>
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuthirty-seven" aria-expanded="false" aria-controls="menuthirty-seven">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         Bagaimana pendapat Saudara tentang tindak lanjut/tanggapan dari pengaduan/saran/komplain yang saudara sampaikan kepada petugas ?
                 </div>
                 <div id="menuthirty-seven" class="collapse">
                     <div class="card-body">
                         <div id="piechart37"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>