
    <div id="ACSI_menubar">
      <div id="top_nav" class="ddsmoothmenu">
        <ul> <li><a href="officer.php">ቅድመ ገጽ</a></li>
		
            <li><a href="Viewnews.php">መልእክት ማሳያ </a></li>
             
			  
           
		 
		  
          <li><a href="createAcc.php">አካውንት መክፈት </a>
		  
        <li><a href="#">ጥያቄዎችን ማፅደቅ </a>
		  <ul>
            <li><a href="ApproveCredit.php">የብድር ጥያቄ


 </a></li>
              <li><a href="ApproveSav.php">የቁጠባ ጥያቄ</a></li>
			  <li><a href="ApproveWith.php">የወጪ ጥያቄ</a></li>
       
            </ul>
              <li><a href="upload.php">የደንበኞች ፎቶ ፎርም</a></li>
			     <li><a href="Officer.php">ENGLISH</a></li>
    </div>
			<div id="ACSI_search">
        <form action="search O.php" method="post">
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
	
	
	
	
    
	