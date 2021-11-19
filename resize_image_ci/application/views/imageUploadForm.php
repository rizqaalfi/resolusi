<!DOCTYPE html>
<html lang="en">

<head>
  <title>Codeigniter compress</title>
</head>

<body>


  <?php echo $error; ?>
  <form action="ImageUpload/uploadImage" method="post" enctype="multipart/form-data">
    <input type="file" name="image" size="20" />
    <input type="submit" value="upload" />
  </form>

</body>

</html>