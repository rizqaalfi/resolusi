<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap stylesheet -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <!-- ClockPicker Stylesheet -->
  <link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">

</head>

<body>
  <!-- Input group, just add class 'clockpicker', and optional data-* -->
  <div class="input-group clockpicker">
    <input type="text" class="form-control" value="09:30">
    <span class="input-group-addon">
      <span class="glyphicon glyphicon-time"></span>
    </span>
  </div>
  <script type="text/javascript">
    $('.clockpicker').clockpicker();
  </script>


  <!-- jQuery and Bootstrap scripts -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

  <!-- ClockPicker script -->
  <script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>

  <script type="text/javascript">
    $('.clockpicker').clockpicker()
      .find('input').change(function() {
        // TODO: time changed
        console.log(this.value);
      });
    $('#demo-input').clockpicker({
      autoclose: true
    });

    if (something) {
      // Manual operations (after clockpicker is initialized).
      $('#demo-input').clockpicker('show') // Or hide, remove ...
        .clockpicker('toggleView', 'minutes');
    }
  </script>

</body>

</html>