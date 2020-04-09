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
 <!-- END of ACSI_Header -->
<?php
include("TopNavAdmin.php");
?>
    <!-- END of ACSI_menubar -->
		  <?php
	  include("leftside.php");
	  ?>
<div id="content" class="float_l">
		  <?php
	  include("table.php");
	  ?>
	    <?php
	
			$status=mysql_query("select * from employee where status='on'");
			$countAccount=mysql_num_rows($status);

			$off=mysql_query("select * from employee where status='off'");
			$offAccount=mysql_num_rows($off);

			echo '<br/><b> <font color="#0099ff">Information</font>: </b>There are <font color= yellow> '.$countAccount. '</font> Active Accounts.
			<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Total number number of Accounts are <font color= yellow> ' .($countAccount+ $offAccount).'</font>.' ;
			$sel=mysql_query("SELECT * FROM employee ORDER BY staff_id");
			echo '<table style="width:100%;">';
			echo '<th>Staff ID</th><th>FName</th><th>LName</th><th>Phone No</th><th>WorkType</th><th>Status</th><th colspan=1>
			Action</th><tr><td colspan=9></td></tr>';

			while($fetch=mysql_fetch_array($sel)){


			echo '<tr><td>'.$fetch['staff_id'].'</td><td>'.$fetch['fname'].'</td><td>'.$fetch['lname'].'</td>
			<td>'.$fetch['pnumber'].'</td><td>'.$fetch['WorkType'].'</td><td>'.$fetch['status'].'<td><a href=modifyacc.php?id='.$fetch['staff_id'].'>
			<img src="images/edit-icon.png" width=30 height=25 title=MODIFY_RECORD /></a></td></tr>';

		}
			echo '</table>';
			?>
			
	</div>   
	 <?php
	include("footerIndex.php");
	?>