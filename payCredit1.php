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
				 if (!myform.acc.value.match(/^[0-9]+$/) && myform.acc.value !="")
               {
                    myform.acc.value="";
                    myform.acc.focus(); 
                    alert("Please Enter only Number value for Account Number");
               }
			  	 if (!myform.amnt.value.match(/^[0-9]+$/) && myform.amnt.value !="")
               {
                    myform.amnt.value="";
                    myform.amnt.focus(); 
                    alert("Please Enter only Number value for Amount");
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
	
	  <br>
				<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>CREATE CREDIT ACCOUNT</b></font></h4>
		  <form action="PayCredit1.php" method="POST" name="myform"><br/>
       
               <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
    <tr>
              <td  height="24">First Name</td>
             
              <td ><input type="text" name="fname" size="30" onKeyUp="AllowAlphabet()"></td>
            </tr>
			<tr>
              <td>Last Name</td>
             
              <td><input type="text" name="lname" size="30"  onKeyUp="AllowAlphabet()"></td>
			 </tr>           
<tr>
<td>
<b>Account Number</b>
</td>
<td>
<input name="acc" type="text" required onKeyUp="AllowAlphabet()" />
</td>
</tr>
	<tr>
<td>

 <tr>
<td>
<b>Amount</b>
</td>
<td>
<input name="amnt" type="text"required/ onKeyUp="AllowAlphabet()">
</td>
</tr>	

<tr>
              <td>Credit Type</td>
			  
			  <td ><select name="Typ">
                  <option ></option>
                  <option value='0.13'>Installment Credit</option>
				   <option value='0.13' >Enterprise Credit  </option>
                  <option value='0.15' >Group Credit  </option>
				 
				   <option value='0.18' >Asset Credit  </option>
				  
              
                </select></td></tr>
				
       
  <tr>
<td>
<b>Date</b>
</td>
<td>
<input name="date" type="text"required value=<?php echo date('y-m-d')?> >
</td>
</tr>	

	 <tr>
<td>
<b> Due Date</b>
</td>
<td  data-date-format="yyyy-mm-dd" data-date="document.write(date())" class="input-append date myDatepicker">
    <span class="add-on"><i class="icon-calendar"></i></span>
<input name="due" type="date" required/ >
</td>
</tr>	
	
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
   $connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
   if (!$connection)
     {
     die('Could not connect: ' . mysql_error());
     }

$fname=$_POST['fname'];
$sql=mysql_select_db("acsik", $conn);
$result = mysql_query($sql);
 $sql = "select * from customer where fname='".$fname."' ";
$result = mysql_query($sql,$connection) or die();
$records = mysql_num_rows($result);
if ($records==0)
{
echo "<script>alert(' THISE  NAME IS NOT FOUND IN DATABASE .')</script>";
echo "<script>  window.location='payCredit1.php';</script>";
}
else
{
$sql="INSERT INTO Credit (fname,lname ,AccNumber,Amount,percent,interest_update,date ,DueDate)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[acc]','$_POST[amnt]','$_POST[Typ]','$_POST[date]',
'$_POST[date]','$_POST[due]')";
$l="INSERT INTO ledger (AccNumber,Amount,date,TransactionType) values('$_POST[acc]','$_POST[amnt]','$_POST[date]','borrow')";
				$ree=mysql_query($l);}
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='images/correct.jpg' width='40' height='30'><p><font color='#ffff00' 
face = 'Georgia'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
credit Perform  Successfully !!</font></p>";
echo' <meta content="2;PayCredit1.php" http-equiv="refresh" />';

}
//mysql_close($conn)
?>
<?php
	include("footerIndex.php");
	?>