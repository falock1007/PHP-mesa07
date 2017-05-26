<?php

//身分證字號
function isRightTWID(string $twid)
{
    $ret = 0;
    if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid) > 0) {
        $n12s = substr($twid, 0, 1);
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $n12 = strpos($letters, $n12s) + 10;
        $n1 = (int)($n12 / 10);
        $n2 = $n12 % 10;
        $n3 = substr($twid, 1, 1);
        $n4 = substr($twid, 2, 1);
        $n5 = substr($twid, 3, 1);
        $n6 = substr($twid, 4, 1);
        $n7 = substr($twid, 5, 1);
        $n8 = substr($twid, 6, 1);
        $n9 = substr($twid, 7, 1);
        $n10 = substr($twid, 8, 1);
        $n11 = substr($twid, 9, 1);
        $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 +
            $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 * 1 + $n11 * 1;
        if ($sum % 10 == 0) {
            $ret = 1;
        } else {
            $ret = -1;
        }
    }
    return $ret;
}

//腳踏車加速減速
class Bike {
    // private 只有自己能用
    protected $speed; //可繼承
    function __construct(){
        echo 'construct<br>';
    }
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
//摩托車加速減速
class Scooter extends Bike {
    function __construct(){
        echo '123<br>';
        parent::__construct();
    }
    function upSpeed($gear = 1){
        parent::upSpeed($gear);
        $this->speed *=2;
    }
}


//樂透
function createLottery(){
$lottery = range(1,49);
shuffle($lottery);
for ($i=0; $i<6; $i++){
    $ret[] = $lottery[$i];
}
sort($ret);
return $ret;
}

//身分證字號再進階
class twid{
    private $id;
    static $counter = 0;
    //static不能呼叫物件，但物件可以呼叫static

    function __construct($id){
        $this->id = $id;
        twid::$counter++;
    }

    function getTWID(){return $this->id;}
    function getGender(){
        return true;
    }

    function getArea(){
        return '台中市';
    }

    static public function checkId($twid){
        $ret = 0;
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $twid) > 0) {
            $n12s = substr($twid, 0, 1);
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $n12 = strpos($letters, $n12s) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($twid, 1, 1);
            $n4 = substr($twid, 2, 1);
            $n5 = substr($twid, 3, 1);
            $n6 = substr($twid, 4, 1);
            $n7 = substr($twid, 5, 1);
            $n8 = substr($twid, 6, 1);
            $n9 = substr($twid, 7, 1);
            $n10 = substr($twid, 8, 1);
            $n11 = substr($twid, 9, 1);
            $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 +
                $n6 * 5 + $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 * 1 + $n11 * 1;
            if ($sum % 10 == 0) {
                $ret = 1;
            } else {
                $ret = -1;
            }
        }
        return $ret;
    }
}

//購物車
class Cart {
    private $memberID;
    private $list;
    function __construct($member){
        $this->list = array();
        $this->member = $member;
    }
    function addItem($pid, $qty){
        $this->list[$pid] = $qty;
    }
    function removeItem($pid){
        unset($this->list[$pid]);
    }
    function getList(){
        return $this->list;
    }
    function getMember(){
        return $this->member;
    }
}

//會員
class Member {
    var $twid; //Member Object has-a TWID Object
    function __construct($twid){
        $this->twid = new twid($twid);
    }
}

