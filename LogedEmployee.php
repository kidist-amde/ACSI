
<?php
include('connection.php');
include('interstcredit.php');
include('interest.php');
session_start();
if (!isset($_SESSION['staff_id'])){
header('location:login.php');//session destroy kehone
}
//
?>


<?php
			//mag show sang information sang user nga nag login
			$staff_id=$_SESSION['staff_id'];

			$result=mysql_query("select * from employee where staff_id='$staff_id'")or die(mysql_error);
			$row=mysql_fetch_array($result);

			$FirstName=$row['fname'];
			$LastName=$row['lname'];
			?>

  
			