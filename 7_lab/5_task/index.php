<?php

include_once('../2_task/index.php');

$A = range(0, 100);
$len = count($A);
$aliquot = 4;


// linear
echo '<b>LINEAR</b> <br>';

for ($i = 0; $i < $len; $i += $aliquot)
  if (linear($A, $i) != -1)
    echo $A[$i] . ' ';

echo '<br><br>';

// binary
echo '<b>BINARY</b> <br>';

for ($i = 0; $i < $len; $i += $aliquot)
  if (binary($A, $i) != -1)
    echo $A[$i] . ' ';

echo '<br><br>';

// index-sequence
echo '<b>INDEX-SEQUENCE</b> <br>';

for ($i = 0; $i < $len; $i += 4)
  if (index_sequence_search($A, $i) != -1)
    echo $A[$i] . ' ';

echo '<br><br>';
