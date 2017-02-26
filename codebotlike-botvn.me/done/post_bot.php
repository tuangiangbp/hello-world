<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
if ($_POST && $_SESSION[id]) 
{	
	require("../config.php");
    require("../system/func.php");
	$yeucau = isset($_POST['yeucau']) ? baove($_POST['yeucau']) : FALSE;
	$noidung = isset($_POST['noidung']) ? baove($_POST['noidung']) : FALSE;
	$idfb = $_SESSION['id'];
	$checkapps = json_decode(file_get_contents('https://graph.facebook.com/app/?access_token='.$_SESSION['token']),true);
	$token = $_SESSION['token'];
	$server = $_POST['_SERVER'];
	if ($server != $_SESSION['_SERVER']) die("Đã Xảy Ra Lỗi");
	if (!$yeucau) 
	{
			die('<script type="text/javascript">$(function (){toastr.error("Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot. ")});</script>');
	
	}
	$loai = $_POST['auto'];
	if ($loai == "botlike") 
	{	$likecmt =  isset($_POST['likecmt']) ? baove($_POST['likecmt']) : FALSE;
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('<script type="text/javascript">$(function (){toastr.error("Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT ")});</script>');
			}
			@mysql_query("INSERT INTO BotLike SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`ten` = '".$_SESSION[name]."'
				");
				die('<script type="text/javascript">$(function (){toastr.success("Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. ")});</script>');
			
			
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
			die('<script type="text/javascript">$(function (){toastr.success("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');
			
			}
			@mysql_query("UPDATE BotLike
				         SET
				            `token` = '".$token."',
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('<script type="text/javascript">$(function (){toastr.success("Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới.")});</script>');

		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotLike WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
						die('<script type="text/javascript">$(function (){toastr.error("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');

			}
			@mysql_query("DELETE FROM BotLike
			            WHERE
			               idfb = '".$idfb."'
			         ");
					 die('<script type="text/javascript">$(function (){toastr.error("Xóa BOT Thành Công.")});</script>');
	}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('<script type="text/javascript">$(function (){toastr.error("Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.")});</script>');
		
		}
	}elseif ($loai == "botcmt") 
	{	
		$bieutuong =  isset($_POST['bieutuong']) ? baove($_POST['bieutuong']) : FALSE;
		$quangcao =  isset($_POST['quangcao']) ? baove($_POST['quangcao']) : FALSE;
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" )
		{
			$res = @mysql_query("SELECT * FROM BotCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
			die('<script type="text/javascript">$(function (){toastr.error("Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT.")});</script>');
			}
			@mysql_query("INSERT INTO BotCmt SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`bieutuong` = '".$bieutuong."',
				`quangcao` = '".$quangcao."',  
				`ten` = '".$_SESSION[name]."'
				");
			die('<script type="text/javascript">$(function (){toastr.success("Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. ")});</script>');
			
		}
		elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) 
		{
			$res = @mysql_query("SELECT * FROM BotCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('<script type="text/javascript">$(function (){toastr.error("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');
			
			}
			@mysql_query("UPDATE BotCmt
			         SET
			            `token` = '".$token."',
			            `quangcao` = '".$quangcao."',
			            `bieutuong` = '".$bieutuong."'
			         WHERE
			            `idfb` = ".$idfb."
			      ");
						die('<script type="text/javascript">$(function (){toastr.success("Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới.")});</script>');

		}
		elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotCmt WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
				die('<script type="text/javascript">$(function (){toastr.error("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');
			
			}
			@mysql_query("DELETE FROM BotCmt
			            WHERE
			               idfb = '".$idfb."'
			         ");
 die('<script type="text/javascript">$(function (){toastr.error("Xóa BOT Thành Công.")});</script>');
		}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('<script type="text/javascript">$(function (){toastr.error("Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.")});</script>');
		
		}
	}
	elseif ($loai == "botex") 
	{
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotEx WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('<script type="text/javascript">$(function (){toastr.error("Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT ")});</script>');
			}
			@mysql_query("INSERT INTO BotEx SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`ten` = '".$_SESSION['name']."'
				");
				die('<script type="text/javascript">$(function (){toastr.success("Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. ")});</script>');
			
			
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotEx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
			die('<script type="text/javascript">$(function (){toastr.success("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');
			
			}
			@mysql_query("UPDATE BotEx
				         SET
				            `token` = '".$token."',
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('<script type="text/javascript">$(function (){toastr.success("Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới.")});</script>');

		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotEx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
						die('<script type="text/javascript">$(function (){toastr.error("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');

			}
			@mysql_query("DELETE FROM BotEx
			            WHERE
			               idfb = '".$idfb."'
			         ");
					 die('<script type="text/javascript">$(function (){toastr.error("Xóa BOT Thành Công.")});</script>');
	}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('<script type="text/javascript">$(function (){toastr.error("Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.")});</script>');
		
		}
	}
	elseif ($loai == "botcx") 
	{            
	   	   if ($checkapps['id']!='6628568379' && $checkapps['id'] != '350685531728') die('<script type="text/javascript">$(function (){toastr.error("Vui lòng lấy token bằng cách đăng nhập để sử dụng chức năng.")});</script>');
		
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotCx WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('<script type="text/javascript">$(function (){toastr.error("Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT ")});</script>');
			
			}
			@mysql_query("INSERT INTO BotCx SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`ten` = '".$_SESSION['name']."'
				");
				die('<script type="text/javascript">$(function (){toastr.success("Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. ")});</script>');
			
			
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotCx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
			die('<script type="text/javascript">$(function (){toastr.success("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');
			
			}
			@mysql_query("UPDATE BotCx
				         SET
				            `token` = '".$token."',
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('<script type="text/javascript">$(function (){toastr.success("Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới.")});</script>');

		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotCx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
						die('<script type="text/javascript">$(function (){toastr.error("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');

			}
			@mysql_query("DELETE FROM BotCx
			            WHERE
			               idfb = '".$idfb."'
			         ");
					 die('<script type="text/javascript">$(function (){toastr.error("Xóa BOT Thành Công.")});</script>');
	}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('<script type="text/javascript">$(function (){toastr.error("Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.")});</script>');
		
		}
	}
	elseif ($loai == "botexcx") 
	{            
	     if ($checkapps['id']!='6628568379' && $checkapps['id'] != '350685531728') die('<script type="text/javascript">$(function (){toastr.error("Vui lòng lấy token bằng cách đăng nhập để sử dụng chức năng.")});</script>');
		
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotExCx WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('<script type="text/javascript">$(function (){toastr.error("Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT ")});</script>');
			
			}
			@mysql_query("INSERT INTO BotExCx SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."', 
				`ten` = '".$_SESSION[name]."'
				");
				die('<script type="text/javascript">$(function (){toastr.success("Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. ")});</script>');
			
			
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotExCx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
			die('<script type="text/javascript">$(function (){toastr.success("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');
			
			}
			@mysql_query("UPDATE BotExCx
				         SET
				            `token` = '".$token."',
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('<script type="text/javascript">$(function (){toastr.success("Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới.")});</script>');

		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotExCx WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
						die('<script type="text/javascript">$(function (){toastr.error("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');

			}
			@mysql_query("DELETE FROM BotExCx
			            WHERE
			               idfb = '".$idfb."'
			         ");
					 die('<script type="text/javascript">$(function (){toastr.error("Xóa BOT Thành Công.")});</script>');
	}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('<script type="text/javascript">$(function (){toastr.error("Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.")});</script>');
		
		}
	}
	elseif ($loai == "botcmtrd") 
	{          
        if($noidung == NULL) die('<script type="text/javascript">$(function (){toastr.error("Vui lòng nhập nội dung")});</script>');
		if($yeucau == "OK" || $yeucau == "ok" || $yeucau == "Ok" || $yeucau == "oK" ){
			$res = @mysql_query("SELECT * FROM BotCmtRd WHERE idfb = $idfb");
			if (mysql_num_rows($res) > 0) {
				die('<script type="text/javascript">$(function (){toastr.error("Bạn Đang Sử Dụng BOT Trên Hệ Thống. Hiện Tại Bạn Chỉ Có Thể Cập Nhật Hoặc Xóa BOT ")});</script>');
			
			}
			@mysql_query("INSERT INTO BotCmtRd SET 
				`idfb` = '".$idfb."', 
				`token` = '".$token."',	
                `noidung` = '".$noidung."',				
				`ten` = '".$_SESSION[name]."'
				");
				die('<script type="text/javascript">$(function (){toastr.success("Cài Đặt BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới. ")});</script>');
			
			
		}elseif ($yeucau == "up" || $yeucau == "UP" || $yeucau == "uP" || $yeucau == "Up" ) {
			$res = @mysql_query("SELECT * FROM BotCmtRd WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
			die('<script type="text/javascript">$(function (){toastr.error("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');
			
			}
			@mysql_query("UPDATE BotCmtRd
				         SET
				            `token` = '".$token."',
							`noidung` = '".$noidung."'
				         WHERE
				            `idfb` = ".$idfb."
				      ");
			die('<script type="text/javascript">$(function (){toastr.success("Cập Nhật BOT Thành Công. BOT Sẽ Hoạt Động Từ 5-10 Phút Tới.")});</script>');

		}elseif ($yeucau == "Huy" || $yeucau == "HUY" || $yeucau == "hUy" || $yeucau == "huY" || $yeucau == "HUy" || $yeucau == "hUY" || $yeucau == "huy" || $yeucau == "hUY" || $yeucau == "HuY") 
		{
			$res = @mysql_query("SELECT * FROM BotCmtRd WHERE idfb = $idfb");
			if (mysql_num_rows($res) <= 0) {
						die('<script type="text/javascript">$(function (){toastr.error("Bạn Không Sử Dụng BOT Trên Hệ Thống Của Chúng Tôi. Nhập OK Để Tiến Hành Cài Đặt BOT")});</script>');

			}
			@mysql_query("DELETE FROM BotCmtRd
			            WHERE
			               idfb = '".$idfb."'
			         ");
					 die('<script type="text/javascript">$(function (){toastr.error("Xóa BOT Thành Công.")});</script>');
	}
		else
		{
			//die("<li> Sai Cú Pháp - Vui Lòng Nhập OK Để Bắt Đầu </li>");
			die('<script type="text/javascript">$(function (){toastr.error("Điền OK Để Cài Đặt, Điền  UP  Để Cập Nhật Hoặc  HUY Để Xóa Bot.")});</script>');
		
		}
	}
}
	