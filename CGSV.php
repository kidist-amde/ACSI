 
			<?php
session_start();
include 'connection.php';
$user = $_SESSION['email'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:PaySaving.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "update savingrequest set status='Done' where AccNumber = '$ctrl'";


mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'paySaving.php'</script>";
?>