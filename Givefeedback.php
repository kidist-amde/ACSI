<?php
include("LogedCustomer.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  
			
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color="white"> Logout</a>&nbsp;|
  <a href="manageAccCust.php" class="logout" ><font color="white"> Manage_Account</a></div>
 <?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavCust.php");
?>
    <!-- END of ACSI_menubar -->
  	
   	  <?php
	  include("leftside.php");
	  ?>
	     <div id="content" class="float_l"> <br/>
        </br>
		
      <?php
	  include("FeedbackValidation.php");
	  ?>
			 
 <br/><br/><div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680"><br/>
  <th colspan=9><center><font color='#ffff00' face = 'Georgia' size=4px>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			SEND YOUR COMMENT</center></font></th>
		<form action="Givefeedback.php" method="post" name="aform" onsubmit='return formValidation()' >
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable' summary="sending feedback ">
		
			<tr>
              <td  ><center><font size="4px">Name:</font></center></td>
             
              <td ><input type="text" name="name" size="30" id='name'title="Enter full name here" required ></td>
            </tr>
     <tr>
     <td><b><center><font size="4px">sex:</font></center></b></td><td>
	 <select name="gender">
	 <option>male</option>
	 <option>female</option>
	 </select>
	 </td>
     </tr><tr>
     <td width="1000"><b><center><font size="4px">E-mail:</font></center></b></td><td>
	 <input name="email" size="32" id="email" type="text" placeholder="Enter Your Email"></td>
     </tr>
     <tr>
     <td ><b><center><img src="images/word.png"   /><font size="4px">Write  Comment here</font></center></b></td>
    
     <td colspan="2"><center><textarea name="comment" id="comment" placeholder="Write comment here" cols="34" rows="7"></textarea></center></td>
     </tr>
	 
     <tr>
     <td colspan="2"><center><input value="Send" name="sent" type="Submit" Onclick="return check(this.form);"/>
	 <input value="Reset" type="Reset"></center></td>
     </tr>
     </body></table>
</form></div>
<?php
 if(isset($_POST['sent']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","acsik");
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("acsik", $conn);

$sql="INSERT INTO feedback (name,sex ,email, comment )
VALUES
('$_POST[name]','$_POST[gender]','$_POST[email]','$_POST[comment]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
 
echo '<img src="images/492.png" /> &nbsp;! Your comment has been Successfully sent!!';
				echo '<meta content="2;Givefeedback.php" http-equiv="refresh" />';


}
//mysql_close($conn)
?>
   

      </div>
	   <?php
	include("footerIndex.php");
	?>