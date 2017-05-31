<?php
include 'falock33-02.php';

$pdo = new pdo($dsn, $user, $passwd, $opt);

//$sql = "select * from member";
//$rs = $pdo->query($sql);
//while ($row = $rs->fetch()){
//echo "{$row['id']}.{$row['account']}<br>";
//}
//

$pdo = new pdo($dsn, $user, $passwd, $opt);

$account = 'andy';
$passwd = '123';
$realname = 'Andy Ho';
$sql = "insert into member (account,passwd,realname) values (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$account,$passwd,$realname]);