<?php
//date_default_timezone_set("Asia/Taipei");
//    $up = ".";
//    if (isset($_GET['up'])) {
//        $up = $_GET['up'];
//        if(isset($_GET['filename'])){
//            //delete
//            $delfile = $_GET['filename'];
//            unlink("{$up}/{$delfile}");
//        }
//    }
//    $fp = opendir($up) or exit ('Server Down');
//?>
<!---->
<!--<form>-->
<!--    <input type="text" name="up">-->
<!--    <input type="submit" name="btn" value="輸入">-->
<!--</form>-->
<!---->
<!--<table border="1">-->
<!--    <tr>-->
<!--        <th>file</th>-->
<!--        <th>Type</th>-->
<!--        <th>Size</th>-->
<!--        <th>mTime</th>-->
<!--        <th>delete</th>-->
<!--    </tr>-->
<!--    --><?php
//    $fp = opendir($up);
//    while ($file = readdir($fp)) {
//        echo "<tr>";
//        echo "<td>{$file}</td>";
//        $Type = '';
//        if (is_dir("{$up}/{$file}")) {
//            $Type = "Dir";
//        } elseif (is_file("{$up}/{$file}")) {
//            $Type = "File";
//        }
//        echo "<td>{$Type}</td>";
//        echo "<td>" . filesize("{$up}/{$file}") . "</td>";
//        echo "<td>" . date('Y-m-d H:i:s', filemtime("{$up}/{$file}")) . "</td>";
//        echo "<td><a href='?delfile={$dirname}&filename={$file}' onclick=\"return confim('Del?')\">".'Delete'."<a>"."</td>";
//        echo "</tr>";
//    }
//    ?>
<!--</table>-->
<!---->

<?php
date_default_timezone_set ("Asia/Taipei" );
$dirname = ".";
if (isset($_GET['dirname'])){
    $dirname = $_GET['dirname'];
    if (isset($_GET['filename'])){
        // delete
        $delfile = $_GET['filename'];
        unlink("{$dirname}/{$delfile}");
    }
}
$fp = @opendir($dirname) or exit('Server Down');
?>
<form>
    <input type="text" name="dirname" />
    <input type="submit" value="chdir" />
</form>
<hr>
<table border="1" width="100%">
    <tr>
        <th>FileName</th>
        <th>Type</th>
        <th>Size</th>
        <th>mTime</th>
        <th>Delete</th>
        <th>upload</th>
    </tr>
    <?php
    while ($file = readdir($fp)){
        echo '<tr>';
        echo "<td>{$file}</td>";
        $type = '';
        if (is_dir("{$dirname}/{$file}")){
            $type = 'Dir';
        }else if (is_file("{$dirname}/{$file}")){
            $type = 'File';
        }
        echo "<td>{$type}</td>";
        echo "<td>" . filesize("{$dirname}/{$file}")."</td>";
        echo "<td>" . date('Y-m-d H:i:s',filemtime("{$dirname}/{$file}"))."</td>";
        echo "<td><a href='?dirname={$dirname}&filename={$file}' onclick=\"return confirm('Del ?')\">Delete</a></td>";
        echo "<td></td>";
        echo '</tr>';
    }
    ?>
</table>