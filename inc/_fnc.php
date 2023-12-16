<?php
	class ClassUDF{
		
		Function UDF_Idx($iv){
			$timestamp = time();
			$resp = $iv . $timestamp;
			return $resp;
		}
		
		function UDF_Get_Protocol(){
			$resp = "";
			$txtProtocol = $_SERVER['SERVER_PROTOCOL'];
			if(strpos("https",$txtProtocol) !== false){
				$resp = "https";
			}else{
				$resp = "http";
			}
			return $resp;
		}
		
		function UDF_Get_Host(){
			$hostname=$_SERVER["HTTP_HOST"];
			$hostname 	= trim($hostname);		
			$hostname 	= str_replace(' ', '', $hostname);
			$hostname	= self::UDF_XSS($hostname);
			return $hostname;
		}
		
		function UDF_Get_Uri(){
			$uriname=$_SERVER["REQUEST_URI"];
			$uriname 	= trim($uriname);		
			$uriname 	= str_replace(' ', '', $uriname);
			$uriname	= self::UDF_XSS($uriname);
			return $uriname;
		}
		
		function UDF_EditSerial($iv){
			$url = self::UDF_Get_Host();
			if(strtolower($url) == "admin.com" or strtolower($url) == "users.com"){
				return time();
			}else{
				return $iv;
			}
		}
		
		function UDF_Detect_Lang(){
			$resp = "";
			$Lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
			$Lang = trim($Lang);		
			$Lang = str_replace(' ', '', $Lang);
			$Lang = self::UDF_XSS($Lang);
			$user_pref_langs = explode(',', $Lang);

			foreach($user_pref_langs as $idx => $lang) {
				$lang = substr($lang, 0, 2);
				if(strpos($resp,$lang) !== false){
					
				}else{
					$resp .= $lang.",";
				}
			}
			$resp = substr($resp,0,strlen($resp)-1);
			return $resp;
		}
		
		function UDF_Get_Os() { 
			$uagent	= $_SERVER['HTTP_USER_AGENT'];
			$uagent = trim($uagent);		
			$uagent = self::UDF_XSS($uagent);
			$ret	= "-";

			$os		= array(
				'/windows nt 10.0/i'=>  'Win 10',
				'/windows nt 6.3/i' =>  'Win 8.1',
				'/windows nt 6.2/i' =>  'Win 8',
				'/windows nt 6.1/i' =>  'Win 7',
				'/windows nt 6.0/i' =>  'Vista',
				'/windows nt 5.2/i' =>  '2003/XP x64',
				'/windows nt 5.1/i' =>  'XP',
				'/windows xp/i'     =>  'XP',
				'/windows nt 5.0/i' =>  '2000',
				'/windows me/i'     =>  'ME',
				'/win98/i'          =>  '98',
				'/win95/i'          =>  '95',
				'/win16/i'          =>  '3.11',
				'/mac os x/i'		=>  'OSX Kodiak',
				'/mac os x 10.0/i'	=>  'OSX Cheetah',
				'/mac os x 10.1/i'	=>  'OSX Puma',
				'/mac os x 10.2/i'	=>  'OSX Jaguar',
				'/mac os x 10.3/i'	=>  'OSX Panther',
				'/mac os x 10.4/i'	=>  'OSX Tiger',
				'/mac os x 10.5/i'	=>  'OSX Leopard',
				'/mac os x 10.6/i'	=>  'OSX Snow Leopard',
				'/mac os x 10.7/i'	=>  'OSX Lion',
				'/mac_powerpc/i'    =>  'OS 9',
				'/linux/i'          =>  'Linux',
				'/ubuntu/i'         =>  'Ubuntu',
				'/iphone/i'         =>  'iPhone',
				'/ipod/i'           =>  'iPod',
				'/ipad/i'           =>  'iPad',
				'/android/i'        =>  'Android',
				'/blackberry/i'     =>  'BlackBerry',
				'/webos/i'          =>  'Mobile'
			);

			foreach ($os as $regex => $value) { 
				if (preg_match($regex, $uagent)) {
					$ret    =   $value;
				}
			}   
			return $ret;
		}
		
		function UDF_Detect_Mobile(){
			$uagent	=$_SERVER['HTTP_USER_AGENT'];
			$uagent = trim($uagent);		
			$uagent = self::UDF_XSS($uagent);
			
			if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4))){
				return "Y";
			}else{
				return "N";
			}
		}
		
		function UDF_Detect_Robot() {
			$uagent	= $_SERVER['HTTP_USER_AGENT'];
			$ret	= "NoRobot";

			$br	= array(
				'/AbachoBOT/i'				=>  'Abacho',
				'/Acoon/i'					=>  'Acoon',
				'/Acoon/i'					=>  'Acoon',
				'/AESOP_com_SpiderMan/i'	=>  'Aesop',
				'/ah-ha.com crawler/i'		=>  'Ah-ha',
				'/appie/i'					=>  'Walhello',
				'/Arachnoidea/i'			=>  'Euroseek',
				'/ArchitextSpider/i'		=>  'Excite',
				'/Atomz/i'					=>  'Atomz',
				'/DeepIndex/i'				=>  'DeepIndex',
				'/ESISmartSpider/i'			=>  'Ttravel Finder',
				'/EZResult/i'				=>  'EZResults',
				'/FAST-WebCrawler/i'		=>  'AlltheWeb',
				'/Fido/i'					=>  'PlanetSearch',
				'/Fluffy the spider/i'		=>  'SearchHippo',
				'/Googlebot/i'				=>  'Google',
				'/Gigabot/i'				=>  'Gigablast',
				'/Gulliver/i'				=>  'Northernlight',
				'/Gulper/i'					=>  'Yuntis',
				'/HenryTheMiragoRobot/i'	=>  'Mirago',
				'/ia_archiver/i'			=>  'Alexa',
				'/KIT-Fireball/i'		=>  'fireball.de',
				'/LNSpiderguy/i'			=>  'Lexis-Nexis',
				'/Lycos_Spider_/i'			=>  'Lycos',
				'/MantraAgent/i'			=>  'LookSmart',
				'/NationalDirectory-SuperSpider/i'	=>  'National Directory',
				'/Nazilla/i'				=>  'Websmostlinked',
				'/Openbot/i'				=>  'Openfind',
				'/Scooter/i'				=>  'AltaVista',
				'/Scrubby/i'				=>  'Scrub The Web',
				'/Slurp/i'					=>  'Inktomi',
				'/Tarantula/i'				=>  'AltaVista',
				'/Teoma_agent1/i'			=>  'Teoma',
				'/UK Searcher Spider/i'		=>  'UKSearcher',
				'/WebCrawler/i'				=>  'WebCrawler',
				'/Winona/i'					=>  'WhatUSeek',
				'/ZyBorg/i'					=>  'Wisenut',
				'/Almaden/i'				=>  'IBM',
				'/NameProtect/i'			=>  'NameProtect.com',
				'/Robozilla/i'				=>  'DMOZ',
				'/Teradex Mapper/i'			=>  'Teradex directory',
				'/Tracerlock/i'				=>  'Tracerlock.com',
				'/W3C_Validator/i'			=>  'W3C',
				'/WDG_Validator/i'			=>  'WDG',
				'/ABCdatos BotLink/i'		=>  'ABCdatos BotLink',
				'/AlkalineBOT/i'			=>  'Alkaline',
				'/Ahoy/i'					=>  'Ahoy! The Homepage Finder',
				'/Anthill/i'				=>  'Anthill',
				'/appie/i'					=>  'Walhello appie',
				'/Arachnophilia/i'			=>  'Arachnophilia',
				'/Araneo/i'					=>  'Araneo',
				'/AraybOt/i'				=>  'AraybOt',
				'/ArchitextSpider/i'		=>  'ArchitextSpider',
				'/Ask Jeeves/Teoma/i'		=>  'AskJeeves',
				'/ASpider/i'				=>  'ASpider',
				'/ATN_Worldwide/i'			=>  'ATN Worldwide',
				'/Atomz/i'					=>  'Atomz.com Search Robot',
				'/AURESYS/i'				=>  'AURESYS',
				'/BackRub/i'				=>  'BackRub',
				'/BaySpider/i'				=>  'Bay Spider',
				'/Big Brother/i'			=>  'Big Brother',
				'/Bjaaland/i'				=>  'Bjaaland',
				'/BlackWidow/i'				=>  'BlackWidow',
				'/Die Blinde Kuh/i'			=>  'Die Blinde Kuh',
				'/borg-bot/i'				=>  'Borg-Bot',
				'/BoxSeaBot/i'				=>  'BoxSeaBot',
				'/BSpider/i'				=>  'BSpider',
				'/CACTVS/i'					=>  'CACTVS Chemistry Spider',
				'/Calif/i'					=>  'Calif',
				'/Digimarc CGIReader/i'		=>  'Digimarc Marcspider',
				'/Checkbot/i'				=>  'Checkbot',
				'/ChristCrawler/i'			=>  'ChristCrawler.com',
				'/cIeNcIaFiCcIoN/i'			=>  'cIeNcIaFiCcIoN.nEt',
				'/CMC/i'					=>  'CMC',
				'/LWP/i'					=>  'Collective',
				'/conceptbot/i'				=>  'Conceptbot',
				'/Confuzzledbot/i'			=>  'ConfuzzledBot',
				'/CoolBot/i'				=>  'CoolBot',
				'/root/i'					=>  'Web Core / Roots',
				'/cosmos/i'					=>  'XYLEME Robot',
				'/Cruiser Robot/i'			=>  'Internet Cruiser Robot',
				'/Cusco/i'					=>  'Cusco',
				'/CyberSpyder/i'			=>  'CyberSpyder Link',
				'/CydralSpider/i'			=>  'CydralSpider',
				'/DesertRealm/i'			=>  'Desert Realm Spider',
				'/Deweb/i'					=>  'DeWeb(c) Katalog/Index',
				'/dienstspider/i'			=>  'DienstSpider',
				'/Digger/i'					=>  'Digger',
				'/DIIbot/i'					=>  'Digital Integrity Robot',
				'/grabber/i'				=>  'Direct Hit Grabber',
				'/DNAbot/i'					=>  'DNAbot',
				'/DragonBot/i'				=>  'DragonBot',
				'/DWCP/i'					=>  'DWCP',
				'/EbiNess/i'				=>  'EbiNess',
				'/EIT-Link-Verifier-Robot/i'	=>  'EIT Link Verifier Robot',
				'/elfinbot/i'				=>  'ELFINBOT',
				'/Emacs-w3/i'				=>  'Emacs-w3 Search Engine',
				'/EMC Spider/i'				=>  'ananzi',
				'/esculapio/i'				=>  'esculapio',
				'/esther/i'					=>  'Esther',
				'/Evliya Celebi/i'			=>  'Evliya Celebi',
				'/FastCrawler/i'			=>  'FastCrawler',
				'/FDSE robot/i'				=>  'Fluid Dynamics Search Engine robot',
				'/FelixIDE/i'				=>  'Felix IDE',
				'/Ferret Web hopper/i'		=>  'Wild Ferret Web Hopper',
				'/ESIRover/i'				=>  'FetchRover',
				'/fido/i'					=>  'fido',
				'/KIT-Fireball/i'			=>  'KIT-Fireball',
				'/Fish-Search-Robot/i'		=>  'Fish search',
				'/fouineur/i'				=>  'fouineur',
				'/Robot du/i'				=>  'Robot Francoroute',
				'/Freecrawl/i'				=>  'Freecrawl',
				'/FunnelWeb/i'				=>  'FunnelWeb',
				'/gammaSpider/i'			=>  'gammaSpider, FocusedCrawler',
				'/gazz/i'					=>  'gazz',
				'/gcreep/i'					=>  'GCreep',
				'/Zealbot/i'				=>  'Looksmart',
				'/naver.me/i'				=>  'Naver',
				'/daum/i'					=>  'Daum',
				'/yahoo/i'					=>  'Yahoo',
				'/google/i'					=>  'Google',
				'/wp.com/i'					=>  'Wordpress',
				'/bing/i'					=>  'Bing',
				'/msn.com/i'				=>  'Msn',
				'/facebook/i'				=>  'Facebook',
				'/slack.com/i'  			=>  'Slack',
				'/skype/i'					=>  'Skype',
				'/alexa/i'					=>  'Alexa',
				'/zum.com/i'				=>  'Zum',
				'/pinterest/i'				=>  'Pinterest',
				'/linkedin/i'				=>  'Linkedin',
				'/yandex/i'					=>  'Yandex',
				'/telegram/i'				=>  'Telegram',
				'/linkpad/i'				=>  'Linkpad',
				'/sbsearch/i'				=>  'SBSearch',
				'/applebot/i'				=>  'Apple',
				'/360spider/i'				=>  '360Spider',
				'/YisouSpider/i'			=>  'Yisou',
			);

			foreach ($br as $regex => $value) { 
				if (preg_match($regex, $uagent)) {
					$ret    =   $value;
				}
			}

			return $ret;
		}
		
		function UDF_Detect_Browser() {
			$uagent	= $_SERVER['HTTP_USER_AGENT'];
			$uagent = trim($uagent);		
			$uagent = self::UDF_XSS($uagent);
			$ret	= "Unknown";

			$br	= array(
					'/msie/i'			=>  'MSIE',
					'/edge/i'			=>  'Edge',
					'/firefox/i'		=>  'Firefox',
					'/vivaldi/i'		=>  'Vivaldi',
					'/safari/i'			=>  'Safari',
					'/slimjet/i'		=>  'Slimjet',
					'/greenbrowser/i'	=>  'GreenBrowser',
					'/dragon/i'			=>  'Dragon',
					'/lunascape/i'		=>  'Lunascape',
					'/swing/i'			=>  'Swing',
					'/avant/i'			=>  'Avant',
					'/iron/i'			=>  'Iron',
					'/epic/i'			=>  'Epic',
					'/torch/i'			=>  'Torch',
					'/togate/i'			=>  'ToGate',
					'/pale/i'			=>  'Pale Moon',
					'/brave/i'			=>  'Brave',
					'/whale/i'			=>  'Whale',
					'/midori/i'			=>  'Midori',
					'/chrome/i'			=>  'Chrome',
					'/opera/i'			=>  'Opera',
					'/netscape/i'		=>  'Netscape',
					'/maxthon/i'		=>  'Maxthon',
					'/konqueror/i'		=>  'Konqueror',
					'/mobile/i'			=>  'Mobile Browser',
					'/theworld/i'		=>  'TheWorld'
				);

			foreach ($br as $regex => $value) { 
				if (preg_match($regex, $uagent)) {
					$ret    =   $value;
				}
			}

			return $ret;
		}
		
		function UDF_Get_Browser(){
			$uagent	= $_SERVER['HTTP_USER_AGENT'];
			$uagent = trim($uagent);		
			$uagent = self::UDF_XSS($uagent);
			$browser = get_browser($uagent, true);
			return $browser;
		}
		
		function UDF_Detect_Ip_Type($iv){
			$v6 = preg_match("/^[0-9a-f]{1,4}:([0-9a-f]{0,4}:){1,6}[0-9a-f]{1,4}$/", $iv);
			$v4 = preg_match("/^([0-9]{1,3}\.){3}[0-9]{1,3}$/", $iv);
			if ( $v6 != 0 ){
				$type = "V6";
			}elseif ( $v4 != 0 ){
				$type = "V4";
			}else{
				$type = "ER";
			}
			return $type;
		}
		
		function UDF_Get_Ip_Auto(){
			if (!empty($_SERVER["HTTP_CLIENT_IP"])){
				$ip = $_SERVER["HTTP_CLIENT_IP"];
			}elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
				$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
			}else{
				$ip = $_SERVER["REMOTE_ADDR"];
			}
			$ip 	= trim($ip);		
			$ip 	= str_replace(' ', '', $ip);
			return $ip;
		}
	
		function UDF_Get_Ip($iv){
			if($iv == "C")
				$ip = !empty($_SERVER["HTTP_CLIENT_IP"]) ? $_SERVER["HTTP_CLIENT_IP"] : "";
			if($iv == "F")
				$ip = !empty($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : "";
			if($iv == "R")
				$ip = !empty($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : "";

			$ip 	= trim($ip);		
			$ip 	= str_replace(' ', '', $ip);
			$ip		= self::UDF_XSS($ip);
			if(strlen($ip) > 40){
				$ip = substr($ip,0,40);
			}
			return $ip;
		}
		
		function UDF_Phone($tel){
			return preg_replace("/([0-9]{3})([0-9]{3,4})([0-9]{4})$/","\\1-\\2-\\3" ,$tel);
		}
		
		function UDF_InputToPhone($tel){
			$tel = trim($tel);
			$tel = str_replace("-","",$tel);
			$tel = str_replace(" ","",$tel);
			$tel = str_replace(".","",$tel);
			return $tel;
		}
		
		function UDF_InputTrim($iv){
			$iv = trim($iv);
			$iv = str_replace(" ","",$iv);
			return $iv;
		}
	
		function UDF_Check_Phone($iv){
			$iv = str_replace("-","",$iv);
			if(preg_match("/^01[0-9]{8,9}$/", $iv)){
				$ret = $iv;
			}else{
				$ret = "FALSE";
			}
			return $ret;
		}
	
		function UDF_Check_Mail($iv){
			$check_email=preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $iv);

			if($check_email==true){
				$ret = $iv;
			}else{
				$ret = "FALSE";
			}
			return $ret;
		}
		
		function UDF_Check_Kr($iv){
			if(!preg_match("/^[a-zA-Z0-9]+$/", $iv)){
				return true;
			}else{
				return false;
			}
		}
		
		
		function UDF_Add_Comma($iv,$minus){
			$iv = str_replace(",","",$iv);
			
			if($minus != ""){
				$ret = number_format($iv,$minus);
			}else{
				$ret = number_format($iv);
			}
			return $ret;
		}
		
		function UDF_Add_($iv){
			 return preg_replace("/(0(?:2|[0-9]{2}))([0-9]+)([0-9]{4}$)/", "\\1-\\2-\\3", $iv);
		}
		
		function UDF_ConverTime($iv){
			$nResp = "";
			if($iv != ""){
				$nResp = date("y-m-d H:i",	strtotime($iv));
			}
			return $nResp;
		}
		
		function UDF_ConverTimeFull($iv){
			$nResp = "";
			if($iv != ""){
				$nResp = date("Y년m월d일 H시i분s초",	strtotime($iv));
			}
			return $nResp;
		}
	
		function UDF_Set_Session($session_name, $value){
			//session_register($session_name);
			// PHP 버전별 차이를 없애기 위한 방법
			$$session_name = $_SESSION["$session_name"] = $value;
		}

		function UDF_Get_Session($session_name){
			return isset($_SESSION[$session_name]) ? $_SESSION[$session_name] : "";
		}
		
		function UDF_XSS($val) { 
			// remove all non-printable characters. CR(0a) and LF(0b) and TAB(9) are allowed 
			// this prevents some character re-spacing such as <java\0script> 
			// note that you have to handle splits with \n, \r, and \t later since they *are* 
			// allowed in some inputs 
			$val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val); 

			// straight replacements, the user should never need these since they're normal characters 
			// this prevents like <IMG SRC=&#X40&#X61&#X76&#X61&#X73&#X63&#X72&#X69&#X70&#X74&
			// #X3A&#X61&#X6C&#X65&#X72&#X74&#X28&#X27&#X58&#X53&#X53&#X27&#X29> 
			$search = 'abcdefghijklmnopqrstuvwxyz'; 
			$search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
			$search .= '1234567890!@#$%^&*()'; 
			$search .= '~`";:?+/={}[]-_|\'\\'; 
			for ($i = 0; $i < strlen($search); $i++) { 
				// ;? matches the ;, which is optional 
				// 0{0,7} matches any padded zeros, which are optional and go up to 8 chars 

				// &#x0040 @ search for the hex values 
				$val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val); 
				// with a ; 

				// @ @ 0{0,7} matches '0' zero to seven times 
				$val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ; 
			} 
			
			// now the only remaining whitespace attacks are \t, \n, and \r 
			$ra1 = Array('javascript', 'vbscript', 'expression', 'applet', 'meta', 'xml', 'blink', 'link', 'script', 'object', 'iframe', 'frame', 'frameset', 'bgsound'); 
			$ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload'); 
			$ra = array_merge($ra1, $ra2); 
			
			$found = true; // keep replacing as long as the previous round replaced something 
			while ($found == true) { 
				$val_before = $val; 
				for ($i = 0; $i < sizeof($ra); $i++) { 
					$pattern = '/'; 
					for ($j = 0; $j < strlen($ra[$i]); $j++) {
						if ($j > 0) { 
							$pattern .= '('; 
							$pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?'; 
							$pattern .= '|(&#0{0,8}([9][10][13]);?)?'; 
							$pattern .= ')?'; 
						} 
						$pattern .= $ra[$i][$j]; 
					} 
						$pattern .= '/i'; 
						$replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2); // add in <> to nerf the tag 
						$val = preg_replace($pattern, $replacement, $val); // filter out the hex tags 
						if ($val_before == $val) { 
							// no replacements were made, so exit the loop 
							$found = false; 
						} 
					} 
			}
			if($found == false){
				return $val;
			}else{
				return "";
			}
		} 
		
		function UDF_Create_Partner($site, $parentID, $subCount){
			$tCnt = 0;
			$tCode = "";
			
			// AA : 부본사
			// AA_AA : 총판
			// AA_AA_AA : 부총판
			// AA_AA_AA_AA : 딜러
			// AA_AA_AA_AA_AA : 매장
			// ~
			
			// 동일 레벨 최대 총판수 = 26 x 26 = 676
			$nLtr = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
			
			// 동일 레벨 최대 총판수 = 36 x 36 = 1296
			//$nLtr = array{'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9'};
			
			for($i=0;$i<count($nLtr);$i++){
				for($j=0;$j<count($nLtr);$j++){
					if($tCnt == $subCount){
						$tCode = $nLtr[$i] . $nLtr[$j];
						break 2;
					}
					$tCnt++;
				}
			}
			
			$nResp = "";
			if($parentID != ""){
				$nResp = $parentID . "_" . $tCode;
			}else{
				$nResp = $site . "_" . $tCode;
			}
			return strtolower($nResp);
		}
				
		function UDF_Get_Random($min,$max){
			return mt_rand($min,$max);
		}
		
		function UDF_Calc_Win_Amount($price,$odds){
			$T_Calc = $price * $odds;
			$T_Calc = floor($T_Calc);
			return $T_Calc;
		}
		
		function UDF_Yoil($day){
		  $yoil = array("일","월","화","수","목","금","토");
		  $weekday = ($yoil[date('w', strtotime($day))]);    
		  return $weekday;      
		}
		
		function UDF_Comma($iv){
			return number_format($iv,0);
		}
		
		function UDF_KAmount($number){

			$num = array('', '일', '이', '삼', '사', '오', '육', '칠', '팔', '구');
			$unit4 = array('', '만', '억', '조', '경');
			$unit1 = array('', '십', '백', '천');

			$res = array();

			$number = str_replace(',','',$number);
			$split4 = str_split(strrev((string)$number),4);

			for($i=0;$i<count($split4);$i++){
					$temp = array();
					$split1 = str_split((string)$split4[$i], 1);
					for($j=0;$j<count($split1);$j++){
							$u = (int)$split1[$j];
							if($u > 0) $temp[] = $num[$u].$unit1[$j];
					}
					if(count($temp) > 0) $res[] = implode('', array_reverse($temp)).$unit4[$i];
			}
			$txtamount = implode('', array_reverse($res));
			if($number > 9){
				if(mb_substr($txtamount, 0,1) == "일"){
				$txtamount = mb_substr($txtamount, 1);
				}
			}
			return $txtamount;
		}
		
		function UDF_FullTrim($iv){
			$iv 	= trim($iv);
			$iv		= str_replace(' ', '', $iv);
			$iv		= str_replace('-', '', $iv);
			$iv		= str_replace('+', '', $iv);
			$iv		= str_replace('=', '', $iv);
			$iv		= str_replace(';', '', $iv);
			$iv		= str_replace(':', '', $iv);
			$iv		= str_replace(',', '', $iv);
			$iv		= str_replace('.', '', $iv);
			$iv		= str_replace('_', '', $iv);
			$iv		= str_replace('\'', '', $iv);
			$iv		= str_replace('\"', '', $iv);
			$iv		= str_replace('`', '', $iv);
			$iv		= str_replace('~', '', $iv);
			$iv		= str_replace('@', '', $iv);
			$iv		= str_replace('#', '', $iv);
			$iv		= str_replace('$', '', $iv);
			$iv		= str_replace('%', '', $iv);
			$iv		= str_replace('^', '', $iv);
			$iv		= str_replace('&', '', $iv);
			$iv		= str_replace('*', '', $iv);
			$iv		= str_replace('(', '', $iv);
			$iv		= str_replace(')', '', $iv);
			$iv		= str_replace('[', '', $iv);
			$iv		= str_replace(']', '', $iv);
			$iv		= str_replace('{', '', $iv);
			$iv		= str_replace('}', '', $iv);
			$iv		= str_replace('|', '', $iv);
			$iv		= str_replace('/', '', $iv);
			$iv		= str_replace('\\', '', $iv);
			
			if(strlen($iv) > 15){
				$iv = substr($iv,0,15);
			}

			return $iv;
		}
		
		function UDF_AdminTrim($iv){
			$iv 	= trim($iv);
			$iv		= str_replace(' ', '', $iv);
			return $iv;
		}
		function UDF_AdminAmount($iv){
			if($iv == ""){
				$iv = 0;
			}
			$iv 	= trim($iv);
			$iv		= str_replace(' ', '', $iv);
			$iv		= str_replace(',', '', $iv);
			$iv		= str_replace('%2C', '', $iv);
			$iv		= $iv * 1;
			$iv		= abs($iv);
			$iv		= floor($iv);
			return $iv;
		}
		
		function UDF_GetPageID($iv){
			if(substr($iv,0,1) == "/"){
				$iv = substr($iv,1,strlen($iv) - 1);
			}
			$PAGE_ID = str_replace(".php", "", basename($iv));
			$PAGE_ID = str_replace(".html", "", $PAGE_ID);
			return $PAGE_ID;
		}
		
		function UDF_AdjustID($iv,$min,$max){
			if(mb_strlen($iv) < $min){
				$diff = $min - mb_strlen($iv);
				for($i=1;$i<=$diff; $i++){
					$iv .= "0";
				}
			}
			if(mb_strlen($iv) > $max){
				$iv = mb_substr($iv, 0, $max);
			}
			return $iv;
		}
		
		function get_outcome($sportsid, $mark){
			$nResp = "";
			if($mark == "승무패"){
				if($sportsid == "1"){ $nResp = "1"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "251"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "1"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "1"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "186"; } //--- 배구
				if($sportsid == "16"){ $nResp = "219"; } //--- 미식축구
			}
			if($mark == "핸디캡"){
				if($sportsid == "1"){ $nResp = "16"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "256"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "223"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "14"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "237"; } //--- 배구
				if($sportsid == "16"){ $nResp = "223"; } //--- 미식축구
			}
			if($mark == "오버언더"){
				if($sportsid == "1"){ $nResp = "18"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "258"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "225"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "18"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "238"; } //--- 배구
				if($sportsid == "16"){ $nResp = "225"; } //--- 미식축구
			}
			if($mark == "홀짝"){
				if($sportsid == "1"){ $nResp = "26"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "26"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "229"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "26"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "26"; } //--- 배구
				if($sportsid == "16"){ $nResp = "-"; } //--- 미식축구
			}
			if($mark == "전반승무패"){
				if($sportsid == "1"){ $nResp = "60"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "274"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "-"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "-"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "-"; } //--- 배구
				if($sportsid == "16"){ $nResp = "-"; } //--- 미식축구
			}
			if($mark == "후반승무패"){
				if($sportsid == "1"){ $nResp = "83"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "-"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "-"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "-"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "-"; } //--- 배구
				if($sportsid == "16"){ $nResp = "-"; } //--- 미식축구
			}
			if($mark == "전반핸디캡"){
				if($sportsid == "1"){ $nResp = "-"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "275"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "66"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "-"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "-"; } //--- 배구
				if($sportsid == "16"){ $nResp = "-"; } //--- 미식축구
			}
			if($mark == "전반오버언더"){
				if($sportsid == "1"){ $nResp = "-"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "276"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "-"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "-"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "-"; } //--- 배구
				if($sportsid == "16"){ $nResp = "-"; } //--- 미식축구
			}
			if($mark == "ㅌㅌㅌ"){
				if($sportsid == "1"){ $nResp = "ㅌㅌㅌ"; }	//--- 축구
				if($sportsid == "3"){ $nResp = "ㅌㅌㅌ"; }	//--- 야구
				if($sportsid == "2"){ $nResp = "ㅌㅌㅌ"; }	//--- 농구
				if($sportsid == "4"){ $nResp = "ㅌㅌㅌ"; } //--- 아이스하키
				if($sportsid == "23"){ $nResp = "ㅌㅌㅌ"; } //--- 배구
				if($sportsid == "16"){ $nResp = "ㅌㅌㅌ"; } //--- 미식축구
			}
			return $nResp;
		}
		
		function get_outcome_int($sportsid, $leagueid, $outcomeid){
			$nResp = false;
			
			if($sportsid == "xxx"){
				if($leagueid == "yyy"){
					if($outcomeid == "zzz"){
						$nResp = true;
					}
				}
			}
			
			//-- 축구(1)
			if($sportsid == "3845"){
				if($leagueid == "yyy"){
					if($outcomeid == "1"){ $nResp = true; } //승무패(1)
				}else{
					if($outcomeid == "1"){ $nResp = true; } //승무패(1)
					if($outcomeid == "16"){ $nResp = true; } //아시안 핸디캡(16)
					if($outcomeid == "14"){ $nResp = true; } //핸디캡 0:1,(14)
					if($outcomeid == "18"){ $nResp = true; } //오버언더(18)
					if($outcomeid == "26"){ $nResp = true; } //홀짝(26)
					if($outcomeid == "12"){ $nResp = true; } //무승부/원정팀(12)
					if($outcomeid == "13"){ $nResp = true; } //홈팀/무승부(13)
					if($outcomeid == "19"){ $nResp = true; } //홈팀- 오버언더(19)
					if($outcomeid == "27"){ $nResp = true; } //홈팀- 홀짝(27)
					if($outcomeid == "28"){ $nResp = true; } //원정팀- 홀짝(28)
					if($outcomeid == "29"){ $nResp = true; } //양팀득점(29)
					if($outcomeid == "60"){ $nResp = true; } //전반- 승무패(60)
					if($outcomeid == "66"){ $nResp = true; } //전반- 아시안 핸디캡(66)
					if($outcomeid == "68"){ $nResp = true; } //전반- 오버언더(68)
					if($outcomeid == "69"){ $nResp = true; } //전반- 홈팀 오버언더(69)
					if($outcomeid == "74"){ $nResp = true; } //전반- 홀짝(74)
					if($outcomeid == "75"){ $nResp = true; } //전반- 양팀득점(75)
					if($outcomeid == "76"){ $nResp = true; } //전반- 홈팀 무실점(76)
					if($outcomeid == "77"){ $nResp = true; } //전반- 원정팀 무실점(77)
					if($outcomeid == "83"){ $nResp = true; } //후반- 승무패(83)
					if($outcomeid == "88"){ $nResp = true; } //후반- 아시안 핸디캡(88)
					if($outcomeid == "90"){ $nResp = true; } //후반- 오버언더(90)
					if($outcomeid == "91"){ $nResp = true; } //후반- 홈팀 오버언더(91)
					if($outcomeid == "92"){ $nResp = true; } //후반- 원정팀 오버언더(92)
					if($outcomeid == "94"){ $nResp = true; } //후반- 홀짝(94)
					if($outcomeid == "95"){ $nResp = true; } //후반- 양팀득점(95)
					if($outcomeid == "96"){ $nResp = true; } //후반- 홈팀 무실점(96)
					if($outcomeid == "97"){ $nResp = true; } //후반- 원정팀 무실점(97)
					if($outcomeid == "879"){ $nResp = true; } //원정팀승(879)
					if($outcomeid == "880"){ $nResp = true; } //홈팀승(880)
					if($outcomeid == "8"){ $nResp = true; } //1번째 득점 팀(8)
					if($outcomeid == "9"){ $nResp = true; } //마지막 득점팀(9)
					if($outcomeid == "52"){ $nResp = true; } //득점이 높은때(52)
				}
			}
			
			//-- 농구(2)
			if($sportsid == "3844"){
				if($leagueid == "yyy"){
					if($outcomeid == "zzz"){
						$nResp = true;
					}
				}else{
					if($outcomeid == "219"){ $nResp = true; }	//승패(연장 포함)(219)
					if($outcomeid == "223"){ $nResp = true; }	//핸디캡(연장 포함)(223)
					if($outcomeid == "225"){ $nResp = true; }	//오버언더(연장 포함)(225)
					if($outcomeid == "227"){ $nResp = true; }	//홈팀- 오버언더(연장 포함)(227)
					if($outcomeid == "228"){ $nResp = true; }	//원정팀- 오버언더(연장 포함)(228)
					if($outcomeid == "229"){ $nResp = true; }	//홀짝(연장 포함)(229)
					if($outcomeid == "235"){ $nResp = true; }	//1쿼터- 승무패(235)
					if($outcomeid == "303"){ $nResp = true; }	//1쿼터- 핸디캡(303)
					if($outcomeid == "236"){ $nResp = true; }	//1쿼터- 오버언더(236)
					if($outcomeid == "301"){ $nResp = true; }	//1쿼터- 승패/득점차(301)
					if($outcomeid == "756"){ $nResp = true; }	//1쿼터- 홈팀 오버언더(756)
					if($outcomeid == "757"){ $nResp = true; }	//1쿼터- 원정팀 오버언더(757)
					if($outcomeid == "304"){ $nResp = true; }	//1쿼터- 홀짝(304)
					if($outcomeid == "60"){ $nResp = true; }	//전반- 승무패(60)
					if($outcomeid == "66"){ $nResp = true; }	//전반- 아시안 핸디캡(66)
					if($outcomeid == "68"){ $nResp = true; }	//전반- 오버언더(68)
					if($outcomeid == "69"){ $nResp = true; }	//전반- 홈팀 오버언더(69)
					if($outcomeid == "70"){ $nResp = true; }	//전반- 원정팀 오버언더(70)
					if($outcomeid == "83"){ $nResp = true; }	//후반- 승무패(83)
					if($outcomeid == "88"){ $nResp = true; }	//후반- 아시안 핸디캡(88)
					if($outcomeid == "90"){ $nResp = true; }	//후반- 오버언더(90)
					if($outcomeid == "94"){ $nResp = true; }	//후반- 홀짝(94)
					if($outcomeid == "297"){ $nResp = true; }	//오버언더(오버-정확한-언더)(297)
				}
			}
			
			//-- 야구(3)
			if($sportsid == "3843"){
				if($leagueid == "yyy"){
					if($outcomeid == "zzz"){
						$nResp = true;
					}
				}else{
					if($outcomeid == "251"){ $nResp = true; }	//승패(연장포함)(251)
					if($outcomeid == "256"){ $nResp = true; }	//아시안 핸디캡(연장포함)(256)
					if($outcomeid == "258"){ $nResp = true; }	//오버언더(연장포함)(258)
					if($outcomeid == "260"){ $nResp = true; }	//홈팀- 오버언더(연장포함)(260)
					if($outcomeid == "261"){ $nResp = true; }	//원정팀- 오버언더(연장포함)(261)
					if($outcomeid == "262"){ $nResp = true; }	//오버언더(오버-이그젝트-언더)(연장포함)(262)
					if($outcomeid == "264"){ $nResp = true; }	//홀짝(연장포함)(264)
					if($outcomeid == "274"){ $nResp = true; }	//1~5이닝- 승무패(274)
					if($outcomeid == "275"){ $nResp = true; }	//1~5이닝- 아시안 핸디캡(275)
					if($outcomeid == "276"){ $nResp = true; }	//1~5이닝- 오버언더(276)
					if($outcomeid == "277"){ $nResp = true; }	//1~5이닝- 홈팀 오버언더(277)
					if($outcomeid == "278"){ $nResp = true; }	//1~5이닝- 원정팀 오버언더(278)
					if($outcomeid == "287"){ $nResp = true; }	//1이닝- 승무패(287)
					if($outcomeid == "288"){ $nResp = true; }	//1이닝- 오버언더(288)
					
				}
			}
			
			//-- 하키(4)
			if($sportsid == "3842"){
				if($leagueid == "yyy"){
					if($outcomeid == "zzz"){
						$nResp = true;
					}
				}else{
					if($outcomeid == "1"){ $nResp = true; }	//승무패(1)
					if($outcomeid == "16"){ $nResp = true; }	//아시안 핸디캡(16)
					if($outcomeid == "14"){ $nResp = true; }	//핸디캡 0:1,(14)
					if($outcomeid == "18"){ $nResp = true; }	//오버언더(18)
					if($outcomeid == "19"){ $nResp = true; }	//홈팀- 오버언더(19)
					if($outcomeid == "20"){ $nResp = true; }	//원정팀- 오버언더(20)
					if($outcomeid == "220"){ $nResp = true; }	//연장발생(220)
					if($outcomeid == "26"){ $nResp = true; }	//홀짝(26)
					if($outcomeid == "29"){ $nResp = true; }	//양팀득점(29)
					if($outcomeid == "443"){ $nResp = true; }	//1피리어드- 승무패(443)
					if($outcomeid == "446"){ $nResp = true; }	//1피리어드- 오버언더(446)
					if($outcomeid == "452"){ $nResp = true; }	//1피리어드- 양팀득점(452)
					if($outcomeid == "459"){ $nResp = true; }	//1피리어드- 승패(459)
					if($outcomeid == "462"){ $nResp = true; }	//1피리어드- 홀짝(462)
				}
			}
			
			//-- 배구(23)
			if($sportsid == "3823"){
				if($leagueid == "yyy"){
					if($outcomeid == "zzz"){
						$nResp = true;
					}
				}else{
					if($outcomeid == "186"){ $nResp = true; }	//승패(186)
					if($outcomeid == "192"){ $nResp = true; }	//홈팀- 1세트이상 승(192)
					if($outcomeid == "193"){ $nResp = true; }	//원정팀- 1세트이상 승(193)
					if($outcomeid == "196"){ $nResp = true; }	//정확한 세트수(196)
					if($outcomeid == "237"){ $nResp = true; }	//포인트 핸디캡(237)
					if($outcomeid == "238"){ $nResp = true; }	//포인트 오버언더(238)
					if($outcomeid == "202"){ $nResp = true; }	//1 세트- 승패(202)
					if($outcomeid == "309"){ $nResp = true; }	//1세트- 포인트 핸디캡(309)
					if($outcomeid == "310"){ $nResp = true; }	//1세트- 포인트 오버언더(310)
					if($outcomeid == "311"){ $nResp = true; }	//1세트- 홀짝(311)
					if($outcomeid == "525"){ $nResp = true; }	//4세트 발생(525)
					if($outcomeid == "526"){ $nResp = true; }	//5세트 발생(526)
					if($outcomeid == "850"){ $nResp = true; }	//홈팀- 한세트만 승(850)
					if($outcomeid == "851"){ $nResp = true; }	//원정팀- 한세트만 승(851)
					if($outcomeid == "852"){ $nResp = true; }	//홈팀- 두세트만 승(852)
					if($outcomeid == "853"){ $nResp = true; }	//원정팀- 두세트만 승(853)
					if($outcomeid == "9990"){ $nResp = true; }	//원정팀- 두세트만 승(853)
				}
			}
			return $nResp;
		}
		
		function convert_outcomename($name, $home, $away){
			$name = str_replace("{home}",		$home,		$name);
			$name = str_replace("{away}",		$away,		$name);
			$name = str_replace("{yes}",		"예",		$name);
			$name = str_replace("{no}",			"아니오",		$name);
			$name = str_replace("{odd}",		"홀",		$name);
			$name = str_replace("{even}",		"짝",		$name);
			$name = str_replace("{over}",		"오버",		$name);
			$name = str_replace("{under}",		"언더",		$name);
			$name = str_replace("{draw}",		"무",		$name);
			$name = str_replace("{1sthalf}",	"전반",		$name);
			$name = str_replace("{2ndhalf}",	"후반",		$name);
			$name = str_replace("{equal}",		"같음",		$name);
			$name = str_replace("{exact}",		"일치",		$name);
			$name = str_replace("{other}",		"기타",		$name);
			$name = str_replace("{none}",		"없음",		$name);
			return $name;
		}
		
		function get_base_validate($iv){
			$nresp = false;
			
			if($iv != ""){
				if(strpos($iv,":") !== false){
					$nresp = true;
				}else if(is_numeric($iv)){
					if(strpos($iv,".") !== false){
						$nresp = true;
					}
				}
			}else{
				$nresp = true;
			}
			return $nresp;
		}
		
		function get_outcome_order($id){
			$nresp = "9999";
			if($id == "1"){ $nresp = "1"; }
			if($id == "219"){ $nresp = "2"; }
			if($id == "11"){ $nresp = "2"; }
			if($id == "186"){ $nresp = "2"; }
			if($id == "251"){ $nresp = "2"; }
			if($id == "406"){ $nresp = "2"; }
			if($id == "16"){ $nresp = "3"; }
			if($id == "223"){ $nresp = "3"; }
			if($id == "237"){ $nresp = "3"; }
			if($id == "4"){ $nresp = "4"; }
			if($id == "18"){ $nresp = "5"; }
			if($id == "258"){ $nresp = "5"; }
			if($id == "238"){ $nresp = "5"; }
			if($id == "412"){ $nresp = "5"; }
			if($id == "262"){ $nresp = "6"; }
			if($id == "297"){ $nresp = "6"; }
			if($id == "26"){ $nresp = "7"; }
			if($id == "229"){ $nresp = "7"; }
			if($id == "264"){ $nresp = "7"; }
			if($id == "419"){ $nresp = "7"; }
			if($id == "19"){ $nresp = "8"; }
			if($id == "227"){ $nresp = "8"; }
			if($id == "260"){ $nresp = "8"; }
			if($id == "192"){ $nresp = "9"; }
			if($id == "850"){ $nresp = "10"; }
			if($id == "852"){ $nresp = "11"; }
			if($id == "27"){ $nresp = "12"; }
			if($id == "20"){ $nresp = "13"; }
			if($id == "228"){ $nresp = "13"; }
			if($id == "261"){ $nresp = "13"; }
			if($id == "193"){ $nresp = "14"; }
			if($id == "851"){ $nresp = "15"; }
			if($id == "853"){ $nresp = "16"; }
			if($id == "28"){ $nresp = "17"; }
			if($id == "13"){ $nresp = "18"; }
			if($id == "12"){ $nresp = "19"; }
			if($id == "29"){ $nresp = "20"; }
			if($id == "220"){ $nresp = "21"; }
			if($id == "235"){ $nresp = "22"; }
			if($id == "443"){ $nresp = "22"; }
			if($id == "287"){ $nresp = "22"; }
			if($id == "302"){ $nresp = "23"; }
			if($id == "459"){ $nresp = "23"; }
			if($id == "202"){ $nresp = "23"; }
			if($id == "303"){ $nresp = "24"; }
			if($id == "309"){ $nresp = "24"; }
			if($id == "236"){ $nresp = "25"; }
			if($id == "446"){ $nresp = "25"; }
			if($id == "288"){ $nresp = "25"; }
			if($id == "310"){ $nresp = "25"; }
			if($id == "304"){ $nresp = "26"; }
			if($id == "462"){ $nresp = "26"; }
			if($id == "311"){ $nresp = "26"; }
			if($id == "301"){ $nresp = "27"; }
			if($id == "756"){ $nresp = "28"; }
			if($id == "757"){ $nresp = "29"; }
			if($id == "452"){ $nresp = "30"; }
			if($id == "196"){ $nresp = "31"; }
			if($id == "525"){ $nresp = "32"; }
			if($id == "526"){ $nresp = "33"; }
			if($id == "274"){ $nresp = "34"; }
			if($id == "275"){ $nresp = "35"; }
			if($id == "276"){ $nresp = "36"; }
			if($id == "277"){ $nresp = "37"; }
			if($id == "278"){ $nresp = "38"; }
			if($id == "60"){ $nresp = "39"; }
			if($id == "64"){ $nresp = "40"; }
			if($id == "66"){ $nresp = "41"; }
			if($id == "68"){ $nresp = "42"; }
			if($id == "69"){ $nresp = "43"; }
			if($id == "70"){ $nresp = "44"; }
			if($id == "74"){ $nresp = "45"; }
			if($id == "75"){ $nresp = "46"; }
			if($id == "76"){ $nresp = "47"; }
			if($id == "77"){ $nresp = "48"; }
			if($id == "83"){ $nresp = "49"; }
			if($id == "86"){ $nresp = "50"; }
			if($id == "88"){ $nresp = "51"; }
			if($id == "90"){ $nresp = "52"; }
			if($id == "94"){ $nresp = "53"; }
			if($id == "91"){ $nresp = "54"; }
			if($id == "92"){ $nresp = "55"; }
			if($id == "95"){ $nresp = "56"; }
			if($id == "96"){ $nresp = "57"; }
			if($id == "97"){ $nresp = "58"; }
			if($id == "879"){ $nresp = "59"; }
			if($id == "8"){ $nresp = "60"; }
			if($id == "9"){ $nresp = "61"; }
			if($id == "52"){ $nresp = "62"; }
			
			$nresp = str_pad($nresp, 4, "0", STR_PAD_LEFT);
			return $nresp;
		}
		function Convert_MarketTxt($iv){
			$nResp = "전체";
			if($iv == "1" AND $iv == "11" AND $iv == "14" AND $iv == "16" AND $iv == "18" AND $iv == "186" AND $iv == "251" AND $iv == "256" AND $iv == "258"){ 
				$nResp = "메인마켓"; 
			}else{
				$nResp = "기타마켓"; 
			}
			
			return $nResp;
		}
		function Convert_MarketGroup($iv){
			$nResp = "G00";
			if($iv == "1" AND $iv == "11" AND $iv == "14" AND $iv == "16" AND $iv == "18" AND $iv == "186" AND $iv == "251" AND $iv == "256" AND $iv == "258"){
				$nResp = "G01"; 
			}else{
				$nResp = "G02"; 
			}
			return $nResp;
		}
		function True_Market($iv){
			$nResp = "";
			if($iv == '1'){
				$nResp = "AND iso_bettypeid IN('1','11','14','16','18','186','251','256','258')";
			}
			if($iv == '2'){
				$nResp = "AND iso_bettypeid NOT IN('1','11','14','16','18','186','251','256','258')";
			}
			return $nResp;
		}

	}
	
	$FNC = new ClassUDF();
?>