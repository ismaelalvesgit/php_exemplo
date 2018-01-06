<?php

header("Content-Type: image/jpeg");

$arquivo = "Wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_widtn, $old_height) = getimagesize($arquivo);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($arquivo);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_widtn, $old_height);

imagejpeg($new_image);


imagedestroy($old_image);
imagedestroy($new_image);

?>