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
	    	  <?php
include("validation.php")?>
 <br/><br/><div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680"><br/>
		<form action="Addemp.php" method="post" name="myform">
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable' summary="sending request ">
			<tr><th colspan=9><font color='#ffff00' face = 'Georgia'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			ADD NEW EMPLOYEE ACCOUNT INFORMATION</font></th></tr>
			<tr><td></td></tr><tr><td></td></tr>
			
			<tr>
              <td  height="24">First Name</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="fname" size="30" id='in'title="Enter first name here" 
			  required onKeyUp="AllowAlphabet()"></td>
			  
			  
            </tr>
			<tr>
              <td>Last Name</td>
              <td>&nbsp;</td>
              <td><input type="text" name="lname" size="30" id='in' 
			  title="Enter last name here" required onKeyUp="AllowAlphabet()"></td>
			 </tr>
			 <tr>
              <td>User Name</td>
              <td>&nbsp;</td>
              <td><input type="text" name="un" size="30" id='in'title="Enter  name here" required ></td>
            </tr>
			<tr>
              <td>Work Type</td>
			  <td>&nbsp;</td>
			  <td style="padding-top:12px;"><select name="who"  title="MY CATEGORY" id='in' required>
                  <option ></option>
                  <option value='admin'>Admin</option>
                  <option value='officer'>Officer</option>
                  <option value='csp' >Customer Service Provider</option>
                  <option value='cashir' >Cashier</option>

                </select></td>
            </tr>
			 <tr>
              <td>Password</td>
              <td>&nbsp;</td>
              <td><input type="password" name="pass" size="30" id='password' title=" password" required/></td>
			 <td><input type="hidden" name="status" value='on'/></td>
            </tr>
			<tr>
              <td>Retype Password</td>
              <td>&nbsp;</td>
              <td><input type="password" name="rpass" size="30" id='confirm_password' 
			  title="Repeat password" onchange="check()" required/></td>
			  <td id='message'></td>
			</tr>
			
            <tr>
              <td>sex</td>
              <td>&nbsp;</td>
              <td><input type="radio" name="sex" value="M" title="Choose either male by clicking here" required/>
                male
                <input type="radio" name="sex" value="F" title='choose female by clicking here' required/>
                female</td>
            </tr>
			<tr>
              <td  height="24">Age</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="age" size="30" id='in'title="Enter your age here" 
			  required onKeyUp="AllowAlphabet()"/></td>
            </tr>
			<tr>
              <td  height="24">Address</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="add" size="30" id='in'title="Enter address here" required ></td>
            </tr>
			
			
            <tr>
              <td>Phone/Telephone No</td>
              <td>&nbsp;</td>
              <td><input  name="tele" type="text"  size="30" title="Enter the Phone/Telephone Number" maxlength="10"
			  required onKeyUp="AllowAlphabet()"/></td>
            </tr>

           
			
			<tr>
              <td  height="24">	Qualification</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="qual" size="30" id='in'title="Enter amount here" required onkeyup="AllowAlphabet()" ></td>
            </tr>
			<tr>
              <td  height="24">Date</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="dt" size="30" id='in' value=<?php echo date('y-m-d');?> readonly="true"></td>
            </tr>
			
              <td>&nbsp;</td>
              <td></td>
              <td align="center"><input type="submit" name="send" id='send'value="Create Account" />
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='reset' id='clear'name="clear" value="Reset"  /></td>
            </tr>
          </table>
        </form>
		</div>
		
		
		<?php
 if(isset($_POST['send']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","acsik");
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("acsik", $conn);

$sql="INSERT INTO employee (fname,lname ,userName, WorkType,password,date,sex,age,address,pnumber,qualification,status )
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[un]','$_POST[who]','".base64_encode($_POST['pass']).
"','$_POST[dt]','$_POST[sex]','$_POST[age]','$_POST[add]',
'$_POST[tele]','$_POST[qual]','$_POST[status]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
  echo '<img src="images/492.png" /> &nbsp;! Account has been Created  Successfully';

echo' <meta content="2;Addemp.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>

	 <?php
	include("footerIndex.php");
	?>