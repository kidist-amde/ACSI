 
			<?php
session_start();
include 'connection.php';
$user = $_SESSION['email'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:ApproveWith.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "update withdrwalrequest set status='Approve' where AccNumber = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'ApproveWith.php'</script>";
?>