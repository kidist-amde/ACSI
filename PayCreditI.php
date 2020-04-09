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
        </br>
		
		<a href=PayCredit.php ><img src="images/up.png" width="22" height="25" title=Back align='top'/></a><br/><br>
<script type="text/javascript">
  function AllowAlphabet(){
  
    if (!myform.due.value.match(/<= date('y-m-d')/) && myform.due.value !="")
               {
                    myform.due.value="";
                    myform.due.focus(); 
                    alert("Day Should Be GretherThan Today");
               }
  
  }
  </script>
  
<?php 

		 $ctrl = $_REQUEST['key'];
 
$sel=mysql_query("SELECT * FROM creditrequest WHERE AccNumber=$ctrl");

$fetch=mysql_fetch_array($sel);
?>
<link rel="stylesheet" type="text/css" href="css/datepicker.css" />
<script type="text/javascript" src="date/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="date/bootstrap.js"></script>
		<script>
			$('.myDatepicker').each(function() {
			    var minDate = new Date();
			    minDate.setHours(0);
			    minDate.setMinutes(0);
			    minDate.setSeconds(0,0);
			    
			    var $picker = $(this);
			    $picker.datepicker();
			    
			    var pickerObject = $picker.data('datepicker');
			    
			    $picker.on('changeDate', function(ev){
			        if (ev.date.valueOf() < minDate.valueOf()){
			            
			            // Handle previous date
			            alert('You can not select past date.');
			            pickerObject.setValue(minDate);
			            
			            // And this for later versions (in case)
			            ev.preventDefault();
			            return false;
			        }
			    });
			});					
		</script>
				
				<div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
		<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <font color='#ffff00'face = 'Georgia'><b><br/>CREATE INDVIDUAL CREDIT </b></font></h4>
		  <form action="PayCreditIDB.php" method="POST" name="myform"><br/>
       
          <table  border="0" cellspacing="3" cellpadding="5"  id='mytable'summary="registering account">
    <tr>
              <td  height="24">First Name</td>
             
              <td ><input type="text" name="fname" size="30" value="<?php echo $fetch[1] ?>" readonly="true"></td>
            </tr>
			<tr>
              <td>Last Name</td>
             
              <td><input type="text" name="lname" size="30" value="<?php echo $fetch[2] ?>" readonly="true"></td>
			 </tr>           
<tr>
<td>
<b>Account Number</b>
</td>
<td>
<input name="acc" type="text" required value="<?php echo $fetch[3] ?>" readonly="true" />
</td>
</tr>
	

 <tr>
<td>
<b>Amount</b>
</td>
<td>
<input name="amnt" type="text"required/ value="<?php echo $fetch[5] ?>">
</td>
</tr>	
 <tr>
<td>
<b>percent</b>
</td>
<td>
<input name="Typ" type="text"required/ value="<?php echo $fetch[7] ?>" readonly="true">
</td>
</tr>	
  <tr>
<td>
<b>Date</b>
</td>
<td>
<input name="date" type="text"required value="<?php echo date('y-m-d');?>" readonly="true">
</td>
</tr>	
	 <tr>
<td>
<b> Due Date</b>
</td>
<td data-date-format="yyyy-mm-dd" data-date="document.write(date())" class="input-append date myDatepicker">
							    <input type="date"  name="due" required>
							   
					
</td>
						  
</tr>	
	
<tr>
<td>&nbsp;</td>
              <td></td>
<td>
<input name="Submit" type="submit" Value="Creat">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input name="clear" type="reset" Value="Clear">
</td>
				</tr>	</table></form>  
		
		</div>
	
      </div>
	   <?php
	include("footerIndex.php");
	?>