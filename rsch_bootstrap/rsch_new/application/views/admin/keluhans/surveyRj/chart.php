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

 <style type="text/css">
     [aria-expanded="false"]>.expanded,
     [aria-expanded="true"]>.collapsed {
         display: none;
     }
 </style>


 <div class="row">
     <div class="col-md-6">
         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         1. Bagaimana menurut Saudara dengan kesesuaian persyaratan yang harus dipenuhi dalam pengurusan pelayanan dengan hasil jenis pelayanan yang diberikan?
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
                         4. Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan?
                     </a>
                 </div>
                 <div id="menufour" class="collapse">
                     <div class="card-body">
                         <div id="piechart4"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menufive" aria-expanded="false" aria-controls="menufive">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         5. Bagaimana pendapat Saudara dengan hasil dari pelayanan yang telah diberikan?
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
                         6. Bagaimana pendapat Saudara tentang kemampuan/ketrampilan petugas dalam memberikan pelayanan?
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
                         7. Bagaimana pendapat Saudara tentang kesopanan dan keramahan petugas dalam memberikan pelayanan?
                     </a>
                 </div>
                 <div id="menuseven" class="collapse">
                     <div class="card-body">
                         <div id="piechart7"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menueight" aria-expanded="false" aria-controls="menueight">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         8. Bagaimana pendapat Saudara tentang pelaksanaan Maklumat Pelayanan/Janji Layanan yang telah dijanjikan oleh penyelenggara pelayanan?
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
                         9. Bagaimana pendapat Saudara tentang tindak lanjut/tanggapan dari pengaduan/saran/komplain yang saudara sampaikan kepada petugas?
                     </a>
                 </div>
                 <div id="menunine" class="collapse">
                     <div class="card-body">
                         <div id="piechart9"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menuten" aria-expanded="false" aria-controls="menuten">
                         <span class="collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         10. Bagaimana kelengkapan fasilitas poliklinik (kursi tunggu, toilet, dll)
                 </div>
                 <div id="menuten" class="collapse">
                     <div class="card-body">
                         <div id="piechart10"></div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="col-md-12 col-sm-12 col-xs-12">
             <div class="panel panel-default">
                 <div class="panel-heading">
                     <a class="card-link" data-toggle="collapse" href="#menueleven" aria-expanded="false" aria-controls="menueleven">
                         <span class=" collapsed"><i class="fa fa-plus"></i></span>
                         <span class="expanded"><i class="fa fa-minus"></i></span>
                         11. Bagaimana Kebersihan Fasilitas Poliklinik?
                     </a>
                 </div>
                 <div id="menueleven" class="collapse">
                     <div class="card-body">
                         <div id="piechart11"></div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>