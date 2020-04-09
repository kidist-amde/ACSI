<?php

include("headerindex.php");
include("interest.php");

include("interstcredit.php");

?>
<div id="ACSI_menubar">
            <?php
include("TopNavIndex.php");
?>
     <?php
	  include("leftside.php");
	  ?>
	  <div id="content" class="float_l"> <br/>
	  <div class="post_box">
      <div class="header">
	 
        <h2 align='middle'><b><font  face = 'Georgia' size='4'>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Login Page</font></b></h2>
      </div>

      <div align=center style="border-radius: 5px;border:1px double #b9b9b9;padding-left:em">
     
		<form action="login.php" method="post" >
          <table height="196" id='mytable' align = 'middle'>
            <tr>
              <td rowspan="5" align="center" style="padding-top:12px;padding-left:12px; border:none;"></td>
            </tr>
            
            <tr> <td>&nbsp;</td></tr>
			<tr>
              <td>User Name</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="username" id="in" required /></td>
            </tr>
            <tr>
              <td>Password</font></td>
              <td>&nbsp;</td>
              <td><input type="password" name="password"  id="in" required  /></td>
            </tr>
			 
            <tr>
              <td></td>
              <td>&nbsp;</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='login' name='submitMain' Onclick="return check(this.form);"/>&nbsp;&nbsp;&nbsp;&nbsp;
			  
			 
                <input type="reset" value="Cancel" name="clear"  /></td>
				 
            </tr>
          </table>
		  <a  href="forgot.php">Forgot Password?</a>        
        </form>

      <br/></div>
        
   		
	   <?php
	
 if(isset($_POST['submitMain']))
 { 
   $user =$_POST['username'];
   //$_SESSION['username']=$_POST['username'];
   $password=$_POST['password'];
$pass=base64_encode($password);

    //$_SESSION['password']=$_POST['password'];
  	$query = "SELECT * FROM  employee WHERE 	userName= '{$user}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['WorkType']=='admin' AND $row['status']=='on'){ 
			$_SESSION['staff_id']=$row['staff_id'];
			
		    echo "<script>window.location='admin.php';</script>";
			}
				else if ($row['WorkType']=='admin' AND $row['status']=='off'){ 
				 echo"<img src='images/delete (2).png'><p  class='wrong' >
				 <center><font color='white' face = 'Georgia' size='2'>
		Your Account has been Blocked!!Talk to the Admin!!</center></font></p>"; 

		 echo'<meta content="2;login.php" http-equiv="refresh" />';
				}
							$query = "SELECT * FROM  employee WHERE 	userName= '{$user}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['WorkType']=='officer' AND $row['status']=='on'){
		$_SESSION['staff_id']=$row['staff_id'];
           echo "<script>window.location='officer.php';</script>";
 }
						
				$query = "SELECT * FROM  employee WHERE 	userName= '{$user}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['WorkType']=='csp' AND $row['status']=='on'){
		$_SESSION['staff_id']=$row['staff_id'];
           echo "<script>window.location='CustomerServiceProvider.php';</script>";
 }
							$query = "SELECT * FROM  employee WHERE 	userName= '{$user}' AND password='$pass'";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
			if($row['WorkType']=='cashir' AND $row['status']=='on'){
			$_SESSION['staff_id']=$row['staff_id'];
			
           echo "<script>window.location='Cashier.php';</script>";
	 }
		$query = "SELECT * FROM  customer WHERE 	userName= '{$user}' AND password='$pass'";
		$result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
		 if($row['status']=='on'){ 
	$_SESSION['AccNumber']=$row['AccNumber'];
		
	
        echo "<script>window.location='customer.php';</script>";
					}
				else {
		
		echo"<img src='images/DeleteRed1.png'><p  class='wrong' ><center><font color='white' face = 'Georgia' size='2'>
		
User Name & Password Not Match !!</center></font></p>"; 
		 echo'<meta content="2;login.php" http-equiv="refresh" />';
		}
}
mysql_close($conn);
?>	
		</div>
	
		</div>
<?php
	include("footerIndex.php");
	?>