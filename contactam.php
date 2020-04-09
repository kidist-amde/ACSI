<?php
include("headerindexam.php");
?>
   <div id="ACSI_menubar">
      < <?php
include("TopNavIndexAm.php");
?> 
    <!-- END of ACSI_menubar -->
   <?php
include("leftsideam.php");
?>
      <div id="content" class="float_l"> <br/>
<?php
include("font.php");
?>
	 <?php
						$sel=mysql_query("select * from contact_us where  status = 'off'");
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
           
      </div>
     <?php
include("footerIndexam.php");
?>