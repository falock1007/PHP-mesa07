<?php
include "falockAPI.php";

$myBike = New Bike;


$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
$myBike->downSpeed();

echo "My Bike = {$myBike->getSpeed()}<br>";

$urBike = New Bike;

$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
$urBike->downSpeed();

echo "Your Bike = {$urBike->getSpeed()}";

echo "<hr>";

$myscooter = New Scooter;
$myscooter->upSpeed();$myscooter->upSpeed();

echo "My Scooter = {$myscooter->getSpeed()}<br>";
