<?php
include("LogedEmployee.php");
?>  
<div style="float:right; margin-right:24px;" ;>
 
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color='white'>Logout</a>&nbsp;|<a href="manageAccAdmin.php" class="logout" >
  <font color='white'>Manage_Account</a></div>
<?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavAdmin.php");
?>
    <!-- END of ACSI_menubar -->
		  <?php
	  include("leftside.php");
	  ?>
	  <script type="text/javascript">
	<!--
	function AllowAlphabet(){
			
			    if (!myform.tittle.value.match(/^[a-zA-Z]+$/)  && myform.tittle.value !="")
               {
                    myform.tittle.value="";
                    myform.tittle.focus(); 
                    alert("Please Enter only Alphabet value for Tittle");
               }
	  }
	</script>	
		  <p>&nbsp;</p>
		<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>POST NEWS FOR STAFF MEMBERS</b></font></h4>
		  	  <form method="post" action="news.php" name="myform"><br/>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
          
       <tr>
     <td><font size="2px" face = 'oblique'>News_Tittle: </font></td><td>
	<input name="tittle" size="32" id="name" type="text" placeholder="Tittle" required onkeyup="AllowAlphabet()"></td>
     </tr> <tr>
     <td><font size="2px" face = 'oblique'>News_Date:</font></td><td>
	<input name="date" size="32" id="name" type="text"   value="<?php echo date('y-m-d');?>" readonly="true"></td>
     </tr>
		 <tr>
     <td ><b><font size="2px" face = 'oblique'>Write Descrption here</font></b></td>
    
     <td><textarea name="comment" id="comment" placeholder="Write Descrption here" cols="34" rows="7" width="200px"required></textarea></center></td>
     </tr>
<tr>
<td>&nbsp;</td>
              <td></td>
<tr>
<td><center><input value="post" name="sent" type="Submit" Onclick="return check(this.form);"/>
<input name="clear" type="reset" Value="Clear"></center></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

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

$sql="INSERT INTO news_tbl (News_Tittle ,News_Date, description ,status)
VALUES
('$_POST[tittle]','$_POST[date]','$_POST[comment]','1')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo '<img src="images/492.png" > &nbsp;! News has been Post Successfully!';

			echo' <meta content="2;news.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>

   <?php
	include("footerIndex.php");
	?>