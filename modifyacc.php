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
	  <p>&nbsp;</p>
	  <a href=Viewemp.php ><img src="images/up.png" width="22" height="25" title=Back align='top'/></a><br/>
	    <p>&nbsp;</p>
	    <?php 
 $id=$_REQUEST['id'];
$sel=mysql_query("SELECT * FROM employee WHERE staff_id=$id");

$fetch=mysql_fetch_array($sel);
?>		
		<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<form  method="post" name="myform">
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="upadte customer information">
			<tr><th  colspan=5><font color='#ffff00' face = 'Georgia'>UPDATE EMPLOYEE INFORMATION IF ANY<font></th></tr>
			<tr><td></td></tr><tr><td></td></tr>
			<tr>
              <td  height="24">First Name</td>
              <td >&nbsp;</td>
              <td ><input type="hidden" name="fname" value="<?php echo $fetch[0] ?>"  />
                <input type="text" name="fname" size="30" id='in' value="<?php echo $fetch[0] ?>"  />
              </td>
            </tr>
            <tr>
              <td  height="24">Last Name</td>
              <td >&nbsp;</td>
              <td ><input type="hidden" name="lname" value="<?php echo $fetch[1] ?>"  />
                <input type="text" name="lname" size="30" id='in' value="<?php echo $fetch[1] ?>"  />
              </td>
            </tr>
             <tr>
              <td>Phone No</td>
              <td>&nbsp;</td>
              <td><input type="text" name="tele" size="30" id='in' value="
			  <?php echo $fetch['pnumber'] ?>"  /></td>
            </tr>
            <tr>
              <td>Work Type</td>
			  <td>&nbsp;</td>
			  <td style="padding-top:12px;"><select name="who"  title="MY CATEGORY" id='in' required value="
			  <?php echo $fetch['3'] ?>" >
                  <option ></option>
                  <option value='admin'>Admin</option>
                  <option value='officer'>Officer</option>
                  <option value='csp' >Customer Service Provider</option>
                  <option value='cashir' >Cashier</option>

                </select></td>
            </tr>
             <tr>
              <td>Status</td>
              <td>&nbsp;</td>
              <td><select name="status" required >
                  <?php
						
		                   echo '<option value="'.$fetch['status'].'">'.$fetch['status'].'</option>';
						
						?>
                  <option value="on">on</option>
                  <option value="off">off</option>
                </select>
              </td>
            </tr>
			<tr><td></td></tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="center"><input type="submit" name="send" id='send'value="Modify" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='reset' id='clear'name="clear" value="Cancel"  /></td>
            </tr>
          </table>
        </form></div> 
	  <?php
		if (isset($_POST['send'])){ 
		$id=$_REQUEST['id'];
		$fname =$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		
		$tele=$_REQUEST['tele'];
		$who=$_REQUEST['who'];
		$status=$_REQUEST['status'];
		$insert= mysql_query("UPDATE employee SET fname='$fname',lname='$lname',
		pnumber='$tele', worktype='$who',status='$status' WHERE staff_id=$id");

		if($insert){
		echo '<img src="images/492.png" /> &nbsp;! employee data updated successfully';
		 echo '<meta content="2;viewemp.php?action=accounts" http-equiv="refresh" />';

		}else 
		echo 'failed to insert data';
		echo mysql_error();
		//echo '<meta content="2;modifyst.php" http-equiv="refresh" />';
		}

?>
	  
 <?php
	include("footerIndex.php");
	?>