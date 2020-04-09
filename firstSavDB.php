<?php
	include("connection.php");
     session_start();	
?>

<div style="float:right; margin-right:24px;" ;>
  <?php
			echo '<img src="images/admin.png"><font color="white"> ';?>
  |<a href="logout.php" class="logout"> <font color='white'>Logout</a>&nbsp;|
  <font color='white'><a href="manageAccCash.php" class="logout" ><font color='white'>Manage_Account</a></div>
  
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
      <div id="header_right"> <img src="images/a.jpg" width="200" height="150" /> </div>
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
        <li><a href="firstSav.php">inital Saving </a></li>
    </div>
	
    <!-- END of ACSI_menubar -->
	
	
    <div id="ACSI_main">
      <div id="sidebar" class="float_r">
        <div class="sidebar_box"><span class="bottom"></span>
          <h3>SERVICES</h3>
          <div class="content"> <br/>
           
            <?php
						$sel=mysql_query("select * from service where id = '1' AND status = 'on'");
							$gets=mysql_fetch_array($sel);
							$counts=mysql_num_rows($sel);
							$num=1;
							echo '<font color=yellow> '.$num. '</font>&raquo;  ' .$gets['serv'].' '.$gets['desc'].'<br/>';
							$num=2;

							while($gets=mysql_fetch_array($sel)){

							echo '<font color=yellow> '.$num. '</font>&raquo;  ' .$gets['serv'].' '.$gets['desc'].'<br/>';
							$num++;
							}
							?>
                    <br/>
          </div>
          <h3>ACSI</h3><div class="content">
            <img src="images/aaaa.jpg" height="230" width='269'/>

          </div>
        </div>
      </div>
	  
	     <div id="content" class="float_l"> <br/>
        </br>
        <a href=Cashier.php ><img src="images/up.png" width="22" height="25" title=Back align='top'/></a><br/><br>

		
		
			
		 
			
				
  <?php 
$connect = mysql_connect("localhost", "root") or
die ("Hey loser, check your server connection.");
mysql_select_db ("acsik");
//if ($_POST['same'] == 'on') {
if (isset($_POST['Submit'] )) {
$acc=$_POST['acc'];
$date=$_POST['date'];
$amnt=$_POST['amnt'];
}
//if(!strlen($fname) || !strlen($lname) || !strlen($idno) || !strlen($sex) || !strlen($qual) || !strlen($witn1) || !strlen($witn2) || !strlen($phone)|| !strlen($nick) || !strlen($mom))
//{
//$error="you need to fill the required field"; 
//echo nl2br("<h1><font color='brown'>$error</font></h1>");
//header("Location:Errors.php");
//}
//else  if(!Preg_match("/^[a-z][a-zA-Z- ]{2,40}$/",$fname) || !Preg_match("/^[a-z][a-zA-Z- ]{2,40}$/",$lname) || !Preg_match("/^[a-z][a-zA-Z- ]{2,40}$/",$qual)
//|| !Preg_match("/^[A-Z0-9][a-zA-Z- ]{6,40}$/",$miskir) || !Preg_match("/^[A-Z0-9][a-zA-Z- ]{6,40}$/",$accno)) 
//{
//echo "<center> Fname,Lname,qualification,accno and witness must be names</center>";
//}


mysql_select_db ("acsik");
$sql = "select AccNumber,balance from saving where AccNumber='$acc'";
$result = mysql_query($sql)or die (mysql_error());
if(!Preg_match("/^[0-9 ]{0,40}$/",$amnt)){
echo "<center><font color='red' size='3'>You have to enter only number in amount text box</font></center>";
}

else{
	while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['AccNumber'];
		$b = $db_field['balance'];
		if(($acc == $a) AND ($amnt<=$b))
		   {
		        
			    $ue="INSERT INTO saving values('$acc','$amnt','$date')";
				
				$ree=mysql_query($ue);
				echo "<font color='yellow' size='3'>You perform saving money successfully</font>";
				echo' <meta content="1;firstSav.php" http-equiv="refresh" />';
			}
			
			else
			{
			echo "<font color='yellow' size='3'>You have no that much balance.Please, enter the correct information</font>";
			echo' <meta content="1;firstSav.php" http-equiv="refresh" />';
			}
			}}
			
?>
		 
		 
		
		
		
		
		
		
		 
		 
		 
		 
		 
		 
		 
		 
		 
		 
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