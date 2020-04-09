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
	  <?php
include("validation.php")?>
	     <div id="content" class="float_l"> <br/>
		 <script>
		 function Allow(){
        if (!myform.age.value.match(/^[0-9]+$/) && myform.age.value !="")
               {
                    myform.age.value="";
                    myform.age.focus(); 
                    alert("Please Enter only Number value for age Value");
               }}
			   </script>
	   <div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680"><br/>
		<form method="post" action="createAcc.php" name="myform">
		
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable' summary="sending request">
			<tr><th colspan=9><font color='#ffff00' face = 'Georgia'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			CREATE ACSI CUSTOMER ACCOUNT </font></th></tr>
			<tr><td></td></tr><tr><td></td></tr>
			
			<tr>
              <td  height="24">First Name</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="fname" size="30" id='in'
			  title="Enter first name here" required onKeyUp="AllowAlphabet()"></td>
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
              <td><input type="text" name="un" size="30" id='in'title="" required/></td>
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
              <td><input type="password" name="rpass" size="30" id='confirm_password' title="Repeat password" 
			  onchange="check()" required/></td>
			  <td id='message'></td>
			</tr>
			<tr>
              <td  height="24">User ID</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="id" size="30" id='in'title="Enter user id here" required ></td>
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
			  required onKeyUp="Allow()"/></td>
            </tr>

			<tr>
              <td  height="24">Address</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="add" size="30" id='in'title="Enter address here" required ></td>
            </tr>
			
			
            <tr>
              <td>Guarantee Type</td>
			  <td>&nbsp;</td>
			  <td style="padding-top:12px;"><select name="gt"  title="MY CATEGORY" id='in' >
                  <option ></option>
                  <option value='plan'>House plan</option>
                  <option value='perol' >Perol </option>
               <option value='librey'>car liberay</option>
                
                </select></td>

			
			<tr>
              <td>Account Type</td>
			  <td>&nbsp;</td>
			  <td style="padding-top:12px;"><select name="at"  title="MY CATEGORY" id='in' required>
                  <option ></option>
                  <option value='saving'>Saving </option>
                  <option value='credit' >Credit  </option>
              
                </select></td>
				
			<tr>
              <td>Phone/Telephone No</td>
              <td>&nbsp;</td>
              <td><input  name="tele" type="text"  size="30" 
			  title="Enter the Phone/Telephone Number" maxlength="15" required onKeyUp="AllowAlphabet()"/></td>
            </tr>
		
			
			<tr>
              <td  height="24">Date</td>
              <td >&nbsp;</td>
              <td ><input type="text" name="dt" size="30" id='in'title="Enter date here" required 
			  value="<?php echo date('y-m-d');?>" readonly="true"></td>
            </tr>
			<tr><td>&nbsp;</td></tr>
            <tr>
              <td>&nbsp;</td>
              <td></td>
              <td align="center"><input type="submit" name="send" id='send'value="Create Account" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='reset' id='clear'name="clear" value="Reset"  /></td>
            </tr>
          </table>
        </form></div>
		

	   <?php
			if(isset($_POST['send']))
 {
 
		
			$fname =$_POST['fname'];
			$lname =$_POST['lname'];
			$un=$_POST['un'];
			$pass=$_POST['pass'];
			$rpass=$_POST['rpass'];
			$password=$_POST['pass'];
			$id = $_POST['id'];
			$sex=$_POST['sex'];
			$age = $_POST['age'];
			$add = $_POST['add'];
		
			$gt= $_POST['gt'];
			$at=$_POST['at'];
			$tele=$_POST['tele'];
		
			$dt=$_POST['dt'];
			$status=$_POST['status'];
			if($pass == $rpass){
			$goburs = mysql_query("INSERT INTO customer (fname,lname ,userName,password,user_id,sex,age,address,
Guarantee,AccType,pnumber,date,status)
VALUES
('$fname','$lname','$un','".base64_encode($_POST['pass'])."','$id','$sex','$age','$add',
'$gt','$at','$tele','$dt','$status')");
			
			
					if($goburs){
					
					
					 echo"<img src='images/correct.jpg' width='40' height='30'><p><font color='#ffff00' 
face = 'Georgia'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Account has been Created  Successfully !!</font></p>";
echo' <meta content="2;createAcc.php" http-equiv="refresh" />';
					}
					else
					echo 'failed to insert data';
					echo mysql_error();
					}
			else{
				echo '<img src="images/no.ico" /> &nbsp;Password and Repeat password are not much!';
				echo' <meta content="2;createAcc.php" http-equiv="refresh" />'; 
				 
			}}
			?> 
</div>			
	 <?php
	include("footerIndex.php");
	?>