<?php

// image location
$image = imagecreatefrompng("images/banner.png");

// setup color
$r = 255;
$g = 255;
$b = 255;

// text-color
$text_color = imagecolorallocate($image, $r, $g, $b);

// font
$font = "font/Ubuntu-B.ttf";

// string that will be displayed on the image
$message = "Welcome on our TeamSpeak-Server!\n\rIt's " . date("H:i", time());

// apply image, font-size, angle, position-x, position-y, color, font, message
imagettftext($image, 15, 0, 235, 175, $text_color, $font, $message);

// set the header type to an image 
header('Content-type: image/png');

// echo the image
imagepng($image);

// clear cache
imagedestroy($image);