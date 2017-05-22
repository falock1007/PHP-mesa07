<?php
//$a = 13 ;
//
//if($a){
//    echo "ok"."<br>";
//} else {echo "false"."<br>";}
//
//
//switch($a){
//    case 1:
//        echo "A";
//        break;
//    default:
//        echo "";
//    case '10':
//        echo "B1";
//        break;
//    case 10:
//        echo "B2";
//        break;
//    case 100:
//        echo "C";
//        break;
//
//}

$month = rand(1,12);

echo "$month".'月'."<br>";


switch($month){
    case 2:
        echo "28";
        break;
    case 4: case 6: case 9: case 11:
        echo "30";
        break;
    case 1: case 3: case 5: case 7: case 8: case 10: case 12:
        echo "31";
        break;

    default:
        echo "XX";
}
echo "天";