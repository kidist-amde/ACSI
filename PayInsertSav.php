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
	     <div id="content" class="float_l"> <br/>
        </br>
		
        <a href=PaySaving.php ><img src="images/up.png" width="22" height="25" title=Back align='top'/></a><br/><br>

		
		
<?php 
		 $id = $_REQUEST['key'];
 
$sel=mysql_query("SELECT * FROM savingrequest WHERE AccNumber=$id");

$fetch=mysql_fetch_array($sel);
?>		
				
				<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>UPDATE SAVING BALANCE </b></font></h4>
		  <form action="PayInsertSavDB.php" method="POST" name="myform"><br/>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
    <tr>
              <td  height="24">First Name</td>
             
              <td ><input type="text" name="fname" size="30" value="<?php echo $fetch[1] ?>" readonly="true"></td>
            </tr>
			<tr>
              <td>Last Name</td>
             
              <td><input type="text" name="lname" size="30" value="<?php echo $fetch[2] ?>" readonly="true"></td>
			 </tr>           
<tr>
<td>
<b>Account Number</b>
</td>
<td>
<input name="acc" type="text" required value="<?php echo $fetch[3] ?>"  readonly="true"/>
</td>
</tr>
	

 <tr>
<td>
<b>Amount</b>
</td>
<td>
<input name="amnt" type="text"required/ value="<?php echo $fetch[4] ?>">
</td>
</tr>	


           <tr>
<td>
<b>Date</b>
</td>
<td>
<input name="date" type="text"required value="<?php echo date('y-m-d');?>" readonly="true">
</td>
</tr>	
	
<tr>
<td>&nbsp;</td>
              <td></td>
<td>
<input name="Submit" type="submit" Value="SAVE">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="clear" type="reset" Value="Clear">
</td>
				</tr>	</table></form>  
	
		</div>
  
		 </div>
	  <?php
	include("footerIndex.php");
	?>