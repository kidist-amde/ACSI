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
	  ?>			<br></br>
         		  <?php 
$connect = mysql_connect("localhost", "root") or
die ("Hey loser, check your server connection.");
mysql_select_db ("acsik");
//if ($_POST['same'] == 'on') {
if (isset($_POST['Submit'] )) {
$acc=$_POST['acc'];
$date=$_POST['date'];
$amnt=$_POST['amnt'];


//if(!strlen($fname) || !strlen($lname) || !strlen($idno) || !strlen($sex) || !strlen($qual) || !strlen($witn1) || !strlen($witn2) || !strlen($phone)|| !strlen($nick) || !strlen($mom))
//{
//$error="you need to fill the required field"; 
//echo nl2br("<h1><font color='brown'>$error</font></h1>");
//header("Location:Errors.php");
//}
//else  if(!Preg_match("/^[a-z][a-zA-Z- ]{2,40}$/",$fname) || !Preg_match("/^[a-z][a-zA-Z- ]{2,40}$/",$lname) || !Preg_match("/^[a-z][a-zA-Z- ]{2,40}$/",$qual)
//|| !Preg_match("/^[A-Z0-9][a-zA-Z- ]{6,40}$/",$miskir) || !Preg_match("/^[A-Z0-9][a-zA-Z- ]{6,40}$/",$accno)) 
//{
//echo "<center> Fname,Lname,qualification,accno and witness must be names</center>";
//}


mysql_select_db ("acsik");
$sql = "select AccNumber,Amount from credit where AccNumber='$acc'";
$result = mysql_query($sql)or die (mysql_error());
if(!Preg_match("/^[0-9 ]{0,40}$/",$amnt)){
echo "<center><font color='red' size='3'>You have to enter only number in Amount text box</font></center>";
}

else{
	while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['AccNumber'];
		$b = $db_field['Amount'];
		if(($acc == $a) AND ($amnt<=$b))
		   {
		        $e="update credit set Amount=Amount-'$amnt' where AccNumber='$acc'";
				$yt=mysql_query($e);
				
			   	$l="INSERT INTO ledger (AccNumber,Amount,date,TransactionType) values('$acc','$amnt','$date','Return Credit')";
				$ree=mysql_query($l);
				
				echo "<font color='yellow' size='3'>You Return money successfully</font>";
				echo' <meta content="3;CollectCredit1.php" http-equiv="refresh" />';
			}
			
			else
			{
			echo "<font color='yellow' size='3'>You have no that much Debit.Please, enter the correct information</font>";
			echo' <meta content="3;CollectCredit1.php" http-equiv="refresh" />';
			}
			}
			{echo "<font color='yellow' size='3'>Please, enter the correct information</font>";
			echo' <meta content="3;CollectCredit1.php" http-equiv="refresh" />';
			}
			}}
?>
	<?php
	include("footerIndex.php");
	?>