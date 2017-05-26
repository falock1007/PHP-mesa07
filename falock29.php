<?php
    include 'falockAPI.php';

    $IDN = 'A123456789';
    if(twid::checkId($IDN)==1) {
        $myID = new twid($IDN);
        $ID2 = new twid($IDN);
        $ID3 = new twid($IDN);
        $ID4 = new twid($IDN);
        echo $myID->getGender() ? 'Male' : 'Female';
        echo twid::$counter;
    } else {
        echo 'xx';
    }