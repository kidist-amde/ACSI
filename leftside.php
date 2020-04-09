  <div id="ACSI_main">
      <div id="sidebar" class="float_r">

        <div class="sidebar_box"><span class="bottom"></span><br><td >&nbsp;</td><td >&nbsp;</td>
		
          <h3>SERVICES</h3>
          <div class="content">
            <?php
							$sel=mysql_query("select * from serv where  status = 'on'");
							$gets=mysql_fetch_array($sel);
							$counts=mysql_num_rows($sel);
							$num=1;
							echo '<font color=yellow> '.$num. '</font>&raquo;  ' .$gets['service'].' '.$gets['description'].'<br/>';
							$num=2;

							while($gets=mysql_fetch_array($sel)){

							echo '<font color=yellow> '.$num. '</font>&raquo;  ' .$gets['service'].' '.$gets['description'].'<br/>';
							$num++;
							}
							?>
           
          </div>
          <h3>ACSI</h3><div class="content">
            <img src="images/aaaa.jpg" height="230" width='269'/>

          </div>
        </div>
      </div>
	  	
	  