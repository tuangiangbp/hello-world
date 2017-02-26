<?php 
ob_start();
require("../config.php");
require("../system/func.php");
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SESSION['id']) 
{
	//$_POST = $_GET;
	$gioihan = 0; //10 phút
	$hientai = time();
	$res = @mysql_query("SELECT * FROM BLOCK WHERE idfb = $_SESSION[id]");
	$block = @mysql_fetch_array($res, MYSQL_ASSOC);
	$dacho = $hientai - $block['thoigian'];
	$conlai = $gioihan - $dacho;
	if($dacho < $gioihan)
	{
	die('<script type="text/javascript">$(function (){toastr.error("Bạn vừa sử dụng chức năng này.Vui lòng chờ 10 phút cho lần tiếp theo")});</script>');
	}
	else
	{
	@mysql_query(" DELETE FROM BLOCK WHERE idfb = $_SESSION[id]");
	}
	require 'facebook.php';
	$server = $_POST['_SERVER'];
	if ($server != $_SESSION['_SERVER']) die('<script type="text/javascript">$(function (){toastr.error("Đã sảy ra lỗi")});</script>');
	$id = $_POST['id'];
	$param = baove($_POST['param']);
	$limit = baove($_POST['limit']);
	$loai = baove($_POST['auto']);
	
	$facebook = new Facebook(array(
	  'appId'  => $fb_app_id,
	  'secret' => $fb_secret
	)); 
	$result = @mysql_query("SELECT * FROM Users ORDER BY RAND() LIMIT 0, {$limit}");
	if($result)
	{
				$success = $fail = 0;
		if ($loai == "like") {
	if (!$id) 
	{
		die('<script type="text/javascript">$(function (){toastr.error("Bạn Chưa Nhập ID")});</script>');
	}
			while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
				$m = $row['token1'];
				$facebook->setAccessToken ($m);
				try 
				{
				         $facebook->api("/".$id."/likes", 'POST');
				         ++$success;
				}
				catch (FacebookApiException $e) 
				{
					++$fail;
				}
			}
			@mysql_query("INSERT INTO BLOCK SET 
				`idfb` = '".$_SESSION[id]."', 
				`thoigian` = '".time()."'
				");
		die('<script type="text/javascript">$(function (){toastr.success("Bạn Vừa Tăng '.$success.' like cho ID '.$id.'")});</script>');
		
		}
		if ($loai == "friend") {
				if (!$id) 
	{
		die('<script type="text/javascript">$(function (){toastr.error("Bạn Chưa Nhập ID")});</script>');
	}
			while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
				$m = $row['token1'];
				$facebook->setAccessToken ($m);
				try 
				{
				         auto('https://graph.facebook.com/me/friends?uid='.$id.'&access_token='.$m.'&method=post');
				         ++$success;
				}
				catch (FacebookApiException $e) 
				{
					++$fail;
				}
			}
			@mysql_query("INSERT INTO BLOCK SET 
				`idfb` = '".$_SESSION[id]."', 
				`thoigian` = '".time()."'
				");
			die('<script type="text/javascript">$(function (){toastr.success("Bạn Vừa Tăng '.$success.' lượt kết bạn cho ID '.$id.'")});</script>');
		}
		if ($loai == "cmt") {
				if (!$id) 
	{
		die('<script type="text/javascript">$(function (){toastr.error("Bạn Chưa Nhập ID")});</script>');
	}
			while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
				$m = $row['token1'];
				$facebook->setAccessToken ($m);
				try 
				{
					$arr_param = explode("\n", $param);
					$msg = $arr_param[array_rand($arr_param)];
					$facebook->api("/".$id."/comments",'post',array('message' => $msg));
					++$success;
				}
				catch (FacebookApiException $e) 
				{
					++$fail;
				}
			}
			@mysql_query("INSERT INTO BLOCK SET 
				`idfb` = '".$_SESSION[id]."', 
				`thoigian` = '".time()."'
				");
			die('<script type="text/javascript">$(function (){toastr.success("Bạn Vừa Tăng '.$success.' lượt cmt cho ID '.$id.'")});</script>');
		}
		if ($loai == "sub") {
				if (!$id) 
	{
		die('<script type="text/javascript">$(function (){toastr.error("Bạn Chưa Nhập ID")});</script>');
	}
			$res = mysql_query("SELECT * FROM Users WHERE idfb = $_SESSION[id]");
			if ($res) {
				$a = mysql_fetch_array($res, MYSQL_ASSOC);
				if ($a['token2']=='') {
					die('<script type="text/javascript">$(function (){toastr.error("Bạn Vui Lòng Đăng Xuất. Sau Đó Đăng Nhập Bằng Cách Đăng Nhập Bằng Tài Khoản Hoặc Kéo Thả Để Sử Dụng Chức Năng này.")});</script>');
				}
				
			}
			while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
				$m = $row['token2'];
				$facebook->setAccessToken ($m);
				try 
				{
					$facebook->api("/".$id."/subscribers", 'POST');
					++$success;
				}
				catch (FacebookApiException $e) 
				{
					++$fail;
				}
			}
			@mysql_query("INSERT INTO BLOCK SET 
				`idfb` = '".$_SESSION[id]."', 
				`thoigian` = '".time()."'
				");
					die('<script type="text/javascript">$(function (){toastr.success("Bạn Vừa Tăng '.$success.' lượt theo dõi cho ID '.$id.'")});</script>');
		}
		if ($loai == "xoastt") {
$stat=json_decode(auto('https://graph.beta.facebook.com/me/feed?fields=id,from&limit='.$limit.'&access_token='.$_SESSION['token']),true);
for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){
$x=$stat[data][$i-1][id]."\n";
auto('https://graph.beta.facebook.com/'.$stat[data][$i-1][id].'?access_token='.$_SESSION['token'].'&method=delete');
}
}
		die('<script type="text/javascript">$(function (){toastr.success("Bạn Vừa Xóa '.$limit.' status")});</script>');
		}
		else die('<script type="text/javascript">$(function (){toastr.success("Vui lòng chọn chức năng")});</script>');
	}
}