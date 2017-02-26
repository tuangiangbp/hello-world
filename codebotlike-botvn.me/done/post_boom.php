<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SESSION[id]) 
{	
	require("../config.php");
    require("../system/func.php");
	$idfb = isset($_POST['id']) ? baove($_POST['id']) : FALSE;
	$token = $_SESSION['token'];
	$soluong = isset($_POST['limit']) ? baove($_POST['limit']) : FALSE;
	$cmt = isset($_POST['cmt']) ? baove($_POST['cmt']) : FALSE;
	$server = $_POST['_SERVER'];
	if ($server != $_SESSION['_SERVER']) die('<script type="text/javascript">$(function (){toastr.error("Đã sảy ra lỗi.")});</script>');
	
	if (!$idfb) 
	{
			die('<script type="text/javascript">$(function (){toastr.error("Vui lòng nhập ID cần bão")});</script>');
	
	}
	$loai = $_POST['auto'];
	if ( $loai == "boomlike") 
	{	$s = $c = 0;
		$getinfo = json_decode(auto('https://graph.beta.facebook.com/'.$idfb.'/feed?fields=id&limit='.$soluong.'&access_token='.$token), true);
		for ($i = 0; $i <= count($getinfo[data]); $i++) 
		{
			auto('https://graph.beta.facebook.com/'.$getinfo[data][$i][id].'/likes?method=post&access_token='.$token);
			$s++;
			if ($cmt == 1) 
			{
				$cmt = json_decode(auto('https://graph.beta.facebook.com/'.$getinfo[data][$i][id].'/comments?fields=id&limit=500&access_token='.$token), true);
				for ($j=1;$j<=count($cmt[data]);$j++) 
				{
					auto('https://graph.facebook.com/'.$cmt[data][$j][id].'/likes?method=post&access_token='.$token);
					$c++;
				}
			}
		}
		die('<script type="text/javascript">$(function (){toastr.error(" Bão Like Thành Công.<br /> '.$s.' : Like Trạng Thái & '.$c.' : Like Comment.")});</script>');
	
	}
	elseif ($loai == "boomcmt") 
	{	$noidungs = isset($_POST['noidung']) ? $_POST['noidung'] : FALSE;
		$s = 0;
		$getinfo = json_decode(auto('https://graph.facebook.com/'.$idfb.'/feed?fields=id&limit='.$soluong.'&access_token='.$token), true);
		for ($i=0;$i<=count($getinfo[data]);$i++) 
		{	$array_noidung = explode("\n", $noidungs);
			$noidung = $array_noidung[array_rand($array_noidung)];
			auto("https://graph.facebook.com/".$getinfo[data][$i][id]."/comments?access_token=".$token."&method=post&message=".urlencode($noidung));
			$s++;
		}
		die('<script type="text/javascript">$(function (){toastr.error("Số Comment Bão Thành Công Là: '. $s.'.")});</script>');
	}
	elseif ($loai == "boomwall")
	{
		$noidungs = isset($_POST['noidung']) ? $_POST['noidung'] : FALSE;
		$s = 0;
		for ($i=1;$i<=$soluong;$i++) 
		{
			auto('https://graph.facebook.com/'.$idfb.'/feed?message='.urlencode($noidungs).'&access_token='.$token.'&method=post');
			$s++;
		}
		die('<script type="text/javascript">$(function (){toastr.error("Boom wall thành công số lượng status : '.$s.'")});</script>');
	
	}
}