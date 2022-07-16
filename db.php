<?php
$sname="localhost";
$un="root@localhost";
$pass="";
$db="blooddonation";
$conn = mysqli_connect($sname, $un, $pass, $db);
// Check connection
if (!$conn)
  {
  echo "Failed to connect to MySQL: " .mysqli_connect_error();
  }
?>


