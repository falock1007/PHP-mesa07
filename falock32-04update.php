<?php
    session_start();
    if (!isset($_SESSION['id'])) header("Location: falock32-01.php");

    $id = $_SESSION['id'];
    $account = $_GET['account'];
    $passwd = $_GET['passwd'];
    $realname = $_GET['realname'];
    $sql = "update member set account='{$account}',passwd='{$passwd}',realname='{$realname}' where id={$id}";

    $db = @new mysqli('127.0.0.1',
        'root','root','falco');
    $db->query($sql);
    header("Location: falock32-01.php");


