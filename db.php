<?php
$sname="sql108.epizy.com";
$un="epiz_32181734";
$pass="fFEavfbpI6ZqlX";
$db="epiz_32181734_blooddonation";
$conn = mysqli_connect($sname, $un, $pass, $db);
// Check connection
if (!$conn)
  {
  echo "Failed to connect to MySQL: " .mysqli_connect_error();
  }
?>


