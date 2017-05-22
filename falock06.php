<?php

$x=0;

for(test1();$x<=9;test2()){
    echo $x++."<br>";
//    if ($x<=9){break;}
}



function test1(){
    echo "falock"."<br>".test2();
}

function test2(){
    echo "------"."<br>";
}

