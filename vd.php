	<?php
		 $systemdate=$row['date'];
 $DueDate=$_POST['due'];
//echo"$systemdate <br/>";
$t=date('Y-m-d');
//echo"$t</br>";
$today=strtotime($t);
//echo"$today </br>";
$DueDate=strtotime($systemdate);
//echo"$DueDate";

if($today > $DueDate){
?>

   <script type="text/javascript">
           alert("Day Should Be Grether Than Today"); 
 window.location="PayCreditI.php<?php echo '?ctrl=' . $AccNumber; ?>"; 		   
    </script>
	<?php
}
else{
	include('PayCreditI.php');
		
}


mysql_close();
?>
  