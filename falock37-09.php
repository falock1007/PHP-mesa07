<?php
    include "falock37-00sqlfalock1007.php";
    $pdo = new pdo($dsn, $user, $passwd, $opt);

    $sql = "SELECT * FROM member";
    $stmt = $pdo->prepare($sql);    // statement SQL
    $stmt->execute();

    echo"<table>";
    while ($obj = $stmt->fetchObject()){
        echo '<tr>';
        echo "<td>{$obj->id}</td>";
        echo "<td>{$obj->account}</td>";
//        echo "Hello,{$obj->account}";
        echo "<td>{$obj->passwd}</td>";
        echo '</tr>';
    }
    echo"</table>";
