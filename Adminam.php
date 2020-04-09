<?php
include("LogedEmployee.php");
?> 
<div style="float:right; margin-right:24px;" ;>
  		 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logoutam.php" class="logout"><font color='white'>ውጣ</a>&nbsp;|<a href="manageAccAdmin.php" class="logout" >
  <font color='white'>አካውንት አስተካክል</a></div>
 <?php
include("headerAm.php");
?> 
 <!-- END of ACSI_Header -->
<?php
include("TopNavAdminAm.php");
?>
    <!-- END of ACSI_menubar -->
	
  <?php
	  include("leftsideAm.php");
	  ?>
	         <?php
   
   include("slideImage.php");
   ?>
	 <?php
	include("footerIndexAm.php");
	?>