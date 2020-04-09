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
	  <script type="text/javascript">
	<!--
	function AllowAlphabet(){
	 if (!myform.amnt.value.match(/^[0-9]+$/) && myform.amnt.value !="")
               {
                    myform.amnt.value="";
                    myform.amnt.focus(); 
                    alert("Please Enter only Number value for Saving Amount");
               }
				 if (!myform.acc.value.match(/^[0-9]+$/) && myform.acc.value !="")
               {
                    myform.acc.value="";
                    myform.acc.focus(); 
                    alert("Please Enter only Number value for Account Number");
               }
			  	 
   if (!myform.per.value.match(/^[0-9 .]+$/) && myform.per.value !="")
               {
                    myform.per.value="";
                    myform.per.focus(); 
                    alert("Please Enter only Number value for saving interst Percent");
               }
			 if (!myform.fname.value.match(/^[a-zA-Z]+$/) && myform.fname.value !="")
               {
                    myform.fname.value="";
                    myform.fname.focus(); 
                    alert("Please Enter only alphabets for First Name");
               }
			    if (!myform.lname.value.match(/^[a-zA-Z]+$/) && myform.lname.value !="")
               {
                    myform.lname.value="";
                    myform.lname.focus(); 
                    alert("Please Enter only alphabets for Last Name");
					
               }}
	</script>	
	     <div id="content" class="float_l"> <br/>
        </br>
		
				<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>CREATE SAVING ACCOUNT</b></font></h4>
		  <form action="PayInitalSaving.php" method="POST" name="myform"><br/>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
    <tr>
              <td  height="24">First Name</td>
             
              <td ><input type="text" name="fname" size="30" onkeyup="AllowAlphabet()" ></td>
            </tr>
			<tr>
              <td>Last Name</td>
             
              <td><input type="text" name="lname" size="30"  onkeyup="AllowAlphabet()"></td>
			 </tr>           
<tr>
<td>
<b>Account Number</b>
</td>
<td>
<input name="acc" type="text" required   onkeyup="AllowAlphabet()"/>
</td>
</tr>
<tr>
<td>
<b>percent</b>
</td>
<td>
<input name="per" type="text" required value="0.05"  onkeyup="AllowAlphabet()"/>
</td>
</tr>	

 <tr>
<td>
<b>Amount</b>
</td>
<td>
<input name="amnt" type="text"required onkeyup="AllowAlphabet()" / >
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
<td>
<b>interest_update</b>
</td>
<td>
<input name="date" type="text"required value="<?php echo date('y-m-d') ;?>" readonly="true" >
</td>
</tr>	
	 <tr>
         
	 	
<tr>
<td>&nbsp;</td>
              <td></td>
<td>
<input name="Submit" type="submit" Value="Creat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="clear" type="reset" Value="Clear">
</td>
				</tr>	</table></form>  
	
		</div>
     
			<?php
 if(isset($_POST['Submit']))
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

$sql="INSERT INTO saving (Fname,Lname ,AccNumber,balance,percent,date,interest_update)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[acc]','$_POST[amnt]','$_POST[per]','$_POST[date]','$_POST[date]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='images/correct.jpg' width='40' height='30'><p><font color='#ffff00' 
face = 'Georgia'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Saving Perform  Successfully !!</font></p>";
echo' <meta content="2;PayInitalSaving.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
      </div>
	  <?php
	include("footerIndex.php");
	?>