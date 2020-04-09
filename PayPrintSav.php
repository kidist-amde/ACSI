<?php
	include("connection.php");
     session_start();	
?>

<div style="float:right; margin-right:24px;" ;>
  <?php
			echo '<img src="images/admin.png"><font color="white"> ';?>
  |<a href="logout.php" class="logout">Logout</a>&nbsp;|<a href="manageAccCash.php" class="logout" >Manage_Account</a></div>
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to ACSI CUSTOMER Information Management System</title>
<link rel="icon" type="image/ico" href="images/BOOKS.ico"/>
<meta name="keywords" content="ACSI management system" />
<meta name="description" content="ACSI management system" />
<link href="Acsi.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link href="date/htmlDatepicker.css" rel="stylesheet" />
<script language="JavaScript" src="date/htmlDatepicker.js" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}</script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="improve/graph/js/jquery.js"></script>
<link href="qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css" media="screen, projection">


<script type="text/javascript" src="js/ddsmoothmenu.js">
	/***********************************************
			* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
			* This notice MUST stay intact for legal use
			* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
			***********************************************/

			</script>
<script type="text/javascript">

			ddsmoothmenu.init({
				mainmenuid: "top_nav", //menu DIV id
				orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
				classname: 'ddsmoothmenu', //class added to menu's outer DIV
				//customtheme: ["#1c5a80", "#18374a"],
				contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
			})

			</script>
	<!--**************************************************************************-->		
<script type="text/javascript">
	<!--
	function AllowAlphabet(){
			
			    if (!myform.tele.value.match(/^[0-9]+$/) && myform.tele.value !="")
               {
                    myform.tele.value="";
                    myform.tele.focus(); 
                    alert("Please Enter only Number value for Phone/Telephone Number");
               }
			
			 if (!myform.fname.value.match(/^[a-zA-Z]+$/) && myform.fname.value !="")
               {
                    myform.fname.value="";
                    myform.fname.focus(); 
                    alert("Please Enter only alphabets for First Name");
               }
			    if (!myform.lname.value.match(/^[a-zA-Z]+$/) && myform.lname.value !="")
               {
                    myform.lname.value="";
                    myform.lname.focus(); 
                    alert("Please Enter only alphabets for Last Name");
               }
			   if (!myform.gfname.value.match(/^[a-zA-Z]+$/) && myform.gfname.value !="")
               {
                    myform.gfname.value="";
                    myform.gfname.focus(); 
                    alert("Please Enter only alphabets for Grand Father Name");
               }
		}
		
	function check() {
    if(document.getElementById('password').value === document.getElementById('confirm_password').value) {
	 $('#message').html('Matching').css('color', 'green');
    } else {
        $('#message').html('Not Matching').css('color', 'red');
    }
}
	</script>	
	
	
</head>
<body>
<div id="ACSI_body_wrapper">
  <div id="ACSI_wrapper">
    <div id="ACSI_header">
      <div id="site_title"> <a href="#">ACSI CUSTOMER INFORMATION MANAGEMENT SYSTEM</a> </div>
      <!-- end of site_title -->
      <div id="header_right"> <img src="images/a.png" width="200" height="150" /> </div>
      <div class="cleaner"></div>
    </div>
    <!-- end of header -->
    <div id="ACSI_menubar">
      <div id="top_nav" class="ddsmoothmenu">
        <ul> <li><a href="Cashier.php">Home</a></li>
		 <li><a href="ViewnewsCash.php" >View News</a></li>
		 
              
			    <li><a href="PayWithdrawal.php ">Pay Withdrawal </a></li>
           
       
          <li><a href="#">Credit</a>
		  <ul>
            
              <li><a href="PayCredit.php">Pay  Credit </a></li>
			    <li><a href="CollectCredit.php ">Collect Credit </a></li>
            </ul>
       <li><a href="PaySaving.php">Collect Saving </a></li>
      
    </div>
    <!-- END of ACSI_menubar -->
	
	
    <div id="ACSI_main">
      <div id="sidebar" class="float_r">
        <div class="sidebar_box"><span class="bottom"></span>
          <h3>SERVICES</h3>
          <div class="content"> Move the mouse here to PAUSE the slide<br/>
            <marquee behavior="scroll" direction="up"  height="150" scrollamount="1" onMouseOver="this.setAttribute('scrollamount', 0, 0);" onMouseOut="this.setAttribute('scrollamount', 2, 0);">
            <?php
						$sel=mysql_query("select * from service where id = '1' AND status = 'on'");
							$gets=mysql_fetch_array($sel);
							$counts=mysql_num_rows($sel);
							$num=1;
							echo '<font color=red> '.$num. '</font>&raquo;  ' .$gets['serv'].' '.$gets['desc'].'<br/>';
							$num=2;

							while($gets=mysql_fetch_array($sel)){

							echo '<font color=red> '.$num. '</font>&raquo;  ' .$gets['serv'].' '.$gets['desc'].'<br/>';
							$num++;
							}
							?>
            </marquee>
            <br/>
          </div>
          <h3>ACSI</h3><div class="content">
            <img src="images/aaaa.jpg" height="230" width='269'/>

          </div>
        </div>
      </div>
	  
	     <div id="content" class="float_l"> <br/>
        </br>
