<?php
include 'falock35-06sql2.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "insert into food (fid,fname,tel,addr,memo) values (?,?,?,?,?)";
$json = file_get_contents(
    "http://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx");
$root = json_decode($json);
foreach ($root as $row){
//    echo "{$row->ID}<br>";





    $fid = $row->ID;
    $fname = $row->Name;
    $tel = $row->Tel;
    $addr = $row->Address;
    $memo = $row->HostWords;
    $pdo->prepare($sql)->execute([$fid,$fname,$tel,$addr,$memo]);
}