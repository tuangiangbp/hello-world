<?php
Session_start();
if($_SESSION['id'])
{
	unset($_SESSION['id']);
	header('Location: /index.php');
}

?>