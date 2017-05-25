<?php
    if(!isset($_POST['filename']))
         header("Location: falock21.php");
         else {
    $filename=$_GET['filename'];
    $cont=$_GET['cont'];

    $fp=fopen($filename,"w+");
    fwrite($fp,$cont);
    fclose($fp);

    header("Location: {$filename}");
    }
