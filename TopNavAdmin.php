
    <div id="ACSI_menubar">
      <div id="top_nav" class="ddsmoothmenu">
        <ul> <li><a href="Admin.php">Home</a></li>
		 <li><a href="feedback.php" >View Feedback</a></li>
		 <li><a href="#" >Post News</a>
		  <ul>
		  <li><a href="newscust.php" >News for customer</a></li>
		  <li><a href="news.php" >News for staff</a></li>
		  </ul>
		  </li>
		  
          <li><a href="#">Add Staffs</a>
		  <ul>
            <li><a href="Addemp.php">Add Employee </a></li>
              <li><a href="Viewemp.php">View Employee </a></li>
            </ul>
        <li><a href="Report.php">Report</a></li>
		<li><a href="backup.php">BackUp</a></li>
		  <li><a href="Adminam.php">አማርኛ</a></li>
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
      </div></div>