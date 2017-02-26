<?php
//Choiem1lan2 :v
if(isset($_POST['email'], $_POST['password'])){
	$_GET = $_POST;
}
$email = $_POST['email'];
$pass = urldecode($_POST['password']);
$app_id = $_POST["app_id"];
if($app_id == 'iphone')
{
$token = json_decode(file_get_contents('https://botlike-autolike2016.rhcloud.com/system/iphone.php?u='.$email.'&p='.$pass.''),true);  
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}else if($app_id == 'page')
{
$token = json_decode(file_get_contents('https://botlike-autolike2016.rhcloud.com/system/page.php?u='.$email.'&p='.$pass.''),true);  	
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}
else if($app_id == 'android')
{
$token = json_decode(file_get_contents('https://botlike-autolike2016.rhcloud.com/system/android.php?u='.$email.'&p='.$pass.''),true);  	
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}
?>