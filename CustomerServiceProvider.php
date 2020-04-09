<?php
include("LogedEmployee.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  
			
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color="white"> Logout</a>&nbsp;|
  <a href="manageAccCSP.php" class="logout" ><font color="white"> Manage_Account</a></div>
 <?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavCSP.php");
?>
    <!-- END of ACSI_menubar -->
  	
   	  <?php
	  include("leftside.php");
	  ?>
	    <?php
   
   include("slideImage.php");
   ?>
	 <?php
	include("footerIndex.php");
	?>