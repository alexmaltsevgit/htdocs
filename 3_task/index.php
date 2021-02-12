<?php

// BLOCK 1
print "<br>\t 1 BLOCK <br>";

$arr = [1, 2, 4, 8, 16];
print count($arr) . "<br>";

print $arr[count($arr) - 1] . "<br>";


// BLOCK 2
print "<br>\t 2 BLOCK <br>";

print in_array(3, $arr) ? 'Есть тройка' : 'Нет тройки' . "<br>";


// BLOCK 3
print "<br>\t 3 BLOCK <br>";

$arr = [1, 2, 3, 4, 5];
print array_sum($arr) . "<br>";

print array_product($arr) . "<br>";

print array_sum($arr) / count($arr) . "<br>";


// BLOCK 4
print "<br>\t 4 BLOCK <br>";

$arr = range(1, 100);
print_r($arr);

$arr = range(chr(ord('a')), chr(ord('z')));
print_r($arr);

$str = implode('-', range(1, 9));
print $str . "<br>";

print array_product(range(1, 10)) . "<br>";


// BLOCK 5
print "<br>\t 5 BLOCK <br>";

$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$arr = array_merge($arr1, $arr2);
print_r($arr);


// BLOCK 6
print "<br>\t 6 BLOCK <br>";

$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3);
print_r($result);


// BLOCK 7
print "<br>\t 7 BLOCK <br>";

$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 2);
print_r($arr);

$arr = [1, 2, 3, 4, 5];
$result = array_splice($arr, 1, 3);
print_r($result);

$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3, 0, ['a', 'b', 'c']);
print_r($arr);

$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, ['a', 'b']);
array_splice($arr, 6, 0, ['c']);
array_splice($arr, 8, 0, ['e']);
print_r($arr);


// BLOCK 8
print "<br>\t 8 BLOCK <br>";

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
print_r($keys);
print_r($values);

$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
$arr = array_combine($keys, $values);
print_r($arr);


// BLOCK 9
print "<br>\t 9 BLOCK <br>";

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr = array_flip($arr);
print_r($arr);

$arr = [1, 2, 3, 4, 5];
$arr = array_reverse($arr);
print_r($arr);


// BLOCK 10
print "<br>\t 10 BLOCK <br>";

$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
print array_search('-', $arr);

$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
array_splice($arr, array_search('-', $arr), 1);
print_r($arr);


// BLOCK 11
print "<br>\t 11 BLOCK <br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
$arr = array_replace($arr, ['0' => '!', '3' => '!!']);
print_r($arr);


// BLOCK 12
print "<br>\t 12 BLOCK <br>";

$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
sort($arr);
print_r($arr);


// BLOCK 13
print "<br>\t 13 BLOCK <br>";

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
print array_rand($arr) . "<br>";

$arr = ['a'=>1, 'b'=>2, 'c'=>3];
print $arr[array_rand($arr)];


// BLOCK 14
print "<br>\t 14 BLOCK <br>";

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
shuffle($arr);
print_r($arr);

$arr = range(1, 25);
shuffle($arr);
print_r($arr);

$arr = range(chr(ord('a')), chr(ord('z')));
shuffle($arr);
print_r($arr);

$arr = str_split('qwerty');
shuffle($arr);
print_r($arr);


// BLOCK 15
print "<br>\t 15 BLOCK <br>";

$arr = ['a', 'b', 'c', 'b', 'a'];
$arr = array_unique($arr);
print_r($arr);


// BLOCK 16
print "<br>\t 16 BLOCK <br>";

$arr = [1, 2, 3, 4, 5];
print array_shift($arr) . ' ' . array_pop($arr) . "<br>";

$arr = [1, 2, 3, 4, 5];
array_unshift($arr, 0);
array_push($arr, 6);
print_r($arr);

$arr = [1, 2, 3, 4, 5, 6, 7, 8];
while(count($arr))
  print((count($arr) % 2) ? array_pop($arr) : array_shift($arr));
print "<br>";


// BLOCK 17
print "<br>\t 17 BLOCK <br>";

$arr = ['a', 'b', 'c'];
$arr = array_pad($arr, 6, '-');
print_r($arr);

$arr = array_fill(0, 10, 'x');
print_r($arr);

$arr = range(1, 20);
$arr = array_chunk($arr, 4);
print_r($arr);


// BLOCK 18
print "<br>\t 18 BLOCK <br>";

$arr = ['a', 'b', 'c', 'b', 'a'];
print_r(array_count_values($arr));


// BLOCK 19
print "<br>\t 19 BLOCK <br>";

$arr = [1, 2, 3, 4, 5];
$square = function ($num) { return $num * $num; };
$result = array_map($square, $arr);
print_r($result);

$arr = ['<b>php</b>', '<i>html</i>'];
$result = array_map('strip_tags', $arr);
print_r($result);

$arr = [' a ', ' b ', ' с '];
$result = array_map('trim', $arr);
print_r($result);


// BLOCK 20
print "<br>\t 20 BLOCK <br>";

$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$arr = array_intersect($arr1, $arr2);
print_r($arr);

$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$arr = array_merge(array_diff($arr1, $arr2), array_diff($arr2, $arr1));
print_r($arr);


// Дополнительные задания
print "<br>\t Дополнительные задания <br>";

$str = '1234567890';
print array_sum(str_split($str)) . "<br>";

$keys = range(chr(ord('a')), chr(ord('z')));
$values = range(1, 26);
$arr = array_combine($keys, $values);
print_r($arr);

$arr = (array_chunk(range(1, 9), 3));
print_r($arr);

$arr = [1, 2, 3, 4, 5, 5];
sort($arr);
print $arr[array_search(max($arr), $arr) - 1];

?>
