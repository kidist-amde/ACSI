<?php
include("LogedCustomer.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  
			
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color="white"> Logout</a>&nbsp;|
  <a href="manageAccCust.php" class="logout" ><font color="white"> Manage_Account</a></div>
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
	  include("table.php");
	  ?>
 
					<?php
$conn = mysql_connect ("localhost", "root", "") or
die ('I cannot connect to the database because: ' . mysql_error());
$selected = mysql_select_db ("acsik")
or die ("Could not select database");
 $AccNumber=$_SESSION['AccNumber']; 
// PHP Search Script
//$account=$_POST['accno'];
$result = mysql_query("SELECT * FROM   custappointment where AccNumber='$AccNumber' ");
    if ($myrow = mysql_fetch_array($result)) { 
echo '<table style="width:100%;">';	
	
      echo '<th>Appointment Date</th><th>Appointment Reason</th>
	  <tr><td colspan=9>';
 
       do {     printf("<tr><td>%s</td><td>%s</td></tr>\n", $myrow["AppoDate"], 
	   $myrow["AppoReason"]); 
         } while ($myrow = mysql_fetch_array($result)); 
          echo "</table>\n";
           } else {  echo "<font color='yellow' size='3'>Sorry, no Appointment were found!</font>"; 
		   echo' <meta content="2;Check.php" http-equiv="refresh" />';
            }
mysql_close();

?>
		

			
	  
		</div>
		 <?php
	include("footerIndex.php");
	?>