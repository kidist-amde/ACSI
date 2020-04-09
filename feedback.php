<?php
include("LogedEmployee.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color='white'>Logout</a>&nbsp;|<a href="manageAccAdmin.php" class="logout" >
  <font color='white'>Manage_Account</a></div>
 <?php
include("header.php");
?>
 <!-- END of ACSI_header -->
<?php
include("TopNavAdmin.php");
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
$result = mysql_query("SELECT * FROM feedback");
print( "<table border='1' align='center' ");
print("<tr>");
print("<th>Name </th>");
print("<th>Sex </th>");
print("<th>E-Mail</th>");
print("<th>Comment</th>");
print("<th>Action</th>");

while($row = mysql_fetch_array($result))
  {
$ctrl = $row['f_id'];
  print ("<tr>");
  print ("<td>" . $row['name'] . "</td>");
  print ("<td>" . $row['sex'] . "</td>");
  print "<td>" . $row['email'] . "</td>";
  print "<td>" . $row['comment'] . "</td>";
 print("<td align = 'center' width = '1'><a href = 'delete_mail.php?key=".$ctrl."'>
 <img src = 'images/remove.png' border = '0' title='Delete' onclick='isdelete();'></img></a>
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