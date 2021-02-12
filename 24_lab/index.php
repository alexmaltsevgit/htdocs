<?php
  error_reporting(0);
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
  <form enctype="multipart/form-data" method="post" action="upload.php">
    <input type="file" name="one">

    <br>
    <br>

    <input type="checkbox" name="two" value="1">1
    <input type="checkbox" name="two" value="2">2
    <input type="checkbox" name="two" value="3">3

    <br>
    <br>

    <input type="password" name="three">

    <br>
    <br>

    <input type="radio" name="three" value="1">1
    <input type="radio" name="three" value="2">2
    <input type="radio" name="three" value="3">3

    <br>
    <br>

    <input type="text" name="five">

    <br>
    <br>

    <input type="submit" value="Отправить">

  </form>

</body>

</html>