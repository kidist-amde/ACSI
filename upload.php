 
 
 <?php
include("LogedEmployee.php");
?>  
<div style="float:right; margin-right:24px;" ;>
  
			
			 <?php
			echo '<img src="images/admin.png"><font color="white"> &nbsp;'.$FirstName." ".$LastName .'</font>';?>
  |<a href="logout.php" class="logout"><font color="white"> Logout</a>&nbsp;|
  <a href="manageAcco.php" class="logout" ><font color="white"> Manage_Account</a></div>
 <?php
include("header.php");
?>
 <!-- END of ACSI_Header -->
<?php
include("TopNavOfficer.php");
?>
    <!-- END of ACSI_menubar -->
  	
   	  <?php
	  include("leftside.php");
	  ?>
 
 
 
 
 <form  method="POST" enctype="multipart/form-data" id="mytable">
		<br/><br/><div align='center' style="border-radius: 5px;border:1px double #b9b9b9;width:680">
	      <h4><br/><br/>
		  <font color='#ffff00' face = 'georgia'><b>CUSTOMER PHOTO UPLOADING FORM</b></font></h4>
          <table><br/>
            <tr>
              <td> Customer Name&nbsp;&nbsp;&nbsp;</td>
              <td><select name="name" required >
                  <option>
                  <option>
                 <?php	
				 $result = mysql_query("SELECT * FROM customer WHERE  user_id NOT IN (SELECT user_id FROM imagec)");
						while($row = mysql_fetch_array($result))
							{  
								echo '<option value="'.$row['user_id'].'">';
								echo $row['fname'].' '.$row['lname'];
								echo '</option>';
							}
						?>
                </select>
              </td>
            </tr><tr><td>&nbsp;</td></tr>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Photo&nbsp;&nbsp;&nbsp;</td>
              <td><input type="file" name="image"  id="in" required /></td>
            </tr>
			<tr><td>&nbsp;</td></tr>
            <tr>
              <td></td>
              <td><input type="submit" name="submit" value="Upload"  />&nbsp;&nbsp;&nbsp;
                <input type="reset" name="reset" value="Cancel Upload"  /></td>
            </tr>
          </table><br/><br/></div>
        </form>
        <?php

	if (isset($_POST['submit'])) {
                           
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$image_name = addslashes($_FILES['image']['name']);
			$image_size = getimagesize($_FILES['image']['tmp_name']);

			move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
			$location = "upload/" . $_FILES["image"]["name"];
			$customer=$_POST['name'];
			mysql_query("insert into imagec (user_id,location) values ('$customer','$location')") or die(mysql_error());

			$query=mysql_query
			("select * from imagec, customer where imagec.user_id='$customer' and customer.user_id='$customer'")or die(mysql_error());
			while($row=mysql_fetch_array($query)){
			 
			echo 'The customer is: '.$row['fname'].' '.$row['lname'].'<BR/>';
			?>
				<img src="<?php echo $row['location']; ?>" width="100" height="100" alt="" class="img-rounded">
				<?php 
			}
	
			echo '<meta content="4;upload.php" http-equiv="refresh" />';         
                     }
					 ?>
					  <?php
	include("footerIndex.php");
	?>