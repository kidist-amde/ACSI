
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
		
		
	
	
<p align="right"><a href="javascript:Visionprintreceipt()"><img src="images/Print.png" width="30" height="30" title=print_out_receipt /></a></p>
<div id="print_content" style="width: 1000px;">

 <br>
        <p>&nbsp;</p>
     
	
       <?php
$acc=$_POST['acc'];
$sel=mysql_query("SELECT * FROM saving WHERE AccNumber='$acc'");
$fetch=mysql_fetch_array($sel);

?>

 <form  action="" method="post" name="myform" >

			<table style="border: 3px double #FF6600;  padding:12px; color:#003366; background:url(images/powder.gif);background-size:cover;">
           <tr align = 'center' ><td colspan = '5'><font size=3 style="padding-left:26em"> <b><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <u>PAYMENT RECIPT</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br/><br/></font></td></tr>
		   <tr><td >&nbsp;</td></tr>
		    <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME</td>
                <td>&nbsp;</td>
                <td><input type="text" size="30" id='in' style="width:180" 
				value="<?php echo $fetch['Fname'].' '.$fetch['Lname'] ?>" readonly /></td>
               </tr>
			     <tr>
                <td  height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account NUMBER</td>
                <td >&nbsp;</td>
                <td ><input type="text"  size="30" id='in' value="<?php echo $acc ?>" style="width:180" readonly /></td>
              </tr>
            <tr>

                <td  height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Curent Balance</td>
                <td >&nbsp;</td>
                <td ><input type="text"  size="30" id='in' value="<?php echo $fetch['balance'] ?>" style="width:180" readonly /></td>
              </tr>
			  
			 
			
               <tr>
            <td colspan="3" align="center"><font face="monotype corsiva" size=4>~~~~~~ACSI~~~~~~</td>
          </tr>
              
			  
			  
			 <tr><td >&nbsp;</td></tr>

            </table>

          </form>
 </div>
      </div>
	   <?php
	include("footerIndex.php");
	?>