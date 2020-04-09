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
       
		<a href=manageAccCash.php ><img src="images/up.png" width="22" height="25" title=Back align='top'/></a><br/>
      
	   <div class="product_box">

       <br/><br/><div align='center' style="border-radius: 5px;
				border:1px double #b9b9b9;width:680"><br/>
			<form action="changepassCash.php" method="post" name="myform">
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'>
            <tr>
              <td  height="24">Current Password</td>
              <td >&nbsp;</td>
			  <td><input type="password" name="curpass" id='in' size="30" required/></td>
			 </tr>
			 <tr>
              <td  height="24">New Password</td>
              <td >&nbsp;</td>
			  <td><input type="password" name="newpass" id='in' size="30" required/></td>
			 </tr>
			 <tr>
              <td  height="24">Repeat Password</td>
              <td >&nbsp;</td>
			  <td><input type="password" name="newpass1" id='in' size="30" required/></td>
			 </tr>
			 <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="center"><input type="submit" name="change" id='send' value="Change" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='reset' id='clear'name="clear" value="Cancel"  /></td>
            </tr>
		  </table><br/>
		</form></div>
				<?php
				if(isset($_POST['change'])){
				
function clean($str) {
                            $str = @trim($str);
                            if (get_magic_quotes_gpc()) {
                                $str = stripslashes($str);
                            }
                            return mysql_real_escape_string($str);
                        }
$cpass =clean(base64_encode($_POST['curpass']));
			
				$npass =$_POST['newpass'];
				$npass1 =$_POST['newpass1'];
				$password =  clean(base64_encode($_POST['newpass']));
				$result = mysql_query("SELECT * FROM employee WHERE password='{$cpass}' AND staff_id='{$staff_id}' ");
				if(!$result){
				die("query faile".mysql_error());
				}
				if(mysql_num_rows($result)==1){
				if($npass==$npass1){
				$query="update employee set password='{$password}' where password='{$cpass}' AND staff_id='{$staff_id}'";
				$result=mysql_query($query);
				echo '<img src="images/492.png" /> &nbsp;! Your password changed successfully';
				echo '<meta content="2;manageAccCash.php" http-equiv="refresh" />';

					}
				else{
				echo '<img src="images/no.ico" /> &nbsp;! New password and Repeat password is not much';
				echo '<meta content="2;changepassCash.php" http-equiv="refresh" />';
					}

				}
				else
				{
				echo '<img src="images/no.ico" /> &nbsp;! Current Password is not correct...Please insert the correct password';
				echo '<meta content="2;changepassCash.php" http-equiv="refresh" />';

				}

				}?></div>
			</div>
		 <?php
	include("footerIndex.php");
	?>