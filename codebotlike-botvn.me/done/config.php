<?php
SESSION_START();
// config database
$host = "";
$username ="";
$password ="";	
$dbname = "";
$connection = mysql_connect($host,$username,$password);
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
//Config info website
?>