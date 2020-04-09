<?php

include("headerindex.php");
include("interest.php");

include("interstcredit.php");

?>
<div id="ACSI_menubar">
            <?php
include("TopNavIndex.php");
?>
     <?php
	  include("leftside.php");
	  ?>
	  <div id="content" class="float_l"> <br/>
	  <div class="post_box">
      <div class="header">
	  <div id="content" class="float_l"> <br/>
	  <br><br>
	   <div align=center style="border-radius: 5px;border:1px double #b9b9b9;padding-left:em">
     
		<form action="forgot.php" method="post" >
          <table height="196" id='mytable' align = 'middle'>
            <tr>
              <td rowspan="5" align="center" style="padding-top:12px;padding-left:12px; border:none;"></td>
            </tr>
            
	   <tr>
              <td>what is your fevourite food?</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="food"  id="in" required placeholder="please give your answer"/></td>
            </tr>
			<tr>
              <td>what is your best friend name ?</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="friend"  placeholder="please give your answer" id="in" required  /></td>
            </tr>
            <tr>
              <td>name that you like?</font></td>
              <td>&nbsp;</td>
              <td><input type="text" name="name"  placeholder="please give your answer" id="in" required  /></td>
            </tr>
			   <tr>
              <td></td>
              <td>&nbsp;</td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Recover Password' name='submitlogin' Onclick="return check(this.form);"/>&nbsp;&nbsp;&nbsp;&nbsp;
			  
			 
				 
            </tr>
          </table>
		  
        </form>

     
					 <?php
 if(isset($_POST['submitlogin']))
  {
   $food=$_POST['food'];
   $friend=$_POST['friend'];
    $name=$_POST['name'];
   $sql="SELECT * FROM customer,information where information.question1='$food' AND information.question2='$friend' 
   AND information.question3='$name' AND information.AccNumber=customer.AccNumber ;"; 
   $result_set=mysql_query($sql);
   if(!$result_set)
   {
   die("Query faill".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{

//$num=mysql_num_rows($result_set);
while($row=mysql_fetch_array($result_set))
{
$fname=$row['fname'];
$password= base64_decode ($row['password']);
echo"<p class='success'>"."<a href='#'>"."Hi"."&nbsp; &nbsp;".$fname."&nbsp; 
&nbsp;"."your password is:".$password."</a>"."</p>";
echo'<meta content="6;login.php" http-equiv="refresh" />';

}}
else
{
	
echo"<p>&nbsp;&nbsp;Incorrect Input</p>";
echo'<meta content="4;forgot.php" http-equiv="refresh" />';
}
}
//mysql_close($conn);
?><div>
			</div></div></div></div></div></div>
<?php
	include("footerIndex.php");
	?>	