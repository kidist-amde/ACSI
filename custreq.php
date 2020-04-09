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

print( "<table border='1' align='center' ");
print("<tr>");
print("<th>TRANSACTION </th>");
print("<th>ACTION</th>");


$ctrl = $row['AccNumber'];
 print( "</tr>");
 print ("<tr>");
 print("<td align = 'center' width = '1'>Saving Request</td>");
 print("<td align = 'center' width = '1'>
 <a href = 'SendSavReq.php?key=".$ctrl."'>
 <img src = 'images/bundle.ico' border = '0' title='Saving_request' onclick='isupdate();'></img></a>
		</td>");
		print( "</tr>");
  print( "</tr>");
 print ("<tr>");
 print("<td align = 'center' width = '1'>Credit Request</td>");
 print("<td align = 'center' width = '1'>
 <a href = 'SendCreditReq.php?key=".$ctrl."'>
 <img src = 'images/bundle.ico' border = '0' title='credit_request' onclick='isupdate();'></img></a>
		</td>");
		print( "</tr>");
		
 print ("<tr>");
 print("<td align = 'center' width = '1'>Withdrwal Request</td>");
		print("<td align = 'center' width = '1'>
 <a href = 'SendWithdrawalReq.php?key=".$ctrl."'>
 <img src = 'images/bundle.ico' border = '0' title='Withdreal_request' onclick='isupdate();'></img></a>
		</td>");
		print( "</tr>");
  print( "</tr>");
  
print("</table>");

mysql_close($conn);
?>
	
      </div>
	   <?php
	include("footerIndex.php");
	?>