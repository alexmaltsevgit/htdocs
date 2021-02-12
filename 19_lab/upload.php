<?php

require 'vendor/autoload.php';

use Imagine\Image\Box;
use Imagine\Image\Point;

function can_upload($file) {
  if(!$file['name'])
    return 'Файл не найден';
  
  if(!$file['size'])
    return 'Файл слишком большой.';
    
  // check if file has image mime type
  if(!str_starts_with(mime_content_type($file['tmp_name']), 'image'))
    return 'Неправильный тип файла.';
    
  return true;
}

function upload($file) {
  $imagine = new Imagine\Gd\Imagine();
  // generate filename
  $file_name = mt_rand(0, 1000000) . '_' . $file['name'];

  // open files
  $image = $imagine->open($file['tmp_name']);
  $watermark = $imagine->open('./images/watermark.png');

  // get files info
  $image_info = getimagesize($file['tmp_name']);
  $watermark_info = getimagesize('./images/watermark.png');
  
  // get files extensions
  $watermark_format = strtolower(substr($watermark_info['mime'], strpos($watermark_info['mime'], '/') + 1));
  $image_format = strtolower(substr($image_info['mime'], strpos($image_info['mime'], '/') + 1));
  
  // resize and save watermark
  $image->resize(new Box(400, 250));
  $watermark->resize(new Box(400, 250));
  
  // watermarking
  $image->paste($watermark, new Point(0, 0));
  
  // save files
  $image->save("./images/$file_name.$image_format");
  $watermark->save("./images/watermark.$watermark_format");
  
  // return path to the image
  return "./images/$file_name.$image_format";
}