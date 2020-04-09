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
  <p>&nbsp;</p>
      <?php
	  include("font.php");
	  ?>
	
	 <?php
						$sel=mysql_query("select * from contact_us where  status = 'on'");
							$gets=mysql_fetch_array($sel);
							$counts=mysql_num_rows($sel);
							$num=1;
							echo '<font color=yellow > '.$num. '</font ></center>&raquo;  
							' .$gets['address'].' '.$gets['descrption'].'<br/>';
							$num=2;

							while($gets=mysql_fetch_array($sel)){

							echo '<font color=yellow> '.$num. '</font>&raquo;
							' .$gets['address'].' '.$gets['descrption'].'<br/>';
							$num++;
							}
							?>
           
			
		<?php
	include("footerIndex.php");
	?>
		