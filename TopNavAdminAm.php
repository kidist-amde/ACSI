
    <div id="ACSI_menubar">
      <div id="top_nav" class="ddsmoothmenu">
        <ul> <li><a href="Adminam.php">ቅድመ ገጽ</a></li>
		 <li><a href="feedback.php" >የተጠቃሚ አስተያየቶች</a></li>
		 <li><a href="#" >መግለጫ</a>
		  <ul>
		  <li><a href="newscust.php" >የ ደንበኛ መግለጫ</a></li>
		  <li><a href="news.php" >የ ሰራተኞች መግለጫ</a></li>
		  </ul>
		  </li>
		  
          <li><a href="#">ተቀጣሪን መዝገብ</a>
		  <ul>
            <li><a href="Addemp.php">አዲስ ተቀጣሪ መመዝገብ </a></li>
              <li><a href="Viewemp.php">የተቀጣሪ መረጃዎች </a></li>
            </ul>
        <li><a href="Reportam.php">ሪፖርት</a></li>
		<li><a href="backup.php">ተተኪ</a></li>
		  <li><a href="Admin.php">ENGLISH</a></li>
      
         </div>
	
		<div id="ACSI_search">
        <form action="search.php" method="post">
          <select value=" " name="search" id="keyword" title="customer Name"  class="txt_field" required >
            <option>
            <option>
            <?php
						$result = mysql_query("SELECT * FROM customer");
						while($row = mysql_fetch_array($result))
							{  
								echo '<option value="'.$row['user_id'].'">';
								echo $row['fname'].' '.$row['lname'];
								echo '</option>';
							}
							?>
          </select>
          <input type="submit" name="submit" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
        </form>
      </div>
    <!-- END of ACSI_menubar -->
	