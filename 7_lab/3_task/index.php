<?php

include_once('../2_task/index.php');

$A = range(0, 100);

// linear
echo '<b>LINEAR</b> <br>';

$index = linear($A, 30) + 1;
for($index; $index < count($A) - 1; $index++)
  echo $A[$index] . ' ';
  
echo '<br><br>';

// binary
echo '<b>BINARY</b> <br>';
$index = binary($A, 30) + 1;
for ($index; $index < count($A) - 1; $index++)
  echo $A[$index] . ' ';

echo '<br><br>';

// index-sequence
echo '<b>INDEX-SEQUENCE</b> <br>';
$index = binary($A, 30) + 1;
for ($index; $index < count($A) - 1; $index++)
  echo $A[$index] . ' ';

echo '<br><br>';
