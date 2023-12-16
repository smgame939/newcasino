<?php
include_once($_SERVER['DOCUMENT_ROOT']."/inc/_injection.php");
include_once($_SERVER['DOCUMENT_ROOT']."/inc/_fnc.php");
include_once($_SERVER['DOCUMENT_ROOT']."/inc/_config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/inc/_php_config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/inc/_lang.php");


if(!defined("_SQLXSS_")){ exit(); }
if(!defined("_CONFIG_")){ exit(); }
if(!defined("_PHPVAR_")){ exit(); }


//############################ DB설정 ############################
$Host 	= "127.0.0.1";
$User 	= "casino_root";
$Pass 	= "CK#aGq)^m(S*gkf";
$DB 	= "casinodb";
//############################ DB설정 ############################
$RAPIHost = "92.204.138.128";
$RAPIUser = "cademo";
$RAPIPass = '&ui1LE#5W-C*PyZ';
$RAPIDBase = "result_data";

$result_api = new mysqli($RAPIHost,$RAPIUser,$RAPIPass,$RAPIDBase);
date_default_timezone_set('Asia/Seoul');
mysqli_query($result_api, 'set names utf8');


//####### DB Open

$ConnHost = new mysqli($Host,$User,$Pass,$DB);
if ($ConnHost->connect_error) {
	//####### if 에러
	exit();
}else{
	//####### 타임존 설정
	date_default_timezone_set('Asia/Seoul');
	//####### 캐릭터셋 UTF-8 설정
	$ConnHost->query('set names utf8');
}




$Admin_IDX 		= $FNC->UDF_Get_Session("idx");
$Admin_SITE 	= $FNC->UDF_Get_Session("site");
$Admin_SITENAME = $FNC->UDF_Get_Session("sitename");
$Admin_ID 		= $FNC->UDF_Get_Session("id");
$Admin_NICK 	= $FNC->UDF_Get_Session("nick");
$Admin_NAME 	= $FNC->UDF_Get_Session("name");
$Admin_NAME 	= $FNC->UDF_Get_Session("name");
$Admin_LEVEL 	= $FNC->UDF_Get_Session("level");
$Admin_IP 		= $FNC->UDF_Get_Session("allow_ip");
$Admin_REF 		= $FNC->UDF_Get_Session("ref");
$Admin_SESSION 	= $FNC->UDF_Get_Session("session");
$Admin_STATUS 	= $FNC->UDF_Get_Session("status");
$Admin_MANAGER 	= $FNC->UDF_Get_Session("manager");


$iu_idx 		= $FNC->UDF_Get_Session("iu_idx");
$iu_master 		= $FNC->UDF_Get_Session("iu_master");
$iu_site 		= $FNC->UDF_Get_Session("iu_site");
$iu_id 			= $FNC->UDF_Get_Session("iu_id");
$iu_nick 		= $FNC->UDF_Get_Session("iu_nick");
$iu_name 		= $FNC->UDF_Get_Session("iu_name");
$iu_ipf 		= $FNC->UDF_Get_Session("iu_ipf");
$iu_level 		= $FNC->UDF_Get_Session("iu_level");



$Admin_DISP = $Admin_NICK != "" ? $Admin_NICK : $Admin_ID;

$PageIdx 		= isset($_GET['Page']) 			? $FNC->UDF_XSS($_GET['Page']) 			: 1;	//Page Number
$PageSize 		= isset($_GET['PageSize']) 		? $FNC->UDF_XSS($_GET['PageSize']) 		: 20;	//Date Count in a Page
$PageCnt		= 10;	//Block Count
$Q_PGAE			= " LIMIT ".($PageIdx-1)*$PageSize.", ".$PageSize;

$MY_SESSION = session_id();

class ClassDB{
	
	private $ctime;
	private $dserial;
	private $ymd;
	private $ymdhis;
	private $code;
	private $ipr;
	private $ipf;
	private $my_url;
	private $my_os;
	private $my_browser;
	private $my_mobile;
	private $MY_SESSION;
	public $arr_lang;
	public $sel_lang;
	
	public function __construct(){
		$this->ctime 		= time();
		$this->dserial 		= date("Ymd",			time());
		$this->ymd 			= date("Y-m-d",			time());
		$this->ymdhis 		= date("Y-m-d H:i:s",	time());
		$this->code 		= date("YmdHis",		time());
		$this->MY_SESSION 	= session_id();
		$this->my_url 		= self::my_url();
		$this->my_os 		= self::my_os();
		$this->my_mobile 	= self::my_mobile();
		$this->my_browser 	= self::my_browser();
		$this->ipr 			= self::my_ip("R");
		$this->ipf 			= self::my_ip("F");
	}
	
	function Get_Random($min,$max){
		return mt_rand($min,$max);
	}
	
	function UDF_Idx($iv){
		$timestamp = time();
		$resp = $iv . $timestamp;
		return $resp;
	}
	
	function my_url(){
		$hostname	= $_SERVER["HTTP_HOST"];
		$hostname 	= trim($hostname);		
		$hostname 	= str_replace(' ', '', $hostname);
		return $hostname;
	}
	
	function my_browser() {
		$uagent	=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";
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
	
	function my_os() { 
		$uagent	=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";
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
	
	function my_ip($iv){
		if($iv == "C")
			$ip = !empty($_SERVER["HTTP_CLIENT_IP"]) ? $_SERVER["HTTP_CLIENT_IP"] : "";
		if($iv == "F")
			$ip = !empty($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : "";
		if($iv == "R")
			$ip = !empty($_SERVER["REMOTE_ADDR"]) ? $_SERVER["REMOTE_ADDR"] : "";

		$ip 	= trim($ip);		
		$ip 	= str_replace(' ', '', $ip);
		return $ip;
	}
	
	function my_mobile(){
		$uagent	=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";
		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$uagent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($uagent,0,4))){
			return "Y";
		}else{
			return "N";
		}
	}
	
	function get_session($session_name){
		return isset($_SESSION[$session_name]) ? $_SESSION[$session_name] : "";
	}
	
	function db_api_gameid($db, $site, $id, $game){
		$casino = [];
		$gametype = "iui_" . $game . "id";
		
		$sql = "SELECT * FROM info_users_id WHERE iui_site='$site' AND iui_id='$id' AND $gametype != ''";
		$result = $db->query($sql);
		$casino = $result->fetch_assoc();

		return $casino;
	}
	
	function db_api_addedit_gameid($db, $game, $users, $nid, $npw, $wid = ""){
		$gameid = "iui_" . $game . "id";
		$gamepw = "iui_" . $game . "pw";
		
		$sql = "SELECT * FROM info_users_id WHERE iui_site='$users[iu_site]' AND iui_id='$users[iu_id]'";
		$result = $db->query($sql);
		$user = $result->fetch_assoc();
		if($user){
			$iui_idx = $user['iui_idx'];
			
			$usql = "UPDATE info_users_id SET ";
			$usql .= "$gameid		= '$nid', ";
			$usql .= "$gamepw		= '$npw', ";
			if($wid != ""){
				$usql .= "iui_walletid 	= '$wid', ";
			}
			$usql .= "iui_status 	= '1' ";
			$usql .= "WHERE iui_idx = '$iui_idx'";
			$db->query($usql);
			
		}else{
			$isql = "INSERT INTO info_users_id SET 
				iui_site  			= '$users[iu_site]', 
				iui_master 			= '$users[iu_master]', 
				iui_reference 		= '$users[iu_reference]', 
				iui_id 				= '$users[iu_id]', 
				iui_nick 			= '$users[iu_nick]', 
				iui_level 			= '$users[iu_level]', 
				iui_nosettle 		= '$users[iu_nosettle]', 
				iui_reg 			= '$this->ymdhis', 
				iui_reg_ipr 		= '$this->ipr', 
				iui_reg_ipf 		= '$this->ipf', 
				$gameid 			= '$nid', 
				$gamepw 			= '$npw', 
				iui_walletid 		= '$wid', 
				iui_status 			= '1'
			";
			$db->query($isql);

		}
	}
	function update_password_userid($db, $id, $pw){
		$usql = "
		UPDATE info_users SET 
			iu_pw			= password('$pw'), 
			iu_reason		= '본인정보 수정'
		WHERE iu_id='$id'
		";
		$db->query($usql);
	}
	function db_api_update_gameid_login($db, $idx){
		$usql = "UPDATE info_users_id SET ";
		$usql .= "iui_login			='$this->ymdhis', ";
		$usql .= "iui_login_ipr		='$this->ipr', ";
		$usql .= "iui_login_ipf		='$this->ipf', ";
		$usql .= "iui_login_cnt		=iui_login_cnt+1 ";
		$usql .= "WHERE iui_idx='$idx'";
		$db->query($usql);
	}
	
	function db_api_update_gameid_deposit($db, $balance, $game, $idx, $gamecode = ""){
		$usql = "UPDATE info_users_id SET ";
		$usql .= "iui_deposit		= iui_deposit+$balance, ";
		$usql .= "iui_deposit_cnt	= iui_deposit_cnt+1, ";
		$usql .= "iui_loc			= '$game', ";
		$usql .= "iui_loc_code		= '$gamecode' ";
		$usql .= "WHERE iui_idx = '$idx'";
		$db->query($usql);
	}
	
	function db_api_update_gameid_withdraw($db, $balance, $game, $idx){
		$usql = "UPDATE info_users_id SET ";
		$usql .= "iui_withdraw		= iui_withdraw+$balance, ";
		$usql .= "iui_withdraw_cnt	= iui_withdraw_cnt+1, ";
		$usql .= "iui_loc			= '$game', ";
		$usql .= "iui_loc_code		= 'SITE' ";
		$usql .= "WHERE iui_idx = '$idx'";
		$db->query($usql);
	}
	
	function db_get_blockinfo($db, $site, $type, $value){
		if($site != ""){
			$sql = "SELECT * FROM set_block WHERE sb_site='$site' AND sb_colm='$type' AND sb_value='$value'";
		}else{
			$sql = "SELECT * FROM set_block WHERE sb_colm='$type' AND sb_value='$value'";
		}
		$result = $db->query($sql);
		if($result->num_rows > 0){
			return true;
		}else{
			return false;
		}
	}
		
	function db_message_login($db, $site, $id){
		$resp = "";
		$sql = "SELECT * FROM set_site WHERE ss_site='$site'";
		$result = $db->query($sql);
		$set_site = $result->fetch_assoc();
		if($set_site['ss_login_msg'] == "1"){
			$resp 			= $set_site['ss_login_html'];
			$ss_sitename 	= $set_site['ss_sitename'];
			$ss_site 		= $set_site['ss_site'];
			if($resp != ""){
				$sql = "SELECT * FROM info_users WHERE iu_site='$site' AND iu_id='$id'";
				$results = $db->query($sql);
				$user = $results->fetch_assoc();
				if($user){
					$iu_id 		= $user['iu_id'];
					$iu_nick 	= $user['iu_nick'];
					$iu_name 	= $user['iu_name'];
					
					
					$resp = str_replace("{ID}",		$iu_id,			$resp);
					$resp = str_replace("{NICK}",	$iu_nick,		$resp);
					$resp = str_replace("{SITE}",	$ss_sitename,	$resp);
					$resp = str_replace("{NAME}",	$iu_name,		$resp);
					
					$arr_lang 	= self::load_translate($db);
					$lang		= self::get_session("lang") != "" ? self::get_session("lang") : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
					
					$title = get_translate($arr_lang, '_login_ok', $lang);

					self::db_message_send($db, $site, $user, $title, $resp, "1");
					
					
				}
			}
		}
		return $resp;
	}
	function db_main_deposit($db, $site,$iu_idx=""){
		$deposit = []; $idx = 0; $today = date("Y-m-d H:i:s", strtotime("Now")); $sttime = date("Y-m-d H:i:s", strtotime("-12 hours"));
		$sql = "SELECT ic_id, ic_amount, ic_reg FROM info_cash WHERE ic_site='$site' AND ic_status='2' AND ic_type='IN' AND (ic_reg BETWEEN '$sttime' AND '$today') ORDER BY ic_idx DESC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$deposit[$idx] = $rows;
			$idx++;
		}
		$add = self::db_random_cash("IN");
		$result = array_merge($deposit, $add);
		//--- 합치기
		return $result;
	}
	
