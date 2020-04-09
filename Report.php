<?php
include("LogedEmployee.php");
?> 
<div style="float:right; margin-right:24px;" ;>
  	 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color='white'>Logout</a>&nbsp;|<a href="manageAccAdmin.php" class="logout" >
  <font color='white'>Manage_Account</a></div>
<?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavAdmin.php");
?>
    <!-- END of ACSI_menubar -->
	
     <?php
	  include("leftside.php");
	  ?>
	
        </br>
       
		
		 <form  method="POST" enctype="multipart/form-data" id="mytable">
			<br/><br/><div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
				<h4><font color='#ffff00' style="text-transform:uppercase;" face='georgia'><br/><br/>
select report type you need?</font></h4>

<div style="padding-left:3em"><a href="AdminMonthReport.php"><b>&nbsp;&nbsp;&nbsp;&nbsp;<font size=2>
Monthly Report</b></a><br/>&nbsp;&nbsp;&nbsp;
<a href="AdminAnuallReport.php"><b>Annual Report</font></b></a><br/><br/></div>
				</div>
			</form>
 
   <?php
	include("footerIndex.php");
	?>