<?php
    session_start();
    if (!isset($_GET['editid'])) header("Location: falock32-01.php");

    $editid = $_GET['editid'];
    $_SESSION['id'] = $editid;
    $sql = "select * from member where id={$editid}";
    $db = @new mysqli('127.0.0.1','root','root',
            'falco');
    $rs = $db -> query($sql);
    $editObj = $rs->fetch_object();
?>

<form action="falock32-04update.php">
    <input type="hidden" name="id" value="<?php echo $editObj->id; ?>">
    <table>
        <tr>
            <th>Account</th>
            <td><input type="text" name="account"
                       value="<?php echo $editObj->account; ?>"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="passwd"
                       value="<?php echo $editObj->passwd; ?>"></td>
        </tr>
        <tr>
            <th>Real Name</th>
            <td><input type="text" name="realname"
                       value="<?php echo $editObj->realname; ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="update"></td>
        </tr>
    </table>
</form>