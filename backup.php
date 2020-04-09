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
	
	     <div id="content" class="float_l"> <br/>
  
     <?php
	  include("table.php");
	  ?>

<a href="backup1.php" id="sss"><img src="images/backup.png" alt="backup" /></a>
<center><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color='#ffff00'face = 'Georgia'><b><br/>Backup Archives</b></font></h4></center>
<table  <tr id="head"><td>File Name</td><td>Action</td></tr>
<?php
// List the files
$dir = opendir ("./DB_backup"); 
while (false !== ($file = readdir($dir))) { 

	// Print the filenames that have .sql extension
	if (strpos($file,'.sql',1)) { 

	// Remove the sql extension part in the filename
	$filenameboth = str_replace('.sql', '', $file);
                        
	// Print the cells

		echo "<tr id='eee'>";
		echo '<td>'.$filenameboth.".sql".'</td>';
		echo "<td>"."<a href='DB_backup/" . $filenameboth . ".sql' class='view'>Download SQL</a>"."</td>";
		echo "</tr>";
		
	} 
} 
?>
</table><center>

      </div>
  <?php
	include("footerIndex.php");
	?>