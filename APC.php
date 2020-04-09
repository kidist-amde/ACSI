 
			<?php
session_start();
include 'connection.php';
$user = $_SESSION['email'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:ApproveCredit.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "update creditrequest set status='Approve' where AccNumber = '$ctrl'";


mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'ApproveCredit.php'</script>";
?>