<?php
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
$birthday = $_REQUEST['birthday'];
$direction = $_REQUEST['direction'];
$gender = $_REQUEST['gender'];
$like = $_REQUEST['like'];

echo $name . "<br>";
echo $password . "<br>";
echo $birthday . "<br>";
echo $direction . "<br>";
echo $gender . "<br>";
foreach ($like as $v){
    echo $v . "<br>";
}

?>
