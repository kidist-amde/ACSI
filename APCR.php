 
			<?php
session_start();
include 'connection.php';

$log = $_SESSION['staff_id'];
if ($log != "log"){
	header ("Location:ApproveCredit.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "update creditrequest set status='Reject' where AccNumber = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'ApproveCredit.php'</script>";
?>