
    <div id="ACSI_menubar">
      <div id="top_nav" class="ddsmoothmenu">
        <ul> <li><a href="Cashier.php">ቅድመ ገጽ</a></li>
		 <li><a href="ViewnewsCash.php" >መልእክት ማሳያ</a></li>
		 
              
			    
           
       
          <li><a href="#">የ  ጥያቄዎች ክፍያ ፎርም</a>
		  <ul>
            <li><a href="PayWithdrawal.php ">የወጪ ጥያቄ </a></li>
              <li><a href="PayCredit.php">የብድር ጥያቄ </a></li>
	
				   <li><a href="PaySaving.php">የቁጠባ ጥያቄ </a></li>
            </ul></li>
       <li><a href="#">ክፍያ </a>
      <ul>
            <li><a href="PayWithdrawal1.php ">ወጪ ማድረጊያ ፎርም</a></li>
              <li><a href="PayCredit1.php">ብድር መስጫ ፎርም </a></li>
			    <li><a href="CollectCredit1.php "> የ ብድር መቀበያ ፎርም </a></li>
				   <li><a href="PaySaving1.php">የ ቁጠባ ሒሳብ መቀያ ፎርም </a></li>
				    <li><a href="PayInitalSaving.php">የ መጀመሪያ ቁጠባ ሒሳብ መቀያ ፎርም   </a></li>
            </ul>
			 <li><a href="Transaction.php">ሁሉም የገንዘብ ዝውውሮች</a></li>

							   <li><a href="#">የ ደንበኞች ሒሳብ መረጃ </a>
      <ul>
            <li><a href="saving.php ">የ ቁጠባ መረጃ </a></li>
              <li><a href="Credit.php">የ ብድር መረጃ </a></li>
			    
            </ul> 
			  <li><a href="Cashier.php">ENGLISH</a></li>
    </div>
		<div id="ACSI_search">
        <form action="search C.php" method="post">
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
    <!-- END of ACSI_menubar -->
	