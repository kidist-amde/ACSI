<?php
include("LogedEmployee.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  
			
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color="white"> Logout</a>&nbsp;|
  <a href="manageAcco.php" class="logout" ><font color="white"> Manage_Account</a></div>
 <?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavOfficer.php");
?>
    <!-- END of ACSI_menubar -->
  	
   	  <?php
	  include("leftside.php");
	  ?>
	  </br>
	    <?php
	  include("table.php");
	  ?>
	     <div id="content" class="float_l"> <br/>
       
			<?php
$result = mysql_query("SELECT * FROM    withdrwalrequest  ORDER BY Date");
print( "<table border='1' align='center' ");
print("<tr>");
print("<th>First name </th>");
print("<th>Last name </th>");
print("<th>AccNum</th>");

print("<th>Amount</th>");
print("<th>Date</th>");

print("<th>Status</th>");
print ("<th colspan=4>Action</th><tr><td colspan=9>");
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['AccNumber'];
  print ("<tr>");
  print ("<td>" . $row['fname'] . "</td>");
  print ("<td>" . $row['lname'] . "</td>");
  print "<td>" . $row['AccNumber'] . "</td>";

  print "<td>" . $row['Amount'] . "</td>";
    print "<td>" . $row['Date'] . "</td>";
  
  print "<td>" . $row['status'] . "</td>";
 print("<td align = 'center' width = '1'>
 <a href = 'APWCBalance.php?key=".$ctrl."'>
 <img src = 'images/view.png' border = '0' title='View_Balance' onclick='isupdate();'></img></a>
		</td>");
 print("<td align = 'center' width = '1'>
 <a href = 'APW.php?key=".$ctrl."'>
 <img src = 'images/valid.png' border = '0' title='Approve_Request' onclick='isupdate();'></img></a>
		</td>");
		print("<td align = 'center' width = '1'>
 <a href = 'APWR.php?key=".$ctrl."'>
 <img src = 'images/delet3.png' border = '0' title='Reject_request' onclick='isupdate();'></img></a>
		</td>");
		print("<td align = 'center' width = '1'>
 <a href = 'sendAppAccW.php?key=".$ctrl."'>
 <img src = 'images/kwrite.png' border = '0' title='Send_Appointment' onclick='isupdate();'></img></a>
		</td>");
  print( "</tr>");
  }
print("</table>");

mysql_close($conn);
?></div>
<?php
	include("footerIndex.php");
	?>