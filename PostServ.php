<?php
include("LogedEmployee.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  
			
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color="white"> Logout</a>&nbsp;|
  <a href="manageAccCSP.php" class="logout" ><font color="white"> Manage_Account</a></div>
 <?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavCSP.php");
?>
    <!-- END of ACSI_menubar -->
  	
   	  <?php
	  include("leftside.php");
	  ?>	  
	     <div id="content" class="float_l"> <br/>
        </br>
       
				<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>POST SERVICES </b></font></h4>
		  	  
       <form method="post" action="PostServ.php" name="myform"><br/>
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">

	
      <tr>
     <td><center><font size="2px" face = 'Georgia'>Service</font></center></td>
	      <td colspan="2"><center><textarea name="ser" id="comment" 
		  cols="24" rows="7" required></textarea></center></td></tr>
		   <tr>
     <td><center><font size="2px" face = 'Georgia'>Descrption </font></center></td>
	      <td colspan="2"><center><textarea name="comment" id="comment" placeholder="Write Descrption here" 
		  cols="34" rows="7" required></textarea></center></td></tr>
     <tr>
     <td ><b><font size="2px" face = 'Georgia'>status</font></b></td><td>
	 <input name="status" value="on" size="32" id="name" type="text"></td>
     </tr>
	
<tr>
<td>&nbsp;</td>
 <tr>
     <td colspan="2"><center><input value="Send" name="sent" type="Submit" Onclick="return check(this.form);"/>
	 <input value="Reset" type="Reset"></center></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     </tr>
				</tr>	</table></form>  
				
		  
         
		</div>
         
			 
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

$sql="INSERT INTO serv( service,description,status)
VALUES
('$_POST[ser]','$_POST[comment]','$_POST[status]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='images/correct.jpg' width='40' height='30'><p><font color='#ffff00' face = 'Georgia'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Service has been post Successfully !!</font></p>";
echo' <meta content="2;postServ.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>

      </div>
	    <?php
	include("footerIndex.php");
	?>