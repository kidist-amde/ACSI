<?php
include("headerindexam.php");
?> 
 <div id="ACSI_menubar">
      <?php
include("TopNavIndexAm.php");
?> 
    <!-- END of ACSI_menubar -->
   <?php
include("leftsideam.php");
?>
      <div id="content" class="float_l"> <br/>
        </br>
 	
		   <?php
include("font.php");
?>
		
	     <?php
						$sel=mysql_query("select * from rule where  status = 'off'");
							$gets=mysql_fetch_array($sel);
							$counts=mysql_num_rows($sel);
							$num=1;
							echo '<font color=yellow > '.$num. '</font>&raquo;  <font color=gray >' 
							.$gets['Descrption'].'<br/>';
							$num=2;

							while($gets=mysql_fetch_array($sel)){

							echo '<font color=yellow> '.$num. '</font>&raquo;  ' .$gets['Descrption'].'<br/>';
							$num++;
							}
							?>
							</div>
   <?php
include("footerIndexam.php");
?>