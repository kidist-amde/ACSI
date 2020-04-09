<?php
include("LogedEmployee.php");
?> 
<div style="float:right; margin-right:24px;" ;>
  		 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logoutam.php" class="logout"><font color='white'>ውጣ</a>&nbsp;|<a href="manageAccAdmin.php" class="logout" >
  <font color='white'>አካውንት አስተካክል</a></div>
 <?php
include("headerAm.php");
?> 
 <!-- END of ACSI_Header -->
<?php
include("TopNavAdminAm.php");
?>
    <!-- END of ACSI_menubar -->
	
  <?php
	  include("leftsideAm.php");
	  ?>
	   <div id="content" class="float_l"> <br/>
        </br>
    
	   <br/><br/>
	        <form  method="POST" enctype="multipart/form-data" id="mytable">
		<br/><br/><div style="border-radius: 5px;
	border:1px double #b9b9b9;padding-left:7em">
	      <h4><br/><br/>
		  <font color='#ffff00' face = 'georgia' style="padding-left:5em"><b>የ ወርሀዊ ሪፖርቶች ፎርም</b></font></h4>
          <br/><table><br/>
            <tr>
              <td>ወር</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><select name="month" style="width:150">
                     <option value="">ወሩን  ይምረጡ...</option>
                      <option value='09'>መስከረም</option>
                      <option value='10'>ጥቅምት</option>
                      <option value='11'>ህዳር</option>
                      <option value='12'>ታህሳስ</option>
                      <option value='05'>ጥር</option>
                      <option value='06'>የካቲት</option>
                      <option value='07'>መጋቢት</option>
                      <option value='08'>ሚያዝያ</option>
                      <option value='09'>ግንቦት</option>
                      <option value='06'>ሰኔ</option>
                      <option value='07'>ሐምሌ</option>
                      <option value='08'>ነሀሴ</option>
                  </select>


              </td>
			  
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; አመት&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><select name="year" style="width:150">
                      <option value='2015' selected>2015</option>
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

			  </td><td>&nbsp;</td>
              
            </tr><tr><td>&nbsp;</td></tr>
			
            <tr><td>&nbsp;</td></tr>
            <tr>
              <td></td>
              <td colspan=5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <input type="submit" name="submit" value="ሪፖርት"  />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name="reset" value="እንደገና ሙላ"  /></td>
            </tr>
          </table><br/><br/></div>
        </form>
        <?php

	if (isset($_POST['submit'])) {
                                  
	$month = $_POST['month'];
	$yr = $_POST['year'];
	$qry = mysql_query("SELECT * FROM customer  WHERE month(date) = '$month' AND year(date)  ");
	if($row=mysql_fetch_array($qry)){
		echo' <meta content="0;AdminMonthReportPrintAM.php?month='.$month.'" http-equiv="refresh" />';
		}
else {
	echo '<img src="images/no.ico" /> &nbsp;! በዚህ ወር ምንም አይነት ሪፖርት የለም.';
	echo '<meta content="2;Reportam.php?action=report" http-equiv="refresh" />';

}
		}
		?>
	
      </div>
	    <?php
	include("footerIndexAm.php");
	?>