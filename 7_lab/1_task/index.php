<?php
include_once('substring.php');
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
    <input type="text" name="substring" placeholder="Подстрока">
    <br>
    <textarea name="string" cols="22" rows="10" style="resize: vertical" placeholder="Текст"></textarea>
    <br>
    <input type="submit" value="Найти подстроку">
  </form>
  
  <?php
  
    echo findWords();
  
  ?>

</body>

</html>