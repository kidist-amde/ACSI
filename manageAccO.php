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
	    <?php
	  include("table.php");
	  ?>
	  
	  
	     <div id="content" class="float_l"> <br/>
        </br>
			  <br/><br/><div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680"><br/>
			<h5><font color='#ffff00' style="text-transform:uppercase;font-weight:" face='georgia'>What do you want to do for your account?</font></h5>

				&nbsp;<a href="changepassO.php"><b>Change Password</b></a><br/>&nbsp;&nbsp;&nbsp;
				<a href="changeunO.php"><b>Change User Name</b></a><br/><br/>
				</div>
			
			
      </div>
	  
	
		<?php
	include("footerIndex.php");
	?>