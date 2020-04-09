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
        </br>
	  <?php 
		 $ctrl = $_REQUEST['key'];
 
$sel=mysql_query("SELECT * FROM savingrequest WHERE AccNumber=$ctrl");

$fetch=mysql_fetch_array($sel);
?>		
       
     <a href=ApproveSav.php ><img src="images/up.png" width="22" height="25" title=Back align='top'/></a><br/>

	   <div class="product_box">
        
		<h3><center><font color='#ffff00' face = 'Georgia'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			SEND APPOINTMENT TO THE CUSTOMER</h3></center></font>
<form method="post" action="SendAppAccDBS.php" >
    
	   <table  border="0" cellspacing="3" cellpadding="5"  id='mytable' summary="sending feedback ">
					<tr>
              <td  ><center><font size="4px">Account Number</font></center></td>
             
              <td ><input type="text" name="id" size="30" required  value="<?php echo $fetch[3] ?>" readonly="true"></td>
            </tr>
   <tr>
     <td width="1000"><b><center><font size="4px">Date</font></center></b></td>
	 <td><input name="date" size="32" type="text" value=<?php echo date('y-m-d')?> readonly="true" readonly="true"></td>
     </tr>
     <tr>
     <td ><b><center><img src="images/word.png"   /><font size="4px">Appointment Reason</font></center></b></td>
    
     <td colspan="2"><center><textarea name="appo" id="comment"  cols="34" rows="7" ></textarea></center></td>
     </tr>

     <tr>
     <td colspan="2"><center><input value="Send" name="sent" type="Submit" Onclick="return check(this.form);"/>
	 <input value="Reset" type="Reset"></center></td>
     </tr>
     </body></table>

</form>
	  
		</div></div>
	<?php
	include("footerIndex.php");
	?>