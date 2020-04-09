 
			<?php
session_start();
include 'connection.php';
$user = $_SESSION['email'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:ApproveSav.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "update savingrequest set status='Reject' where AccNumber = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'ApproveSav.php'</script>";
?>