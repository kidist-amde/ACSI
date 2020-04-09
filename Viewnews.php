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
	        <div id="content" class="float_l"> <br/>
        </br>
        <p>&nbsp;</p>
       
     
	 
<?php
			$query="SELECT * FROM news_tbl ORDER BY News_Date DESC;";
			$result=mysql_query($query);
            $count=mysql_num_rows($result);
			if(!$result){
               die("no new information".mysql_error());
               }
			$row1=mysql_fetch_array($result);
			
            echo"<p align='right'><font   color='#ffff00' face = 'Georgia' size='3' ><b>Date:</b>"."<u>".$row1['News_Date']."</u>"."</font></p>";
            echo"<font face = 'Georgia' size='5'  color='white' ><center>"."<u>".$row1['News_Tittle']."</u>"."</center></font><br>"."</p>";
			
            echo"<form action='viewnews.php' method='post' ><center>";
			echo"<textarea cols='55' rows='15' readonly >";	
 		
			echo $row1['description'];
			
            echo"</textarea>";
            echo"</form>";			
			
			
			?>
		</div>	
	  <?php
	include("footerIndex.php");
	?>