<div id="ACSI_main">
      <div id="sidebar" class="float_r">
        <div class="sidebar_box"><span class="bottom"></span>
          <h3> የአገልግሎት አይነቶች</h3>
          <div class="content"> <br/>
            
            <?php
						
						$sel=mysql_query("select * from serv where  status = 'off'");
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
            <br/>
          </div>
          <h3>አብቁተ</h3><div class="content">
            <img src="images/aaaa.jpg" height="230" width='269'/>

          </div>
        </div>
      </div>
	  