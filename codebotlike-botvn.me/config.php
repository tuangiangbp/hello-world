<?php
ini_set('session.gc_maxlifetime', 1*60*60);
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
?>