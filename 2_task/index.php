<?php

// BLOCK 1
print("\tFIRST BLOCK<br>");

print('1.1 ');
$php = 'php';
print("$php ");
$php = strtoupper($php);
print("$php<br>");

print('1.2 ');
print("$php ");
$php = strtolower($php);
print("$php<br>");

print('1.3 ');
$london = 'london';
print("$london ");
$london = ucfirst($london);
print("$london<br>");

print('1.4 ');
print("$london ");
$london = lcfirst($london);
print("$london<br>");

print('1.5 ');
$sentence = 'london is the capital of great britain';
print("$sentence |");
$sentence = ucwords($sentence);
print(" $sentence<br>");

print('1.6 ');
$london = 'LONDON';
print("$london ");
$london = ucfirst(strtolower($london));
print("$london<br>");


// BLOCK 2
print("<br>\tSECOND BLOCK<br>");

print('2.1 ');
$str = 'html css php';
print(strlen($str) . "<br>");

print('2.2 ');
$password = 'abcdsd';
if(strlen($password) > 5 and strlen($password) < 10)
  print("Пароль подходит.<br>");
else
  print("Пароль не подходит, придумайте другой пароль.<br>");


// BLOCK 3
print("<br>\tTHIRD BLOCK<br>");

print('3.1 ');
$str = 'html css php';
$html = substr($str, 0, 4);
$css = substr($str, 5, 3);
$php = substr($str, 9);
print("$html $css $php<br>");

print('3.2 ');
$str = 'Lorem ipsum dolor sit amet';
print(substr($str, -3) . "<br>");

print('3.3 ');
$str = 'https://www.php.net/';
if(str_starts_with($str, 'http://'))
  print("Да<br>");
else
  print("Нет<br>");

print('3.4 ');
if(str_starts_with($str, 'http://') or str_starts_with($str, 'https://'))
  print("Да<br>");
else
  print("Нет<br>");

print('3.5 ');
$str = 'img.jpg';
if(str_ends_with($str, 'png'))
  print("Да<br>");
else
  print("Нет<br>");

print('3.6 '); 
if(str_ends_with($str, 'png') or str_ends_with($str, 'jpg'))
  print("Да<br>");
else
  print("Нет<br>");

print('3.7 ');
$str = 'Lorem ipsum';
if(strlen($str) > 5) {
  $str = substr($str, 5) . '...';
  print("$str<br>");
}
else
  print("$str<br>");
  

// BLOCK 4
print("<br>\tFOURTH BLOCK<br>");

print('4.1 ');
$str = '31.12.2013';
print("$str ");
$str = str_replace('.', '-', $str);
print("$str<br>");

print('4.2 ');
$str = 'abc bdcdsa';
print("$str | ");
$letters = ['a', 'b', 'c'];
$digits = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$str = str_replace($letters, $digits, $str);
print("$str<br>");

print('4.3 ');
$str = '1a2b3c4b5d6e7f8g9h0';
print("$str | ");
$str = str_replace($digits, '', $str);
print("$str<br>");


// BLOCK 5
print("<br>\tFIFTH BLOCK<br>");

print('Способ 1: ');
$str = 'acbgdsfbacbacbfgdsacbacb';
print("$str | ");
$letters = "abc";
$digits = "123";
$str = strtr($str, $letters, $digits);
print("$str<br>");

print('Способ 2: ');
$str = 'acbgdsfbacbacbfgdsacbacb';
print("$str | ");
$replace_pairs = array('a' => '1', 'b' => '2', 'c' => '3');
$str = strtr($str, $replace_pairs);
print("$str<br>");


// BLOCK 6
print("<br>\tSIXTH BLOCK<br>");

print('6.1 ');
$str = 'Lorem ipsum dolor sit amet';
print("$str | ");
$str = substr_replace($str, '!!!', 3, 5);
print("$str<br>");


// BLOCK 7
print("<br>\tSEVENTH BLOCK<br>");

print('7.1 ');
$str = 'abc abc abc';
print(strpos($str, 'b') . "<br>");

print('7.2 ');
$str = 'abc abc abc';
print(strrpos($str, 'b') . "<br>");

print('7.3 ');
$str = 'abc abc abc';
print(strpos($str, 'b', 3) . "<br>");

print('7.4 ');
$str = 'aaa aaa aaa aaa aaa';
print(strpos($str, ' ', strpos($str, ' ') + 1) . "<br>");

print('7.5 ');
$str = 'stringstring..string';
if(strpos($str, '..'))
  print("Есть.<br>");
