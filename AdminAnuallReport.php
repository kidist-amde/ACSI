﻿<?php
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
	
<!--=======================================================================================================================================-->

	   <br/>
	        <form  method="POST" enctype="multipart/form-data" id="mytable">
		<br/><br/><div align='center' style="border-radius: 5px;
				border:1px double #b9b9b9;width:680">
		<h4><br/><br/>
		  <font color='#ffff00' face = 'georgia' style="padding-left:5em"><b>ANUALL REPORT GENERATING FORM</b></font></h4>
          <br/><table><br/>
            <tr>
              <td>Select Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><select name="year" style="width:150">
                      <option value='2015'>2015</option>
                      <option value='2016'>2016</option>
                      <option value='2017'>2017</option>
                      <option value='2018'>2018</option>
                      <option value='2019'>2019</option>
                      <option value='2020'>2020</option>
                      <option value='2021'>2021</option>
                      <option value='2022'>2022</option>
                      <option value='2023'>2023</option>
                      <option value='2024'>2024</option>
                      <option value='2025'>2025</option>
                  </select>

			  </td>
              <td></td>
              <td colspan=5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="submit" name="submit" value="Report"  /></td>
            </tr>
          </table><br/><br/></div>
        </form>
        <?php

	if (isset($_POST['submit'])) {
                                  
	$yr = $_POST['year'];
	$qry = mysql_query("SELECT * FROM customer WHERE year(date) = '$yr' ");
	if($row=mysql_fetch_array($qry)){
		echo' <meta content="0;AdminAnuallReportPrint.php?year='.$yr.'" http-equiv="refresh" />';
		}
else {
	echo '<img src="images/no.ico" /> &nbsp;! No Report is available for this Year.';
	echo '<meta content="2;Report.php" http-equiv="refresh" />';

}
		}
		?>
	
 <?php
	include("footerIndex.php");
	?>