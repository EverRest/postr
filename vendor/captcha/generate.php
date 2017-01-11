<?php
session_start();
header('Content-type: image/jpeg');
$text = $_SESSION['secure'];
$font_size = 23;

$image_width = 160;
$image_height = 50;

$image = imagecreate($image_width, $image_height);
imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0 , 0 , 0);

for ($x=1;$x<=40;$x++) {
    $x1 = rand(1, 130);
    $y1 = rand(1, 130);
    $x2 = rand(1, 130);
    $y2 = rand(1, 130);

    imageline($image, $x1, $y1, $x2, $y2, $text_color);
}

imagettftext($image, $font_size, 0, 15, 30, $text_color, 'Pacifico.ttf', $text);
imagejpeg($image);
?>