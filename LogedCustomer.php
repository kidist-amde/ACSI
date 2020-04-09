
<?php
include('connection.php');

include('interstcredit.php');
include('interest.php');

session_start();
if (!isset($_SESSION['AccNumber'])){
header('location:login.php');
}
//
?>

<?php
			//mag show sang information sang user nga nag login
			$AccNumber=$_SESSION['AccNumber'];

			$result=mysql_query("select * from customer where AccNumber='$AccNumber'")or die(mysql_error);
			$row=mysql_fetch_array($result);

			$FirstName=$row['fname'];
			$LastName=$row['lname'];
			?>