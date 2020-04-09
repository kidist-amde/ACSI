<?php
include("headerindex.php");
?>
    <div id="ACSI_menubar">
     <?php
include("TopNavIndex.php");
?>
      <!-- END of ACSI_menubar -->
    	  <?php
	  include("leftside.php");
	  ?>
	  <p>&nbsp;</p>
	   <div id="content" > 
       
	    <?php
	  include("font.php");
	  ?>
	     <?php
						$sel=mysql_query("select * from about where  status = '1'");
							$gets=mysql_fetch_array($sel);
							$counts=mysql_num_rows($sel);
							$num=1;
							echo '<font color=yellow > '.$num. '</font>&raquo;  ' .$gets['description'].'<br/>';
							$num=2;

							while($gets=mysql_fetch_array($sel)){

							echo '<font color=yellow> '.$num. '</font>&raquo;  ' .$gets['description'].'<br/>';
							$num++;
							}
							?>
	   
	   
      
      </div>
     <?php
	 include("footerIndex.php");
	 ?>