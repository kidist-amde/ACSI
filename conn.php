<?php
define("db_server","localhost");
define("db_user","root");
define("db_pass","");
define("db_name","OSRS");
$connection=mysql_connect(db_server,db_user,db_pass);//creat connection
if(!$connection1)
{
die("error connection to db server".mysql_error());
}
$db_select=mysql_select_db(db_name,$connection);//to select from the db
if(!$db_select){
die("error in selection db".mysql_error());
}
?>