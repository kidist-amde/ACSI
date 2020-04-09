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
<!-- END of ACSI_Header -->
<?php
include("TopNavAdmin.php");
?>
    <!-- END of ACSI_menubar -->
	
     <?php
	  include("leftside.php");
	  ?>
	  <script language="javascript">
function Visionprintreceipt()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25";
  var content_vlue = document.getElementById("print_content").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<html><head><title>ACSI powered printer</title>');
   docprint.document.write('</head><body onLoad="self.print()" style="width:800px; font-size:12px; font-family:arial Narrow;text-shadow:0 1px 1px rgba(0,0,0,.1);  padding-left:60px; ">');
   docprint.document.write(content_vlue);
   docprint.document.write('</body></html>');
   docprint.document.close();
   docprint.focus();
}
</script>

<p align="right"><a href="javascript:Visionprintreceipt()"><img src="images/Print.png" width="30" height="30" title=print_out_receipt /></a></p>
<div id="print_content" style="width: 1000px;">

 <br>
 <?php
	$yr = strftime('%Y');
	$month=$_REQUEST['month'];
	$sel = mysql_query("SELECT * FROM customer  WHERE month(date) = '$month' AND year(date) = '$yr'");
	$fetch=mysql_fetch_array($sel);
	$num = mysql_num_rows($sel);
	
	$sel1 = mysql_query("SELECT * FROM customer  WHERE month(date) = '$month' AND year(date) = '$yr'  AND AccType='saving'; ;");
	$u5 = mysql_num_rows($sel1);
	$fetch=mysql_fetch_array($sel1);
	
$sel1 = mysql_query("SELECT * FROM customer  WHERE month(date) = '$month' AND year(date) = '$yr'  AND AccType='credit'; ;");
	$u5 = mysql_num_rows($sel1);
	$fetch=mysql_fetch_array($sel1);
	?>
	<!--************************************************************************************************************************************-->
	
	
	<table border="1"cellpadding="0"  cellspacing="0" style="width:70%">
            <tr>
              <td height="63" colspan="3"  >
                <center>
                  <font size="+1" style="letter-spacing:5px; font-weight:900;"><br/> ACSI<br/>
                  </font><font size="+0" style="letter-spacing:0px;" face=georgia> <hr/>
                  SYSTEM ADMINISTRATOR MONTHLY REPORT<br/> </font>
                </center></td>
            </tr>
            <tr>
              <td width="15%"  height="43" align=center>Monthly Copy</td>
              <td >&nbsp;</td>
              <td align=center>Date:
                <?php   echo date("d-m-Y");   ?></td>
            </tr>
           
            <tr>
              <td colspan="3"><i>
                <hr>
				<p style="padding-left:10em;">	Total Number of Customer in the institution  =>
				<?php echo $num;?></p>
			   <hr/>
                </i></td>
            </tr>
               <tr>
              <td colspan="3"><i>
                <hr>
				<p style="padding-left:10em;">	Number of Customer   with saving account  =>
				<?php echo $u5;?></p>
			   <hr/>
                </i></td>
            </tr>
			
		 <tr>
              <td colspan="3"><i>
                <hr>
				<p style="padding-left:10em;">	Number of Customer with credit account =>
				<?php echo $u5;?></p>
			   <hr/>
                </i></td>
            </tr>
			
		   
		   
		   
		   
		   
            <tr>
              <td height="46" colspan="3" align="center"><p><font face='monotype corsiva' size=4>Thank You!</p></td>
            </tr>
          </table>
		  	
 </div>
	
   <?php
	include("footerIndex.php");
	?>