<script language="javascript">
function Visionprintreceipt()
{
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25";
  var content_vlue = document.getElementById("print_content").innerHTML;

  var docprint=window.open("","",disp_setting);
   docprint.document.open();
   docprint.document.write('<html><head><title>Ayu Hospital powered printer</title>');
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

 $AccNumber=$_REQUEST['AccNumber'];
$sel=mysql_query("SELECT * FROM saving WHERE AccNumber=$AccNumber");
$fetch=mysql_fetch_array($sel);

?>
 <form  action="PayPrintSav.php" method="post" name="myform" >

			<table style="border: 3px double #FF6600;  padding:12px; color:#003366; background:url(images/record.jpg);background-size:cover;">
           <tr align = 'center' ><td colspan = '5'><font size=4> <b><br/>&nbsp;&nbsp;&nbsp;&nbsp;Saving IDENTIFICATION CARD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><br/><br/></font></td></tr>
		   <tr><td >&nbsp;</td></tr>
            <tr>

                <td  height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME OF INSTITUTION </td>
                <td >&nbsp;</td>
                <td ><input type="text" size="30" id='in' value="ACSI" readonly style="width:180"/></td>
              </tr>
			  <tr>

                <td  height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE OF SAVING</td>
                <td >&nbsp;</td>
                <td ><input type="text" size="30" id='in' value="<?php echo strftime('%x') ?>" style="width:180" readonly /></td>
              </tr>
			  <tr>
                <td  height="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACCOUNT NUMBER</td>
                <td >&nbsp;</td>
                <td ><input type="text"  size="30" id='in' value="<?php echo $AccNumber ?>" style="width:180" readonly /></td>
              </tr>
               <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAME</td>
                <td>&nbsp;</td>
                <td><input type="text" size="30" id='in' style="width:180" value="<?php echo $fetch['fname'].' '.$fetch['lname'] ?>" readonly /></td>
               </tr><tr>
			   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTRESET RATE</td>
                <td>&nbsp;</td>
                <td><input type="text" size="30" id='in' style="width:180" value="<?php echo $fetch['InterestRate'] ?>" readonly /></td></tr>
              <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BALANCE</td>
                <td>&nbsp;</td>
                <td><input type="text" name="sex" size="30" id='in' style="width:180" value="<?php echo $fetch['balance'] ?>"  readonly /></td>
              </tr>
			 
			 <tr><td >&nbsp;</td></tr>

            </table>

          </form>
 </div>
		
         
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 </div>
	   <div class="product_box">
       

			
		  <div class="cleaner"></div>
		</div>
		<!-- END of ACSI_main -->
		<div id="ACSI_footer">
			<div align=center> Copyright &copy; 2017 ACSICIMS. Designed by <a href=g.html>Group=>4</a> Computer Science Student of UOG </div>

	</div>
	<!-- END of ACSI_footer -->
	</div>
	<!-- END of  ACSI_wrapper -->
	</div>
	<!-- END of  ACSI_body_wrapper -->
	</body>
	</html>