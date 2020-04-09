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
  function AllowAlphabet(){
  
    if (!myform.acc.value.match(/^[0-9]+$/) && myform.acc.value !="")
               {
                    myform.acc.value="";
                    myform.acc.focus(); 
                    alert("Please Enter only Number value for Account Number");
               }
  
  }
  </script>
	  </br></br></br>
	  <div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>CHECK CUSTOMER SAVING DETAIL</b></font></h4>
		  <form action="savingDB.php" method="POST" name="myform"><br/>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
      
<tr>
<td>
<b>Account Number</b>
</td>
<td>
<input type="text" name="acc" type="text"required   onkeyup="AllowAlphabet()"/>
</td>
</tr>
 
	 
		</td>
<td >
<input name="Submit" type="submit" Value="pay">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="clear" type="reset" Value="Clear">
</td>
				</tr>	</table></form>  
	
		</div>
         
<?php
	include("footerIndex.php");
	?>