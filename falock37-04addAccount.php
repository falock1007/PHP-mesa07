<?php
    include 'falock37-00sqlfalock1007.php';
    $pdo = new pdo($dsn, $user, $passwd, $opt); //如果擺太後面，root密碼可能會被加密而變成錯誤密碼

    if(!isset($_REQUEST['account'])){
//        echo 'OK';
//    } else {echo'XX';}

        header("Location: falock37-03addMember.php");
    } else {


        $account = $_REQUEST['account'];
        $passwd = password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT); //注意這邊的$passwd取名跟00sql的一樣
        $rname = $_REQUEST['rname'];

        $sql = "INSERT INTO member (account,passwd,rname) VALUES (?,?,?)";
        $stmt = $pdo->prepare($sql); //statement SQL
        $stmt->execute([$account, $passwd, $rname]);
        header("Location: falock37-01login.php");
    }
