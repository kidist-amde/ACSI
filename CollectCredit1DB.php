
<?php
include("LogedEmployee.php");

include('penality.php');

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
	  <?php
	  include("table.php");
	  ?>	
	    <div id="content" class="float_l"> <br/>
        
        <p>&nbsp;</p>
        <script type="text/javascript">
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
                    alert("Please Enter only Number value for Account Number");
               }
  
  }
  </script>
  
  
  <?php 
		 $acc=$_POST['acc']; 
 
$sel=mysql_query("SELECT * FROM customer WHERE AccNumber=$acc");

$fetch=mysql_fetch_array($sel);
?>		
				<?php
		  if (isset($_POST['Submit'] )) {
$acc=$_POST['acc'];
}
$conn = mysql_connect ("localhost", "root", "") or
die ('I cannot connect to the database because: ' . mysql_error());
$selected = mysql_select_db ("acsik")
or die ("Could not select database");


// PHP Search Script
//$account=$_POST['accno'];



$result = mysql_query("SELECT * FROM   credit where AccNumber='$acc'");
    if ($myrow = mysql_fetch_array($result)) {   echo ("<table border=1 class='phar'>\n"); 
      echo ("<th colspan=9></th><tr><td>First Name</td><td>Last Name</td></td><td>Account NO.</td>
	  </td><td>Balance</td></td><td>Penality</td></tr>\n");  
       do {     printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td>
	   <td>%s</td></tr>\n",$myrow["fname"], $myrow["lname"],  $myrow["AccNumber"] ,$myrow["Amount"],$myrow["penality"] ); 
         } while ($myrow = mysql_fetch_array($result)); 
          echo "</table>\n";
           } else {  
		  echo "<font color='yellow' size='3'>Sorry, no records were found!</font>"; 
			echo' <meta content="2;CollectCredit1.php" http-equiv="refresh" />';
		   
            }
mysql_close();
?>
            		
         
	<center> <font color='#ffff00'face = 'Georgia'><b><br/>UPDATE CUSTOMER BALANCE </b></font></h4>
		  <form action="collectcreditReturnDB.php" method="POST" name="myform"><br/></center>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
          
<tr>
<td>
<b>Account Number</b>
</td>
<td>
<input name="acc" type="text" required"  onkeyup="AllowAlphabet()"/   value="<?php echo $fetch[5] ?>" readonly="true">
</td>
</tr>
	 <tr>
<td>
<b>Amount you returen now</b>
</td>
<td>
<input name="amnt" type="text"required"  onkeyup="AllowAlphabet()"/>
</td>
</tr>	
           <tr>
<td>
<b> Date</b>
</td>
<td>
<input name="date" type="text"required value="<?php echo date('y-m-d');?>"  >
</td>
</tr>	
		
<tr>
<td>&nbsp;</td>
              <td></td>
<td>
<input name="Submit" type="submit" Value="PAY">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="clear" type="reset" Value="Clear">
</td>
				</tr>	</table></form> </div> 
<?php
	include("footerIndex.php");
	?>