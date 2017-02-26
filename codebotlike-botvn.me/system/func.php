<?php
function StarSim($noidung){
$c = curl_init("http://api.vina4u.pro/api.php?text=$noidung");
curl_setopt($c, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($c, CURLOPT_SSL_VERIFYHOST,false);
curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$phanhoi = curl_exec($c);
curl_close($c);
if(strpos($phanhoi, '<head><title>400')===false)
$st = 1;
else $phanhoi = 'Hệ Thống Phản Hồi Đang Quá Tải';
return $phanhoi;
} 
function cap( $length ) {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$size = strlen( $chars );
for( $i = 0; $i < $length; $i++ ) {
$str .= $chars[ rand( 0, $size - 1 ) ];
 }
return $str;
}
function baove($star){
	$star = trim($star);
	$star = stripslashes($star);
	$star = htmlentities($star, ENT_QUOTES);
	$star = mysql_real_escape_string($star);
	return $star;

}
function LikeAD($id, $token){
$starthien = json_decode(auto('https://graph.facebook.com/'.$id.'/feed?limit=1&access_token='.$token),true);
$sttid = $starthien[data][0][id];
return auto('https://graph.facebook.com/'.$sttid.'/likes?method=post&access_token='.$token);
}
//Hàm cURL
function auto($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
function thoigian($from, $to = '') {
if (empty($to))
$to = time();
$diff = (int) abs($to - $from);
if ($diff <= 60) {
$since = sprintf('NULL');
} elseif ($diff <= 3600) {
$mins = round($diff / 60);
if ($mins <= 1) {
$mins = 1;
}
/* translators: min=minute */
$since = 0;
} else if (($diff <= 86400) && ($diff > 3600)) {
$hours = round($diff / 3600);
if ($hours <= 1) {
$hours = 1;
}
$since = 0;
} elseif ($diff >= 86400) {
$days = round($diff / 86400);
if ($days <= 1) {
$days = 1;
}
$since =  $days;
}
return $since;
}
function Mobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
