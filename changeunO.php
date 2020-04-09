
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
	  
	     <div id="content" class="float_l"> <br/>
        </br>
		<div class="product_box">

        <a href=manageAccO.php ><img src="images/up.png" width="22" height="25" title=Back align='top'/></a><br/>
      
				
		
			
			  <br/><br/><div align='center' style="border-radius: 5px;
				border:1px double #b9b9b9;width:680"><br/>
		<form  action="changeunO.php" method="post" name="myform">
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'>
            <tr>
              <td  height="24">Current UserName</td>
              <td >&nbsp;</td>
			  <td><input type="text" name="curun" id='in' size="30" required/></td>
			 </tr>
			 <tr>
              <td  height="24">New UserName</td>
              <td >&nbsp;</td>
			  <td><input type="text" name="newun" id='in' size="30" required/></td>
			 </tr>

			 <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="center"><input type="submit" name="change" id='send' value="Change" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='reset' id='clear'name="clear" value="Cancel"  /></td>
            </tr>
		  </table>
		</form><br/></div>
				<?php
				if (isset($_POST['change']))
			  {
				$cun =$_POST['curun'];
				$nun =$_POST['newun'];
				$result = mysql_query("SELECT * FROM employee WHERE userName='{$cun}' AND staff_id='{$staff_id}' ");
				if(!$result){
				die("query faile".mysql_error());
				}
				if(mysql_num_rows($result)==1){

				$query="update employee set userName = '{$nun}' where userName = '{$cun}' AND staff_id='{$staff_id}'";
				$result=mysql_query($query);
				echo '<img src="images/492.png" /> &nbsp;! Your UserName changed successfully';
				echo '<meta content="2;manageAccO.php" http-equiv="refresh" />';


				}
				else
				{
				echo '<img src="images/no.ico" /> &nbsp;! Current UserName is not correct...Please insert your correct UserName';
				echo '<meta content="2;changeunO.php" http-equiv="refresh" />';

				}

				}
				
			?>
	  
	  
		</div></div>
		<?php
	include("footerIndex.php");
	?>