<?php
  include_once('upload.php');
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form enctype="multipart/form-data" method="post">
    <input type="file" name="image">
    <input type="submit" value="Загрузить файл">
  </form>
  
  <?php
    if (isset($_FILES['image'])) {
      $check = can_upload($_FILES['image']);

      if ($check === true) {
        $path = upload($_FILES['image']);
        echo '<br>';
        echo "<img src=\"$path\" alt=\"your image\">";
        echo '<br>';
      } else {
        echo "<b>$check</b>";
      }
    }
  ?>

</body>

</html>