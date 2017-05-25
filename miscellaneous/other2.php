<h1>Poker</h1>
<?php
$poker=range(1,52);
$names=array('Nick','Mandy','John','Anna');
shuffle($poker);//洗牌
foreach ($names as $name){
    echo $name.'<br>';
}
//分發四個人 $i ==> $key
foreach ($poker as $i => $card){
    $player[$i%4][(int)($i/4)]=$card;
    //echo $card.'<br>';
}
echo '<hr>';
?>
<table width="100%" border="0">
    <?php
    foreach($player as $sb){
        sort($sb);
        echo '<tr>';
        foreach ($sb as $card) {
            echo '<td>'."<img src='img/Artboard%20{$card}.svg'>".'</td>';
        }
        echo '</tr>';
    }
    ?>
</table>