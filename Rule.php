<?php

include("headerindex.php");


?>
  <div id="ACSI_menubar">
            <?php
include("TopNavIndex.php");
?>
     <?php
	  include("leftside.php");
	  ?>
	   <div id="content" > 
	  <?php
	  include("font.php");
	  ?>
	    <p>&nbsp;</p>
		  
	     <?php
						$sel=mysql_query("select * from rule where  status = 'on'");
							$gets=mysql_fetch_array($sel);
							$counts=mysql_num_rows($sel);
							$num=1;
							echo '<font color=yellow > '.$num. '</font>&raquo;  ' 
							.$gets['Descrption'].'<br/>';
							$num=2;

							while($gets=mysql_fetch_array($sel)){

							echo '<font color=yellow> '.$num. '</font>&raquo;  ' .$gets['Descrption'].'<br/>';
							$num++;
							}
							?>
							</div>
	<?php
	include("footerIndex.php");
	?>