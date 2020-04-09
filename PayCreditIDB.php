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
 if(isset($_POST['Submit']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","acsik");
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("acsik", $conn);

$sql="INSERT INTO Credit (fname,lname ,AccNumber,Amount,percent,date ,interest_update,DueDate)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[acc]','$_POST[amnt]','$_POST[Typ]','$_POST[date]','$_POST[date]','$_POST[due]')";
$l="INSERT INTO ledger (AccNumber,Amount,date,TransactionType) values('$_POST[acc]','$_POST[amnt]','$_POST[date]','borrow')";
				$ree=mysql_query($l);
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo '<img src="images/492.png" > &nbsp;! credit Perform  Successfully !!';


				echo' <meta content="2;PayCredit.php" http-equiv="refresh" />';

}
//mysql_close($conn)
?>
<?php
	include("footerIndex.php");
	?>