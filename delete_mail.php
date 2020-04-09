<?php
session_start();
include 'connection.php';
$user = $_SESSION['f_id'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:feedback.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "DELETE FROM feedback WHERE f_id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'feedback.php'</script>";
?>