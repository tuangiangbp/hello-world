<?php
set_time_limit(0);
include'../config.php';
$res = mysql_query("SELECT * FROM `BotEx` ORDER BY RAND() LIMIT 0,5");
while ($post = mysql_fetch_assoc($res)){
$result = mysql_query("SELECT * FROM `BotEx` ORDER BY RAND() LIMIT 0,70");
if($result){
while($row = mysql_fetch_assoc($result))
{
//**Like**//
$puaru = auto('https://graph.facebook.com/'.$post['idfb'].'/feed?limit=1&access_token='.$row['token'].'');
$arraykhanh = json_decode($puaru, true);
auto('https://graph.facebook.com/'.$arraykhanh['data'][0]['id'].'/likes?method=post&access_token='.$row['token'].'');
echo ' '.$post['idfb'].' - '.$arraykhanh['data'][0]['id'].' OK! '.$row['ten'].'</br> ';
}}}
// giai phong


mysql_free_result ($result);
unset ($result);


function auto($url) {
   $ch = curl_init();
   curl_setopt_array($ch, array(
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL            => $url,
      )
   );
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}
?>