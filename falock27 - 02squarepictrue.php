<?php
$imgSrc = imagecreatefromjpeg(
    "./jpg/500h.jpg" );
$square = 500;
$imgDst = imagecreate((int)($square), (int)($square));
$imgSW = imagesx($imgSrc);
$imgSH = imagesy($imgSrc);
$color =imagecolorallocate ( $imgDst , 255, 255 ,255);
imagefilledrectangle ($imgDst , 0 , 0 , (int)($square), (int)($square) , $color );

if ($imgSW>$imgSH){
    $imgDW = (int)($square);
    $imgDH = $imgSH * (int)($square) / $imgSW;
    $positionH=(int)($square)/2-(int)($imgDH/2);
    $positionW=0;
}else{
    $imgDH = (int)($square);
    $imgDW = $imgSW * (int)($square) / $imgSH;
    $positionW=(int)($square)/2-(int)($imgDW/2);
    $positionH=0;
}
imagecopyresized (
    $imgDst , $imgSrc,
    (int)($positionW) , (int)($positionH),
    0, 0,
    $imgDW , $imgDH ,
    $imgSW , $imgSH );
// 3
header('Content-Type: image/jpeg');
imagejpeg($imgDst);
// 4
imagedestroy ( $imgSrc );
imagedestroy ( $imgDst );