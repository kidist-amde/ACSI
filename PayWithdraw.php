
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
			
   $ctrl = $_REQUEST['key'];

		if (isset($_GET['AccNumber']))
		$id=$_GET['AccNumber'];
		$result1 = mysql_query("SELECT * FROM saving WHERE AccNumber='$ctrl'");
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
			
			<br><br>
			
			

<?php 
		 $id = $_REQUEST['key'];
 
$sel=mysql_query("SELECT * FROM withdrwalrequest WHERE AccNumber=$id");

$fetch=mysql_fetch_array($sel);
?>		
				
				<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>UPDATE CUSTOMER BALANCE </b></font></h4>
		  <form action="Paywith.php" method="POST" name="myform"><br/>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
          
<tr>
<td>
<b>Account Number</b>
</td>
<td>
<input name="acc" type="text" required value="<?php echo $fetch[3] ?>" readonly="true" />
</td>
</tr>
	<tr>
<td>
<b>Amount To Withdraw</b>
</td>
<td>
<input name="amnt" type="text" required value="<?php echo $fetch[4] ?>"  />
</td>
</tr>
           <tr>
<td>
<b>withdrawal Date</b>
</td>
<td>
<input name="date" type="text"required value="<?php echo date('y-m-d');?>" readonly="true">
</td>
</tr>	
		
<tr>
<td>&nbsp;</td>
              <td></td>
<td>
<input name="Submit" type="submit" Value="PAY">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="clear" type="reset" Value="Clear">
</td>
				</tr>	</table></form>  
	
		</div>
    
      </div>
	   <?php
	include("footerIndex.php");
	?>