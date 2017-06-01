<?php
include 'falock35-06sql2.php';
session_start();
if (!isset($_SESSION['member'])) header("Location: falock35-01login.php");
$memberObj = $_SESSION['member'];
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "select * from plantdata";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>
Hello, <?php echo $memberObj->realname; ?>
<hr>
<table border="1" width="100%">
    <tr>
        <th>ScientificName</th>
        <th>Family</th>
        <th>Latitude</th>
        <th>Longitude</th>
    </tr>
    <?php
    while ($row = $stmt->fetchObject()){
        echo '<tr>';
        echo "<td>{$row->pname}</td>";
        echo "<td>{$row->pfam}</td>";
        echo "<td>{$row->plati}</td>";
        echo "<td>{$row->plongi}</td>";
        echo '</tr>';
    }
    ?>
</table>
<hr>
<a href="falock35-04logout.php">Logout</a>