	function db_main_withdraw($db, $site,$iu_idx=""){
		$today = date("Y-m-d H:i:s", strtotime("Now")); $sttime = date("Y-m-d H:i:s", strtotime("-12 hours"));
		$deposit = []; $idx = 0;
		
		
		
		$sql = "SELECT ic_id, ic_amount, ic_reg FROM info_cash WHERE ic_site='$site' AND ic_status='2' AND ic_type='OUT' AND (ic_reg BETWEEN '$sttime' AND '$today')  ORDER BY ic_idx DESC ";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$deposit[$idx] = $rows;
			$idx++;
		}
		$add = self::db_random_cash("OUT");
		$result = array_merge($deposit,$add);
		return $result;
	}
	
	function db_random_cash($tp){
		$ids = []; $amt = [];
		$ab_a 		= explode(",","d,v,f,g,a,b,s,t,u,k,z,l,c,w,x,h,j,o,p,m,e,n,y,i,q,r");
		$ab_b 		= explode(",","b,x,a,j,o,d,v,f,l,n,p,m,e,t,y,u,k,z,h,i,q,r,g,s,c,w");
		$ids[0] 	= explode(",","w,x,c,g,h,i,j,d,e,f,k,l,m,n,o,p,q,r,s,t,y,z,a,b,u,v");
		$ids[1] 	= explode(",","a,b,c,h,i,o,p,q,r,d,e,f,g,s,t,u,v,w,x,j,k,l,m,n,y,z");
		$ids[2] 	= explode(",","b,g,h,i,m,n,o,p,j,k,l,q,u,v,w,r,s,t,x,c,d,e,f,y,z,a");
		$ids[3] 	= explode(",","c,d,e,j,k,l,m,n,o,p,q,r,s,t,u,v,w,f,g,h,i,x,y,z,a,b");
		$ids[4] 	= explode(",","d,e,f,g,h,i,j,o,p,q,r,s,t,u,k,l,m,n,v,w,x,y,z,a,b,c");
		$ids[5] 	= explode(",","e,f,g,h,i,n,o,p,q,r,s,t,j,k,l,m,u,v,w,x,y,z,a,b,c,d");
		$ids[6] 	= explode(",","f,g,h,i,j,k,p,q,r,s,t,u,v,w,x,y,l,m,n,o,z,a,b,c,d,e");
		$ids[7] 	= explode(",","g,h,i,j,k,q,r,s,t,u,v,w,x,y,z,l,m,n,o,p,a,b,c,d,e,f");
		$ids[8] 	= explode(",","h,i,j,k,q,r,s,t,u,v,w,x,y,z,a,l,m,n,o,p,b,c,d,e,f,g");
		$ids[9] 	= explode(",","i,j,k,q,r,w,x,y,l,m,n,o,p,z,a,b,s,t,u,v,c,d,e,f,g,h");
		$ids[10] 	= explode(",","j,k,l,m,s,t,u,v,w,x,y,z,a,b,c,d,e,n,o,p,q,r,f,g,h,i");
		$ids[11] 	= explode(",","k,l,m,n,o,c,d,x,y,z,a,b,u,v,w,e,f,g,h,p,q,r,s,t,i,j");
		$ids[12] 	= explode(",","l,m,n,o,p,q,v,w,x,y,z,a,b,c,d,e,f,r,s,t,u,g,h,i,j,k");
		$ids[13] 	= explode(",","m,n,o,p,q,v,w,x,y,z,a,b,c,d,r,s,t,u,e,f,g,h,i,j,k,l");
		$ids[14] 	= explode(",","n,o,t,u,z,a,b,v,w,x,y,c,d,e,f,g,h,i,j,k,p,q,r,s,l,m");
		$ids[15] 	= explode(",","n,o,p,q,r,z,a,b,c,d,e,f,g,h,u,v,w,x,s,t,y,i,j,k,l,m");
		$ids[16] 	= explode(",","o,p,q,r,s,t,g,u,v,w,x,y,z,a,b,c,d,e,f,h,i,j,k,l,m,n");
		$ids[17] 	= explode(",","p,q,r,w,x,y,z,a,b,c,d,e,f,g,h,i,j,s,t,u,v,k,l,m,n,o");
		$ids[18] 	= explode(",","q,r,s,z,a,b,t,u,v,w,c,d,e,f,g,h,i,j,k,l,m,n,x,y,o,p");
		$ids[19] 	= explode(",","r,s,t,z,a,b,c,d,e,f,g,h,i,j,k,l,m,u,v,w,x,y,n,o,p,q");
		$ids[20] 	= explode(",","s,t,u,v,w,x,c,d,e,f,g,h,i,j,k,l,m,n,y,z,a,b,o,p,q,r");
		$ids[21] 	= explode(",","t,u,v,w,c,d,e,f,i,j,k,l,m,n,x,y,z,a,g,h,b,o,p,q,r,s");
		$ids[22] 	= explode(",","u,v,w,z,a,b,g,h,i,j,k,l,m,n,c,d,x,y,e,f,o,p,q,r,s,t");
		$ids[23] 	= explode(",","v,w,x,d,h,i,j,k,l,m,n,o,p,y,z,a,b,c,q,r,s,e,f,g,t,u");
		
		$amt[0] 	= explode(",","2000,60,600,200,300,800,30,80,90,400,350,500,50,850,550,650,700,40,900,1000,70,750,100,950,150,250");
		$amt[1] 	= explode(",","40,600,80,250,2000,350,100,550,300,60,70,400,950,50,200,750,150,500,700,800,900,30,1000,90,650,850");
		$amt[2] 	= explode(",","30,50,60,70,90,100,250,40,200,550,350,400,300,500,850,600,80,700,900,1000,2000,800,650,750,950,150");
		$amt[3] 	= explode(",","30,40,500,70,850,80,600,90,100,200,300,400,700,800,50,60,900,1000,2000,650,600,750,950,150,250,350");
		$amt[4] 	= explode(",","400,100,500,40,250,150,900,700,250,150,400,850,90,40,90,2000,100,150,50,300,80,40,550,250,700,50");
		$amt[5] 	= explode(",","1000,100,80,400,950,900,900,200,2000,600,950,150,400,60,200,850,950,100,90,650,30,600,70,350,900,2000");
		$amt[6] 	= explode(",","800,750,750,30,100,80,500,900,150,30,60,30,650,350,400,1000,600,30,900,850,30,750,850,150,40,350");
		$amt[7] 	= explode(",","300,650,900,40,50,40,500,50,60,150,650,800,150,350,700,50,600,600,60,500,600,30,950,50,80,650");
		$amt[8] 	= explode(",","700,50,40,750,200,250,150,400,750,550,800,950,200,600,500,1000,1000,500,200,400,90,650,60,60,100,50");
		$amt[9] 	= explode(",","750,850,250,100,400,60,600,800,30,90,100,100,1000,90,2000,800,150,150,750,350,800,90,2000,50,950,40");
		$amt[10] 	= explode(",","50,150,100,200,300,2000,650,30,750,70,2000,50,80,600,1000,650,300,200,650,500,400,30,550,600,150,550");
		$amt[11] 	= explode(",","350,650,900,500,600,950,300,100,900,350,80,100,900,80,40,700,70,850,40,950,750,80,950,80,700,30");
		$amt[12] 	= explode(",","400,1000,60,30,800,900,550,550,950,30,550,70,600,70,80,950,900,400,60,250,30,80,400,2000,550,650");
		$amt[13] 	= explode(",","550,60,70,850,700,950,100,70,750,200,40,900,400,500,200,2000,650,800,150,90,600,950,1000,60,550,800");
		$amt[14] 	= explode(",","350,900,70,700,300,40,40,550,900,150,90,200,700,850,750,90,550,50,850,30,200,700,950,650,250,550");
		$amt[15] 	= explode(",","2000,650,70,30,500,800,150,750,30,700,30,550,400,50,300,400,600,650,80,900,40,400,900,350,850,850");
		$amt[16] 	= explode(",","1000,2000,150,30,100,2000,40,250,550,850,70,900,350,900,50,500,850,600,1000,350,60,90,100,400,550,650");
		$amt[17] 	= explode(",","300,80,950,60,600,200,300,800,60,80,90,550,60,250,90,750,750,650,850,550,40,650,80,550,600,800");
		$amt[18] 	= explode(",","90,200,2000,2000,200,150,350,50,80,400,1000,550,200,600,300,2000,400,60,800,650,650,700,30,700,550,950");
		$amt[19] 	= explode(",","90,200,200,70,60,60,150,750,650,150,1000,900,550,50,350,900,80,850,650,90,550,900,350,250,800,200");
		$amt[20] 	= explode(",","200,200,40,500,400,400,60,250,350,200,80,550,30,60,60,40,550,750,1000,900,90,200,350,2000,50,650");
		$amt[21] 	= explode(",","2000,950,40,550,800,250,50,2000,60,60,2000,300,100,40,900,800,950,40,300,200,200,400,70,30,350,800");
		$amt[22] 	= explode(",","200,900,250,550,80,400,750,850,250,700,80,40,150,400,200,60,250,30,900,2000,200,50,400,350,60,70");
		$amt[23] 	= explode(",","30,70,2000,650,60,300,80,950,70,70,400,80,750,30,400,650,70,200,700,40,650,150,750,650,850,500");
		
		
		
		$hh = date("H",time());
		$day = date("Y-m-d",time());
		$data = []; $idx = 0;
		if($tp == "IN"){
			for($ii=0; $ii<=25; $ii++){
				$id = $ids[(int)$hh][$ii] . $ab_a[$ii] . $ab_b[$ii] . "*****";
				$amount = $amt[(int)$hh][$ii]*1000;
				$data[$ii] = array("ic_id" => $id, "ic_amount" => $amount, "ic_reg" => $day);
			}
		}else{
			$hh = $hh + 3;
			if($hh > 23){
				$hh = $hh - 23;
			}
			for($ii=25; $ii>=0; $ii--){
				$id = $ids[(int)$hh][$ii] . $ab_a[$ii] . $ab_b[$ii] . "*****";
				$amount = $amt[(int)$hh][$ii]*1000;
				$data[$ii] = array("ic_id" => $id, "ic_amount" => $amount, "ic_reg" => $day);
			}
		}
		return $data;
	}
		
	//--- 회원위치 트래킹
	function db_user_tracker($db, $site, $id, $url, $desc = "페이지이동"){
		//--- 사용자 위치 추적
		$location = "메인";
		$Uri_arr = ['sports','table','machine','powerball','hilo','bet','result','event','notice','attend','support','deposit','withdraw','money','point','memo','low','mypage'];
		$Uri_txt = ['스포츠','카지노','슬롯','파워볼','하이로우','배팅내역','경기결과','이벤트','공지사항','출석부','고객센터','충전페이지','환전페이지','머니내역','포인트내역','쪽지','지인추천','마이페이지'];
		
		for($i=0;$i<count($Uri_arr);$i++){
			if(strpos($url , $Uri_arr[$i]) !== false ){
				$location = $Uri_txt[$i];
				break;
			}
		}

		$sql = "SELECT * FROM info_users WHERE iu_site='$site' AND iu_id='$id'";
		$result = $db->query($sql);
		$user = $result->fetch_assoc();
		if($user){
			if($user['iu_session'] != $this->MY_SESSION){
				$usql = "UPDATE info_users SET
					iu_session  		= ''
				WHERE iu_idx='$user[iu_idx]'";
				$db->query($usql);
			}else{
				$isql = "INSERT INTO log_users SET 
					lu_site  		= '$user[iu_site]', 
					lu_master  		= '$user[iu_master]', 
					lu_reference  	= '$user[iu_reference]', 
					lu_id  			= '$user[iu_id]', 
					lu_nick  		= '$user[iu_nick]', 
					lu_level  		= '$user[iu_level]', 
					lu_date  		= '$this->ymdhis', 
					lu_url  		= '$this->my_url', 
					lu_os  			= '$this->my_os', 
					lu_location  	= '$location', 
					lu_browser  	= '$this->my_browser', 
					lu_mobile  		= '$this->my_mobile', 
					lu_ipr  		= '$this->ipr', 
					lu_ipf  		= '$this->ipf', 
					lu_desc 		= '$desc'
				";
				$db->query($isql);
				
				$usql = "UPDATE info_users SET
					iu_login  			= '$this->ymdhis', 
					iu_login_ipr  		= '$this->ipr', 
					iu_login_ipf  		= '$this->ipf', 
					iu_session  		= '$this->MY_SESSION'
				WHERE iu_idx='$user[iu_idx]'";
				$db->query($usql);
				
				//--- 실시간 접속자 기록생성
				$io_idx = $user['iu_site'] . "_u_" . $user['iu_id'];
				$iusql = "INSERT INTO info_online SET 
					io_idx  		= '$io_idx', 
					io_site  		= '$user[iu_site]', 
					io_type  		= 'U', 
					io_reg  		= '$this->ymdhis',
					io_master  		= '$user[iu_master]',					
					io_id  			= '$user[iu_id]', 
					io_nick  		= '$user[iu_nick]', 
					io_level  		= '$user[iu_level]', 
					io_balance  	= '$user[iu_cash]', 
					io_location  	= '$location', 
					io_browser  	= '$this->my_browser', 
					io_mobile  		= '$this->my_mobile', 
					io_ipr  		= '$this->ipr', 
					io_ipf  		= '$this->ipf' 
				 ON DUPLICATE KEY UPDATE 
					io_reg  		= '$this->ymdhis', 
					io_master  		= '$user[iu_master]',
					io_id  			= '$user[iu_id]', 
					io_nick  		= '$user[iu_nick]', 
					io_level  		= '$user[iu_level]', 
					io_balance  	= '$user[iu_cash]', 
					io_location  	= '$location', 
					io_browser  	= '$this->my_browser', 
					io_mobile  		= '$this->my_mobile', 
					io_ipr  		= '$this->ipr', 
					io_ipf  		= '$this->ipf' 
				";
				$db->query($iusql);
			}
		}
	}
	
	
	
	//--- 사이트 설정 전체
	function db_get_site_set($db, $site){
		$sql = "SELECT * FROM set_site WHERE ss_site='$site'";
		$result = $db->query($sql);
		$site = $result->fetch_assoc();
		return $site;
	}
	function db_get_agent_bal($db, $site, $agent){
		$in_query = "ss_bal_".$agent;
		$sql = "SELECT $in_query FROM set_site WHERE ss_site='$site'";
		$result = $db->query($sql);
		$bal = $result->fetch_assoc();
		return $bal[$in_query];
	}
	function db_agent_bal_change($db, $site, $agent, $bal){
		$in_query = "ss_bal_$agent=ss_bal_$agent+$bal";
		$sql = "UPDATE set_site SET $in_query  WHERE ss_site='$site'";
		$db->query($sql);
	}
	
	function db_get_user_set($db, $site, $id){
		$sql = "SELECT * FROM info_user_set WHERE sl_site='$site' AND sl_id='$id'";
		$result = $db->query($sql);
		$userset = $result->fetch_assoc();
		return $userset;
		
	}
	
	//--- 사이트 설정 - 최소 입금
	function db_get_min_deposit($db, $site, $id, $level){
		$min = 10000;
		$config = self::db_level_info($db, $site, $level);
		
		$userset = self::db_get_user_set($db, $site, $id);
		if($userset){
			$config = $userset;
		}
		
		if($config){
			$min = $config['sl_min_deposit'];
			if($min <= 0){
				$config = self::db_get_site_set($db, $site);
				$min = $config['ss_min_in'];
			}
		}else{
			$config = self::db_get_site_set($db, $site);
			$min = $config['ss_min_in'];
		}
		return $min;
	}
	
	//--- 사이트 설정 - 최소 출금
	function db_get_min_withdraw($db, $site, $id, $level){
		$min = 10000;
		$config = self::db_level_info($db, $site, $level);
		$userset = self::db_get_user_set($db, $site, $id);
		if($userset){
			$config = $userset;
		}
		if($config){
			$min = $config['sl_min_withdraw'];
			if($min <= 0){
				$config = self::db_get_site_set($db, $site);
				$min = $config['ss_min_out'];
			}
		}else{
			$config = self::db_get_site_set($db, $site);
			$min = $config['ss_min_out'];
		}
		return $min;
	}
	
	//--- 사이트 설정 - 출금 상한
	function db_get_max_withdraw($db, $site, $id){
		$max = 0;
		$config = self::db_get_user_set($db, $site, $id);
		if($config){
			$max = $config['sl_max_withdraw'];
		}
		return $max;
	}
	
	//--- 회원,레벨 설정 - 최소/최대배팅
	function db_get_bet_limit($db, $site, $id, $level){
		$config = self::db_get_user_set($db, $site, $id);
		if(!$config){
			$config = self::db_level_info($db, $site, $level);
		}
		return $config;
	}
	
	function db_get_prebet($db, $site, $id, $gamecode, $gameid){
		$game = [];
		$game['bet'] = 0; $game['max'] = 0;
		
		$gamename = "";
		if($gamecode == "PB"){ $gamename = "파워볼"; }
		if($gamecode == "PL"){ $gamename = "파워사다리"; }
		if($gamecode == "TK_HL"){ $gamename = "토큰 하이로우"; }
		if($gamecode == "TK_SC"){ $gamename = "씨오디"; }
		if($gamecode == "TK_SG"){ $gamename = "갤럭시"; }
		if($gamecode == "TK_SM"){ $gamename = "엠지엠"; }
		if($gamecode == "TK_SS"){ $gamename = "쏠레어"; }
		if($gamecode == "TK_SV"){ $gamename = "베네치안"; }
		if($gamecode == "TK_SW"){ $gamename = "윈"; }
		if($gamecode == "SPORTS"){ $gamename = "SPORTS"; }
		
		$sql = "SELECT ib_amount, ib_rate FROM info_bets WHERE ib_site='$site' AND ib_id='$id' AND ib_game='$gamename' AND ib_gameid='$gameid'";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$game['bet'] += $rows['ib_amount'];
			$game['max'] += ($rows['ib_amount'] * $rows['ib_rate']);
		}
		return $game;
	}
	
	function db_get_prebet_count($db, $site, $id, $gamecode, $gameid){
		$count = 0;

		$gamename = "";
		if($gamecode == "PB"){ $gamename = "파워볼"; }
		if($gamecode == "PL"){ $gamename = "파워사다리"; }
		if($gamecode == "TK_HL"){ $gamename = "토큰 하이로우"; }
		if($gamecode == "TK_SC"){ $gamename = "씨오디"; }
		if($gamecode == "TK_SG"){ $gamename = "갤럭시"; }
		if($gamecode == "TK_SM"){ $gamename = "엠지엠"; }
		if($gamecode == "TK_SS"){ $gamename = "쏠레어"; }
		if($gamecode == "TK_SV"){ $gamename = "베네치안"; }
		if($gamecode == "TK_SW"){ $gamename = "윈"; }
		if($gamecode == "SPORTS"){ $gamename = "SPORTS"; }
		
		$sql = "SELECT ib_amount, ib_rate FROM info_bets WHERE ib_site='$site' AND ib_id='$id' AND ib_game='$gamename' AND ib_gameid='$gameid' AND ib_status='0'";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$count++;
		}
		return $count;
	}
	
	function db_get_premarket($db, $site, $id, $gamecode, $gameid, $typeid){
		$count = 0;

		$gamename = "SPORTS";
		
		$sql = "SELECT ibd_rate FROM info_bets_detail WHERE ibd_id='$id' AND ibd_game='$gamename' AND ibd_gameid='$gameid' AND ibd_bettype='$typeid' AND ibd_status='0'";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$count++;
		}
		return $count;
	}
	
	//--- 회원,레벨 설정 - 로그인 포인트 지급
	function db_send_login_point($db, $user){
		$site = $user['iu_site']; $id = $user['iu_id']; $level = $user['iu_level'];
		
		$point = 0; $count = 0;
		$config = self::db_get_user_set($db, $site, $id);
		if($config){
			$point 	= $config['sl_pt_login'];
			$count	= $config['sl_pt_login_cnt'];
		}else{
			$config = self::db_level_info($db, $site, $level);
			if($config){
				$point 	= $config['sl_pt_login'];
				$count	= $config['sl_pt_login_cnt'];
			}
		}
		if($point > 0 AND $count > 0){
			$ntoday = $this->ymd;
			$csql = "SELECT lp_idx FROM log_point WHERE lp_site='$site' AND lp_id='$id' AND lp_reg like '$ntoday%'";
			$cresult = $db->query($csql);
			if($cresult->num_rows < $count){
				$isql = "INSERT INTO log_point SET 
					lp_site  			= '$user[iu_site]', 
					lp_master  			= '$user[iu_master]', 
					lp_reference  		= '$user[iu_reference]', 
					lp_type  			= 'P-LOGIN', 
					lp_id  				= '$user[iu_id]', 
					lp_nick  			= '$user[iu_nick]', 
					lp_level  			= '$user[iu_level]', 

					lp_before  			= '$user[iu_point]', 
					lp_point  			= '$point', 
					lp_after  			= $user[iu_point] + $point,

					lp_mark  			= '로그인 포인트', 
					lp_memo  			= '로그인 포인트지급', 
					lp_reg   			= '$this->ymdhis', 
					lp_reg_ipr  		= '$this->ipr', 
					lp_reg_ipf  		= '$this->ipf', 
					lp_operator  		= 'AUTO'
				";
				$db->query($isql);
				
				$db->query("START TRANSACTION");
				
				$msql = "SELECT * FROM info_users WHERE iu_idx='$user[iu_idx]' FOR UPDATE";
				$db->query($msql);
				
				$usql = "UPDATE info_users SET iu_point=iu_point+$point,iu_freepoint=iu_freepoint+$point, iu_reason='로그인 포인트' WHERE iu_idx='$user[iu_idx]'";
				$db->query($usql);
				
				$db->query("COMMIT");
				
			}
		}
	}
	
	
	//--- 회원,레벨 설정 - 글쓰기 포인트 지급
	function db_send_write_point($db, $user){
		$site = $user['iu_site']; $id = $user['iu_id']; $level = $user['iu_level'];
		
		$point = 0; $count = 0;
		$config = self::db_get_user_set($db, $site, $id);
		if($config){
			$point 	= $config['sl_pt_write'];
			$count	= $config['sl_pt_write_cnt'];
		}else{
			$config = self::db_level_info($db, $site, $level);
			if($config){
				$point 	= $config['sl_pt_write'];
				$count	= $config['sl_pt_write_cnt'];
			}
		}
		if($point > 0 AND $count > 0){
			$ntoday = $this->ymd;
			$csql = "SELECT lp_idx FROM log_point WHERE lp_site='$site' AND lp_id='$id' AND lp_reg like '$ntoday%'";
			$cresult = $db->query($csql);
			if($cresult->num_rows < $count){
				$isql = "INSERT INTO log_point SET 
					lp_site  			= '$user[iu_site]', 
					lp_master  			= '$user[iu_master]', 
					lp_reference  		= '$user[iu_reference]', 
					lp_type  			= 'P-WRITE', 
					lp_id  				= '$user[iu_id]', 
					lp_nick  			= '$user[iu_nick]', 
					lp_level  			= '$user[iu_level]', 

					lp_before  			= '$user[iu_point]', 
					lp_point  			= '$point', 
					lp_after  			= $user[iu_point] + $point,

					lp_mark  			= '글쓰기 포인트', 
					lp_memo  			= '글쓰기 포인트지급', 
					lp_reg   			= '$this->ymdhis', 
					lp_reg_ipr  		= '$this->ipr', 
					lp_reg_ipf  		= '$this->ipf', 
					lp_operator  		= 'AUTO'
				";
				$db->query($isql);
				
				$db->query("START TRANSACTION");
				
				$msql = "SELECT * FROM info_users WHERE iu_idx='$user[iu_idx]' FOR UPDATE";
				$db->query($msql);
				
				$usql = "UPDATE info_users SET iu_point=iu_point+$point,iu_freepoint=iu_freepoint+$point,iu_reason='글쓰기 포인트' WHERE iu_idx='$user[iu_idx]'";
				$db->query($usql);
				
				$db->query("COMMIT");
			}
		}
	}
	
	//--- 회원,레벨 설정 - 입금 포인트 지급
	function db_send_deposit_point($db, $user){
		$site = $user['iu_site']; $id = $user['iu_id']; $level = $user['iu_level'];
		
		$point = 0; $count = 0;
		$config = self::db_get_user_set($db, $site, $id);
		if($config){
			$point 	= $config['sl_pt_deposit'];
			$count	= $config['sl_pt_deposit_cnt'];
		}else{
			$config = self::db_level_info($db, $site, $level);
			if($config){
				$point 	= $config['sl_pt_deposit'];
				$count	= $config['sl_pt_deposit_cnt'];
			}
		}
		if($point > 0 AND $count > 0){
			$ntoday = $this->ymd;
			$csql = "SELECT lp_idx FROM log_point WHERE lp_site='$site' AND lp_id='$id' AND lp_reg like '$ntoday%'";
			$cresult = $db->query($csql);
			if($cresult->num_rows < $count){
				$isql = "INSERT INTO log_point SET 
					lp_site  			= '$user[iu_site]', 
					lp_master  			= '$user[iu_master]', 
					lp_reference  		= '$user[iu_reference]', 
					lp_type  			= 'P-DEPOSIT', 
					lp_id  				= '$user[iu_id]', 
					lp_nick  			= '$user[iu_nick]', 
					lp_level  			= '$user[iu_level]', 

					lp_before  			= '$user[iu_point]', 
					lp_point  			= '$point', 
					lp_after  			= $user[iu_point] + $point,

					lp_mark  			= '입금 포인트', 
					lp_memo  			= '입금 포인트지급', 
					lp_reg   			= '$this->ymdhis', 
					lp_reg_ipr  		= '$this->ipr', 
					lp_reg_ipf  		= '$this->ipf', 
					lp_operator  		= 'AUTO'
				";
				$db->query($isql);
				
				$db->query("START TRANSACTION");
				
				$msql = "SELECT * FROM info_users WHERE iu_idx='$user[iu_idx]' FOR UPDATE";
				$db->query($msql);
				
				$usql = "UPDATE info_users SET iu_point=iu_point+$point,iu_freepoint=iu_freepoint+$point,iu_reason='입금 포인트' WHERE iu_idx='$user[iu_idx]'";
				$db->query($usql);
				
				$db->query("COMMIT");
			}
		}
	}
	
	//--- URL이 소속된 사이트 코드 조회
	function db_get_site_from_url($db,$url){
		$nresp = "";
		$sql = "SELECT sd_site FROM set_domain WHERE sd_url='$url'";
		$result = $db->query($sql);
		$site = $result->fetch_assoc();
		if($site){
			$nresp = $site['sd_site'];
		}
		return $nresp;
	}
	
	
	function db_get_site_domain($db,$url){
		$site = [];
		$site['sd_status'] 	= "0";
		$site['sd_code'] 	= "";
		
		$sql = "SELECT * FROM set_domain WHERE sd_url='$url'";
		$result = $db->query($sql);
		if($result->num_rows > 0){
			$site = [];
			$site = $result->fetch_assoc();
		}
		return $site;
	}
	
	
	
	//--- 중복조회용
	function db_user_validate($db, $site, $type, $iv){
		$iCount = 0;
		if($iv != ""){
			$sql = "SELECT ia_$type FROM info_admin WHERE ia_site='$site' AND ia_$type = '$iv'";
			$result = $db->query($sql);
			$admin = $result->fetch_assoc();
			if($admin){
				$iCount++;
			}
			
			$sql = "SELECT ip_$type FROM info_partner WHERE ip_site='$site' AND ip_$type = '$iv'";
			$result = $db->query($sql);
			$partner = $result->fetch_assoc();
			if($partner){
				$iCount++;
			}

			$sql = "SELECT iu_$type FROM info_users WHERE iu_site='$site' AND iu_$type = '$iv'";
			$result = $db->query($sql);
			$user = $result->fetch_assoc();
			if($user){
				$iCount++;
			}
		}
		if($iCount == 0){ return true; }else{ return false; }
	}
	
	function db_user_phone($db, $site, $type, $iv){
		$iCount = 0;
		if($iv != ""){
			$sql = "SELECT ip_$type FROM info_partner WHERE ip_site='$site' AND ip_$type = '$iv'";
			$result = $db->query($sql);
			$partner = $result->fetch_assoc();
			if($partner){
				$iCount++;
			}

			$sql = "SELECT iu_$type FROM info_users WHERE iu_site='$site' AND iu_$type = '$iv'";
			$result = $db->query($sql);
			$user = $result->fetch_assoc();
			if($user){
				$iCount++;
			}
		}
		if($iCount == 0){ return true; }else{ return false; }
	}
	
	
	
	//--- 추천코드 확인 - 회원
	function db_get_line_from_user($db,$site,$code){
		$sql = "SELECT iu_id FROM info_users WHERE iu_site='$site' AND iu_ref='$code' AND iu_status='2'";
		$result = $db->query($sql);
		$user = $result->fetch_assoc();
		if($user){
			$code = $user['iu_id'];
		}else{
			$code = "";
		}
		return $code;
	}
	
	//--- 추천코드 확인 - 파트너
	function db_get_line_from_partner($db,$site,$code){
		$sql = "SELECT * FROM info_partner WHERE ip_site='$site' AND ip_ref='$code' AND ip_status='1'";
		$result = $db->query($sql);
		$partner = $result->fetch_assoc();
		if($partner){
			if($partner['ip_status'] == "1"){
				$code = $partner['ip_id'];
			}else{
				$code = "";
			}
		}else{
			$code = "";
		}
		return $code;
	}
	
	//--- 추천코드 확인 - 사이트
	function db_get_line_from_admin($db,$site,$code){
		$sql = "SELECT ia_id FROM info_admin WHERE ia_site='$site' AND ia_ref='$code' AND ia_status='1'";
		$result = $db->query($sql);
		$admin = $result->fetch_assoc();
		if($admin){
			$code = $admin['ia_id'];
		}else{
			$code = "";
		}
		return $code;
	}
	
	
	
	//--- 회원 레벨설정
	function db_level_info($db, $site, $level){
		$sql = "SELECT * FROM set_level WHERE sl_site='$site' AND sl_level='$level'";
		$result = $db->query($sql);
		$level = $result->fetch_assoc();
		return $level;
	}
	
	function db_info_bank($db, $site){
		$banks = []; $idx = 0;
		$sql = "SELECT * FROM set_bank WHERE sb_site='$site' AND sb_status='1'";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$banks[$idx] = $rows;
			$idx++;
		}
		return $banks;
	}
	
	function db_get_user($db, $site, $idx, $id){
		$user = []; $addSql = "";
		$addSql = $idx != "" ? "iu_site='$site' AND iu_idx='$idx'" : "iu_site='$site' AND iu_id='$id'";

		$sql = "SELECT * FROM info_users WHERE $addSql";
		$result = $db->query($sql);
		if($result->num_rows > 0){
			$user = $result->fetch_assoc();
		}
		return $user;
	}
	
	//--- 회원 정보
	function db_user_info($db, $site, $idx, $id = ""){
		$user = [];
		$user['iu_cash'] = 0;
		$bSql = $idx != "" ? " AND iu_idx='$idx'" : " AND iu_id='$id'";
		
		$sql = "SELECT * FROM info_users WHERE iu_site='$site' $bSql";
		$result = $db->query($sql);
		if($result->num_rows > 0){
			$user = $result->fetch_assoc();
		}
		return $user;
	}
	
	function db_log_post($db, $cmd, $ref, $data){
		$data = htmlspecialchars($data);
		
		$isql = "INSERT INTO log_post SET 
			cmd  		= '$cmd', 
			ref  		= '$ref', 
			reg  		= '$this->ymdhis', 
			ipr  		= '$this->ipr', 
			ipf  		= '$this->ipf', 
			data  		= '$data'
		";
		$db->query($isql);
	}
	//--- 포인트 전환
	function db_user_req_point($db, $ctype, $userinfo, $amount){
		if($userinfo){
			
			$db->query("START TRANSACTION");
				
			$msql = "SELECT * FROM info_users WHERE iu_idx='$userinfo[iu_idx]' FOR UPDATE";
			$db->query($msql);
			
			if($ctype == "EXCHANGE"){
				$ic_status = 2;
				$ic_after = $userinfo['iu_cash'] + $amount;
				$lp_after = $userinfo['iu_point'] - $amount;
				$lc_before = $userinfo['iu_cash'];
				$usql = "UPDATE info_users SET iu_cash=iu_cash+'$amount',iu_point=iu_point-'$amount',iu_reason='포인트전환' WHERE iu_idx='$userinfo[iu_idx]'";
				$db->query($usql);
			}
			
			if($ctype == "CA-EXCHANGE"){
				$ic_status = 2;
				$ic_after = $userinfo['iu_cash_c'] + $amount;
				$lp_after = $userinfo['iu_point'] - $amount;
				$lc_before = $userinfo['iu_cash_c'];
				$usql = "UPDATE info_users SET iu_cash_c=iu_cash_c+'$amount',iu_point=iu_point-'$amount',iu_reason='포인트전환' WHERE iu_idx='$userinfo[iu_idx]'";
				$db->query($usql);
			}
			
			$db->query("COMMIT");
			
			$isql = "INSERT INTO info_cash SET 
				ic_site  			= '$userinfo[iu_site]', 
				ic_master  			= '$userinfo[iu_master]', 
				ic_reference  		= '$userinfo[iu_reference]', 
				ic_type  			= '$ctype', 
				ic_id  				= '$userinfo[iu_id]', 
				ic_nick  			= '$userinfo[iu_nick]', 
				ic_level  			= '$userinfo[iu_level]', 
				ic_name  			= '$userinfo[iu_name]', 
				ic_bank  			= '$userinfo[iu_bank]', 
				ic_booknum  		= '$userinfo[iu_booknum]', 
				ic_from  			= '', 
				ic_before  			= '$lc_before', 
				ic_amount  			= '$amount', 
				ic_after  			= '$ic_after',
				ic_to				= '',
				ic_reg  			= '$this->ymdhis', 
				ic_reg_ipr  		= '$this->ipr', 
				ic_reg_ipf  		= '$this->ipf', 
				ic_hide  			= '0', 
				ic_operator  		= '', 
				ic_deposit  		= '$userinfo[iu_deposit]', 
				ic_withdraw  		= '$userinfo[iu_withdraw]', 
				ic_bet  			= '$userinfo[iu_bet]', 
				ic_win  			= '$userinfo[iu_win]', 
				ic_nosettle  		= '$userinfo[iu_nosettle]', 
				ic_status 			= '$ic_status'
			";
			$db->query($isql);
			
			$isql = "INSERT INTO log_point SET 
				lp_master  			= '$userinfo[iu_master]', 
				lp_site  			= '$userinfo[iu_site]', 
				lp_type  			= '$ctype', 
				lp_id  				= '$userinfo[iu_id]', 
				lp_nick  			= '$userinfo[iu_nick]', 
				lp_level  			= '$userinfo[iu_level]', 
				lp_before  			= '$userinfo[iu_point]', 
				lp_point  			= '$amount', 
				lp_after  			= '$lp_after', 
				lp_memo  			= '포인트전환', 
				lp_reg  			= '$this->ymdhis', 
				lp_reg_ipr  		= '$this->ipr', 
				lp_reg_ipf  		= '$this->ipf', 
				lp_operator  		= '$userinfo[iu_id]',
				lp_hide  			= '0'
			";
			$db->query($isql);
			
			$isql = "INSERT INTO log_cash SET 
				lc_site  		= '$userinfo[iu_site]', 
				lc_master  		= '$userinfo[iu_master]', 
				lc_reference  	= '$userinfo[iu_reference]', 
				lc_type  		= '$ctype', 
				lc_id  			= '$userinfo[iu_id]', 
				lc_nick  		= '$userinfo[iu_nick]', 
				lc_level  		= '$userinfo[iu_level]', 
				lc_before  		= '$lc_before', 
				lc_amount  		= '$amount', 
				lc_after  		= '$ic_after', 
				lc_reg  		= '$this->ymdhis', 
				lc_reg_ipr  	= '$this->ipr', 
				lc_reg_ipf  	= '$this->ipf', 
				lc_memo  		= '포인트전환', 
				lc_refid  		= '$userinfo[iu_id]', 
				lc_operator 	= '$userinfo[iu_id]'
			";
			$db->query($isql);
		}
	}
	
	//--- 입금신청용
	function db_user_req_cash($db, $ctype, $userinfo, $amount, $bonus, $tp, $amount_cp, $coupon, $cp, $coin = ""){
		if($userinfo){
			$ic_after = 0; $ic_status = 0; $ic_bonus = 0; $ic_bonus_type = ""; $ic_coupon = 0;
			if($bonus != "" AND $bonus > 0){
				$sql = "SELECT * FROM set_level WHERE sl_site='$userinfo[iu_site]' AND sl_level='$userinfo[iu_level]'";
				$result = $db->query($sql);
				$level = $result->fetch_assoc();
				$userset = self::db_get_user_set($db, $userinfo['iu_site'], $userinfo['iu_id']);
				if($userset){
					$level = $userset;
				}
				
				$ic_bonus = $amount / 100 * $bonus;
				if($ctype == "IN"){
					if($tp == "new"){
						if($ic_bonus > $level['sl_sp_bs3_max']){
							$ic_bonus = $level['sl_sp_bs3_max'];
						}
					}
					if($tp == "day"){
						if($ic_bonus > $level['sl_sp_bs1_max']){
							$ic_bonus = $level['sl_sp_bs1_max'];
						}
					}
					if($tp == "re"){
						if($ic_bonus > $level['sl_sp_bs2_max']){
							$ic_bonus = $level['sl_sp_bs2_max'];
						}
					}
					if($tp == "event"){
						if($ic_bonus > $level['sl_sp_bs4_max']){
							$ic_bonus = $level['sl_sp_bs4_max'];
						}
					}
				}
				if($ctype == "CA-IN"){
					if($tp == "new"){
						if($ic_bonus > $level['sl_ca_bs3_max']){
							$ic_bonus = $level['sl_ca_bs3_max'];
						}
					}
					if($tp == "day"){
						if($ic_bonus > $level['sl_ca_bs1_max']){
							$ic_bonus = $level['sl_ca_bs1_max'];
						}
					}
					if($tp == "re"){
						if($ic_bonus > $level['sl_ca_bs2_max']){
							$ic_bonus = $level['sl_ca_bs2_max'];
						}
					}
					if($tp == "event"){
						if($ic_bonus > $level['sl_ca_bs4_max']){
							$ic_bonus = $level['sl_ca_bs4_max'];
						}
					}
				}
			}
			
			if($amount_cp > 0 AND $amount_cp != ""){
				if($cp == "CASH"){
					$ic_bonus = $ic_bonus + $amount_cp;
				}
				$tp = "";
				$ic_bonus = 0;
			}
			
			$db->query("START TRANSACTION");
			
			$msql = "SELECT * FROM info_users WHERE iu_idx='$userinfo[iu_idx]' FOR UPDATE";
			$db->query($msql);

			if($ctype == "IN"){
				$ic_before = $userinfo['iu_cash'];
				$ic_after = $userinfo['iu_cash'] + $amount + $ic_bonus;
				$ic_bonus_type = $tp;
			}
			
			if($ctype == "CA-IN"){
				$ic_before = $userinfo['iu_cash_c'];
				$ic_after = $userinfo['iu_cash_c'] + $amount + $ic_bonus;
				$ic_bonus_type = $tp;
			}
			
			if($ctype == "OUT"){
				$ic_before = $userinfo['iu_cash'];
				$ic_after = $userinfo['iu_cash'] - $amount;
				$usql = "UPDATE info_users SET iu_cash=iu_cash-$amount,iu_reason='출금신청' WHERE iu_idx='$userinfo[iu_idx]'";
				$db->query($usql);
			}
			if($ctype == "CA-OUT"){
				$ic_before = $userinfo['iu_cash_c'];
				$ic_after = $userinfo['iu_cash_c'] - $amount;
				$usql = "UPDATE info_users SET iu_cash_c=iu_cash_c-$amount,iu_reason='출금신청' WHERE iu_idx='$userinfo[iu_idx]'";
				$db->query($usql);
			}
			if($ctype == "POINT"){
				$ic_status = 2;
				$ic_after = $userinfo['iu_cash'] + $amount;
				$usql = "UPDATE info_users SET iu_cash=iu_cash+$amount WHERE iu_idx='$userinfo[iu_idx]'";
				$db->query($usql);
			}
			if($ctype == "CA-POINT"){
				$ic_status = 2;
				$ic_after = $userinfo['iu_cash_c'] + $amount;
				$usql = "UPDATE info_users SET iu_cash_c=iu_cash_c+$amount WHERE iu_idx='$userinfo[iu_idx]'";
				$db->query($usql);
			}
			
			if($ctype == "MTOC"){
				if($cp == "1"){
					$ic_status = 2;
					$ic_before = $userinfo['iu_cash'];
					$ic_after = $userinfo['iu_cash'] - $amount;
					$usql = "UPDATE info_users SET iu_cash=iu_cash-$amount,iu_cash_c=iu_cash_c+$amount,iu_reason='캐시->카지노캐시' WHERE iu_idx='$userinfo[iu_idx]'";
					$db->query($usql);
					
					$isql = "INSERT INTO log_cash SET 
						lc_site  		= '$userinfo[iu_site]', 
						lc_master  		= '$userinfo[iu_master]', 
						lc_reference  	= '$userinfo[iu_reference]', 
						lc_type  		= 'MTOC', 
						lc_id  			= '$userinfo[iu_id]', 
						lc_nick  		= '$userinfo[iu_nick]', 
						lc_level  		= '$userinfo[iu_level]', 
						lc_before  		= '$ic_before', 
						lc_amount  		= '$amount', 
						lc_after  		= '$ic_after', 
						lc_reg  		= '$this->ymdhis', 
						lc_reg_ipr  	= '$this->ipr', 
						lc_reg_ipf  	= '$this->ipf', 
						lc_memo  		= '캐시->C캐시', 
						lc_refid  		= '$userinfo[iu_id]', 
						lc_operator 	= '$userinfo[iu_id]'
					";
					$db->query($isql);
				}else{
					$ic_before = $userinfo['iu_cash'];
					$ic_after = $userinfo['iu_cash'] - $amount;
					$usql = "UPDATE info_users SET iu_cash=iu_cash-$amount WHERE iu_idx='$userinfo[iu_idx]'";
					$db->query($usql);
				}
			}
			
			if($ctype == "CTOM"){
				if($cp == "1"){
					$ic_status = 2;
					$ic_before = $userinfo['iu_cash_c'];
					$ic_after = $userinfo['iu_cash_c'] - $amount;
					$usql = "UPDATE info_users SET iu_cash_c=iu_cash_c-$amount,iu_cash=iu_cash+$amount,iu_reason='카지노캐시->캐시' WHERE iu_idx='$userinfo[iu_idx]'";
					$db->query($usql);
					
					$isql = "INSERT INTO log_cash SET 
						lc_site  		= '$userinfo[iu_site]', 
						lc_master  		= '$userinfo[iu_master]', 
						lc_reference  	= '$userinfo[iu_reference]', 
						lc_type  		= 'CTOM', 
						lc_id  			= '$userinfo[iu_id]', 
						lc_nick  		= '$userinfo[iu_nick]', 
						lc_level  		= '$userinfo[iu_level]', 
						lc_before  		= '$ic_before', 
						lc_amount  		= '$amount', 
						lc_after  		= '$ic_after', 
						lc_reg  		= '$this->ymdhis', 
						lc_reg_ipr  	= '$this->ipr', 
						lc_reg_ipf  	= '$this->ipf', 
						lc_memo  		= 'C캐시->캐시', 
						lc_refid  		= '$userinfo[iu_id]', 
						lc_operator 	= '$userinfo[iu_id]'
					";
					$db->query($isql);
				}else{
					$ic_before = $userinfo['iu_cash_c'];
					$ic_after = $userinfo['iu_cash_c'] - $amount;
					$usql = "UPDATE info_users SET iu_cash_c=iu_cash_c-$amount WHERE iu_idx='$userinfo[iu_idx]'";
					$db->query($usql);
				}
			}
			
			$db->query("COMMIT");
			
			$isql = "INSERT INTO info_cash SET 
				ic_site  			= '$userinfo[iu_site]', 
				ic_master  			= '$userinfo[iu_master]', 
				ic_reference  		= '$userinfo[iu_reference]', 
				ic_type  			= '$ctype', 
				ic_id  				= '$userinfo[iu_id]', 
				ic_nick  			= '$userinfo[iu_nick]', 
				ic_level  			= '$userinfo[iu_level]', 
				ic_name  			= '$userinfo[iu_name]', 
				ic_bank  			= '$userinfo[iu_bank]', 
				ic_booknum  		= '$userinfo[iu_booknum]', 
				ic_from  			= '', 
				ic_before  			= '$ic_before', 
				ic_amount  			= '$amount', 
				ic_bonus  			= '$ic_bonus', 
				ic_coupon  			= '$coupon', 
				ic_coupon_amount  	= '$amount_cp', 
				ic_bonus_type  		= '$ic_bonus_type', 
				ic_after  			= '$ic_after',
				ic_to				= '',
				ic_reg  			= '$this->ymdhis', 
				ic_reg_ipr  		= '$this->ipr', 
				ic_reg_ipf  		= '$this->ipf', 
				ic_hide  			= '0', 
				ic_operator  		= '', 
				ic_deposit  		= '$userinfo[iu_deposit]', 
				ic_withdraw  		= '$userinfo[iu_withdraw]', 
				ic_bet  			= '$userinfo[iu_bet]', 
				ic_win  			= '$userinfo[iu_win]', 
				ic_nosettle  		= '$userinfo[iu_nosettle]', 
				ic_coin  			= '$coin', 
				ic_status 			= '$ic_status'
			";
			$db->query($isql);
			
		}
	}
	
	function db_user_req_support($db, $user, $title, $body){
		if($user){
			$isql = "INSERT INTO info_support SET 
				is_site  			= '$user[iu_site]', 
				is_master  			= '$user[iu_master]', 
				is_reference  		= '$user[iu_reference]', 
				is_id  				= '$user[iu_id]', 
				is_nick  			= '$user[iu_nick]', 
				is_level  			= '$user[iu_level]', 
				is_title  			= '$title', 
				is_body  			= '$body', 
				is_reg  			= '$this->ymdhis', 
				is_reg_ipr  		= '$this->ipr', 
				is_reg_ipf  		= '$this->ipf', 
				is_answer  			= '', 
				is_update  			= '', 
				is_read  			= '0', 
				is_hide  			= '0', 
				is_nosettle 		= '$user[iu_nosettle]',
				is_operator 		= '',
				is_status 			= '0'
			";
			$db->query($isql);
		}
	}
	function db_user_req_support_auto($db, $user, $title, $body, $answer){
		if($user){
			$isql = "INSERT INTO info_support SET 
				is_site  			= '$user[iu_site]', 
				is_master  			= '$user[iu_master]', 
				is_reference  		= '$user[iu_reference]', 
				is_id  				= '$user[iu_id]', 
				is_nick  			= '$user[iu_nick]', 
				is_level  			= '$user[iu_level]', 
				is_title  			= '$title', 
				is_body  			= '$body', 
				is_reg  			= '$this->ymdhis', 
				is_reg_ipr  		= '$this->ipr', 
				is_reg_ipf  		= '$this->ipf', 
				is_answer  			= '$answer', 
				is_update  			= '$this->ymdhis', 
				is_read  			= '0', 
				is_hide  			= '0', 
				is_nosettle 		= '$user[iu_nosettle]',
				is_operator 		= 'AUTO',
				is_status 			= '2'
			";
			$db->query($isql);
		}
	}
	
	function db_get_game($db, $site, $code, $gameid){
		$sql = "SELECT * FROM info_game WHERE ig_site='$site' AND ig_gamecode='$code' AND ig_gameid='$gameid'";
		$result = $db->query($sql);
		$game = $result->fetch_assoc();
		return $game;
	}
	
	function db_get_sports($db, $gameid){
		$sql = "SELECT * FROM info_sports WHERE is_idx='$gameid'";
		$result = $db->query($sql);
		$game = $result->fetch_assoc();
		return $game;
	}
	
	
	function db_get_minigame($db, $gamecode, $round){
		$sql = "SELECT * FROM info_game WHERE ig_gamecode='$gamecode' AND ig_round='$round'";
		$result = $db->query($sql);
		$game = $result->fetch_assoc();
		return $game;
	}
	
	function db_get_minigame_by_gameid($db, $site, $gamename, $gamecode, $gameid, $order){

		$sql = "SELECT * FROM info_game WHERE ig_gamecode='$gamecode' AND ig_gameid='$gameid'";
		$result = $db->query($sql);
		$game = $result->fetch_assoc();
		if(!$game){
		
			$year 	= date("Y",time());
			$month 	= date("m",time());
			$day 	= date("d",time());
			$hh 	= date("H",time());
			$mm 	= date("i",time());
			$ss 	= date("s",time());
			$ymd 	= date("Y-m-d",time());
			if($hh == 23){
				if($order == 1){
					$ymd 	= date("Y-m-d",time()+1000);
				}
			}
			
			$minus = 0; $multipl = 1;
			if($gamecode == "PB"){ $minus = 24; $multipl = 5; }
			if($gamecode == "PL"){ $minus = 24; $multipl = 5; }
			if($gamecode == "KL"){ $minus = 24; $multipl = 5; }
			if($gamecode == "KL"){ $minus = 24; $multipl = 5; }
			if($gamecode == "EOS1"){ $minus = 5; $multipl = 1; }
			if($gamecode == "EOS2"){ $minus = 5; $multipl = 2; }
			if($gamecode == "EOS3"){ $minus = 5; $multipl = 3; }
			if($gamecode == "EOS4"){ $minus = 5; $multipl = 4; }
			if($gamecode == "EOS5"){ $minus = 5; $multipl = 5; }
			if($gamecode == "TM"){ $minus = 0; $multipl = 1; }
			if($gamecode == "BC"){ $minus = 0; $multipl = 1; }
			if($gamecode == "RL"){ $minus = 0; $multipl = 1; }
			if($gamecode == "BM"){ $minus = 0; $multipl = 1; }
			if($gamecode == "DT"){ $minus = 0; $multipl = 1; }
			if($gamecode == "SMRL"){ $minus = 5; $multipl = 3; }
			if($gamecode == "SMKM"){ $minus = 5; $multipl = 3; }
			if($gamecode == "HSRL"){ $minus = 0; $multipl = 0.5; }
			if($gamecode == "HSHL"){ $minus = 0; $multipl = 1/3; }
			if($gamecode == "EURO1"){ $minus = 5; $multipl = 1; }
			if($gamecode == "EURO3"){ $minus = -7; $multipl = 3; }
			if($gamecode == "EURO5"){ $minus = -7; $multipl = 5; }
			if($gamecode == "BITBALL1"){ $minus = 5; $multipl = 1; }
			if($gamecode == "BITBALL3"){ $minus = 5; $multipl = 3; }
			if($gamecode == "BITBALL5"){ $minus = 5; $multipl = 5; }
			
			
			if($gamecode == "HSRL" OR $gamecode == "HSHL"){
				$serial = (($order+1) * $multipl * 60) - $minus;
			}else{
				$serial = ($order * $multipl * 60) - $minus;
			}
			$hh 	= (int)($serial / 60 / 60);
			$mm 	= (int)((($serial / 60 / 60) - $hh) * 60);
			$ss 	= (int)((((($serial / 60 / 60) - $hh) * 60) - $mm) * 60);
			
			if($gamecode == "EURO3" OR $gamecode == "EURO5"){
				$ss = $ss - 1;
			}
			
			$hh = str_pad($hh,2,"0",STR_PAD_LEFT);
			$mm = str_pad($mm,2,"0",STR_PAD_LEFT);
			$ss = str_pad($ss,2,"0",STR_PAD_LEFT);
			
			$ig_endtime 	= $ymd . " " . $hh . ":" . $mm . ":" . $ss;
			
			if($gamecode == "EURO3" OR $gamecode == "EURO5"){
				$ig_starttime 	= date("Y-m-d H:i:s", strtotime($ig_endtime) - (($multipl * 60) - 1));
			}else{
				$ig_starttime 	= date("Y-m-d H:i:s", strtotime($ig_endtime) - ($multipl * 60));
			}
				
			
			
				
			
			$usql = "
			INSERT INTO info_game SET 
				ig_site  			= '$site', 
				ig_gamename  		= '$gamename', 
				ig_gamecode  		= '$gamecode', 
				ig_gameid  			= '$gameid', 
				ig_round  			= '$order', 
				ig_starttime 	 	= '$ig_starttime', 
				ig_endtime 	 		= '$ig_endtime', 
				ig_status 	 		= '0', 
				ig_text 	 		= '-1'
			";
			$db->query($usql);
			
			$sql = "SELECT * FROM info_game WHERE ig_gamecode='$gamecode' AND ig_gameid='$gameid'";
			$result = $db->query($sql);
			$game = $result->fetch_assoc();
			
		}
		return $game;
	}
	function db_get_genting_by_gameid($db, $site, $round, $order, $start, $end){

		$sql = "SELECT * FROM info_genting WHERE ig_order='$round' ";
		$result = $db->query($sql);
		$game = $result->fetch_assoc();
		if(!$game){
			$ig_idx = $round . "_" . $order;
			$usql = "
			INSERT INTO info_genting SET 
				ig_idx 			= '$ig_idx',
				ig_site 		= '$site',
				ig_order 		= '$round',
				ig_round 		= '$order',
				ig_gametime 	= '$start',
				ig_resulttime 	= '$end',
				ig_status 		= '0'
			";
			$db->query($usql);
			
			$sql = "SELECT * FROM info_genting WHERE ig_order='$round'";
			$result = $db->query($sql);
			$game = $result->fetch_assoc();
			
		}
		return $game;
	}
	function db_get_genting_game($db, $site, $round){

		$sql = "SELECT * FROM info_genting WHERE ig_order='$round'";
		$result = $db->query($sql);
		$game = $result->fetch_assoc();
		
		return $game;
	}
	function db_sum_bet($db, $site, $id, $order){
		$tmp_bal = [];
		$idx = $site . $order . "_" . $id;
		$sql = "SELECT * FROM tmp_genting WHERE tg_idx='$idx' ";
		
		$result = $db->query($sql);
		$bal = $result->fetch_assoc();
		if($bal){
			$tmp_bal = $bal;
		}
		return $tmp_bal;
	}
	
	function db_get_game_time($db, $site, $code){
		$limit_time = "0";
		if($code == "PB"){ $ig_col = "ss_time_pb"; }
		if($code == "PL"){ $ig_col = "ss_time_pl"; }
		if($code == "TK_HL"){ $ig_col = "ss_time_hl"; }
		if($code == "TK_SC"){ $ig_col = "ss_time_bc"; }
		if($code == "TK_SG"){ $ig_col = "ss_time_bc"; }
		if($code == "TK_SM"){ $ig_col = "ss_time_bc"; }
		if($code == "TK_SS"){ $ig_col = "ss_time_bc"; }
		if($code == "TK_SV"){ $ig_col = "ss_time_bc"; }
		if($code == "TK_SW"){ $ig_col = "ss_time_bc"; }
		if($code == "SPORTS"){ $ig_col = "ss_time_pre"; }
		if($code == "KL"){ $ig_col = "ss_time_kl"; }
		if($code == "EOS1"){ $ig_col = "ss_time_eos1"; }
		if($code == "EOS2"){ $ig_col = "ss_time_eos2"; }
		if($code == "EOS3"){ $ig_col = "ss_time_eos3"; }
		if($code == "EOS4"){ $ig_col = "ss_time_eos4"; }
		if($code == "EOS5"){ $ig_col = "ss_time_eos5"; }
		if($code == "TM"){ $ig_col = "ss_time_tm"; }
		if($code == "BC"){ $ig_col = "ss_time_pbc"; }
		if($code == "RL"){ $ig_col = "ss_time_prl"; }
		if($code == "BM"){ $ig_col = "ss_time_bm"; }
		if($code == "DT"){ $ig_col = "ss_time_dt"; }
		if($code == "SMRL"){ $ig_col = "ss_time_smrl"; }
		if($code == "SMKM"){ $ig_col = "ss_time_smkm"; }
		if($code == "HSRL"){ $ig_col = "ss_time_hsrl"; }
		if($code == "HSHL"){ $ig_col = "ss_time_hshl"; }
		if($code == "EURO1"){ $ig_col = "ss_time_euro1"; }
		if($code == "EURO3"){ $ig_col = "ss_time_euro3"; }
		if($code == "EURO5"){ $ig_col = "ss_time_euro5"; }
		if($code == "GT"){ $ig_col = "ss_time_genting"; }
		if($code == "BITBALL1"){ $ig_col = "ss_time_bitball1"; }
		if($code == "BITBALL3"){ $ig_col = "ss_time_bitball3"; }
		if($code == "BITBALL5"){ $ig_col = "ss_time_bitball5"; }
		
		$sql = "SELECT $ig_col FROM set_site WHERE ss_site='$site'";
		$result = $db->query($sql);
		$xtime = $result->fetch_assoc();
		if($xtime){
			$limit_time = $xtime[$ig_col];
		}
		return $limit_time * 1;
	}

	function db_get_fail_count($db, $site){
		$limit_count = "3";
		
		$sql = "SELECT ss_lock_user FROM set_site WHERE ss_site='$site'";
		$result = $db->query($sql);
		$xtime = $result->fetch_assoc();
		if($xtime){
			$limit_count = $xtime["ss_lock_user"];
		}
		return $limit_count * 1;
	}
	
	function db_get_game_odds($db, $site, $code, $gameid, $oddscode){
		$sql = "SELECT * FROM info_game_odds WHERE igo_site='$site' AND igo_gamecode='$code' AND igo_gameid='$gameid' AND igo_selectcode='$oddscode'";
		$result = $db->query($sql);
		$odds = $result->fetch_assoc();
		return $odds;
	}
	
	function db_get_sports_odds($db, $oddsid){
		$sql = "SELECT * FROM info_sports_odds WHERE iso_idx='$oddsid'";
		$result = $db->query($sql);
		$odds = $result->fetch_assoc();
		return $odds;
	}
	function db_get_genting_odds($db, $sitecode, $gamecode, $market, $gameid, $round, $code, $hodds=""){
		$ss_site = $sitecode;
		
		$sql = "SELECT * FROM info_genting_odds WHERE igo_gamecode='$gamecode' AND igo_gameid='$gameid' AND igo_selectcode='$code'";
		$result = $db->query($sql);
		$odds = $result->fetch_assoc();
		if(!$odds){
			$sql = "SELECT * FROM set_site WHERE ss_site='$sitecode'";
			$result = $db->query($sql);
			$site = $result->fetch_assoc();
			if($site){
				$rate = $site[$code] != "" ? $site[$code] : 0;
				if($rate > 1){
					if($gamecode == "GT"){
						$gamename = "겐팅";
						
						if($market == "플레이어/뱅커"){
							$rate1 = $site['ss_genting_ptb_p'] != "" ? $site['ss_genting_ptb_p'] : 0;
							$rate2 = $site['ss_genting_ptb_t'] != "" ? $site['ss_genting_ptb_t'] : 0;
							$rate3 = $site['ss_genting_ptb_b'] != "" ? $site['ss_genting_ptb_b'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1){
								$isql = "
								INSERT INTO info_genting_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '플레이어/뱅커', 
									igo_select		= 'P', 
									igo_selectcode	= 'ss_genting_ptb_p', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_genting_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '플레이어/뱅커', 
									igo_select		= 'T', 
									igo_selectcode	= 'ss_genting_ptb_t', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_genting_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '플레이어/뱅커', 
									igo_select		= 'B', 
									igo_selectcode	= 'ss_genting_ptb_b', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							
							}
						}
						
						if($market == "페어"){
							$rate1 = $site['ss_genting_ptb_pp'] != "" ? $site['ss_genting_ptb_pp'] : 0;
							$rate2 = $site['ss_genting_ptb_bp'] != "" ? $site['ss_genting_ptb_bp'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_genting_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '페어', 
									igo_select		= 'PP', 
									igo_selectcode	= 'ss_genting_ptb_pp', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_genting_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '페어', 
									igo_select		= 'BP', 
									igo_selectcode	= 'ss_genting_ptb_bp', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							
							}
						}
					}
					$sql = "SELECT * FROM info_genting_odds WHERE igo_gamecode='$gamecode' AND igo_gameid='$gameid' AND igo_selectcode='$code'";
					$result = $db->query($sql);
					$odds = $result->fetch_assoc();
				}
			}
		}
		return $odds;
	}
	
	function db_get_minigame_odds($db, $sitecode, $gamecode, $market, $gameid, $round, $code, $hodds=""){
		$ss_site = $sitecode;
		
		$sql = "SELECT * FROM info_game_odds WHERE igo_gamecode='$gamecode' AND igo_gameid='$gameid' AND igo_selectcode='$code'";
		$result = $db->query($sql);
		$odds = $result->fetch_assoc();
		if(!$odds){
			$sql = "SELECT * FROM set_site WHERE ss_site='$sitecode'";
			$result = $db->query($sql);
			$site = $result->fetch_assoc();
			if($site){
				if($gamecode != "HSHL"){
					$rate = $site[$code] != "" ? $site[$code] : 0;
				}else{
					$rate = 2;
				}
				if($rate > 1){
					if($gamecode == "BITBALL1" OR $gamecode == "BITBALL3" OR $gamecode == "BITBALL5"){
						$min = substr($gamecode, -1);
						$gamename = $min . "분 비트볼";
						if($market == "비트볼 홀짝"){
							$select1 = 'ss_bitball_oe_o';
							$select2 = 'ss_bitball_oe_e';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "비트볼 오버언더"){
							$select1 = 'ss_bitball_ou_u';
							$select2 = 'ss_bitball_ou_o';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '오버언더', 
									igo_select		= '오버', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '오버언더', 
									igo_select		= '언더', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "비트볼 소중대"){
							$select1 = 'ss_bitball_smb_s';
							$select2 = 'ss_bitball_smb_m';
							$select3 = 'ss_bitball_smb_b';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							$rate3 = $site[$select3] != "" ? $site[$select3] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '소', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '중', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '대', 
									igo_selectcode	= '$select3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "비트볼 홀짝+오버언더"){
							$select1 = 'ss_bitball_oeou_ou';
							$select2 = 'ss_bitball_oeou_oo';
							$select3 = 'ss_bitball_oeou_eu';
							$select4 = 'ss_bitball_oeou_eo';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							$rate3 = $site[$select3] != "" ? $site[$select3] : 0;
							$rate4 = $site[$select4] != "" ? $site[$select4] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀+언더', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀+오버', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝+언더', 
									igo_selectcode	= '$select3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝+오버', 
									igo_selectcode	= '$select4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "비트볼 홀짝+소중대"){
							$select1 = 'ss_bitball_oesmb_os';
							$select2 = 'ss_bitball_oesmb_om';
							$select3 = 'ss_bitball_oesmb_ob';
							$select4 = 'ss_bitball_oesmb_es';
							$select5 = 'ss_bitball_oesmb_em';
							$select6 = 'ss_bitball_oesmb_eb';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							$rate3 = $site[$select3] != "" ? $site[$select3] : 0;
							$rate4 = $site[$select4] != "" ? $site[$select4] : 0;
							$rate5 = $site[$select5] != "" ? $site[$select5] : 0;
							$rate6 = $site[$select6] != "" ? $site[$select6] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1 AND $rate5 > 1 AND $rate6 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀+대', 
									igo_selectcode	= '$select3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀+중', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀+소', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝+대', 
									igo_selectcode	= '$select6', 
									igo_price		= '$rate6', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝+중', 
									igo_selectcode	= '$select5', 
									igo_price		= '$rate5', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝+소', 
									igo_selectcode	= '$select4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
							
						}
						
						if($market == "비트볼 숫자"){
							$select1 = 'ss_bitball_ball_1';
							$select2 = 'ss_bitball_ball_2';
							$select3 = 'ss_bitball_ball_3';
							$select4 = 'ss_bitball_ball_4';
							$select5 = 'ss_bitball_ball_5';
							$select6 = 'ss_bitball_ball_6';
							$select7 = 'ss_bitball_ball_7';
							$select8 = 'ss_bitball_ball_8';
							$select9 = 'ss_bitball_ball_9';
							$select10 = 'ss_bitball_ball_10';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							$rate3 = $site[$select3] != "" ? $site[$select3] : 0;
							$rate4 = $site[$select4] != "" ? $site[$select4] : 0;
							$rate5 = $site[$select5] != "" ? $site[$select5] : 0;
							$rate6 = $site[$select6] != "" ? $site[$select6] : 0;
							$rate7 = $site[$select7] != "" ? $site[$select7] : 0;
							$rate8 = $site[$select8] != "" ? $site[$select8] : 0;
							$rate9 = $site[$select9] != "" ? $site[$select9] : 0;
							$rate10 = $site[$select10] != "" ? $site[$select10] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1 AND $rate5 > 1 AND $rate6 > 1 AND $rate7 > 1 AND $rate8 > 1 AND $rate9 > 1 AND $rate10 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '1', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '2', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '3', 
									igo_selectcode	= '$select3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '4', 
									igo_selectcode	= '$select4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '5', 
									igo_selectcode	= '$select5', 
									igo_price		= '$rate5', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '6', 
									igo_selectcode	= '$select6', 
									igo_price		= '$rate6', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '7', 
									igo_selectcode	= '$select7', 
									igo_price		= '$rate7', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '8', 
									igo_selectcode	= '$select8', 
									igo_price		= '$rate8', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '9', 
									igo_selectcode	= '$select9', 
									igo_price		= '$rate9', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '10', 
									igo_selectcode	= '$select10', 
									igo_price		= '$rate10', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								
							}
						}
					}
					if($gamecode == "GT"){
						$gamename = "겐팅";
						
						if($market == "플레이어/뱅커"){
							$rate1 = $site['ss_genting_ptb_p'] != "" ? $site['ss_genting_ptb_p'] : 0;
							$rate2 = $site['ss_genting_ptb_t'] != "" ? $site['ss_genting_ptb_t'] : 0;
							$rate3 = $site['ss_genting_ptb_b'] != "" ? $site['ss_genting_ptb_b'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '플레이어/뱅커', 
									igo_select		= 'P', 
									igo_selectcode	= 'ss_genting_ptb_p', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '플레이어/뱅커', 
									igo_select		= 'T', 
									igo_selectcode	= 'ss_genting_ptb_t', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '플레이어/뱅커', 
									igo_select		= 'B', 
									igo_selectcode	= 'ss_genting_ptb_b', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							
							}
						}
						
						if($market == "페어"){
							$rate1 = $site['ss_genting_ptb_pp'] != "" ? $site['ss_genting_ptb_pp'] : 0;
							$rate2 = $site['ss_genting_ptb_bp'] != "" ? $site['ss_genting_ptb_bp'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '페어', 
									igo_select		= 'PP', 
									igo_selectcode	= 'ss_genting_ptb_pp', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '페어', 
									igo_select		= 'BP', 
									igo_selectcode	= 'ss_genting_ptb_bp', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							
							}
						}
						
					
					}
					if($gamecode == "PB"){
						
						$gamename = "파워볼";
						if($market == "일반볼 홀짝"){
							$rate1 = $site['ss_pb_n_oe_o'] != "" ? $site['ss_pb_n_oe_o'] : 0;
							$rate2 = $site['ss_pb_n_oe_e'] != "" ? $site['ss_pb_n_oe_e'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀', 
									igo_selectcode	= 'ss_pb_n_oe_o', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝', 
									igo_selectcode	= 'ss_pb_n_oe_e', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "일반볼 오버언더"){
							$rate1 = $site['ss_pb_n_ou_u'] != "" ? $site['ss_pb_n_ou_u'] : 0;
							$rate2 = $site['ss_pb_n_ou_o'] != "" ? $site['ss_pb_n_ou_o'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 오버언더', 
									igo_select		= '오버', 
									igo_selectcode	= 'ss_pb_n_ou_o', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 오버언더', 
									igo_select		= '언더', 
									igo_selectcode	= 'ss_pb_n_ou_u', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "일반볼 소중대"){
							$rate2 = $site['ss_pb_smb_m'] != "" ? $site['ss_pb_smb_m'] : 0;
							$rate3 = $site['ss_pb_smb_b'] != "" ? $site['ss_pb_smb_b'] : 0;
							$rate1 = $site['ss_pb_smb_s'] != "" ? $site['ss_pb_smb_s'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 소중대', 
									igo_select		= '대', 
									igo_selectcode	= 'ss_pb_smb_b', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 소중대', 
									igo_select		= '중', 
									igo_selectcode	= 'ss_pb_smb_m', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 소중대', 
									igo_select		= '소', 
									igo_selectcode	= 'ss_pb_smb_s', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						
						}
					
						if($market == "일반볼 홀짝+오버언더"){
							$rate1 = $site['ss_pb_n_oeou_ou'] != "" ? $site['ss_pb_n_oeou_ou'] : 0;
							$rate2 = $site['ss_pb_n_oeou_oo'] != "" ? $site['ss_pb_n_oeou_oo'] : 0;
							$rate3 = $site['ss_pb_n_oeou_eu'] != "" ? $site['ss_pb_n_oeou_eu'] : 0;
							$rate4 = $site['ss_pb_n_oeou_eo'] != "" ? $site['ss_pb_n_oeou_eo'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '홀+오버', 
									igo_selectcode	= 'ss_pb_n_oeou_eu', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '홀+언더', 
									igo_selectcode	= 'ss_pb_n_oeou_ou', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '짝+오버', 
									igo_selectcode	= 'ss_pb_n_oeou_eo', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '짝+언더', 
									igo_selectcode	= 'ss_pb_n_oeou_oo', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "일반볼 홀짝+소중대"){
							$rate1 = $site['ss_pb_nsmb_os'] != "" ? $site['ss_pb_nsmb_os'] : 0;
							$rate2 = $site['ss_pb_nsmb_om'] != "" ? $site['ss_pb_nsmb_om'] : 0;
							$rate3 = $site['ss_pb_nsmb_ob'] != "" ? $site['ss_pb_nsmb_ob'] : 0;
							$rate4 = $site['ss_pb_nsmb_es'] != "" ? $site['ss_pb_nsmb_es'] : 0;
							$rate5 = $site['ss_pb_nsmb_em'] != "" ? $site['ss_pb_nsmb_em'] : 0;
							$rate6 = $site['ss_pb_nsmb_eb'] != "" ? $site['ss_pb_nsmb_eb'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1 AND $rate5 > 1 AND $rate6 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+대', 
									igo_selectcode	= 'ss_pb_nsmb_ob', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+중', 
									igo_selectcode	= 'ss_pb_nsmb_om', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+소', 
									igo_selectcode	= 'ss_pb_nsmb_os', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+대', 
									igo_selectcode	= 'ss_pb_nsmb_eb', 
									igo_price		= '$rate6', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+중', 
									igo_selectcode	= 'ss_pb_nsmb_em', 
									igo_price		= '$rate5', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+소', 
									igo_selectcode	= 'ss_pb_nsmb_es', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
							
						}
						
						if($market == "파워볼 홀짝"){
							$rate1 = $site['ss_pb_p_oe_o'] != "" ? $site['ss_pb_p_oe_o'] : 0;
							$rate2 = $site['ss_pb_p_oe_e'] != "" ? $site['ss_pb_p_oe_e'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝', 
									igo_select		= 'P홀', 
									igo_selectcode	= 'ss_pb_p_oe_o', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝', 
									igo_select		= 'P짝', 
									igo_selectcode	= 'ss_pb_p_oe_e', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "파워볼 오버언더"){
							$rate1 = $site['ss_pb_p_ou_u'] != "" ? $site['ss_pb_p_ou_u'] : 0;
							$rate2 = $site['ss_pb_p_ou_o'] != "" ? $site['ss_pb_p_ou_o'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 오버언더', 
									igo_select		= 'P오버', 
									igo_selectcode	= 'ss_pb_p_ou_o', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 오버언더', 
									igo_select		= 'P언더', 
									igo_selectcode	= 'ss_pb_p_ou_u', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "파워볼 구간"){
							$rate1 = $site['ss_pb_p_abcd_a'] != "" ? $site['ss_pb_p_abcd_a'] : 0;
							$rate2 = $site['ss_pb_p_abcd_b'] != "" ? $site['ss_pb_p_abcd_b'] : 0;
							$rate3 = $site['ss_pb_p_abcd_c'] != "" ? $site['ss_pb_p_abcd_c'] : 0;
							$rate4 = $site['ss_pb_p_abcd_d'] != "" ? $site['ss_pb_p_abcd_d'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 구간', 
									igo_select		= 'A', 
									igo_selectcode	= 'ss_pb_p_abcd_a', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 구간', 
									igo_select		= 'B', 
									igo_selectcode	= 'ss_pb_p_abcd_b', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 구간', 
									igo_select		= 'C', 
									igo_selectcode	= 'ss_pb_p_abcd_c', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 구간', 
									igo_select		= 'D', 
									igo_selectcode	= 'ss_pb_p_abcd_d', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "파워볼 홀짝+오버언더"){
							$rate1 = $site['ss_pb_p_oeou_ou'] != "" ? $site['ss_pb_p_oeou_ou'] : 0;
							$rate2 = $site['ss_pb_p_oeou_oo'] != "" ? $site['ss_pb_p_oeou_oo'] : 0;
							$rate3 = $site['ss_pb_p_oeou_eu'] != "" ? $site['ss_pb_p_oeou_eu'] : 0;
							$rate4 = $site['ss_pb_p_oeou_eo'] != "" ? $site['ss_pb_p_oeou_eo'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P홀+P오버', 
									igo_selectcode	= 'ss_pb_p_oeou_eu', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P홀+P언더', 
									igo_selectcode	= 'ss_pb_p_oeou_ou', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P짝+P오버', 
									igo_selectcode	= 'ss_pb_p_oeou_eo', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P짝+P언더', 
									igo_selectcode	= 'ss_pb_p_oeou_oo', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "일반볼+파워볼 홀짝"){
							$rate1 = $site['ss_pb_np_oe_oo'] != "" ? $site['ss_pb_np_oe_oo'] : 0;
							$rate2 = $site['ss_pb_np_oe_ee'] != "" ? $site['ss_pb_np_oe_ee'] : 0;
							$rate3 = $site['ss_pb_np_oe_oe'] != "" ? $site['ss_pb_np_oe_oe'] : 0;
							$rate4 = $site['ss_pb_np_oe_eo'] != "" ? $site['ss_pb_np_oe_eo'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼+파워볼 홀짝', 
									igo_select		= '홀+P홀', 
									igo_selectcode	= 'ss_pb_np_oe_oo', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼+파워볼 홀짝', 
									igo_select		= '짝+P짝', 
									igo_selectcode	= 'ss_pb_np_oe_ee', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼+파워볼 홀짝', 
									igo_select		= '홀+P짝', 
									igo_selectcode	= 'ss_pb_np_oe_oe', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼+파워볼 홀짝', 
									igo_select		= '짝+P홀', 
									igo_selectcode	= 'ss_pb_np_oe_eo', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "파워볼 숫자"){
							$rate0 = $site['ss_pb_num_0'] != "" ? $site['ss_pb_num_0'] : 0;
							$rate1 = $site['ss_pb_num_1'] != "" ? $site['ss_pb_num_1'] : 0;
							$rate2 = $site['ss_pb_num_2'] != "" ? $site['ss_pb_num_2'] : 0;
							$rate3 = $site['ss_pb_num_3'] != "" ? $site['ss_pb_num_3'] : 0;
							$rate4 = $site['ss_pb_num_4'] != "" ? $site['ss_pb_num_4'] : 0;
							$rate5 = $site['ss_pb_num_5'] != "" ? $site['ss_pb_num_5'] : 0;
							$rate6 = $site['ss_pb_num_6'] != "" ? $site['ss_pb_num_6'] : 0;
							$rate7 = $site['ss_pb_num_7'] != "" ? $site['ss_pb_num_7'] : 0;
							$rate8 = $site['ss_pb_num_8'] != "" ? $site['ss_pb_num_8'] : 0;
							$rate9 = $site['ss_pb_num_9'] != "" ? $site['ss_pb_num_9'] : 0;
							if($rate0 > 1 AND $rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1 AND $rate5 > 1 AND $rate6 > 1 AND $rate7 > 1 AND $rate8 > 1 AND $rate9 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '0', 
									igo_selectcode	= 'ss_pb_num_0', 
									igo_price		= '$rate0', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '1', 
									igo_selectcode	= 'ss_pb_num_1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '2', 
									igo_selectcode	= 'ss_pb_num_2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '3', 
									igo_selectcode	= 'ss_pb_num_3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '4', 
									igo_selectcode	= 'ss_pb_num_4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '5', 
									igo_selectcode	= 'ss_pb_num_5', 
									igo_price		= '$rate5', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '6', 
									igo_selectcode	= 'ss_pb_num_6', 
									igo_price		= '$rate6', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '7', 
									igo_selectcode	= 'ss_pb_num_7', 
									igo_price		= '$rate7', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '8', 
									igo_selectcode	= 'ss_pb_num_8', 
									igo_price		= '$rate8', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '9', 
									igo_selectcode	= 'ss_pb_num_9', 
									igo_price		= '$rate9', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					}
					
					if($gamecode == "PL"){
						$gamename = "파워볼 사다리";
						if($market == "홀짝"){
							$rate1 = $site['ss_kl_oe_o'] != "" ? $site['ss_kl_oe_o'] : 0;
							$rate2 = $site['ss_kl_oe_e'] != "" ? $site['ss_kl_oe_e'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '홀짝', 
									igo_select		= '홀', 
									igo_selectcode	= 'ss_pl_oe_o', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '홀짝', 
									igo_select		= '짝', 
									igo_selectcode	= 'ss_pl_oe_e', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "줄수"){
							$rate1 = $site['ss_kl_ln_3'] != "" ? $site['ss_kl_ln_3'] : 0;
							$rate2 = $site['ss_kl_ln_4'] != "" ? $site['ss_kl_ln_4'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '줄수', 
									igo_select		= '3', 
									igo_selectcode	= 'ss_pl_ln_3', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '줄수', 
									igo_select		= '4', 
									igo_selectcode	= 'ss_pl_ln_4', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "출발"){
							$rate1 = $site['ss_kl_lr_l'] != "" ? $site['ss_kl_lr_l'] : 0;
							$rate2 = $site['ss_kl_lr_r'] != "" ? $site['ss_kl_lr_r'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '출발', 
									igo_select		= '좌', 
									igo_selectcode	= 'ss_pl_lr_l', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '출발', 
									igo_select		= '우', 
									igo_selectcode	= 'ss_pl_lr_r', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "조합"){
							$rate1 = $site['ss_kl_mix_l3e'] != "" ? $site['ss_kl_mix_l3e'] : 0;
							$rate2 = $site['ss_kl_mix_l4o'] != "" ? $site['ss_kl_mix_l4o'] : 0;
							$rate3 = $site['ss_kl_mix_r3o'] != "" ? $site['ss_kl_mix_r3o'] : 0;
							$rate4 = $site['ss_kl_mix_r4e'] != "" ? $site['ss_kl_mix_r4e'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '조합', 
									igo_select		= '좌3짝', 
									igo_selectcode	= 'ss_pl_mix_l3e', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '조합', 
									igo_select		= '좌4홀', 
									igo_selectcode	= 'ss_pl_mix_l4o', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '조합', 
									igo_select		= '우3홀', 
									igo_selectcode	= 'ss_pl_mix_r3o', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '조합', 
									igo_select		= '우4짝', 
									igo_selectcode	= 'ss_pl_mix_r4e', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
					}
					
					if($gamecode == "KL"){
						$gamename = "키노 사다리";
						if($market == "홀짝"){
							$rate1 = $site['ss_kl_oe_o'] != "" ? $site['ss_kl_oe_o'] : 0;
							$rate2 = $site['ss_kl_oe_e'] != "" ? $site['ss_kl_oe_e'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '홀짝', 
									igo_select		= '홀', 
									igo_selectcode	= 'ss_kl_oe_o', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '홀짝', 
									igo_select		= '짝', 
									igo_selectcode	= 'ss_kl_oe_e', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "줄수"){
							$rate1 = $site['ss_kl_ln_3'] != "" ? $site['ss_kl_ln_3'] : 0;
							$rate2 = $site['ss_kl_ln_4'] != "" ? $site['ss_kl_ln_4'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '줄수', 
									igo_select		= '3', 
									igo_selectcode	= 'ss_kl_ln_3', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '줄수', 
									igo_select		= '4', 
									igo_selectcode	= 'ss_kl_ln_4', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "출발"){
							$rate1 = $site['ss_kl_lr_l'] != "" ? $site['ss_kl_lr_l'] : 0;
							$rate2 = $site['ss_kl_lr_r'] != "" ? $site['ss_kl_lr_r'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '출발', 
									igo_select		= '좌', 
									igo_selectcode	= 'ss_kl_lr_l', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '출발', 
									igo_select		= '우', 
									igo_selectcode	= 'ss_kl_lr_r', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "조합"){
							$rate1 = $site['ss_kl_mix_l3e'] != "" ? $site['ss_kl_mix_l3e'] : 0;
							$rate2 = $site['ss_kl_mix_l4o'] != "" ? $site['ss_kl_mix_l4o'] : 0;
							$rate3 = $site['ss_kl_mix_r3o'] != "" ? $site['ss_kl_mix_r3o'] : 0;
							$rate4 = $site['ss_kl_mix_r4e'] != "" ? $site['ss_kl_mix_r4e'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '조합', 
									igo_select		= '좌3짝', 
									igo_selectcode	= 'ss_kl_mix_l3e', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '조합', 
									igo_select		= '좌4홀', 
									igo_selectcode	= 'ss_kl_mix_l4o', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '조합', 
									igo_select		= '우3홀', 
									igo_selectcode	= 'ss_kl_mix_r3o', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '조합', 
									igo_select		= '우4짝', 
									igo_selectcode	= 'ss_kl_mix_r4e', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
					}
					if($gamecode == "EURO1" OR $gamecode == "EURO3" OR $gamecode == "EURO5"){
						
						$gamename = $gamecode . "분 유로볼";
						if($market == "일반볼 홀짝"){
							$select1 = 'ss_' . strtolower($gamecode) . '_n_oe_o';
							$select2 = 'ss_' . strtolower($gamecode) . '_n_oe_e';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "일반볼 오버언더"){
							$select1 = 'ss_' . strtolower($gamecode) . '_n_ou_u';
							$select2 = 'ss_' . strtolower($gamecode) . '_n_ou_o';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 오버언더', 
									igo_select		= '오버', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 오버언더', 
									igo_select		= '언더', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "일반볼 홀짝+오버언더"){
							$select1 = 'ss_' . strtolower($gamecode) . '_n_oeou_ou';
							$select2 = 'ss_' . strtolower($gamecode) . '_n_oeou_oo';
							$select3 = 'ss_' . strtolower($gamecode) . '_n_oeou_eu';
							$select4 = 'ss_' . strtolower($gamecode) . '_n_oeou_eo';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							$rate3 = $site[$select3] != "" ? $site[$select3] : 0;
							$rate4 = $site[$select4] != "" ? $site[$select4] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '홀+오버', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '홀+언더', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '짝+오버', 
									igo_selectcode	= '$select4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '짝+언더', 
									igo_selectcode	= '$select3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "일반볼 홀짝+소중대"){
							$select1 = 'ss_' . strtolower($gamecode) . '_nsmb_os';
							$select2 = 'ss_' . strtolower($gamecode) . '_nsmb_om';
							$select3 = 'ss_' . strtolower($gamecode) . '_nsmb_ob';
							$select4 = 'ss_' . strtolower($gamecode) . '_nsmb_es';
							$select5 = 'ss_' . strtolower($gamecode) . '_nsmb_em';
							$select6 = 'ss_' . strtolower($gamecode) . '_nsmb_eb';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							$rate3 = $site[$select3] != "" ? $site[$select3] : 0;
							$rate4 = $site[$select4] != "" ? $site[$select4] : 0;
							$rate5 = $site[$select5] != "" ? $site[$select5] : 0;
							$rate6 = $site[$select6] != "" ? $site[$select6] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1 AND $rate5 > 1 AND $rate6 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+대', 
									igo_selectcode	= '$select3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+중', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+소', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+대', 
									igo_selectcode	= '$select6', 
									igo_price		= '$rate6', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+중', 
									igo_selectcode	= '$select5', 
									igo_price		= '$rate5', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+소', 
									igo_selectcode	= '$select4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
							
						}
						
						if($market == "파워볼 홀짝"){
							$select1 = 'ss_' . strtolower($gamecode) . '_p_oe_o';
							$select2 = 'ss_' . strtolower($gamecode) . '_p_oe_e';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝', 
									igo_select		= 'P홀', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝', 
									igo_select		= 'P짝', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "파워볼 오버언더"){
							$select1 = 'ss_' . strtolower($gamecode) . '_p_ou_u';
							$select2 = 'ss_' . strtolower($gamecode) . '_p_ou_o';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							if($rate1 > 1 AND $rate2 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 오버언더', 
									igo_select		= 'P오버', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 오버언더', 
									igo_select		= 'P언더', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "파워볼 홀짝+오버언더"){
							$select1 = 'ss_' . strtolower($gamecode) . '_p_oeou_ou';
							$select2 = 'ss_' . strtolower($gamecode) . '_p_oeou_oo';
							$select3 = 'ss_' . strtolower($gamecode) . '_p_oeou_eu';
							$select4 = 'ss_' . strtolower($gamecode) . '_p_oeou_eo';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							$rate3 = $site[$select3] != "" ? $site[$select3] : 0;
							$rate4 = $site[$select4] != "" ? $site[$select4] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P홀+P오버', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P홀+P언더', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P짝+P오버', 
									igo_selectcode	= '$select4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P짝+P언더', 
									igo_selectcode	= '$select3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "파워볼+일반볼 홀짝"){
							$select1 = 'ss_' . strtolower($gamecode) . '_pnoe_oo';
							$select2 = 'ss_' . strtolower($gamecode) . '_pnoe_ee';
							$select3 = 'ss_' . strtolower($gamecode) . '_pnoe_oe';
							$select4 = 'ss_' . strtolower($gamecode) . '_pnoe_eo';
							$rate1 = $site[$select1] != "" ? $site[$select1] : 0;
							$rate2 = $site[$select2] != "" ? $site[$select2] : 0;
							$rate3 = $site[$select3] != "" ? $site[$select3] : 0;
							$rate4 = $site[$select4] != "" ? $site[$select4] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼+일반볼 홀짝', 
									igo_select		= '홀+P홀', 
									igo_selectcode	= '$select1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼+일반볼 홀짝', 
									igo_select		= '짝+P짝', 
									igo_selectcode	= '$select2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼+일반볼 홀짝', 
									igo_select		= '홀+P짝', 
									igo_selectcode	= '$select3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼+일반볼 홀짝', 
									igo_select		= '짝+P홀', 
									igo_selectcode	= '$select4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					}
					if($gamecode == "EOS1" OR $gamecode == "EOS2" OR $gamecode == "EOS3" OR $gamecode == "EOS4" OR $gamecode == "EOS5"){
						
						$gamename = $gamecode . "분 파워볼";
						if($market == "일반볼 홀짝"){
							$rate1 = $site['ss_eos_n_oe_o'] != "" ? $site['ss_eos_n_oe_o'] : 0;
							$rate2 = $site['ss_eos_n_oe_e'] != "" ? $site['ss_eos_n_oe_e'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '홀', 
									igo_selectcode	= 'ss_eos_n_oe_o', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '$market', 
									igo_select		= '짝', 
									igo_selectcode	= 'ss_eos_n_oe_e', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "일반볼 오버언더"){
							$rate1 = $site['ss_eos_n_ou_u'] != "" ? $site['ss_eos_n_ou_u'] : 0;
							$rate2 = $site['ss_eos_n_ou_o'] != "" ? $site['ss_eos_n_ou_o'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 오버언더', 
									igo_select		= '오버', 
									igo_selectcode	= 'ss_eos_n_ou_o', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 오버언더', 
									igo_select		= '언더', 
									igo_selectcode	= 'ss_eos_n_ou_u', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "일반볼 소중대"){
							$rate2 = $site['ss_eos_smb_m'] != "" ? $site['ss_eos_smb_m'] : 0;
							$rate3 = $site['ss_eos_smb_b'] != "" ? $site['ss_eos_smb_b'] : 0;
							$rate1 = $site['ss_eos_smb_s'] != "" ? $site['ss_eos_smb_s'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 소중대', 
									igo_select		= '대', 
									igo_selectcode	= 'ss_eos_smb_b', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 소중대', 
									igo_select		= '중', 
									igo_selectcode	= 'ss_eos_smb_m', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 소중대', 
									igo_select		= '소', 
									igo_selectcode	= 'ss_eos_smb_s', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						
						}
					
						if($market == "일반볼 홀짝+오버언더"){
							$rate1 = $site['ss_eos_n_oeou_ou'] != "" ? $site['ss_eos_n_oeou_ou'] : 0;
							$rate2 = $site['ss_eos_n_oeou_oo'] != "" ? $site['ss_eos_n_oeou_oo'] : 0;
							$rate3 = $site['ss_eos_n_oeou_eu'] != "" ? $site['ss_eos_n_oeou_eu'] : 0;
							$rate4 = $site['ss_eos_n_oeou_eo'] != "" ? $site['ss_eos_n_oeou_eo'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '홀+오버', 
									igo_selectcode	= 'ss_eos_n_oeou_eu', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '홀+언더', 
									igo_selectcode	= 'ss_eos_n_oeou_ou', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '짝+오버', 
									igo_selectcode	= 'ss_eos_n_oeou_eo', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+오버언더', 
									igo_select		= '짝+언더', 
									igo_selectcode	= 'ss_eos_n_oeou_oo', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "일반볼 홀짝+소중대"){
							$rate1 = $site['ss_eos_nsmb_os'] != "" ? $site['ss_eos_nsmb_os'] : 0;
							$rate2 = $site['ss_eos_nsmb_om'] != "" ? $site['ss_eos_nsmb_om'] : 0;
							$rate3 = $site['ss_eos_nsmb_ob'] != "" ? $site['ss_eos_nsmb_ob'] : 0;
							$rate4 = $site['ss_eos_nsmb_es'] != "" ? $site['ss_eos_nsmb_es'] : 0;
							$rate5 = $site['ss_eos_nsmb_em'] != "" ? $site['ss_eos_nsmb_em'] : 0;
							$rate6 = $site['ss_eos_nsmb_eb'] != "" ? $site['ss_eos_nsmb_eb'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1 AND $rate5 > 1 AND $rate6 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+대', 
									igo_selectcode	= 'ss_eos_nsmb_ob', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+중', 
									igo_selectcode	= 'ss_eos_nsmb_om', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '홀+소', 
									igo_selectcode	= 'ss_eos_nsmb_os', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+대', 
									igo_selectcode	= 'ss_eos_nsmb_eb', 
									igo_price		= '$rate6', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+중', 
									igo_selectcode	= 'ss_eos_nsmb_em', 
									igo_price		= '$rate5', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼 홀짝+소중대', 
									igo_select		= '짝+소', 
									igo_selectcode	= 'ss_eos_nsmb_es', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
							
						}
						
						if($market == "파워볼 홀짝"){
							$rate1 = $site['ss_eos_p_oe_o'] != "" ? $site['ss_eos_p_oe_o'] : 0;
							$rate2 = $site['ss_eos_p_oe_e'] != "" ? $site['ss_eos_p_oe_e'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝', 
									igo_select		= 'P홀', 
									igo_selectcode	= 'ss_eos_p_oe_o', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝', 
									igo_select		= 'P짝', 
									igo_selectcode	= 'ss_eos_p_oe_e', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "파워볼 오버언더"){
							$rate1 = $site['ss_eos_p_ou_u'] != "" ? $site['ss_eos_p_ou_u'] : 0;
							$rate2 = $site['ss_eos_p_ou_o'] != "" ? $site['ss_eos_p_ou_o'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 오버언더', 
									igo_select		= 'P오버', 
									igo_selectcode	= 'ss_eos_p_ou_o', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 오버언더', 
									igo_select		= 'P언더', 
									igo_selectcode	= 'ss_eos_p_ou_u', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "파워볼 구간"){
							$rate1 = $site['ss_eos_p_abcd_a'] != "" ? $site['ss_eos_p_abcd_a'] : 0;
							$rate2 = $site['ss_eos_p_abcd_b'] != "" ? $site['ss_eos_p_abcd_b'] : 0;
							$rate3 = $site['ss_eos_p_abcd_c'] != "" ? $site['ss_eos_p_abcd_c'] : 0;
							$rate4 = $site['ss_eos_p_abcd_d'] != "" ? $site['ss_eos_p_abcd_d'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 구간', 
									igo_select		= 'A', 
									igo_selectcode	= 'ss_eos_p_abcd_a', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 구간', 
									igo_select		= 'B', 
									igo_selectcode	= 'ss_eos_p_abcd_b', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 구간', 
									igo_select		= 'C', 
									igo_selectcode	= 'ss_eos_p_abcd_c', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 구간', 
									igo_select		= 'D', 
									igo_selectcode	= 'ss_eos_p_abcd_d', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "파워볼 홀짝+오버언더"){
							$rate1 = $site['ss_eos_p_oeou_ou'] != "" ? $site['ss_eos_p_oeou_ou'] : 0;
							$rate2 = $site['ss_eos_p_oeou_oo'] != "" ? $site['ss_eos_p_oeou_oo'] : 0;
							$rate3 = $site['ss_eos_p_oeou_eu'] != "" ? $site['ss_eos_p_oeou_eu'] : 0;
							$rate4 = $site['ss_eos_p_oeou_eo'] != "" ? $site['ss_eos_p_oeou_eo'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P홀+P오버', 
									igo_selectcode	= 'ss_eos_p_oeou_eu', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P홀+P언더', 
									igo_selectcode	= 'ss_eos_p_oeou_ou', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
							
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P짝+P오버', 
									igo_selectcode	= 'ss_eos_p_oeou_eo', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 홀짝+오버언더', 
									igo_select		= 'P짝+P언더', 
									igo_selectcode	= 'ss_eos_p_oeou_oo', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					
						if($market == "일반볼+파워볼 홀짝"){
							$rate1 = $site['ss_eos_np_oe_oo'] != "" ? $site['ss_eos_np_oe_oo'] : 0;
							$rate2 = $site['ss_eos_np_oe_ee'] != "" ? $site['ss_eos_np_oe_ee'] : 0;
							$rate3 = $site['ss_eos_np_oe_oe'] != "" ? $site['ss_eos_np_oe_oe'] : 0;
							$rate4 = $site['ss_eos_np_oe_eo'] != "" ? $site['ss_eos_np_oe_eo'] : 0;
							if($rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼+파워볼 홀짝', 
									igo_select		= '홀+P홀', 
									igo_selectcode	= 'ss_eos_np_oe_oo', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼+파워볼 홀짝', 
									igo_select		= '짝+P짝', 
									igo_selectcode	= 'ss_eos_np_oe_ee', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼+파워볼 홀짝', 
									igo_select		= '홀+P짝', 
									igo_selectcode	= 'ss_eos_np_oe_oe', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '일반볼+파워볼 홀짝', 
									igo_select		= '짝+P홀', 
									igo_selectcode	= 'ss_eos_np_oe_eo', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "파워볼 숫자"){
							$rate0 = $site['ss_eos_num_0'] != "" ? $site['ss_eos_num_0'] : 0;
							$rate1 = $site['ss_eos_num_1'] != "" ? $site['ss_eos_num_1'] : 0;
							$rate2 = $site['ss_eos_num_2'] != "" ? $site['ss_eos_num_2'] : 0;
							$rate3 = $site['ss_eos_num_3'] != "" ? $site['ss_eos_num_3'] : 0;
							$rate4 = $site['ss_eos_num_4'] != "" ? $site['ss_eos_num_4'] : 0;
							$rate5 = $site['ss_eos_num_5'] != "" ? $site['ss_eos_num_5'] : 0;
							$rate6 = $site['ss_eos_num_6'] != "" ? $site['ss_eos_num_6'] : 0;
							$rate7 = $site['ss_eos_num_7'] != "" ? $site['ss_eos_num_7'] : 0;
							$rate8 = $site['ss_eos_num_8'] != "" ? $site['ss_eos_num_8'] : 0;
							$rate9 = $site['ss_eos_num_9'] != "" ? $site['ss_eos_num_9'] : 0;
							if($rate0 > 1 AND $rate1 > 1 AND $rate2 > 1 AND $rate3 > 1 AND $rate4 > 1 AND $rate5 > 1 AND $rate6 > 1 AND $rate7 > 1 AND $rate8 > 1 AND $rate9 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '0', 
									igo_selectcode	= 'ss_eos_num_0', 
									igo_price		= '$rate0', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '1', 
									igo_selectcode	= 'ss_eos_num_1', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '2', 
									igo_selectcode	= 'ss_eos_num_2', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '3', 
									igo_selectcode	= 'ss_eos_num_3', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '4', 
									igo_selectcode	= 'ss_eos_num_4', 
									igo_price		= '$rate4', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '5', 
									igo_selectcode	= 'ss_eos_num_5', 
									igo_price		= '$rate5', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '6', 
									igo_selectcode	= 'ss_eos_num_6', 
									igo_price		= '$rate6', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '7', 
									igo_selectcode	= 'ss_eos_num_7', 
									igo_price		= '$rate7', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '8', 
									igo_selectcode	= 'ss_eos_num_8', 
									igo_price		= '$rate8', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '파워볼 숫자', 
									igo_select		= '9', 
									igo_selectcode	= 'ss_eos_num_9', 
									igo_price		= '$rate9', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
					}
					
					if($gamecode == "TM"){
						$gamename = "티몬 게임";
						if($market == "티몬/품바"){
							$rate1 = $site['ss_tm_tp_t'] != "" ? $site['ss_tm_tp_t'] : 0;
							$rate2 = $site['ss_tm_tp_p'] != "" ? $site['ss_tm_tp_p'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '티몬/품바', 
									igo_select		= '티몬', 
									igo_selectcode	= 'ss_tm_tp_t', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '티몬/품바', 
									igo_select		= '품바', 
									igo_selectcode	= 'ss_tm_tp_p', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					
					if($gamecode == "BC"){
						$gamename = "P바카라";
						if($market == "바카라"){
							$rate1 = $site['ss_bc_pb_p'] != "" ? $site['ss_bc_pb_p'] : 0;
							$rate2 = $site['ss_bc_pb_b'] != "" ? $site['ss_bc_pb_b'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '바카라', 
									igo_select		= '플레이어', 
									igo_selectcode	= 'ss_bc_pb_p', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '바카라', 
									igo_select		= '뱅커', 
									igo_selectcode	= 'ss_bc_pb_b', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					
					if($gamecode == "RL"){
						$gamename = "P룰렛";
						if($market == "백인/흑인"){
							$rate1 = $site['ss_rl_wb_w'] != "" ? $site['ss_rl_wb_w'] : 0;
							$rate2 = $site['ss_rl_wb_b'] != "" ? $site['ss_rl_wb_b'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '백인/흑인', 
									igo_select		= '백인', 
									igo_selectcode	= 'ss_rl_wb_w', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '백인/흑인', 
									igo_select		= '흑인', 
									igo_selectcode	= 'ss_rl_wb_b', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					
					if($gamecode == "BM"){
						$gamename = "붐어맨";
						if($market == "화이트/핑크"){
							$rate1 = $site['ss_bm_wp_w'] != "" ? $site['ss_bm_wp_w'] : 0;
							$rate2 = $site['ss_bm_wp_p'] != "" ? $site['ss_bm_wp_p'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '화이트/핑크', 
									igo_select		= '화이트', 
									igo_selectcode	= 'ss_bm_wp_w', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '화이트/핑크', 
									igo_select		= '핑크', 
									igo_selectcode	= 'ss_bm_wp_p', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					
					if($gamecode == "DT"){
						$gamename = "드래곤타이거";
						if($market == "드래곤타이거"){
							$rate1 = $site['ss_dt_dt_d'] != "" ? $site['ss_dt_dt_d'] : 0;
							$rate2 = $site['ss_dt_dt_t'] != "" ? $site['ss_dt_dt_t'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '드래곤타이거', 
									igo_select		= '드래곤', 
									igo_selectcode	= 'ss_dt_dt_d', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '드래곤타이거', 
									igo_select		= '타이거', 
									igo_selectcode	= 'ss_dt_dt_t', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					
					if($gamecode == "SMRL"){
						$gamename = "SM룰렛";
						if($market == "블랙/레드"){
							$rate1 = $site['ss_smrl_rb_r'] != "" ? $site['ss_smrl_rb_r'] : 0;
							$rate2 = $site['ss_smrl_rb_b'] != "" ? $site['ss_smrl_rb_b'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '블랙/레드', 
									igo_select		= '레드', 
									igo_selectcode	= 'ss_smrl_rb_r', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '블랙/레드', 
									igo_select		= '블랙', 
									igo_selectcode	= 'ss_smrl_rb_b', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "홀/짝"){
							$rate1 = $site['ss_smrl_oe_o'] != "" ? $site['ss_smrl_oe_o'] : 0;
							$rate2 = $site['ss_smrl_oe_e'] != "" ? $site['ss_smrl_oe_e'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '홀/짝', 
									igo_select		= '홀', 
									igo_selectcode	= 'ss_smrl_oe_o', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '홀/짝', 
									igo_select		= '짝', 
									igo_selectcode	= 'ss_smrl_oe_e', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					
					
					if($gamecode == "SMKM"){
						$gamename = "깜까미";
						if($market == "전체승"){
							
							$rate1 = $site['ss_smkm_alkm_k'] != "" ? $site['ss_smkm_alkm_k'] : 0;
							$rate2 = $site['ss_smkm_alkm_m'] != "" ? $site['ss_smkm_alkm_m'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '전체승', 
									igo_select		= '깜', 
									igo_selectcode	= 'ss_smkm_alkm_k', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '전체승', 
									igo_select		= '까미', 
									igo_selectcode	= 'ss_smkm_alkm_m', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "첫장승"){
							$rate1 = $site['ss_smkm_onkm_k'] != "" ? $site['ss_smkm_onkm_k'] : 0;
							$rate2 = $site['ss_smkm_onkm_m'] != "" ? $site['ss_smkm_onkm_m'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '첫장승', 
									igo_select		= '깜', 
									igo_selectcode	= 'ss_smkm_onkm_k', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '첫장승', 
									igo_select		= '까미', 
									igo_selectcode	= 'ss_smkm_onkm_m', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "두장승"){
							$rate1 = $site['ss_smkm_tokm_k'] != "" ? $site['ss_smkm_tokm_k'] : 0;
							$rate2 = $site['ss_smkm_tokm_m'] != "" ? $site['ss_smkm_tokm_m'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '두장승', 
									igo_select		= '깜', 
									igo_selectcode	= 'ss_smkm_tokm_k', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '두장승', 
									igo_select		= '까미', 
									igo_selectcode	= 'ss_smkm_tokm_m', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					if($gamecode == "HSRL"){
						$gamename = "해시룰렛";
						if($market == "RGB"){
							$rate1 = $site['ss_hsrl_rgb_r'] != "" ? $site['ss_hsrl_rgb_r'] : 0;
							$rate2 = $site['ss_hsrl_rgb_g'] != "" ? $site['ss_hsrl_rgb_g'] : 0;
							$rate3 = $site['ss_hsrl_rgb_b'] != "" ? $site['ss_hsrl_rgb_b'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= 'RGB', 
									igo_select		= '레드', 
									igo_selectcode	= 'ss_hsrl_rgb_r', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= 'RGB', 
									igo_select		= '그린', 
									igo_selectcode	= 'ss_hsrl_rgb_g', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= 'RGB', 
									igo_select		= '블랙', 
									igo_selectcode	= 'ss_hsrl_rgb_b', 
									igo_price		= '$rate3', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					
					if($gamecode == "HSHL"){
						$gamename = "해시하이로우";
						if($market == "하이로우"){
							$rate1 = explode(",",$hodds)[0];
							$rate2 = explode(",",$hodds)[1];
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '하이로우', 
									igo_select		= '하이', 
									igo_selectcode	= 'ss_hshl_hl_h', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '하이로우', 
									igo_select		= '로우', 
									igo_selectcode	= 'ss_hshl_hl_l', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
							}
						}
						if($market == "레드블랙"){
							$rate1 = $site['ss_hshl_rb_r'] != "" ? $site['ss_hshl_rb_r'] : 0;
							$rate2 = $site['ss_hshl_rb_b'] != "" ? $site['ss_hshl_rb_b'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '레드블랙', 
									igo_select		= '레드', 
									igo_selectcode	= 'ss_hshl_rb_r', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= '레드블랙', 
									igo_select		= '블랙', 
									igo_selectcode	= 'ss_hshl_rb_b', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						if($market == "jqka"){
							$rate1 = $site['ss_hshl_nc_n'] != "" ? $site['ss_hshl_nc_n'] : 0;
							$rate2 = $site['ss_hshl_nc_c'] != "" ? $site['ss_hshl_nc_c'] : 0;
							if($rate1 > 1 AND $rate2 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= 'jqka', 
									igo_select		= '38', 
									igo_selectcode	= 'ss_hshl_nc_n', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
								
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= 'jqka', 
									igo_select		= 'jqka', 
									igo_selectcode	= 'ss_hshl_nc_c', 
									igo_price		= '$rate2', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
						if($market == "joker"){
							$rate1 = $site['ss_hshl_joker'] != "" ? $site['ss_hshl_joker'] : 0;
							if($rate1 > 1){
								$isql = "
								INSERT INTO info_game_odds SET 
									igo_site		= '$ss_site', 
									igo_gamename	= '$gamename', 
									igo_gamecode	= '$gamecode', 
									igo_gameid		= '$gameid', 
									igo_round		= '$round', 
									igo_bettype		= 'joker', 
									igo_select		= 'joker', 
									igo_selectcode	= 'ss_hshl_joker', 
									igo_price		= '$rate1', 
									igo_base		= '', 
									igo_status		= '0';
								";
								$db->query($isql);
							}
						}
						
					}
					
					if($gamecode == "GT"){
						$sql = "SELECT * FROM info_genting_odds WHERE igo_gamecode='$gamecode' AND igo_gameid='$gameid' AND igo_selectcode='$code'";
						$result = $db->query($sql);
						$odds = $result->fetch_assoc();
					}else{
						$sql = "SELECT * FROM info_game_odds WHERE igo_gamecode='$gamecode' AND igo_gameid='$gameid' AND igo_selectcode='$code'";
						$result = $db->query($sql);
						$odds = $result->fetch_assoc();
					}
					
				}
			}

		}
		return $odds;
	}

	//--- 배팅용(작업전)
	function db_user_req_bet($db, $site, $user, $game, $bettype, $select, $rate, $amount){
		if($user){
			$sql = "";
		}
	}
	
	//--- 쿠폰사용(작업전)
	function db_user_req_coupon($db, $site, $user, $idx){
		if($user){
			$sql = "";
		}
	}
	
	
	
	//--- 로그인후 회원통계
	function db_stat_user($db, $idx){
		if($idx != ""){
			$usql = "UPDATE info_users SET
				iu_fail  			= '0', 
				iu_login  			= '$this->ymdhis', 
				iu_login_cnt  		= iu_login_cnt+1, 
				iu_login_ipr  		= '$this->ipr',
				iu_login_ipf  		= '$this->ipf',
				iu_session  		= '$this->MY_SESSION'
			WHERE iu_idx='$idx'";
			$db->query($usql);
		}
	}
	
	//--- 로그인후 파트너 통계
	function db_stat_partner($db, $site, $id){
		//INSERT INTO stat_site(ss_date, ss_new, ss_update) VALUES('$NDATE','$DAT','$NUPDATE') ON DUPLICATE KEY UPDATE ss_date='$NDATE', ss_new=ss_new+$DAT, ss_update='$NUPDATE'
		if($id != ""){
			$sp_idx = $this->dserial . "_" . $site . "_" . $id;
			$usql = "
			INSERT INTO settle_partner SET 
				sp_idx  			= '$sp_idx', 
				sp_site  			= '$site', 
				sp_id 	 			= '$id', 
				sp_date  			= '$this->ymd',
				sp_login  			= '1', 
				sp_update  			= '$this->ymdhis' 
			ON DUPLICATE KEY UPDATE 
				sp_login  			= sp_login+1, 
				sp_update  			= '$this->ymdhis'
			";
			$db->query($usql);
		}
	}
	
	//--- 로그인후 본사통계
	function db_stat_site($db, $site){
		//INSERT INTO stat_site(ss_date, ss_new, ss_update) VALUES('$NDATE','$DAT','$NUPDATE') ON DUPLICATE KEY UPDATE ss_date='$NDATE', ss_new=ss_new+$DAT, ss_update='$NUPDATE'
		if($site != ""){
			$ss_idx = $this->dserial . "_" . $site;
			$usql = "
			INSERT INTO settle_site SET 
				ss_idx  			= '$ss_idx', 
				ss_site  			= '$site', 
				ss_date  			= '$this->ymd',
				ss_login  			= '1', 
				ss_update  			= '$this->ymdhis' 
			ON DUPLICATE KEY UPDATE 
				ss_login  			= ss_login+1, 
				ss_update  			= '$this->ymdhis' 
			";
			$db->query($usql);
		}
	}

	//--- 로그인후 로그생성
	function db_user_log($db, $user, $pw, $location, $result){
		if($user){
			$txt_result = $result == true ? "성공" : "실패";
			if($result){ $txt_pw = ""; }else{ $txt_pw = $pw; }
			
			$isql = "INSERT INTO log_users SET 
				lu_site  		= '$user[iu_site]', 
				lu_master  		= '$user[iu_master]', 
				lu_reference  	= '$user[iu_reference]', 
				lu_id  			= '$user[iu_id]', 
				lu_nick  		= '$user[iu_nick]', 
				lu_level  		= '$user[iu_level]', 
				lu_date  		= '$this->ymdhis', 
				lu_url  		= '$this->my_url', 
				lu_os  			= '$this->my_os', 
				lu_location  	= '$location', 
				lu_browser  	= '$this->my_browser', 
				lu_mobile  		= '$this->my_mobile', 
				lu_ipr  		= '$this->ipr', 
				lu_ipf  		= '$this->ipf', 
				lu_desc 		= '$txt_result'
			";
			$db->query($isql);
			
			if($result){
				//--- 회원통계
				self::db_stat_user($db, $user['iu_idx']);
				
				//--- 파트너 통계
				self::db_stat_partner($db, $user['iu_site'], $user['iu_master']);

				//--- 사이트 통계
				self::db_stat_site($db, $user['iu_site']);
			}else{
				$usql = "UPDATE info_users SET 
					iu_fail		= iu_fail + 1 
				WHERE iu_idx='$user[iu_idx]'";
				$db->query($usql);
			}
		}
	}
		
	function db_user_fail($db, $id, $pw, $location){
		$usql = "UPDATE info_users SET iu_fail = iu_fail + 1 WHERE iu_id='$id'";
		$db->query($usql);
		
		$sql = "SELECT * FROM info_users WHERE iu_id='$id'";
		$result = $db->query($sql);
		$user = $result->fetch_assoc();
		if($user){
			$isql = "INSERT INTO log_users SET 
				lu_site  		= '$user[iu_site]', 
				lu_master  		= '$user[iu_master]', 
				lu_reference  	= '$user[iu_reference]', 
				lu_id  			= '$user[iu_id]', 
				lu_nick  		= '$user[iu_nick]', 
				lu_level  		= '$user[iu_level]', 
				lu_date  		= '$this->ymdhis', 
				lu_url  		= '$this->my_url', 
				lu_os  			= '$this->my_os', 
				lu_location  	= '$location', 
				lu_browser  	= '$this->my_browser', 
				lu_mobile  		= '$this->my_mobile', 
				lu_ipr  		= '$this->ipr', 
				lu_ipf  		= '$this->ipf', 
				lu_desc 		= '로그인 실패($pw)'
			";
			$db->query($isql);
		}
	}
	
	
	//--- 쿠폰관련
	function db_coupon($db, $site, $id, $count, $block, $page){
		$limit	= " LIMIT ".($page-1)*$count.", ".$count;

		$coupon = []; $idx = 0;
		$sql = "SELECT * FROM info_coupon WHERE ic_site='$site' AND ic_id='$id' AND ic_status<2 ORDER BY ic_idx DESC $limit";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$coupon[$idx] = $rows;
			$idx++;
		}
		return $coupon;
	}
	
	function db_coupon_cnt($db, $site, $id){
		$count = 0;
		$sql = "SELECT count(ic_idx) as cnt FROM info_coupon WHERE ic_site='$site' AND ic_id='$id' AND ic_status<2";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$count = $rows['cnt'];
		}

		return $count;
	}
	
	
	//--- 메세지 관련
	
	function db_message_send($db, $site, $user, $title, $body, $count){
		if($user){
			$msg_code = "M" . $this->code;
			$isql = "INSERT INTO info_message SET 
				im_site  		= '$user[iu_site]', 
				im_type   		= 'GROUP', 
				im_code   		= '$msg_code', 
				im_master  		= '', 
				im_id   		= '', 
				im_nick  		= '', 
				im_level  		= '', 
				im_title  		= '$title', 
				im_body  		= '$body', 
				im_reg  		= '$this->ymdhis', 
				im_count  		= '$count', 
				im_count_rec  	= '0', 
				im_hide  		= '0', 
				im_update  		= '', 
				im_operator  	= 'AUTO', 
				im_status 		= '1'
			";
			$db->query($isql);
			
			$isql = "INSERT INTO info_message SET 
				im_site  		= '$user[iu_site]', 
				im_type   		= 'MSG', 
				im_code   		= '$msg_code', 
				im_master  		= '$user[iu_master]', 
				im_id   		= '$user[iu_id]', 
				im_nick  		= '$user[iu_nick]', 
				im_level  		= '$user[iu_level]', 
				im_title  		= '$title', 
				im_body  		= '$body', 
				im_reg  		= '$this->ymdhis', 
				im_count  		= '$count', 
				im_count_rec  	= '0', 
				im_hide  		= '0', 
				im_update  		= '', 
				im_operator  	= 'AUTO', 
				im_status 		= '1'
			";
			$db->query($isql);
		}
	}
	
	function db_message($db, $site, $id, $count, $block, $page){
		$limit	= " LIMIT ".($page-1)*$count.", ".$count;

		$message = []; $idx = 0;
		$sql = "SELECT * FROM info_message WHERE im_site='$site' AND im_id='$id' AND im_status in('1','2') ORDER BY im_idx DESC $limit";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$message[$idx] = $rows;
			$idx++;
		}
		return $message;
	}
	
	function db_message_cnt($db, $site, $id){
		$count = 0;
		$sql = "SELECT count(im_idx) as cnt FROM info_message WHERE im_site='$site' AND im_id='$id' AND im_status in('1','2')";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$count = $rows['cnt'];
		}

		return $count;
	}
	
	function db_get_message($db, $site, $idx){
		$message = [];
		$sql = "SELECT * FROM info_message WHERE im_site='$site' AND im_idx='$idx'";
		$result = $db->query($sql);
		$message = $result->fetch_assoc();
		if($message){
			$im_code 		= $message['im_code'];
			$im_count_rec 	= $message['im_count_rec'];
			if($im_count_rec == "0"){
				$usql = "
					UPDATE info_message SET 
						im_count_rec	= '1', 
						im_update		= '$this->ymdhis', 
						im_status		= '2'
					WHERE im_site='$site' AND im_idx='$idx'
				";
				$db->query($usql);
				
				$usql = "
					UPDATE info_message SET 
						im_count_rec	= im_count_rec + 1, 
						im_update		= '$this->ymdhis'
					WHERE im_type ='GROUP' AND im_code='$im_code'
				";
				$db->query($usql);
			}
		}

		return $message;
	}
	
	//--- 입출금 관련
	function db_pre_cash_inout($db, $site, $id){
		$bresp = false;
		$sql = "SELECT * FROM info_cash WHERE ic_site='$site' AND ic_id='$id' AND ic_status in('0','1')";
		$result = $db->query($sql);
		$datas = $result->fetch_assoc();
		if($datas){
			$bresp = true;
		}
		return $bresp;
	}
	//-- 신규 입금 확인
	function db_cash_none($db, $site, $id){
		$bresp = 0;
		$sql = "SELECT * FROM info_cash WHERE ic_site='$site' AND ic_id='$id' AND ic_type in('IN','OUT','CA-IN','CA-OUT') AND ic_status='2' limit 1";
		$result = $db->query($sql);
		$datas = $result->fetch_assoc();
		if($datas){
			$bresp = 1;
		}
		return $bresp;
	}
	//-- 금일 입금확인
	function db_cash_tday($db, $site, $id){
		$tday = $this->ymd;
		$bresp = 0;
		$sql = "SELECT count(*) as cnt FROM info_cash WHERE ic_site='$site' AND ic_id='$id' AND ic_type in('IN','CA-IN') AND ic_status='2' AND ic_reg like '$tday%' limit 1";
		$result = $db->query($sql);
		$datas = $result->fetch_assoc();
		if($datas){
			if($datas['cnt'] == 0){
				$bresp = 1;
			}
		}
		
		return $bresp;
	}
	//--  금일 입금확인
	function db_cash_tin($db, $site, $id,$limit){
		$tday = $this->ymd;
		$bresp = 0;
		$sql = "SELECT count(*) as cnt FROM info_cash WHERE ic_site='$site' AND ic_id='$id' AND ic_type in('IN','CA-IN') AND ic_status='2' AND ic_reg like '$tday%'";
		$result = $db->query($sql);
		$datas = $result->fetch_assoc();
		if($datas){
			if($datas['cnt'] > 0){			
				if($limit == "0"){
					$bresp = 1;
				}else{
					if($datas['cnt'] <= $limit){
						$bresp = 1;
					}
				}
			}
		}
		
		return $bresp;
	}
	//--  금일 출금확인
	function db_cash_tout($db, $site, $id){
		$tday = $this->ymd;
		$bresp = 0;
		$sql = "SELECT * FROM info_cash WHERE ic_site='$site' AND ic_id='$id' AND ic_type in('OUT','CA-OUT') AND ic_status='2' AND ic_reg like '$tday%' limit 1";
		$result = $db->query($sql);
		$datas = $result->fetch_assoc();
		if($datas){
			$bresp = 1;
		}
		return $bresp;
	}
	
	
	function db_user_cash($db, $site, $id, $count, $block, $page){
		$limit	= " LIMIT ".($page-1)*$count.", ".$count;

		$cash = []; $idx = 0;
		$sql = "SELECT * FROM info_cash WHERE ic_site='$site' AND ic_id='$id' AND ic_hide='0' ORDER BY ic_idx DESC $limit";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$cash[$idx] = $rows;
			$idx++;
		}
		return $cash;
	}
	
	function db_user_cash_cnt($db, $site, $id){
		$count = 0;
		$sql = "SELECT count(ic_idx) as cnt FROM info_cash WHERE ic_site='$site' AND ic_id='$id' AND ic_hide='0'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$count = $rows['cnt'];
		}

		return $count;
	}
	
	
	//--- 배팅 관련
	function db_user_bet($db, $site, $id, $count, $block, $page){
		$limit	= " LIMIT ".($page-1)*$count.", ".$count;

		$bets = []; $idx = 0;
		$sql = "SELECT * FROM info_bets WHERE ib_site='$site' AND ib_id='$id' AND ib_hide='0' ORDER BY ib_idx DESC $limit";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$bets[$idx] = $rows;
			$idx++;
		}
		return $bets;
	}
	
	function db_user_bet_cnt($db, $site, $id){
		$count = 0;
		$sql = "SELECT count(ib_idx) as cnt FROM info_bets WHERE ib_site='$site' AND ib_id='$id' AND ib_hide='0'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$count = $rows['cnt'];
		}

		return $count;
	}
	
	
	//--- 공지사항 관련
	function db_user_notice($db, $site, $count, $block, $page){
		$limit	= " LIMIT ".($page-1)*$count.", ".$count;

		$notices = []; $idx = 0;
		$sql = "SELECT * FROM info_notice WHERE in_site='$site' AND in_hide='0' ORDER BY in_idx DESC $limit";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$notices[$idx] = $rows;
			$idx++;
		}
		return $notices;
	}
	//--- 한줄 공지
	function db_line_notice($db, $site){
		$notices = []; $idx = 0;
		$sql = "SELECT * FROM info_notice WHERE in_site='$site' AND in_type='2' in_hide='0' ORDER BY in_idx DESC $limit";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$notices[$idx] = $rows;
			$idx++;
		}
		return $notices;
	}
	
	function db_user_notice_cnt($db, $site){
		$count = 0;
		$sql = "SELECT count(in_idx) as cnt FROM info_notice WHERE in_site='$site' AND in_hide='0'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$count = $rows['cnt'];
		}

		return $count;
	}

	function db_get_notice($db, $site, $idx){
		$cnt = self::Get_Random(1,2);
		$usql = "UPDATE info_notice SET in_read=in_read + 1, in_read_f=in_read_f+$cnt WHERE in_idx='$idx'";
		$db->query($usql);
			
		$sql = "SELECT * FROM info_notice WHERE in_idx='$idx'";
		$result = $db->query($sql);
		$notice = $result->fetch_assoc();
		return $notice;
	}
	
	
	//--- 고객센터 관련
	function db_src_support($db, $idx){
		$sql = "SELECT * FROM info_support WHERE is_idx='$idx'";
		$result = $db->query($sql);
		$support = $result->fetch_assoc();
		return $support;
	}
	function db_get_support($db, $site, $idx){
		$cnt = self::Get_Random(1,2);
		$usql = "UPDATE info_support SET is_read=is_read + 1 WHERE is_idx='$idx'";
		$db->query($usql);
		
		$sql = "SELECT * FROM info_support WHERE is_idx='$idx'";
		$result = $db->query($sql);
		$support = $result->fetch_assoc();
		return $support;
	}
	
	function db_user_support($db, $site, $id, $count, $block, $page){
		$limit	= " LIMIT ".($page-1)*$count.", ".$count;

		$support = []; $idx = 0;
		$sql = "SELECT * FROM info_support WHERE is_site='$site' AND is_id='$id' AND is_hide='0' ORDER BY is_idx DESC $limit";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$support[$idx] = $rows;
			$idx++;
		}
		return $support;
	}
	
	function db_user_support_cnt($db, $site, $id){
		$count = 0;
		$sql = "SELECT count(is_idx) as cnt FROM info_support WHERE is_site='$site' AND is_id='$id' AND is_hide='0'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$count = $rows['cnt'];
		}

		return $count;
	}
	
	function db_get_user_set_level($db, $site, $id, $level){
		$userset = [];
		$sql = "SELECT * FROM set_level WHERE sl_site='$site' AND sl_level='$level'";
		$result = $db->query($sql);
		if($result->num_rows > 0){
			$userset = $result->fetch_assoc();
		}
		return $userset;
	}

	function db_betlog_user($db, $site, $user, $loc, $memo,$refid){
		$isql = "INSERT INTO log_users SET 
			lu_site  		= '$user[iu_site]', 
			lu_master  		= '$user[iu_master]', 
			lu_reference  	= '$user[iu_reference]', 
			lu_id  			= '$user[iu_id]', 
			lu_nick  		= '$user[iu_nick]', 
			lu_level  		= '$user[iu_level]', 
			lu_date  		= '$this->ymdhis', 
			lu_url  		= '$this->my_url', 
			lu_os  			= '$this->my_os', 
			lu_location  	= '$loc', 
			lu_browser  	= '$this->my_browser', 
			lu_mobile  		= '$this->my_mobile', 
			lu_ipr  		= '$this->ipr', 
			lu_ipf  		= '$this->ipf', 
			lu_desc 		= '$memo', 
			lu_refid 		= '$refid'
		";
		$db->query($isql);
	}
	
	function db_betlog_cash($db, $site, $user, $amount, $memo, $betid){
		$isql = "INSERT INTO log_cash SET 
			lc_site  		= '$user[iu_site]', 
			lc_master  		= '$user[iu_master]', 
			lc_reference  	= '$user[iu_reference]', 
			lc_type  		= 'BET', 
			lc_id  			= '$user[iu_id]', 
			lc_nick  		= '$user[iu_nick]', 
			lc_level  		= '$user[iu_level]', 
			lc_before  		= '$user[iu_cash]', 
			lc_amount  		= '$amount', 
			lc_after  		= $user[iu_cash] - $amount, 
			lc_reg  		= '$this->ymdhis', 
			lc_reg_ipr  	= '$this->ipr', 
			lc_reg_ipf  	= '$this->ipf', 
			lc_memo  		= '$memo', 
			lc_refid  		= '$betid', 
			lc_operator 	= '$user[iu_id]'
		";
		$db->query($isql);
	}
	
	function db_betlog_bet($db, $site, $user, $game, $odds, $amount, $betid){
		$isql = "INSERT INTO log_bets SET 
			lb_site  		= '$user[iu_site]', 
			lb_master  		= '$user[iu_master]', 
			lb_reference  	= '$user[iu_reference]', 
			lb_game  		= '$game', 
			lb_id  			= '$user[iu_id]', 
			lb_nick  		= '$user[iu_nick]', 
			lb_level  		= '$user[iu_level]', 
			lb_before  		= '$user[iu_cash]', 
			lb_amount  		= '$amount', 
			lb_after  		= $user[iu_cash] - $amount, 
			lb_rate  		= '$odds', 
			lb_refid  		= '$betid', 
			lb_bettime  	= '$this->ymdhis', 
			lb_bet_ipr  	= '$this->ipr', 
			lb_bet_ipf  	= '$this->ipf', 
			lb_status 		= 'BET'
		";
		$db->query($isql);
	}
	
	function db_betlog_state($db, $site, $partner, $amount){
		$ss_idx = $this->dserial . "_" . $site;
		
		$isql = "INSERT INTO settle_site SET 
			ss_idx  			= '$ss_idx', 
			ss_site  			= '$site', 
			ss_date  			= '$this->ymd',
			ss_bet  			= '$amount', 
			ss_bet_cnt  		= '1', 
			ss_update  			= '$this->ymdhis' 
		ON DUPLICATE KEY UPDATE 
			ss_bet  			= ss_bet + $amount, 
			ss_bet_cnt  		= ss_bet_cnt + 1, 
			ss_update  			= '$this->ymdhis' 
		";
		$db->query($isql);

		if($partner != ""){
			$ss_idx = $this->dserial . "_" . $site . "_" . $partner;
			$usql = "INSERT INTO settle_partner SET 
				sp_idx  			= '$ss_idx', 
				sp_site  			= '$site', 
				sp_id  				= '$partner', 
				sp_date  			= '$this->ymd',
				sp_bet  			= '$amount', 
				sp_bet_cnt  		= '1', 
				sp_update  			= '$this->ymdhis' 
			ON DUPLICATE KEY UPDATE 
				sp_bet  			= sp_bet + $amount, 
				sp_bet_cnt  		= sp_bet_cnt + 1, 
				sp_update  			= '$this->ymdhis' 
			";
			$db->query($usql);
		}
	}
	
	function db_create_bet($db, $site,$user,$game,$odds,$amount){
		$idx = self::UDF_Idx("");
		
		$isql = "INSERT INTO info_bets SET 
			ib_idx  		= '$idx', 
			ib_site  		= '$user[iu_site]', 
			ib_master  		= '$user[iu_master]', 
			ib_reference  	= '$user[iu_reference]', 
			ib_game  		= '$game[ig_gamename]', 
			ib_gameid  		= '$game[ig_gameid]', 
			ib_round  		= '$game[ig_round]', 
			ib_bettype  	= '$odds[igo_bettype]', 
			ib_select  		= '$odds[igo_select]', 
			ib_gametime  	= '$game[ig_starttime]', 
			ib_bettime  	= '$this->ymdhis', 
			ib_id  			= '$user[iu_id]', 
			ib_nick  		= '$user[iu_nick]', 
			ib_level  		= '$user[iu_level]', 
			ib_balance  	= '$user[iu_cash]', 
			ib_amount  		= '$amount', 
			ib_rate  		= '$odds[igo_price]', 
			ib_bet_ipr  	= '$this->ipr', 
			ib_bet_ipf  	= '$this->ipf', 
			ib_nosettle  	= '$user[iu_nosettle]', 
			ib_hide			= '0',
			ib_done 		= '0',
			ib_status 		= '0'
		";
		$db->query($isql);
		
		$isql = "INSERT INTO info_bets_detail SET 
			ibd_parent  	= '$idx', 
			ibd_betid  		= '$odds[igo_idx]', 
			ibd_game  		= '$game[ig_gamename]', 
			ibd_gameid  	= '$game[ig_gameid]', 
			ibd_bettype  	= '$odds[igo_bettype]', 
			ibd_select  	= '$odds[igo_select]', 
			ibd_selectid  	= '$odds[igo_selectcode]', 
			ibd_rate  		= '$odds[igo_price]', 
			ibd_base  		= '$odds[igo_base]', 
			ibd_status 		= '0'
		";
		$db->query($isql);
		return $idx;
	}
	
	function db_create_sports_bet($db, $site,$user,$game,$folder,$amount,$rate, $idx, $bonus_rate){
		
		$isql = "INSERT INTO info_bets SET 
			ib_idx  		= '$idx', 
			ib_site  		= '$user[iu_site]', 
			ib_master  		= '$user[iu_master]', 
			ib_reference  	= '$user[iu_reference]', 
			ib_game  		= 'SPORTS', 
			ib_gameid  		= '$game[is_idx]', 
			ib_round  		= '', 
			ib_bettype  	= '프리매치', 
			ib_select  		= '', 
			ib_gametime  	= '$game[is_date]', 
			ib_bettime  	= '$this->ymdhis', 
			ib_folder  		= '$folder', 
			ib_id  			= '$user[iu_id]', 
			ib_nick  		= '$user[iu_nick]', 
			ib_level  		= '$user[iu_level]', 
			ib_balance  	= '$user[iu_cash]', 
			ib_amount  		= '$amount', 
			ib_rate  		= '$rate', 
			ib_rate_bonus  	= '$bonus_rate', 
			ib_bet_ipr  	= '$this->ipr', 
			ib_bet_ipf  	= '$this->ipf', 
			ib_nosettle  	= '$user[iu_nosettle]', 
			ib_hide			= '0',
			ib_done 		= '0',
			ib_status 		= '0'
		";
		$db->query($isql);
		return $idx;
	}
	
	function db_create_minigame_bet($db, $site, $user, $game, $folder, $amount, $rate, $idx, $bonus_rate){
		
		$isql = "INSERT INTO info_bets SET 
			ib_idx  		= '$idx', 
			ib_site  		= '$user[iu_site]', 
			ib_master  		= '$user[iu_master]', 
			ib_reference  	= '$user[iu_reference]', 
			ib_game  		= '$game[ig_gamecode]', 
			ib_gameid  		= '$game[ig_gameid]', 
			ib_round  		= '$game[ig_round]', 
			ib_bettype  	= '$game[ig_gamename]', 
			ib_select  		= '', 
			ib_gametime  	= '$game[ig_endtime]', 
			ib_bettime  	= '$this->ymdhis', 
			ib_folder  		= '$folder', 
			ib_id  			= '$user[iu_id]', 
			ib_nick  		= '$user[iu_nick]', 
			ib_level  		= '$user[iu_level]', 
			ib_balance  	= '$user[iu_cash]', 
			ib_amount  		= '$amount', 
			ib_rate  		= '$rate', 
			ib_rate_bonus  	= '$bonus_rate', 
			ib_bet_ipr  	= '$this->ipr', 
			ib_bet_ipf  	= '$this->ipf', 
			ib_nosettle  	= '$user[iu_nosettle]', 
			ib_hide			= '0',
			ib_done 		= '0',
			ib_status 		= '0'
		";
		$db->query($isql);
		return $idx;
	}
	
	function db_create_sports_bet_detail($db, $site,$user,$game,$odds, $idx){
		$isql = "INSERT INTO info_bets_detail SET 
			ibd_id  		= '$user[iu_id]', 
			ibd_parent  	= '$idx', 
			ibd_betid  		= '$odds[iso_idx]', 
			ibd_date  		= '$game[is_date]', 
			ibd_game  		= 'SPORTS', 
			ibd_gameid  	= '$game[is_idx]', 
			ibd_sports  	= '$game[is_sports]', 
			ibd_country  	= '$game[is_country]', 
			ibd_league  	= '$game[is_league]', 
			ibd_home  		= '$game[is_home]', 
			ibd_away  		= '$game[is_away]', 
			ibd_bettype  	= '$odds[iso_bettype_code]', 
			ibd_typename  	= '$odds[iso_bettype]', 
			ibd_select  	= '$odds[iso_select]', 
			ibd_selectid  	= '$odds[iso_selectcode]', 
			ibd_rate  		= '$odds[iso_price]', 
			ibd_base  		= '$odds[iso_base]', 
			ibd_status 		= '0'
		";
		$db->query($isql);
		return $idx;
	}
	
	function db_create_minigame_bet_detail($db, $site, $user, $game, $odds, $idx){
		$isql = "INSERT INTO info_bets_detail SET 
			ibd_id  		= '$user[iu_id]', 
			ibd_parent  	= '$idx', 
			ibd_betid  		= '$odds[igo_idx]', 
			ibd_date  		= '$game[ig_endtime]', 
			ibd_game  		= '$game[ig_gamecode]', 
			ibd_gameid  	= '$game[ig_gameid]', 
			ibd_sports  	= '$game[ig_gamename]', 
			ibd_country  	= '', 
			ibd_league  	= '$game[ig_round]', 
			ibd_home  		= '$game[ig_gamename] $game[ig_round]', 
			ibd_away  		= '$game[ig_gamename] $game[ig_round]', 
			ibd_bettype  	= '$odds[igo_bettype]', 
			ibd_typename  	= '$odds[igo_bettype]', 
			ibd_select  	= '$odds[igo_select]', 
			ibd_selectid  	= '$odds[igo_selectcode]', 
			ibd_rate  		= '$odds[igo_price]', 
			ibd_base  		= '$odds[igo_base]', 
			ibd_status 		= '0'
		";
		$db->query($isql);
		return $idx;
	}
	
	function db_get_bet_code($game){
		$betcode = "";
		if($game == "일반볼 홀짝"){ $betcode = "PB_NOE"; }
		if($game == "일반볼 언더오버"){ $betcode = "PB_NOU"; }
		if($game == "일반볼 소중대'"){ $betcode = "PB_NSMB"; }
		if($game == "일반볼 홀짝+언더오버"){ $betcode = "PB_NOEOU"; }
		if($game == "파워볼 홀짝"){ $betcode = "PB_POE"; }
		if($game == "파워볼 언더오버"){ $betcode = "PB_POU"; }
		if($game == "파워볼 구간"){ $betcode = "PB_PABCD"; }
		if($game == "파워볼 홀짝+언더오버"){ $betcode = "PB_POEOU"; }
		if($game == "일반볼+파워볼 홀짝"){ $betcode = "PB_NPOE"; }
		
		if($game == "파워사다리 홀짝"){ $betcode = "PL_OE"; }
		if($game == "파워사다리 줄수"){ $betcode = "PL_LN"; }
		if($game == "파워사다리 출발"){ $betcode = "PL_LR"; }
		if($game == "파워사다리 조합"){ $betcode = "PL_MIX"; }
		
		if($game == "하이로우"){ $betcode = "TK_HL"; }
		if($game == "레드블랙"){ $betcode = "TK_RB"; }
		if($game == "숫자문자"){ $betcode = "TK_NC"; }
		if($game == "조커"){ $betcode = "TK_NC"; }

		if($game == "바카라"){ $betcode = "TK_BC"; }
		
		if($game == "카지노-바카라"){ $betcode = "BACARA"; }
		if($game == "카지노-슬롯"){ $betcode = "SLOT"; }
	}
	
	function db_bet_stat($db, $site,$game, $odds, $amount){
		$usql = "UPDATE info_game SET ig_bet=ig_bet + $amount, ig_bet_cnt=ig_bet_cnt+1 WHERE ig_idx='$game[ig_idx]'";
		$db->query($usql);
		
		$usql = "UPDATE info_game_odds SET igo_bet=igo_bet + $amount, igo_bet_cnt=igo_bet_cnt+1 WHERE igo_idx='$odds[igo_idx]'";
		$db->query($usql);
	}
	
	
	function db_bet_stat_sports($db, $site,$game, $odds, $amount){
		$usql = "UPDATE info_sports SET is_bet=is_bet + $amount, is_bet_cnt=is_bet_cnt+1 WHERE is_idx='$game[is_idx]'";
		$db->query($usql);
		
		$usql = "UPDATE info_sports_odds SET iso_bet=iso_bet + $amount, iso_bet_cnt=iso_bet_cnt+1 WHERE iso_idx='$odds[iso_idx]'";
		$db->query($usql);
	}
	
	function db_bet_stat_minigame($db, $site,$game, $odds, $amount){
		$usql = "UPDATE info_game SET ig_bet=ig_bet + $amount, ig_bet_cnt=ig_bet_cnt+1 WHERE ig_idx='$game[ig_idx]'";
		$db->query($usql);
		
		$usql = "UPDATE info_game_odds SET igo_bet=igo_bet + $amount, igo_bet_cnt=igo_bet_cnt+1 WHERE igo_idx='$odds[igo_idx]'";
		$db->query($usql);
	}
	function db_bet_stat_genting($db, $site,$game, $odds, $amount){
		$usql = "UPDATE info_genting SET ig_bet=ig_bet + $amount, ig_bet_cnt=ig_bet_cnt+1 WHERE ig_idx='$game[ig_idx]'";
		$db->query($usql);
		
		$usql = "UPDATE info_genting_odds SET igo_bet=igo_bet + $amount, igo_bet_cnt=igo_bet_cnt+1 WHERE igo_idx='$odds[igo_idx]'";
		$db->query($usql);
	}
	
	function db_info_partner($db, $site, $idx, $id = ""){
		$bSql = $idx != "" ? " AND ip_idx='$idx'" : " AND ip_id='$id'";
		
		$sql = "SELECT * FROM info_partner WHERE ip_site='$site' $bSql";
		$result = $db->query($sql);
		$partner = $result->fetch_assoc();
		return $partner;
	}
	
	function db_get_rolling($db, $site, $type, $id){
		$rolling = [];
		$rolling['PB_NOE'] = 0; $rolling['PB_NSMB'] = 0; $rolling['PB_NOU'] = 0; $rolling['PB_NOEOU'] = 0; 
		$rolling['PB_POE'] = 0; $rolling['PB_POU'] = 0; $rolling['PB_PABCD'] = 0; $rolling['PB_POEOU'] = 0; 
		$rolling['PB_NPOE'] = 0;
		$rolling['PL_OE'] = 0; $rolling['PL_LN'] = 0; $rolling['PL_LR'] = 0; $rolling['PL_MIX'] = 0; 
		$rolling['TK_HL'] = 0; $rolling['TK_RB'] = 0; $rolling['TK_NC'] = 0; $rolling['TK_JK'] = 0; 
		$rolling['TK_BC'] = 0; 
		$rolling['BACARA'] = 0; $rolling['SLOT'] = 0; 

		$sql = "SELECT * FROM info_rolling WHERE ir_site='$site' AND ir_type='$type' AND ir_id='$id'";
		$result = $db->query($sql);
		if($result->num_rows > 0){
			$rolling = $result->fetch_assoc();
		}
		return $rolling;
	}
	
	function db_rate_genting($db, $site, $type, $id){
		$rate = [];
		
		$rate['ss_up_grate'] = 0; $rate['ss_up_crate'] = 0; $rate['ss_up_brate'] = 0;  
		if($id != ""){
			$sql = "SELECT ss_up_grate,ss_up_crate,ss_up_brate FROM info_rolling WHERE ir_site='$site' AND ir_type='$type' AND ir_id='$id'";
			$result = $db->query($sql);
			if($result){
				$rate = [];
				$rate = $result->fetch_assoc();
			}
		}else{
			$sql = "SELECT ss_up_grate,ss_up_crate,ss_up_brate FROM set_site WHERE ss_site='$site'";
			$result = $db->query($sql);
			if($result){
				$rate = [];
				$rate = $result->fetch_assoc();
			}
		}
		return $rate;
	}
	
	
	function db_get_main_event($db, $site, $iu_id){
		$arr = [];
		$arr[0] = ""; //-- 인생처름 첫충전
		$arr[1] = ""; //-- 금일 첫충전
		$arr[2] = ""; //-- 매충전
		$arr[3] = ""; //-- 돌발
		$arr[4] = ""; //-- 출석
		$arr[5] = ""; //-- 지인추천
		$arr[6] = ""; //-- 쿠폰
		
		$count_all = 0; $count_today = 0; $count_in = 0; $count_out = 0;
		$sql = "SELECT * FROM info_cash WHERE ic_site='$site' AND ic_type in('IN','OUT') AND ic_id='$iu_id' AND ic_status='2'";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$ic_type = $rows['ic_type'];
			$ic_done = $rows['ic_done'];
			$count_all++;
			
			if(strpos($ic_done,$this->ymd) !== false){
				if($ic_type == "IN"){
					$count_in++;
				}
				if($ic_type == "OUT"){
					$count_out++;
				}
				$count_today++;
			}
		}
		
		$sql = "SELECT iu_ref FROM info_users WHERE iu_site='$site' AND iu_id='$iu_id'";
		$results = $db->query($sql);
		$user = $results->fetch_assoc();
		if($user){
			$iu_ref 		= $user['iu_ref'];
			if($iu_ref != ""){
				//--- 지인추천
				$arr[5] = "onnn";
			}
		}
		
		
		$d_year = date("Y",		time());
		$d_month = date("m",	time());
		$d_today = date("d",	time());

		//--- 금일 출석체크 여부 확인
		$asql = "SELECT * FROM info_attend WHERE ia_site='$site' AND ia_id='$iu_id' AND ia_yyyy='$d_year' AND ia_mm='$d_month' AND ia_dd='$d_today'";
		$aresult = $db->query($asql);
		if($aresult->num_rows == 0){
			//--- 출석체크 대상자
			$arr[4] = "onnn";
		}
		
		if($count_all == 0){
			//--- 인생처음 첫충전
			$arr[0] = "onnn";
		}
		
		if($count_today > 0){
			//--- 매충전 대상자
			if($count_in > 0){
				if($count_out == 0){
					//--- 매충전
					$arr[2] = "onnn";
				}
			}
			if($count_in == 0){
				//--- 금일 첫충전
				$arr[1] = "onnn";
			}
		}else{
			if($count_in == 0){
				//--- 금일 첫충전
				$arr[1] = "onnn";
			}
		}
		return $arr;
	}
	
	function db_get_snow_game($db){
		$game =[];
		$sql = "SELECT sgs_idx, sgs_code FROM set_game_snow WHERE 1=1";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$sgs_idx = $rows['sgs_idx'];
			$sgs_code = $rows['sgs_code'];
			
			$game[$sgs_idx] = $sgs_code;
		}
		return $game;
	}
	
	function db_get_casino_game($db, $site){
		$list = []; $idx = 0;

		$sql = "SELECT * FROM set_game_table WHERE sgt_site='$site' AND sgt_status='1' ORDER BY sgt_sort ASC, sgt_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$list[$idx] = $rows;
			$idx++;
		}
		return $list;
	}
	
	function db_get_casino_name($db, $site, $own, $code){
		$name = "";
		$sql = "SELECT sgt_name FROM set_game_table WHERE sgt_site='$site' AND sgt_owner='$own' AND sgt_code='$code'";
		$result = $db->query($sql);
		$data = $result->fetch_assoc();
		if($data){
			$name =  $data['sgt_name'];
		}
		
		return $name;
	}
	
	function db_get_casino_status($db, $site){
		$list = [];

		$sql = "SELECT * FROM set_game_table WHERE sgt_site='$site' ORDER BY sgt_sort ASC, sgt_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$sgt_class = $rows['sgt_class'];
			$list[$sgt_class] = $rows;
		}
		return $list;
	}
	
	function db_get_honor_status($db, $site){
		$list = [];

		$sql = "SELECT * FROM set_game_table WHERE sgt_site='$site' AND sgt_owner IN ('honor','ori') ORDER BY sgt_sort ASC, sgt_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$sgt_name = $rows['sgt_name'];
			$list[$sgt_name] = $rows;
		}
		return $list;
	}
	
	function db_get_theplus_game($db, $site, $gid){
		$sql = "SELECT sgt_name FROM set_game_table WHERE sgt_site='$site' AND sgt_owner='theplus' AND sgt_status='1' AND sgt_code='$gid'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		
		return $rows['sgt_name'];
	}
	function db_get_theplus_last($db, $site, $id){
		$sql = "SELECT lt_game FROM log_theplus WHERE lt_site='$site' AND lt_uid='$id' AND lt_type='DEPOSIT' ORDER BY lt_idx DESC limit 1";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		
		return $rows['lt_game'];
	}
	function db_get_theplus_status($db, $site){
		$list = [];

		$sql = "SELECT * FROM set_game_table WHERE sgt_site='$site' AND sgt_owner='theplus' ORDER BY sgt_sort ASC, sgt_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$sgt_class = $rows['sgt_class'];
			$list[$sgt_class] = $rows;
		}
		return $list;
	}
	function db_get_theplus($db, $site){
		$list = [];

		$sql = "SELECT * FROM set_game_table WHERE sgt_site='$site' AND sgt_owner='theplus' ORDER BY sgt_sort ASC, sgt_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$list[] = $rows;
		}
		return $list;
	}
	
	function db_get_hslot($db, $site){
		$list = [];

		$sql = "SELECT * FROM set_game_table WHERE sgt_site='$site' AND sgt_owner='honor' AND sgt_type='SLOT' ORDER BY sgt_sort ASC, sgt_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$list[] = $rows;
		}
		return $list;
	}
	
	function db_get_gslot($db, $site){
		$list = [];

		$sql = "SELECT * FROM set_game_table WHERE sgt_site='$site' AND sgt_owner='gs' AND sgt_type='SLOT' ORDER BY sgt_sort ASC, sgt_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$list[] = $rows;
		}
		return $list;
	}
	
	function db_get_theplus_gamelist($db, $site, $game){
		$list = [];
		$sql = "SELECT * FROM set_game WHERE sg_site='$site' AND sg_owner='theplus' AND sg_providerid='$game' ORDER BY sg_sort ASC, sg_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$list[] = $rows;
		}
		return $list;
	}
	
	function db_get_honor_gamelist($db, $site, $game, $switch=''){
		$list = [];
		$add = "";
		if($switch != ""){
			if($switch == "1"){
				$add = " AND sg_switch='1'";
			}
		}
		$sql = "SELECT * FROM set_game WHERE sg_site='$site' AND sg_owner='honor' AND sg_provider='$game'  $add ORDER BY sg_sort ASC, sg_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$list[] = $rows;
		}
		return $list;
	}
	
	function db_get_gs_gamelist($db, $site, $game, $switch=''){
		$list = [];
		$add = "";
		if($switch != ""){
			if($switch == "1"){
				$add = " AND sg_switch='1'";
			}
		}
		$sql = "SELECT * FROM set_game WHERE sg_site='$site' AND sg_owner='gs' AND sg_provider='$game' $add ORDER BY sg_sort ASC, sg_idx ASC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$list[] = $rows;
		}
		return $list;
	}
	
	
	function db_coupon_load($db, $site, $idx){
		$sql = "SELECT * FROM info_coupon WHERE ic_idx='$idx'";
		$result = $db->query($sql);
		$coupon = $result->fetch_assoc();
		return $coupon;
	}
	function db_coupon_list($db, $site, $id){
		$clist = []; $idx = 0;
		$sql = "SELECT * FROM info_coupon WHERE ic_site='$site' AND ic_id='$id' AND ic_status='1' ";
		$result = $db->query($sql);
		if($result){
			while($coupon = $result->fetch_assoc()){
				$clist[$idx] = $coupon;
				$idx++;
			}
		}
		return $clist;
	}
	function db_get_coupon($db, $site, $idx){
		$csql = "SELECT ic_title FROM info_coupon WHERE ic_idx='$idx'";
		$cresult = $db->query($csql);
		$cfix = $cresult->fetch_assoc();
		
		$sql = "SELECT * FROM set_bonus WHERE sb_site='$site' AND sb_name='$cfix[ic_title]'";
		$result = $db->query($sql);
		$coupon = $result->fetch_assoc();
		return $coupon;
	}
	function load_translate($db){
		$language = [];
		$sql = "SELECT sl_key, sl_en as en, sl_ko as ko, sl_zh as zh, sl_vn as vn, sl_km as km, sl_th as th, sl_ru as ru FROM set_lang WHERE sl_use='1'";
		$result = $db->query($sql);
		while($row = $result->fetch_assoc()){
		  $sl_key = $row['sl_key'];
		  $language[$sl_key] = $row;
		}
		return $language;
	}
	function db_get_bet($db, $site, $id, $game){
		$addQuery = "";
		if($game == "ntry"){
			$addQuery = "AND ib_game in('PB','PL','KL','EOS1','EOS2','EOS3','EOS4','EOS5')";
		}
		if($game == "pgame"){
			$addQuery = "AND ib_game in('TM','BC','RL','BM','DC')";
		}
		if($game == "smgame"){
			$addQuery = "AND ib_game in('SMRL','SMKM','HSRL','HSHL')";
		}
		if($game == "euroball"){
			$addQuery = "AND ib_game in('EURO3','EURO5')";
		}
		if($game == "tk"){
			$addQuery = "";
		}
		$bets = []; $idx = 0;
		$sql = "SELECT * FROM info_bets WHERE ib_site='$site' AND ib_id='$id' $addQuery AND ib_hide='0' ORDER BY ib_bettime DESC";
		$result = $db->query($sql);
		while($rows = $result->fetch_assoc()){
			$bets[$idx] = $rows;
			$idx++;
		}
		return $bets;
	}
	function db_get_bet_slot($db, $site, $id, $game){
		
		$bets = []; $idx = 0;
		$sql = "SELECT * FROM info_bet_theplus WHERE it_site='$site' AND it_id='$id' AND it_hide='0' ORDER BY it_reg DESC";
		$result = $db->query($sql);
		if($result){
			while($rows = $result->fetch_assoc()){
				$bets[$idx] = $rows;
				$idx++;
			}
		}
		return $bets;
	}
	function db_get_bet_casino($db, $site, $id, $game){
		
		$bets = []; $idx = 0;
		$sql = "SELECT * FROM info_bet_snow WHERE is_site='$site' AND is_id='$id' AND is_game_mark='Casino' AND is_hide='0' ORDER BY is_reg DESC";
		$result = $db->query($sql);
		if($result){
			while($rows = $result->fetch_assoc()){
				$bets[$idx] = $rows;
				$idx++;
			}
		}
		return $bets;
	}
	
	function db_get_bet_casinoH($db, $site, $id){
		
		$bets = []; $idx = 0;
		$sql = "SELECT * FROM info_bets_evo WHERE ibe_site='$site' AND ibe_id='$id' AND ibe_mark='BACARA' AND ibe_hide='0' ORDER BY ibe_bettime DESC";
		$result = $db->query($sql);
		if($result){
			while($rows = $result->fetch_assoc()){
				$bets[$idx] = $rows;
				$idx++;
			}
		}
		return $bets;
	}
	function db_get_bet_slotH($db, $site, $id){
		
		$bets = []; $idx = 0;
		$sql = "SELECT * FROM info_bets_evo WHERE ibe_site='$site' AND ibe_id='$id' AND ibe_mark='SLOT' AND ibe_hide='0' ORDER BY ibe_bettime DESC";
		$result = $db->query($sql);
		if($result){
			while($rows = $result->fetch_assoc()){
				$bets[$idx] = $rows;
				$idx++;
			}
		}
		return $bets;
	}
	function db_get_bet_casinoG($db, $site, $id){
		
		$bets = []; $idx = 0;
		$sql = "SELECT * FROM info_bet_genting WHERE ibg_site='$site' AND ibg_id='$id' AND ibg_hide='0' ORDER BY ibg_bettime DESC";
		$result = $db->query($sql);
		if($result){
			while($rows = $result->fetch_assoc()){
				$bets[$idx] = $rows;
				$idx++;
			}
		}
		return $bets;
	}
	function db_get_bet_casinoB($db, $site, $id){
		
		$bets = []; $idx = 0;
		$sql = "SELECT * FROM info_bets_bota WHERE ibb_site='$site' AND ibb_id='$id' AND ibb_hide='0' ORDER BY ibb_bettime DESC";
		$result = $db->query($sql);
		if($result){
			while($rows = $result->fetch_assoc()){
				$bets[$idx] = $rows;
				$idx++;
			}
		}
		return $bets;
	}
	function db_bet_status($db, $site, $idx){
		$sql = "SELECT ib_status FROM info_bets WHERE ib_site='$site' AND ib_idx='$idx'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$bets = $rows['ib_status'];
		}
		return $bets;
	}
	function db_betc_status($db, $site, $idx){
		$sql = "SELECT is_result FROM info_bet_snow WHERE is_site='$site' AND is_idx='$idx'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$bets = $rows['is_result'];
		}
		return $bets;
	}
	function db_bets_status($db, $site, $idx){
		$sql = "SELECT it_status FROM info_bet_theplus WHERE it_site='$site' AND it_idx='$idx'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$bets = $rows['it_status'];
		}
		return $bets;
	}
	
	function db_get_balance($db, $site, $idx){
		$sql = "SELECT iu_cash FROM info_users WHERE iu_site='$site' AND iu_idx='$idx'";
		$result = $db->query($sql);
		$rows = $result->fetch_assoc();
		if($rows){
			$balacne = $rows['iu_cash'];
		}
		return $balacne;
	}
	
	function db_log_success_genting($db, $site, $order, $bet, $amount, $status){
		$Add_sql = "";
		if($bet == "ss_genting_ptb_p"){
			$Add_sql = "lg_p_done='$amount',lg_b_done='0',";
		}else if($bet == "ss_genting_ptb_b"){
			$Add_sql = "lg_b_done='$amount',lg_p_done='0',";
		}else if($bet == "ss_genting_ptb_t"){
			$Add_sql = "lg_t_done='$amount',";
		}else if($bet == "ss_genting_ptb_pp"){
			$Add_sql = "lg_pp_done='$amount',";
		}else if($bet == "ss_genting_ptb_bp"){
			$Add_sql = "lg_bp_done='$amount',";
		}
		
		$lg_lastupdate 		= $this->ymdhis;
		$sql = "
		UPDATE log_genting SET
			$Add_sql
			lg_amount_done		= 	lg_amount_done+$amount,
			lg_lastupdate 		=  '$lg_lastupdate',
			lg_status  			=  '$status'
		WHERE lg_site='$site' AND lg_order='$order'
		";
		echo $sql;
		$db->query($sql);
		
	}
	function db_log_success_genting_multi($db, $site, $order, $json, $status){
		$json = json_decode($json,true);
		
		$json_result = $json['games'];
		
		$lg_lastupdate 		= $this->ymdhis;
		$Add_sql = "";
		$lg_amount = 0;
		if(count($json_result) > 0){
			foreach($json_result as $line){
				if($line['target'] == "플레이어"){
					$Add_sql .= "lg_p_done='$line[amount]',lg_b_done='0',";
				}else if($line['target'] == "뱅커"){
					$Add_sql .= "lg_b_done='$line[amount]',lg_p_done='0',";
				}else if($line['target'] == "타이"){
					$Add_sql .= "lg_t_done='$line[amount]',";
				}else if($line['target'] == "플레이어 페어"){
					$Add_sql .= "lg_pp_done='$line[amount]',";
				}else if($line['target'] == "뱅커 페어"){
					$Add_sql .= "lg_bp_done='$line[amount]',";
				}
				$lg_amount +=  $line['amount'];
			}
			$sql = "
			UPDATE log_genting SET
				$Add_sql
				lg_amount_done		= 	lg_amount_done+$lg_amount,
				lg_lastupdate 		=  '$lg_lastupdate',
				lg_status  			=  '$status'
			WHERE lg_site='$site' AND lg_order='$order'
			";
			echo $sql;
			$db->query($sql);
		}
	}
	function db_log_balance_genting($db, $site, $order, $round, $bet, $amount, $status){
		
		$lg_p_cnt = 0;  $lg_b_cnt = 0; 	$lg_t_cnt = 0; 	$lg_pp_cnt = 0; $lg_bp_cnt = 0;
		$lg_p = 0;  	$lg_b = 0; 		$lg_t = 0; 		$lg_pp = 0; 	$lg_bp = 0;
		
		if($bet == "ss_genting_ptb_p"){
			$lg_p_cnt = 1; 
			$lg_p = $amount;
			$Add_sql = "lg_p=lg_p+$amount ,lg_p_cnt=lg_p_cnt+1,";
		}else if($bet == "ss_genting_ptb_b"){
			$lg_b_cnt = 1;
			$lg_b = $amount;
			$Add_sql = "lg_b=lg_b+$amount ,lg_b_cnt=lg_b_cnt+1,";
		}else if($bet == "ss_genting_ptb_t"){
			$lg_t_cnt = 1;
			$lg_t = $amount;
			$Add_sql = "lg_t=lg_t+$amount ,lg_t_cnt=lg_t_cnt+1,";
		}else if($bet == "ss_genting_ptb_pp"){
			$lg_pp_cnt = 1;
			$lg_pp = $amount;
			$Add_sql = "lg_pp=lg_pp+$amount ,lg_pp_cnt=lg_pp_cnt+1,";
		}else if($bet == "ss_genting_ptb_bp"){
			$lg_bp_cnt = 1;
			$lg_bp = $amount;
			$Add_sql = "lg_bp=lg_bp+$amount ,lg_bp_cnt=lg_bp_cnt+1,";
		}
		
		$lg_idx 			= $order;
		$lg_site 			= $site;
		$lg_order 			= $order;
		$lg_round 			= $round;
		$lg_lastupdate 		= $this->ymdhis;
		
		$sql = "INSERT INTO log_genting SET 
			lg_idx 				=  '$lg_idx',
			lg_site 			=  '$lg_site',
			lg_order 			=  '$lg_order',
			lg_round 			=  '$lg_round',
			lg_p 				=  '$lg_p',
			lg_p_cnt 			=  '$lg_p_cnt',
			lg_b	 			=  '$lg_b',
			lg_b_cnt 			=  '$lg_b_cnt',
			lg_t	 			=  '$lg_t',
			lg_t_cnt 			=  '$lg_t_cnt',
			lg_pp 				=  '$lg_pp',
			lg_pp_cnt 			=  '$lg_pp_cnt',
			lg_bp 				=  '$lg_bp',
			lg_bp_cnt 			=  '$lg_bp_cnt',
			lg_amount 			=  '$amount',
			lg_lastupdate 		=  '$lg_lastupdate',
			lg_status  			=  '0'
		ON DUPLICATE KEY UPDATE 
			$Add_sql
			lg_lastupdate 		=  '$lg_lastupdate',
			lg_status  			=  '$status'
		";
		$db->query($sql);
	}

}
?>