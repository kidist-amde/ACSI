<?php
include("LogedEmployee.php");
?>  
		<div style="float:right; margin-right:24px;" ;>	
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color='white'>Logout</a>&nbsp;|<a href="manageAccCash.php" class="logout" >
  <font color='white'>Manage_Account</a></div>
<?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavCasherie.php");
?>
    <!-- END of ACSI_menubar -->
		  <?php
	  include("leftside.php");
	  ?><br><br>
  <?php 
$connect = mysql_connect("localhost", "root") or
die ("Hey loser, check your server connection.");
mysql_select_db ("acsik");
if (isset($_POST['Submit'] )) {
$acc=$_POST['acc'];
$date=$_POST['date'];
$amnt=$_POST['amnt'];
}

mysql_select_db ("acsik");
$sql = "select AccNumber,balance from saving where AccNumber='$acc'";
$result = mysql_query($sql)or die (mysql_error());

	while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['AccNumber'];
		$b = $db_field['balance'];
		if(($acc == $a) AND ($amnt<=$b||$amnt>=$b))
		   {
		        $e="update saving set balance=balance+'$amnt' where AccNumber='$acc'";
				$yt=mysql_query($e);
			    
					
				$l="INSERT INTO ledger (AccNumber,Amount,date,TransactionType) values('$acc','$amnt','$date','Saving')";
				$ree=mysql_query($l);
				echo "<font color='yellow' size='3'>You perform saving money successfully</font>";
				echo' <meta content="2;PaySaving1.php" http-equiv="refresh" />';
			}
			
			else
			{
			echo "<font color='yellow' size='3'>Please, enter the correct information</font>";
			echo' <meta content="2;PaySaving1.php" http-equiv="refresh" />';
			}
			}
			
?>
		
	 <?php
	include("footerIndex.php");
	?>