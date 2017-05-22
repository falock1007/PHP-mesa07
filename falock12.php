<?php
//$x=3;
//
//$poker = array();
//for ($i=0; $i<$x; $i++){
//    $temp = rand(0,$x-1);
//
//    //檢查
//    $isRepeat = false;
//    for ($j = 0;$j<$i; $j++){
//        if($poker[$j] == $temp){
//        //重複
//        $isRepeat = true;
//        break;
//        }
//    }
//    if ($isRepeat){
//        $i--;
//        continue;
//    } else{
//        $poker[] = $temp;
//    }
//    echo $poker[$i] . '<br>';
//}

//$x=52;
//
//$poker = array();
//for ($i=0; $i<$x; $i++){
//    do {
//        $temp = rand(0, $x - 1);
//        $isRepeat = false;
//        for ($j = 0 ; $j < $i; $j++){
//            if ($poker[$j] == $temp) {
//                //重複
//                $isRepeat = true;
//                break;
//            }
//        }
//    }while($isRepeat);
//
//    $poker[] = $temp;
//
//    echo $poker[$i] . '<br>';
//}

$x=52;

$poker = array();

for ($i=0; $i<$x; $i++) $check[] = false;

for ($i=0; $i<$x; $i++) {
    do {
        $isRepeat = false;
        $temp = rand(0, $x - 1);
        if (!$check[$temp]) {
            $poker[] = $temp;
            $check[$temp] = true;
        }
    } while ($isRepeat);
    echo $poker[$i] . '<br>';
}

// https://www.youtube.com/watch?v=R97x_mj5K8k