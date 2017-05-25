<?php
class Bike {
    private $speed;
    function upSpeed(){
        $this->speed =
            ($this->speed<1)?1:$this->speed*1.5;
    }
    function downSpeed(){
        $this->speed =
            ($this->speed<1)?0:$this->speed*0.7;
    }
    function getSpeed(){
        return $this->speed;
    }
}
$myBike = New Bike;
$urBike = New Bike;

$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();$myBike->upSpeed();
$myBike->downSpeed();

$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();$urBike->upSpeed();
$urBike->downSpeed();

echo "My Bike = {$myBike->getSpeed()}<br>";
echo "Your Bike = {$urBike->getSpeed()}";
