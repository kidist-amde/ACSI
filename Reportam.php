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
	       
   
	   <div id="content" class="float_l"> <br/>
        </br>
  <form  method="POST" enctype="multipart/form-data" id="mytable">
			<br/><br/><div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
				<h4><font color='#ffff00' style="text-transform:uppercase;" face='georgia'><br/><br/>የሪፖርቱን አይነት ይምረጡ?</font></h4>

<div style="padding-left:3em"><a href="AdminMonthReportAM.php"><b>&nbsp;&nbsp;&nbsp;&nbsp;<font size=2>ወርሀዊ ሪፖርት</b></a><br/>&nbsp;&nbsp;&nbsp;
<a href="AdminAnuallReportAM.php"><b>አመታዊ ሪፖርት</font></b></a><br/><br/></div>
				</div>
			</form>
      </div>
	    <?php
	include("footerIndexAm.php");
	?>