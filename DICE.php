<head>
    <meta charset="UTF-8">
    <link href="/function/bootstrap.min.css" rel="stylesheet">
    <style>
        .label {
            /*margin: 15px 0px;*/
            padding: 0px 15px;
            opacity:0.4;
        }
        input {
            border-radius: 5px;
        }
        a {
            font: bold 16px 微軟正黑體;
        }
    </style>

    <script>

        <?php
            $dice01 = array();
            $m = 7;
            for ($i = 0; $i < $m; $i++) {
                $dice3d6 = rand(1, 6) + rand(1, 6) + rand(1, 6);
                $dice01[] = $dice3d6;
            }

            $dice02 = array();
            $n = 5;
            for ($j = 0; $j < $n; $j++) {
                $dice2d6 = rand(1, 6) + rand(1, 6) + 6;
                $dice02[] = $dice2d6;
            }

            $dice03 = array();
            $o = 3;
            for ($k = 0; $k < $o; $k++) {
                $luck = rand(1, 6) + rand(1, 6) + rand(1, 6);
                $dice03[] = $luck;
            }
        ?>
    </script>
</head>

<body>




<form>
    <p>什麼是「d6」? 「d6」代表的是6面骰，即是一般所見的立方體骰子</p>
    <p>TRPG裡面使用的骰子一般有4面骰、6面骰、8面骰、10面骰、12面骰、20面骰，以及用兩顆10面骰組成的百面骰</p>
    <a>3d6擲7次 </a><input type="button" value="擲骰子" onclick="diceNo1()" /><br/>
<span class="label label-danger No1"><?php echo "{$dice01[0]}"?></span>
<span class="label label-danger No1"><?php echo "{$dice01[1]}"?></span>
<span class="label label-danger No1"><?php echo "{$dice01[2]}"?></span>
<span class="label label-danger No1"><?php echo "{$dice01[3]}"?></span>
<span class="label label-danger No1"><?php echo "{$dice01[4]}"?></span>
<span class="label label-danger No1"><?php echo "{$dice01[5]}"?></span>
<span class="label label-danger No1"><?php echo "{$dice01[6]}"?></span>
<br />
<br />
    <a>2d6+6擲5次 </a><input type="button" value="擲骰子" onclick="diceNo2()"/><br/>
<span class="label label-primary No2"><?php echo "{$dice02[0]}"?></span>
<span class="label label-primary No2"><?php echo "{$dice02[1]}"?></span>
<span class="label label-primary No2"><?php echo "{$dice02[2]}"?></span>
<span class="label label-primary No2"><?php echo "{$dice02[3]}"?></span>
<span class="label label-primary No2"><?php echo "{$dice02[4]}"?></span>
<br />
<br />
    <a>3d6擲3次 </a><input type="button" value="擲骰子" onclick="diceNo3()"/><br/>
<span class="label label-success No3"><?php echo "{$dice03[0]}"?></span>
<span class="label label-success No3"><?php echo "{$dice03[1]}"?></span>
<span class="label label-success No3"><?php echo "{$dice03[2]}"?></span>
</form>

</body>