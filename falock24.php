<?php
if(!isset($_GET['rate'])) exit(0);
$rate = $_GET['rate'];
//1
$img = imagecreate ( 400 , 40 );
//$img2 = imagecreatetruecolor ( 400,80  );


//2
$yellow = imagecolorallocate ( $img , 255, 255 ,0);
$purple = imagecolorallocate ( $img , 255,  0,255);
imagefilledrectangle ( $img, 0 , 0 , 400, 40 , $yellow );
imagefilledrectangle ( $img, 0 , 0 , (int)($rate*400/100), 40 , $purple );

//3
header('Content-Type: image/jpeg');
imagejpeg($img);

//4
imagedestroy ( $img );
?>