else
  print("Нет.<br>");

print('7.6 ');
$str = 'http://www.php.net/';
if(str_starts_with($str, 'http://'))
  print("Да.<br>");
else
  print("Нет.<br>");


// BLOCK 8
print("<br>\tEIGHTH BLOCK<br>");

print('8.1 ');
$str = 'html css php';
$arr = explode(' ', $str);
foreach($arr as $word)
  print("$word ");
print("<br>");

print('8.2 ');
print(implode(', ', $arr) . "<br>");

print('8.3 ');
$date = '2013-12-31';
print(implode('.', explode('-', $date)) . "<br>");


// BLOCK 9
print("<br>\tNINETH BLOCK<br>");

print('9.1 ');
$str = 1234567890;
$arr = str_split($str, 2);
print("Строка разбита.<br>");

print('9.2 ');
$str = 1234567890;
$arr = str_split($str, 1);
print("Строка разбита.<br>");

print('9.3 ');
$str = 1234567890;
$arr = str_split($str, 2);
$str = implode('-', $arr);
print("$str<br>");


// BLOCK 10
print("<br>\tTENTH BLOCK<br>");

print('10.1 ');
$str = ' str ';
$str = trim($str);
print("str<br>");

print('10.2 ');
$str = '/php/';
$str = trim($str, '/');
print("$str<br>");

print('10.4 ');
$str = 'слова слова слова.';
$str = rtrim($str, '.') . '.';
print("$str<br>");

// BLOCK 11
print("<br>\tELEVENTH BLOCK<br>");

print('11.1 ');
$str = '12345';
$str = strrev($str);
print("$str<br>");

print('11.2 ');
$str = 'level';
if(!strcmp($str, strrev($str)))
  print("Палиндром<br>");
else
  print("Не палиндром<br>");
  
// BLOCK 12
print("<br>\tTWELFTH BLOCK<br>");

print('12.1 ');
$str = 'abcdefg';
$str = str_shuffle($str);
print("$str<br>");

print('12.1 ');
$str = 'abcdefghiklmnopqrstvxyz';
$str = substr(str_shuffle($str), 0, 6);
print("$str<br>");

// BLOCK 13
print("<br>\tTHIRTEENTH BLOCK<br>");

print('13.1 ');
$str = '12345678';
$str = number_format($str, 0, ',', ' ');
print("$str<br>");

// BLOCK 14
print("<br>\tFOURTEENTH BLOCK<br>");

print("14.1<br>");
$str = 'x';
for($i = 1; $i < 10; $i++)
  print(str_repeat($str, $i) . "<br>");
  
print("14.2<br>");
for($i = 1; $i < 10; $i++)
  print(str_repeat($i, $i) . "<br>");


// BLOCK 15
print("<br>\tFIFTEENTH BLOCK<br>");

print('15.1 ');
$str = 'html, <b>php</b>, js';
$str = strip_tags($str);
print("$str<br>");

print('15.2 ');
$str = '<a href="">html</a>, <b>php</b>, <i>js</i>';
$str = strip_tags($str, '<b><i>');
print("$str<br>");

print('15.3 ');
$str = 'html, <b>php</b>, js';
$str = htmlspecialchars($str);
print("$str<br>");


// BLOCK 16
print("<br>\tSIXTEENTH BLOCK<br>");

print('16.1 ');
print(ord('a') . ' ' . ord('b') . ' ' . ord('c') . ' ' . "<br>");

print('16.2 ');
print(ord('A') . '-' . ord('z') . "<br>");

print('16.3 ');
print(chr(33) . "<br>");

print('16.4 ');
$str = chr(rand(65,90));
print("$str<br>");

print('16.5 ');
$str = '';
$len = 10;
for ($i = 0; $i < $len; $i++)
	$str .= chr(rand(97,122));
print("$str<br>");
  
print('16.6 ');
$str = 'f';
print((ord($str) > 64 and ord($str) < 91) ? 'Заглавная' : 'Прописная' . '<br>');


// BLOCK 17
print("<br>\tSEVENTEENTH BLOCK<br>");

print('17.1 ');
$str = 'ab-cd-ef';
$str = strchr($str, '-');
print("$str<br>");

print('17.2 ');
$str = 'ab-cd-ef';
$str = strrchr($str, '-');
print("$str<br>");


// BLOCK 18
print("<br>\tEIGHTEENTH BLOCK<br>");

print('18.1 ');
$str = 'ab--cd--ef';
$str = strstr($str, '--');
print("$str<br>");

?>