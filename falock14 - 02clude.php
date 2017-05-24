<?php
//include 'falock14 - 01fx( ).php';
//
//$v = fx(4);
//sayYa('falock', 'UCCU');
//sayYa('1007', '洗內');
//sayYa('fayoujo');
//
//echo '<hr>';
//
//sayHello('falock','1007','fayoujo');

include 'falock14 - 03IDcard.php';

?>

<form>
    <input type="text" name="twid" value="<?php echo $twid ?>"/>
    <input type="submit" value="check" /><?php if(isset($_GET["twid"])){
    $twid = $_GET["twid"];
    echo isRightTWID($twid).'<br>';
}

?>
</form>