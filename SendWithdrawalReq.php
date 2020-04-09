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
        </br>
		<script type="text/javascript">
  function AllowAlphabet(){
  
    if (!myform.am.value.match(/^[0-9]+$/) && myform.am.value !="")
               {
                    myform.am.value="";
                    myform.am.focus(); 
                    alert("Please Enter only Number value for Amount Value");
               }
  
  }
  </script>
<?php 
		 $id = $_REQUEST['key'];
 
$sel=mysql_query("SELECT * FROM customer WHERE AccNumber=$id");

$fetch=mysql_fetch_array($sel);
?>		 
    
      <div class="product_box">
       <div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680"><br/>
		<form method="post" action="SendWithdrawalReqDB.php" name="myform">
		
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable' summary="sending request">
			<tr><th colspan=9><font color='#ffff00' face = 'Georgia'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			WITHDRWAL REQUEST FORM</font></th></tr>
			
			          
<tr>
<td>
<b>First Name</b>
</td>
<td>
<input name="fname" type="text" required value="<?php echo $fetch[0] ?>"  />
</td>
</tr>
	
			<tr>
<td>
<b>Last  Name</b>
</td>
<td>
<input name="lname" type="text" required value="<?php echo $fetch[1] ?>"  />
</td>
</tr>
	
           
			<tr>
<td>
<b>Account Number</b>
</td>
<td>
<input name="acc" type="text" required value="<?php echo $fetch[5] ?>"  />
</td>
</tr>
		
		   
			<tr>
<td>
<b>Amount</b>
</td>
<td>
<input name="am" type="text" required onkeyup="AllowAlphabet()" />
</td>
</tr>		
      	<tr>
<td>
<b>Date</b>
</td>
<td>
<input name="dt" type="text" required  value="<?php echo date('y-m-d');?>" />
</td>
</tr>
			
            <tr>
              <td>&nbsp;</td>
              <td></td>
              <td align="center"><input type="submit" name="send" id='send'value="send request" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type='reset' id='clear'name="clear" value="Reset"  /></td>
            </tr>
          </table>
        </form>
		</div>

		  <div class="cleaner"></div>
		</div>
		</div>
		<?php
	include("footerIndex.php");
	?>