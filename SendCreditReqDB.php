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

$sql="INSERT INTO creditrequest (fname,lname,AccNumber,date,Amount,Guarantee,CreditType)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[acc]','$_POST[dt]','$_POST[am]','$_POST[what]','$_POST[Typ]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }

echo '<img src="images/492.png" > &nbsp;! credit Request Send Successfully  !!';
echo' <meta content="2;custreq.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
   
		</div>
		<?php
	include("footerIndex.php");
	?>
