<?php
include("LogedCustomer.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  
			
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color="white"> Logout</a>&nbsp;|
  <a href="manageAccCust.php" class="logout" ><font color="white"> Manage_Account</a></div>
 <?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavCust.php");
?>
    <!-- END of ACSI_menubar -->
  	
   	  <?php
	  include("leftside.php");
	  ?>
	   <div id="content" class="float_l"> <br/>
	   <div align=center style="border-radius: 5px;border:1px double #b9b9b9;padding-left:em">
     <?php 
		 $acc=$_SESSION['AccNumber']; 
 
$sel=mysql_query("SELECT * FROM customer WHERE AccNumber=$acc");

$fetch=mysql_fetch_array($sel);
?>		
		<form action="info.php" method="post" >
          <table height="196" id='mytable' align = 'middle'>
            <tr>
              <td rowspan="5" align="center" style="padding-top:12px;padding-left:12px; border:none;"></td>
            </tr>
             <tr>
              <td>Your Account Number ?</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="acc"  id="in" required placeholder="please give your answer" 
			  value="<?php echo $fetch[5] ?>" readonly="true"/></td>
            </tr>
	   <tr>
              <td>what is your fevourite food?</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="food"  id="in" required placeholder="please give your answer"/></td>
            </tr>
			<tr>
              <td>what is your best friend name ?</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="friend"  placeholder="please give your answer" id="in" required  /></td>
            </tr>
            <tr>
              <td>name that you like?</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="name"  placeholder="please give your answer" id="in" required  /></td>
            </tr>
			   <tr>
     <td colspan="2"><center><input value="Send" name="sent" type="Submit" Onclick="return check(this.form);"/>
	 <input value="Reset" type="Reset"></center></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </tr>
				</tr>	</table></form>  
			
		</div>
	   <?php
 if(isset($_POST['sent']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","acsik");
 $acc=$_SESSION['AccNumber']; 
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("acsik", $conn);

$sql="INSERT INTO information (AccNumber,question1,question2,question3)
VALUES
('$_POST[acc]','$_POST[food]','$_POST[friend]','$_POST[name]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='images/correct.jpg' width='40' height='30'><p><font color='#ffff00' face = 'Georgia'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You Insert Your Information   Successfully !!</font></p>";
echo' <meta content="2;info.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
	   </div>
	   
	 <?php
	include("footerIndex.php");
	?>