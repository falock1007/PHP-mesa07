<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/24
 * Time: 上午 09:58
 */?>

<form action="falock16.php" method="get">
    Name:<input type="text" name="name"><br>
    Password:<input type="password" name="password"><br>
    Birthday:<input type="date" name="birthday"><br>
    <select name="direction">
        <option value="1">東</option>
        <option value="2">西</option>
        <option value="3">南</option>
        <option value="4">北</option>
    </select>
    <input type="radio" name="gender" value="0">女
    <input type="radio" name="gender" value="1">男
    <br>
    <input type="checkbox" name="like[]" value="1">運動
    <input type="checkbox" name="like[]" value="2">下棋
    <input type="checkbox" name="like[]" value="3">讀書<br>
    <input type="checkbox" name="like[]" value="4">美食
    <input type="checkbox" name="like[]" value="5">逛街
    <input type="checkbox" name="like[]" value="6">旅遊<br>
    <textarea name="write"></textarea><br>
    <input type="file" name="upload" value="upload">
    <input type="submit" name="btn1" value="送出1">
    <input type="submit" name="btn2" value="送出2">

</form>
