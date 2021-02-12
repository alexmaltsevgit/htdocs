

<?php

$first = 10;
$second = 5;
$third = 3;

$bool1 = true;
$bool2 = false;

// 1 task
print('1 task: ' . $first + $second . "<br>");

// 2 task
print('2 task: ' . $first - $second . "<br>");

// 3 task
print('3 task: ' . $first * $second * $third . "<br>");

// 4 task
print('4 task: ' . sqrt($first) . "<br>");

// 5 task
  // В php true к строке приводится как "1", а false - как пустая строка (""), поэтому в выводе закономерно будет 1.
print('5 task: ' . ($bool1 and $bool2) . ($bool1 or $bool2) . "<br>");

// 6 task
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// 7 task
$associative_arr = array("first" => 1, "second" => 2);

// 8 task
$full_name = "Петров Петр Петрович";
$names = explode(' ', $full_name);
$name = $names[1];
$surname = $names[0];
$patronymic = $names[2];
print('8 task: ' . $surname . ' ' . mb_substr($name, 0, 1) . '. ' . mb_substr($patronymic, 0 , 1) . ".<br>");

?>
