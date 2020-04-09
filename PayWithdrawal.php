
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
	  ?>		
	  <?php
	  include("table.php");
	  ?>	
	    <div id="content" class="float_l"> <br/>
        
        <p>&nbsp;</p>
       
	  <?php
$result = mysql_query("SELECT * FROM  withdrwalrequest ORDER BY Date");
print( "<table border='1' align='center' ");
print("<tr>");
print("<th>First name </th>");
print("<th>Last name </th>");
print("<th>AccNum</th>");
print("<th>Date</th>");
print("<th>Amount</th>");
print("<th>Status</th>");
print ("<th colspan=3>Action</th><tr><td colspan=9>");
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['AccNumber'];
  print ("<tr>");
  print ("<td>" . $row['fname'] . "</td>");
  print ("<td>" . $row['lname'] . "</td>");
  print "<td>" . $row['AccNumber'] . "</td>";
  print "<td>" . $row['Date'] . "</td>";
  print "<td>" . $row['Amount'] . "</td>";
  print "<td>" . $row['status'] . "</td>";
  print("<td align = 'center' width = '1'>
 
 
 <a href = 'PayWithdraw.php?key=".$ctrl."'>
 <img src = 'images/edit-icon.png' border = '0' width='25' height='25' title='Pay_withdrwal' onclick='isupdate();'></img></a>
		</td>");
				print("<td align = 'center' width = '1'>
 <a href = 'PayViewWith.php?key=".$ctrl."'>
 <img src = 'images/view.png' border = '0' title='view_information' width=25 height=25 ;'></img></a>
		</td>");
 print("<td align = 'center' width = '1'>
 <a href = 'CGS.php?key=".$ctrl."'>
 <img src = 'images/492.png' border = '0' width='25' height='25' title='Change_Status' onclick='isupdate();'></img></a>
		</td>");
		
  print( "</tr>");
  }
print("</table>");

mysql_close($conn);
?>
	
      </div>
	  	<?php
	include("footerIndex.php");
	?>