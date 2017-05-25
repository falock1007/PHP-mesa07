<?php
    $fp = @fopen('./iii.html','w+') or die('You Die');
    fwrite($fp,"你已經屎惹");

//    while ($line = fgets($fp)){
//        $len = strlen($line);
//        echo "$len".':'."{$line}<br>";
//    }
    fclose($fp);

