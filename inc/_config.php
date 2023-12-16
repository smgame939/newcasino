<?php
//######################################### 시간 확인
$cfg['time']	= time();
$cfg['ymd'][0]	= date("Y-m-d H:i:s",	$cfg['time']);
$cfg['ymd'][1]	= date("Y-m-d H:i", 	$cfg['time']);
$cfg['ymd'][2]	= date("Y-m-d", 		$cfg['time']);
$cfg['ymd'][10]	= date("Ymd", 		$cfg['time']);
$MD				= date("m-d", 			$cfg['time']);

$cfg['ymd'][3]	= date("Y-m H:i:s", 	$cfg['time']);
$cfg['ymd'][4]	= date("Y-m H:i", 		$cfg['time']);
$cfg['ymd'][5]	= date("Y-m", 			$cfg['time']);

$cfg['ymd'][6]	= date("m-d H:i", 		$cfg['time']);
$cfg['ymd'][7]	= date("m-d", 			$cfg['time']);

$cfg['ymd'][8]	= date("H:i:s", 		$cfg['time']);
$cfg['ymd'][9]	= date("H:i", 			$cfg['time']);

$CODE_DAY 	= date("Ymd", 	$cfg['time']);
$CODE_MONTH = date("Ym", 	$cfg['time']);
$WEEK_DAY 	= date("w", 	strtotime($cfg['ymd'][2]));	//0 ~ 6

$LASTDAY = date("t", time());

$CFG_DATE = $cfg['ymd'][2];
$CFG_YMDHIS = $cfg['ymd'][0];
$CFG_YMDHIS_N = date("Y-m-d H:i:s", strtotime("+1 day", time())); 

$CurrentSecond = date("s", $cfg['time']);

$YMD 		= $cfg['ymd'][2];
$YMDHIS 	= $cfg['ymd'][1];

$YMD_SERIAL = date("Ymd",	$cfg['time']);

$timeserial = 86400 - (int)( (date("H",$cfg['time']) * 3600) + (date("i",$cfg['time']) * 60) + date("s",$cfg['time']));

//######################################### 시간 확인

//######################################### IP 확인
$cfg['ip'][0]	= isset($_SERVER['HTTP_X_FORWARDED_FOR']) 	? $FNC->UDF_XSS($_SERVER['HTTP_X_FORWARDED_FOR']) 	: "-";
$cfg['ip'][1]	= isset($_SERVER['HTTP_X_FORWARDED']) 		? $FNC->UDF_XSS($_SERVER['HTTP_X_FORWARDED']) 		: "-";
$cfg['ip'][2]	= isset($_SERVER['REMOTE_ADDR']) 			? $FNC->UDF_XSS($_SERVER['REMOTE_ADDR']) 			: "-";
$cfg['ip'][3]	= isset($_SERVER['HTTP_FORWARDED_FOR']) 	? $FNC->UDF_XSS($_SERVER['HTTP_FORWARDED_FOR']) 	: "-";
$cfg['ip'][4]	= isset($_SERVER['HTTP_FORWARDED']) 		? $FNC->UDF_XSS($_SERVER['HTTP_FORWARDED']) 		: "-";
$cfg['ip'][5]	= isset($_SERVER['HTTP_CLIENT_IP']) 		? $FNC->UDF_XSS($_SERVER['HTTP_CLIENT_IP']) 		: "-";
$cfg['ip'][6]	= isset($_SERVER['HTTP_CF_CONNECTING_IP']) 	? $FNC->UDF_XSS($_SERVER['HTTP_CF_CONNECTING_IP'])	: "-";
//######################################### IP 확인

//######################################### 브라우저 확인
$INFO_HOST		= isset($_SERVER['HTTP_HOST']) 				? $FNC->UDF_XSS(strtolower($_SERVER['HTTP_HOST'])) 			: "-";
$INFO_METHOD 	= isset($_SERVER['REQUEST_METHOD']) 		? $FNC->UDF_XSS(strtolower($_SERVER['REQUEST_METHOD'])) 		: "-";
$INFO_PROTOCOL	= isset($_SERVER['SERVER_PROTOCOL']) 		? $FNC->UDF_XSS(strtolower($_SERVER['SERVER_PROTOCOL'])) 		: "-";
$INFO_LANG		= isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) 	? $FNC->UDF_XSS(strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE'])) 	: "-";
$INFO_USERAGENT	= isset($_SERVER['HTTP_USER_AGENT']) 		? $FNC->UDF_XSS($_SERVER['HTTP_USER_AGENT']) 					: "-";
$INFO_SELF		= isset($_SERVER['PHP_SELF']) 				? $FNC->UDF_XSS(strtolower($_SERVER["PHP_SELF"])) 				: "-";
$INFO_URI		= isset($_SERVER['REQUEST_URI']) 			? $FNC->UDF_XSS(strtolower($_SERVER["REQUEST_URI"])) 			: "-";
$INFO_REFERER	= isset($_SERVER['HTTP_REFERER']) 			? $FNC->UDF_XSS(strtolower($_SERVER["HTTP_REFERER"])) 			: "-";
$INFO_PATH_INFO	= isset($_SERVER['PATH_INFO']) 				? $FNC->UDF_XSS(strtolower($_SERVER["PATH_INFO"])) 			: "-";
$INFO_HTTPS		= isset($_SERVER['HTTPS']) 					? $FNC->UDF_XSS(strtolower($_SERVER["HTTPS"])) 				: "-";
//######################################### 브라우저 확인

$sec0 = ["0","1","2","3","4","5","6","7","8","9"];
$sec1 = ["6","4","9","7","3","8","5","0","1","2"];
$sec2 = ["2","8","4","0","6","1","7","3","5","9"];

$DATACOUNT = 0;

$PageIdx 		= isset($_GET['Page']) 			? $FNC->UDF_XSS($_GET['Page']) 			: 1;	//Page Number
$PageSize 		= isset($_GET['PageSize']) 		? $FNC->UDF_XSS($_GET['PageSize']) 		: 20;	//Date Count in a Page
$PageCnt		= 10;	//Block Count
$Q_PGAE			= " LIMIT ".($PageIdx-1)*$PageSize.", ".$PageSize;

$STD_BTN	= ['btn btn-primary',	'btn btn-warning',	'btn btn-success',	'btn btn-danger',	'btn btn-danger',	'btn btn-danger',	'btn btn-default'];
$STD_TXT	= ['신청',				'대기',				'승인',				'취소',				'취소',				'취소',				'완료'];

$HIDE_BTN	= ['btn btn-danger',	'btn btn-success'];
$HIDE_TXT	= ['숨김',				'보기'];

$DONE_BTN	= ['btn btn-danger',	'btn btn-warning',	'btn btn-success'];
$DONE_TXT	= ['접수',				'대기',				'완료'];

$ADMIN_TXT	= ['시스템',				'분양관리자',			'운영주',				'매니저',				'상담원',				'옵저버'];
$PTR_TXT	= ['총본사',				'본사',				'부분사',				'총판',				'매장',				'딜러',				'딜러',				'딜러',				'딜러',				'딜러',				'딜러'];
$PTRM_TXT	= ['총',					'본',				'부',				'판',				'매',				'딜',				'딜',				'딜',				'딜',				'딜',				'딜'];

$ALLOW_TXT 	= ['금지','허용'];
$RESP_TXT 	= ['실패','성공'];
$EVENT_TXT 	= ['일반','팝업'];
$MSG_TXT 	= ['취소','정상'];

define("_CONFIG_", TRUE);
?>