<?php

error_reporting(0);

class Form {
  public $one, $two, $three, $four, $five;
  
  function __construct() {
    $this->one = isset($_FILES['one']) ? $_FILES['one'] : 0;
    $this->two = ($_POST['two']) ? $_POST['two'] : 0;
    $this->three = ($_POST['three']) ? $_POST['three'] : 0;
    $this->four = ($_POST['four']) ? $_POST['four'] : 0;
    $this->five = ($_POST['five']) ? $_POST['five'] : 0;
  }
  
  function SaveFile() {
    move_uploaded_file($this->one['tmp_name'], 'img/' . $this->one['name']);
  }
  
  function DeleteFile() {
    unlink('img/' . $this->one['name']);
  }
}

$form = new Form();
$form->SaveFile();
//sleep(3);
$form->DeleteFile();
