<?php
$sum = 0; $n=97; $i=1;
while($i<=$n){
    $sum += $i++;
}
    echo "1+2+......+{$n} = {$sum}<br>";



$a[0] =12;
echo gettype($a)."<br>";
var_dump($a)."<br>";

echo '<hr>';
$b[]=123;
$b[]=12.3;
$b[]=true;
var_dump($b);

echo '<hr>';
$falock['age']=26;
$falock["weight"]=88;
$falock['name']='falock1007';
$falock['gender'] = true;
var_dump($falock);

echo '<hr>';
$c = array(1,2,3,true);
var_dump($c);

echo '<hr>';
$c = array(1,2,3,'gender' =>true);
var_dump($c);
