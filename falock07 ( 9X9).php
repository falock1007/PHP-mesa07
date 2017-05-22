<!--<table width="99%" border="1px">-->
<!--    --><?php
//    for($z=0;$z<2;$z++){
//    echo "<tr>";
//        for($x=2;$x<=5;$x++){
//        echo "<td>";
//        for($y=1;$y<=9;$y++){
//            $newx = $x + $z*4;
//            $r=$newx*$y;
//            echo "{$newx} X {$y} = $r<br>";
//        }
//        echo "</td>";}
//    echo "</tr>";}
//        ?>
<!--    </table>-->

<table width="99%" border="1px">
    <?php
    $start = 1 ; $col = 5 ;$row = 4;
    for($z=0;$z<$row;$z++){
            echo "<tr>";
        for($x=$start;$x<$start+$col;$x++){
            echo "<td bgcolor='".
                ((($x+$z)%2==0)? "orange":"yellow")."'>'";






            //        較短    if(($x+$z)%2!=0) {
//                echo "<td bgcolor='#993099'>";
//            }   else {
//                echo "<td bgcolor='#309930'>";
//            }

//                    echo "<td bgcolor='#309930'>";}
            //       最長     if($x%2==0) {
//                if ($z % 2 == 0) {
//                    echo "<td bgcolor='#993099'>";
//                } else {
//                    echo "<td bgcolor='#309930'>";
//                }
//            }   else{
//                if ($z % 2 != 0) {
//                    echo "<td bgcolor='#993099'>";
//                } else {
//                    echo "<td bgcolor='#309930'>";
//                }
//            }


            for($y=1;$y<=20;$y++){
                $newx = $x + $z*$col;
                $r=$newx*$y;
                echo "{$newx} X {$y} = $r<br>";
            }
            echo "</td>";}
        echo "</tr>";}
    ?>
</table>
