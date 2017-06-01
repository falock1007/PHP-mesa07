<?php
    include 'falockAPI.php';
    session_start();

    if (!isset($_SESSION['cart']))
        header('Location: falock30 - 01cart.php');

    $cartObj = $_SESSION['cart'];
//    $var1 = $_SESSION['var1'];


//    echo $var1 . '<br>';

    $list = $cartObj->getList();

    foreach($list as $pid => $qty){
        echo "{$pid} : {$qty}<br>";
    }
?>

<hr>
<a href="falock30%20-%2003logout.php">Logout</a>