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
include("TopNavCasherie.php");
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
		
<br>
<p align="right"><a href="javascript:Visionprintreceipt()"><img src="images/Print.png" width="30" height="30" title=print_out_receipt /></a></p>
<div id="print_content" style="width: 1000px;">
	   <div id="content" class="float_l"> <br/>
    
<?php

if(isset($_POST['submit']))

    $search=$_POST['search'];
				 
				$do=mysql_query("SELECT * from customer, imagec  where imagec.user_id='$search' AND customer.user_id='$search'")or die(mysql_error());
				$array=mysql_fetch_array($do);
				$count=mysql_num_rows($do);
				if($count >0)
			?>
				
		
		
        <table style="border: 3px double #FF6600; background:
		url(images/powder.gif);background-size:cover; padding:12px; color:#003366">
          <tr><td>&nbsp;</td></tr><tr>
            <th scope="col" colspan="3" align="center">AMHARA CRADIT AND SAVING INSTITUTION</th>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td width="175" height="34">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME</td>
            <td width="251"><?php echo $array['fname'].' '.$array['lname'];?> </td>
            <td rowspan="5"><img src="<?php echo $array['location']; ?>" width="200" height="200"  id="images"/></td>
          </tr>
		  
          <tr>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEX </td>
            <td><?php echo $array['Sex'];?></td>
          </tr>
          <tr>
            <td height="38">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address</td>
            <td><?php echo $array['address'];?></td>
          </tr>
          <tr>
            <td height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Number  </td>
            <td><?php echo $array['AccNumber'];?> </td>
          </tr>
		   <tr>
            <td height="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Type  </td>
            <td><?php echo $array['AccType'];?> </td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" align="center"><font face="monotype corsiva" size=4>~~~~~~ACSI~~~~~~</td>
          </tr>
        </table>
		
      </div>
	 <?php
	include("footerIndex.php");
	?>