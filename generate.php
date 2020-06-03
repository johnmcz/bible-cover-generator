<?php
header('Content-Type: image/png');
$im = @imagecreatefromjpeg("bible.jpg");
$white = imagecolorallocate($im, 200, 200, 228);
$grey = imagecolorallocate($im, 128, 128, 128);

$line1 = substr($_POST['line1'], 0, 7);
$line2 = substr($_POST['line2'], 0, 7);
$line3 = substr($_POST['line3'], 0, 7);
$line4 = substr($_POST['line4'], 0, 7);
$line5 = substr($_POST['line5'], 0, 7);

$text = $line1 . "\n" . $line2 . "\n" . $line3 . "\n" . $line4 . "\n" . $line5;
$text = preg_replace('/[^A-Za-z0-9\s\'\-\!\\n]/', '', $text);
$font = './FreeSerif.ttf';

imagettftext($im, 18, -9, 565, 190, $grey, $font, $text);
imagettftext($im, 18, -9, 565, 190, $white, $font, $text);
imagejpeg($im);
imagedestroy($im);
?>
