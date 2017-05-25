<?php
//$x = file("z123.txt");
//foreach ($x as $line){
//echo "=>{$line}<br>";}
//
//$y = file_get_contents('z123.txt');
//echo $y;
$file="./miscellaneous/193.csv";
?>

<table border="1" width="95%">
    <?php
    $x= file($file);
    foreach ($x as $line){
    $fileds=explode(',',$line);
    echo '<tr>';
    foreach ($fileds as $filed){
        echo "<td>{$filed}</td>";
        }
    }
    echo '<tr>';
?>

</table>
