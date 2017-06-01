<?php
//    $json = file_get_contents(
//        "http://data.coa.gov.tw/Service/OpenData/FromM/SpeciesDistributionData.aspx"
//    );
////    echo $json;
//    $root = json_decode($json);
//    foreach ($root as $row){
//        echo "{$row->ScientificName}:{$row->Family_C}<br>";
//    }

//$json = '{
//            "id":"123",
//            "name": "brad",
//            "lang": [
//                {"name":"Java",
//                 "level": "1"
//                },
//                {"name":"PHP",
//                 "level": "2"
//                },
//                {"name":"Android",
//                 "level": "3"
//                },
//                {"name":"iOS",
//                 "level": "4"
//                }
//            ]}';
//$root = json_decode($json);
//foreach($root->lang as $row){
//    echo"{$row->name}:{$row->level}<br>";
//}

    include 'falock35-06sql2.php';
    $pdo = new pdo($dsn, $user, $passwd, $opt);
    $sql = "insert into plantdata (pname,pfam,plati,plongi) values (?,?,?,?)";
    $json = file_get_contents(
        "http://data.coa.gov.tw/Service/OpenData/FromM/SpeciesDistributionData.aspx");
    $root = json_decode($json);
    foreach ($root as $row){
        $pname = $row->ScientificName;
        $pfam = $row->Family_C;
        $plati = $row->Latitude;
        $plongi = $row->Longitude;

        $pdo->prepare($sql)->execute([$pname,$pfam,$plati,$plongi]);
    }



