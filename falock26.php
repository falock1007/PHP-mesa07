<?php



//1

$img = imagecreatefromjpeg (
    "./upload/poke.jpg" );


//2
$blue = imagecolorallocate($img,0,0,255);

////$size = rand(15,30);
//$angle = rand(0,359);


imagettftext(
    $img,24,10,0,30,$blue,
    "./fonts/fireflysung.ttf" ,"(σ′▽‵)′▽‵)σ");

//3
header('Content-Type: image/jpeg');
imagejpeg($img);

//4
imagedestroy ( $img );
?>

