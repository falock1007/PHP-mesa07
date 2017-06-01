<?php
    // 1.Connect to MySQL Server
    $conn = @mysqli_connect("127.0.0.1",
        "root","root","falco") or die ("Server Busy");
    //if($conn) echo 'ok';
    //echo $db->error;

    //  echo $conn->error;
    // 3. query
    //  $sql = 'insert into member (account,passwd,realname) values ("brad","123456","BRAD")';
    $sql = 'select * from member';
    $result = $conn->query($sql);

    //  echo var_dump($result);
    //    if ($result) echo'ok';
//    $row = $result->fetch_object();
//    echo $row->id . '<br>';
//    echo $row->account . '<br>';
//    echo $row->passwd . '<br>';
//    echo '<hr>';

    while ($row = $result->fetch_object()){
        echo "{$row->id} : {$row->account} : {$row->passwd}<br>";
    }
