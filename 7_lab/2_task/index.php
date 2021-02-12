<?php

// linear search
function linear($arr, $num) {
  if(!isset($arr))
    return -1;
  
  for($i = 0; $i < count($arr); $i++)
    if($arr[$i] === $num)
      return $i;
  
  // if element was not found - return -1
  return -1;
}

// binary search
function binary($arr, $num) {
  if (!isset($arr))
    return -1;
    
  $left = 0;
  $right = count($arr) - 1;
  
  while($left <= $right) {
    $mid = intdiv($left + $right, 2);
    
    if($arr[$mid] === $num)
      return $mid;
      
    else if($arr[$mid] > $num)
      $right = $mid - 1;
      
    else
      $left = $mid + 1;
  }
  
  // if element was not found - return -1
  return -1;
}

// index-sequence search
function index_sequence_search($arr, $key, $blockSize = 4) {
  if (!isset($arr))
    return -1;

  $elements = [];
  $indices = [];
  $start = 0;
  $end = 0;
  $isFound = false;
  
  // form index table
  for ($i = 0, $ind = 0; $i < count($arr); $i += $blockSize, $ind++) {
    $elements[$ind] = $arr[$i];
    $indices[$ind] = $i;;
  }
  
  // add last partial block to the index table
  $i = $i - $blockSize;
  $elements[$ind] = $arr[$i];
  $indices[$ind] = $i;
  
  $i = count($arr) - 1;
  $ind++;
  $elements[$ind] = $arr[$i];
  $indices[$ind] = $i;
  
  // define elements[-1] to avoid errors on beggining
  $indices[-1] = $indices[0];
  
  if ($key < $elements[0])
    return -1;

  // search needed block
  for ($i = 0; $i <= $ind; $i++) {
    if ($key <= $elements[$i]) {
      $start = $indices[$i - 1];
      $end = $indices[$i];
      break;
    }
  }

  // search element in block
  for ($i = $start; $i <= $end; $i++) {
    if ($key == $arr[$i]) {
      $isFound = true;
      break;
    }
  }

  if ($isFound)
    return $i;
    
  return -1;
}