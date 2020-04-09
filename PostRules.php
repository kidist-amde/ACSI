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
	  	   	<script type="text/javascript">
  function AllowAlphabet(){
  
   if (!myform.sub.value.match(/^[a-zA-Z]+$/) && myform.sub.value !="")
               {
                    myform.sub.value="";
                    myform.sub.focus(); 
                    alert("Please Enter only alphabet value for  Name");
               }
  
  }
  </script>
	     <div id="content" class="float_l"> <br/>
        </br>
     
				<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>POST RULES AND REGULATION </b></font></h4>
		  	  
       <form method="post" action="postRules.php" name="myform"><br/>
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
          

	  <tr>
     <td><font size="4px">Date</font></td><td>
	<input name="date" size="32" id="name" type="text"   value="<?php echo date('d-m-y');?>" readonly="true"></td>
     </tr>
      <tr>
     <td><center><font size="4px">Write Descrption here</font></center></td>
	      <td colspan="2"><center><textarea name="comment" id="comment" placeholder="Write Descrption here" cols="34" rows="7" required></textarea></center></td>
    
	 <tr>
     <td><font size="4px">Summited_By</font></td>
	 <td><input name="sub" size="32" id="name" type="text" placeholder="name" onKeyUp="AllowAlphabet()" required></td>
     </tr>
	  <tr>
     <td><font size="4px">Status</font></td>
	 <td><input name="stat" size="32" id="name" type="text" value="on"></td>
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

$sql="INSERT INTO rule (Date, Descrption,summited_by ,status)
VALUES
('$_POST[date]','$_POST[comment]','$_POST[sub]','$_POST[stat]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='images/correct.jpg' width='40' height='30'><p><font color='#ffff00' face = 'Georgia'>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rules has been post Successfully !!</font></p>";
echo' <meta content="2;postRules.php" http-equiv="refresh" />';
}
//mysql_close($conn)
?>
	

      </div>
	   <?php
	include("footerIndex.php");
	?>