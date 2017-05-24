<!---->
<?php
//  $poker=array();
//  $n=52;
//  for($i=0;$i<$n;$i++){
//      $poker[]=$i;
//  }
//  for($i=0;$i<$n;$i++)
//      echo "{$poker[$i]}\r";
//   echo "<hr>";
//  for($i=$n-1;$i>=0;$i--){
//      $random=rand(0,$i);
//      $temp=$poker[$random];
//      $poker[$random]=$poker[$i];
//      $poker[$i]=$temp;
//  }
//  for($i=0;$i<$n;$i++)
//      echo "{$poker[$i]}\r";
//
//?>

<?php
$poker = range(0, 51);
shuffle($poker);
//foreach ($poker as $card) {
//    echo "$card ".'<br>';
//}

echo '<hr>';
//發到四位玩家手上
foreach ($poker as $i => $value){
    $player[$i%4][floor($i/4)]=$value;
}
//foreach ($player[0] as $card){
//    echo "{$card}<br>";
//}

$p

?>

<table border="1" width="95%">
    <?php
    $suit = array("<font color='black' size='5'>&spadesuit;<font>",
        "<font color='red' size='5'>&heartsuit;<font>",
        "<font color='red' size='5'>&diamondsuit;<font>",
        "<font color='black' size='5'>&clubsuit;<font>");
        $number = array('A','2','3','4','5','6','7','8','9','10','J','Q','K');
        foreach ($player as $somebody) {
            sort($somebody);
            echo '<tr>';
            foreach ($somebody as $card) {
                echo "<td>{$suit
                [(int)($card/13)]
//                [$card%4]
                }
                {$number[$card%13]}
                </td>";
                }
            echo '</tr>';
        }
        ?>
    </tr>

</table>

