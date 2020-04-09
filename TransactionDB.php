
<?php
include("LogedEmployee.php");
?>  
		<div style="float:right; margin-right:24px;" ;>	
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color='white'>Logout</a>&nbsp;|<a href="manageAccCash.php" class="logout" >
  <font color='white'>Manage_Account</a></div>
<?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavCasherie.php");
?>
    <!-- END of ACSI_menubar -->
		  <?php
	  include("leftside.php");
	  ?>		
	  <?php
	  include("table.php");
	  ?>	
	    <div id="content" class="float_l"> <br/>
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

<p align="right"><a href="javascript:Visionprintreceipt()">
<img src="images/Print.png" width="30" height="30" title=print_out_receipt /></a></p>
<div id="print_content" style="width: 1000px;">

        <p>&nbsp;</p>
       <?php 
	  if (isset($_POST['Submit'] )) {
$acc=$_POST['acc'];
}
$conn = mysql_connect ("localhost", "root", "") or
die ('I cannot connect to the database because: ' . mysql_error());
$selected = mysql_select_db ("acsik")
or die ("Could not select database");


// PHP Search Script
//$account=$_POST['accno'];



$result = mysql_query("SELECT * FROM   ledger where AccNumber='$acc'");
    if ($myrow = mysql_fetch_array($result)) {   echo ("<table border=1 class='phar'>\n"); 
      echo ("<th colspan=9></th><tr><td>Transaction Type</td><td>Amount</td><td>Date</td></td>
	  </td>\n");  
       do {     printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n",  $myrow["TransactionType"],$myrow["Amount"], $myrow["Date"]  ); 
         } while ($myrow = mysql_fetch_array($result)); 
          echo "</table>\n";
           } else {  
		  echo "<font color='yellow' size='3'>Sorry, no records were found!</font>"; 
			echo' <meta content="1;Transaction.php" http-equiv="refresh" />';
		   
            }
mysql_close();
?>
 
	</div>
      </div>
	   <?php
	include("footerIndex.php");
	?>