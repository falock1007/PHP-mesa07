<?php
$json = file_get_contents(
    "http://data.coa.gov.tw/Service/OpenData/FromM/SpeciesDistributionData.aspx");
$root = json_decode($json);
foreach ($root as $row){
    echo "{$row->ScientificName}:{$row->Family_C}<br>";
}