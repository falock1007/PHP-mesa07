<meta charset="utf-8">
<?php
    include "falock37-00sqlfalock1007.php";
    $json = file_get_contents("http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json");
    $result = mb_convert_encoding($json,"utf-8","big-5");
    $root = json_decode($result);

    foreach($root as $Obj){
        foreach ($Obj as $k => $v){
            echo "{$k} : {$v}<br>";
        }
        echo'<hr>';
    }
?>