
    <div id="ACSI_menubar">
      <div id="top_nav" class="ddsmoothmenu">
        <ul> <li><a href="officer.php">Home</a></li>
		
            <li><a href="Viewnews.php">view News </a></li>
             
			  
           
		 
		  
          <li><a href="createAcc.php">Create Account </a>
		  
        <li><a href="#">Approve Requests </a>
		  <ul>
            <li><a href="ApproveCredit.php">Credit Requests </a></li>
              <li><a href="ApproveSav.php">Saving Requests</a></li>
			  <li><a href="ApproveWith.php">Withdrwal Requests </a></li>
       
            </ul>
              <li><a href="upload.php">Upload Customer Photo </a></li>
			    <li><a href="OfficerAm.php"> አማረኛ</a></li>
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
	
	
	
	
    
	