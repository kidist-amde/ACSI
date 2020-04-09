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
print("<th>CHECK </th>");
print("<th>ACTION</th>");


$ctrl = $row['AccNumber'];
 print( "</tr>");
 print ("<tr>");
 print("<td align = 'center' width = '1'> Saving Balance</td>");
 print("<td align = 'center' width = '1'>
 <a href = 'chekBalanc.php?key=".$ctrl."'>
 <img src = 'images/view.png' border = '0' title='Check_balance' onclick='isupdate();'></img></a>
		</td>");
		print( "</tr>");
		 print("<td align = 'center' width = '1'>Credit Balance</td>");
 print("<td align = 'center' width = '1'>
 <a href = 'chekBalancCrd.php?key=".$ctrl."'>
 <img src = 'images/view.png' border = '0' title='Check_balance' onclick='isupdate();'></img></a>
		</td>");
		print( "</tr>");
  print( "</tr>");
 print ("<tr>");
 print("<td align = 'center' width = '1'>Appointment</td>");
 print("<td align = 'center' width = '1'>
 <a href = 'ViewAppointment.php?key=".$ctrl."'>
 <img src = 'images/view.png' border = '0' title='check_Appointemnt' onclick='isupdate();'></img></a>
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