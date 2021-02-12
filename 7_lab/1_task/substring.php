<?php

function findWords() {
  /* check if we can start */
  if(!$_POST)
    return 'Введите текст и подстроку';

  if(!isset($_POST['substring']))
    return 'Вы не ввели подстроку';
  
  if(!isset($_POST['string']))
    return 'Вы не ввели текст';
  
  /* main proccess */
  
  // let put words to the array (without punctuation marks)
  $string = $_POST['string'];
  $string = preg_replace('/[0-9!.?,\-]+/', '', $string);
  $string = preg_split("/[\s]/", $string);
  
  // out substring
  $substring = $_POST['substring'];
  
  
  $isAnyWordFound = false;
  foreach($string as $str)
    if(strpos($str, $substring) != false) {
      echo $str . '<br>';
      $isAnyWordFound = true;
    }
  
  return ($isAnyWordFound) ? '' : 'Слов с такой подстрокой не найдено.' . '<br>';
}