<script>
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    function precheck() {
        var account =
            document.getElementById('account').value;
        xmlhttp.onreadystatechange = callBack1;
        xmlhttp.open("GET", "falock37-08precheck.php?a="+account, true);
        xmlhttp.send();
    }
    function callBack1() {
        if (this.readyState == 4 && this.status == 200) {
            var result = this.responseText;
            if (result != 'OK'){
                document.getElementById('crs').innerHTML = '重複';

            }else{
                document.getElementById('crs').innerHTML = '很好';
            }
        }
    }
</script>

<form action="falock37-04addAccount.php">
    Account : <input id="account" name="account" ontex="precheck()"/>
    <span id="crs"></span><br>
    Password : <input type="password" name="passwd"/><br>
    RealName : <input name="rname"/><br>
    <input type="submit" value="add"/><br>
</form>
