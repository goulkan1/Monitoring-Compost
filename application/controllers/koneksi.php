<?php
$server 	= "localhost";
$username 	= "root";
$password 	= "";
$database 	= "kompos";
$con = mysql_connect($server, $username, $password) or die ("Could not connect: " . mysql_error());
mysql_select_db($database, $con);
?>
