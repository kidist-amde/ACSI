<?php
 session_start();
 session_unset();
 session_destroy();
 
 echo "<script>window.location='loginam.php';</script>";
 {
   echo "session not set";
 }
?>