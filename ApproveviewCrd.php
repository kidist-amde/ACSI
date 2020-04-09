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
	          </br>
	  
	   <br>
       <?php

 $ctrl=$_REQUEST['key'];
$sel=mysql_query("SELECT * FROM credit WHERE AccNumber='$ctrl'");
$fetch=mysql_fetch_array($sel);

?>
<form  action="" method="post" name="myform" >

			<table style="border: 3px double #FF6600;  padding:12px; color:#003366; background:url(images/powder.gif);background-size:cover;">
           <tr align = 'center' ><td colspan = '5'><font size=3 style="padding-left:26em"> <b><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <u>PAYMENT RECIPT</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br/><br/></font></td></tr>
		   <tr><td >&nbsp;</td></tr>
		    <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME</td>
                <td>&nbsp;</td>
                <td><input type="text" size="30" id='in' style="width:180" 
				value="<?php echo $fetch['fname'].' '.$fetch['lname'] ?>" readonly /></td>
               </tr>
			     <tr>
                <td  height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account NUMBER</td>
                <td >&nbsp;</td>
                <td ><input type="text"  size="30" id='in' value="<?php echo $ctrl ?>" style="width:180" readonly /></td>
              </tr>
            <tr>

                <td  height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Curent Balance</td>
                <td >&nbsp;</td>
                <td ><input type="text"  size="30" id='in' value="<?php echo $fetch['Amount'] ?>" style="width:180" readonly /></td>
              </tr>
			  
			  <tr>

                <td  height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;penality</td>
                <td >&nbsp;</td>
                <td ><input type="text" size="30" id='in' value="<?php echo $fetch['penality'] ?>" style="width:180" readonly /></td>
              </tr>
			
               <tr>
            <td colspan="3" align="center"><font face="monotype corsiva" size=4>~~~~~~ACSI~~~~~~</td>
          </tr>
              
			  
			  
			 <tr><td >&nbsp;</td></tr>

            </table>

          </form>


</div>
	  
	  
	  <?php
	include("footerIndex.php");
	?>