
			
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
		<div class="table-responsive">
		
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
								
							<thead>
								<tr>
									<th style="width:100px;">First Name</th>
									<th>Last Name</th>
									
									<th>Account Number</th>
									<th>Balance</th>
								
									
								</tr>
							</thead>
							<tbody>
<?php
			
   $id = $_REQUEST['key'];

		if (isset($_GET['AccNumber']))
		$id=$_GET['AccNumber'];
		$result1 = mysql_query("SELECT * FROM saving WHERE AccNumber='$id'");
		while($row = mysql_fetch_array($result1)){
		?>
							<tr>
								
								
								<td><?php echo $row['Fname']; ?></td>
								<td><?php echo $row['Lname']; ?></td>
								<td><?php echo $row['AccNumber']; ?></td>
								<td><?php echo $row['balance']; ?></td> 
							
								
							</tr>
							<?php } ?>
							</tbody>
							</table>
						</div>
			
			<?php
	include("footerIndex.php");
	?>
			
			
			
			
			
			
			
			
			
			
	