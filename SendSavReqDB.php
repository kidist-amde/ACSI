<?php
include("LogedCustomer.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  
			
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color="white"> Logout</a>&nbsp;|
  <a href="manageAccCSP.php" class="logout" ><font color="white"> Manage_Account</a></div>
 <?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavCust.php");
?>
    <!-- END of ACSI_menubar -->
  	
   	  <?php
	  include("leftside.php");
	  ?>
	     <div id="content" class="float_l"> <br/>
   	  
	</br>
	  	<?php
 if(isset($_POST['send']))
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

$sql="INSERT INTO savingrequest (fname,lname,AccNumber, Amount,date)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[acc]','$_POST[am]','$_POST[dt]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='images/correct.jpg' width='40' height='30'><p><font color='#ffff00' face = 'Georgia'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Request Send Successfully !!</font></p>";
echo' <meta content="2;custreq.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
 </div>
		 <?php
	include("footerIndex.php");
	?>