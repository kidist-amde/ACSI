
    <div id="ACSI_menubar">
      <div id="top_nav" class="ddsmoothmenu">
        <ul> <li><a href="Cashier.php">Home</a></li>
		 <li><a href="ViewnewsCash.php" >View News</a></li>
		 
              
			    
           
       
          <li><a href="#">Payment for requests</a>
		  <ul>
            <li><a href="PayWithdrawal.php ">Pay Withdrawal </a></li>
              <li><a href="PayCredit.php">Pay  Credit </a></li>
	
				   <li><a href="PaySaving.php">Collect Saving </a></li>
            </ul></li>
       <li><a href="#">payment </a>
      <ul>
            <li><a href="PayWithdrawal1.php ">Pay Withdrawal </a></li>
              <li><a href="PayCredit1.php">Pay  Credit </a></li>
			    <li><a href="CollectCredit1.php ">Collect Credit </a></li>
				   <li><a href="PaySaving1.php">Collect Saving </a></li>
				    <li><a href="PayInitalSaving.php">inital Saving </a></li>
            </ul>
			<li><a href="Transaction.php">All Transaction </a>
			<li><a href="#">Cheak Balance</a>
			<ul>
			<li><a href="saving.php">Saving </a></li>
				    <li><a href="Credit.php">Credit </a></li>
			
			</ul>
				   <li><a href="CashierAm.php">አማርኛ</a></li>
				     
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
	