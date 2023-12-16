<?php
    include_once('class/mobiledetect.class.php');
    include('inc/versions.php');
    $mdetect = new MobileDetect();
?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
  <title>SMGame Newtemplate V3 :: Live Casino</title>
  <base href=".">
  <meta name="renderer" content="webkit">
  <meta name="force-rendering" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="application-version" content="3.111.0">
  <meta name="theme-color" content="#ffffff">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <link rel="stylesheet" href="css/live_casino.css?v=<?php echo $ver; ?>" />
  <link rel="stylesheet" href="css/newv3.css?v=<?php echo $ver; ?>">

  <?php if($mdetect->isMobile()) { ?>
    <link rel="stylesheet" href="mobilecss/main.css?v=<?php echo $ver; ?>">
    <link rel="stylesheet" href="mobilecss/live_casino_m.css?v=<?php echo $ver; ?>">
    <link rel="stylesheet" href="mobilecss/swiper_m.css?v=<?php echo $ver; ?>">
  <?php } ?>
</head>
	
    <body>
        
         <!-- MOBILE -->
  <?php 
    if($mdetect->isMobile()) { 
      include('pages/live_casino_m.php'); 
    } else {
  ?>
  <!-- END MOBILE -->
  <!-- DESKTOP -->
  <?php 
      include('pages/live_casino_pc.php'); 
    }
  ?>
  <!-- END DESKTOP -->
        <script src="js/jquery.min.js"></script>
        <script src="js/swiper-bundle.js"></script>
        <script src="js/newv3.js?v=<?php echo $ver; ?>"></script>
	</body>
</html>
