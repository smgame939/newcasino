<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/inc/_class_ip.php");
include_once($_SERVER['DOCUMENT_ROOT']."/inc/database.php");
include_once('class/mobiledetect.class.php');
include('inc/versions.php');


$mdetect = new MobileDetect();
$mDB = new ClassDB();

$hd = apache_request_headers();
$hd = array_change_key_case($hd, CASE_LOWER);
$cfip = isset($hd['cf-connecting-ip']) ? $hd['cf-connecting-ip'] : "";
if($cfip != $FNC->UDF_Get_Ip("F")){
	header('Location: http://www.naver.com'); exit();
}


$url = $FNC->UDF_Get_Host();
$uri = $FNC->UDF_Get_Uri();

$uCheck = $mDB->db_get_site_domain($ConnHost, $url);

if($uCheck['sd_status'] == "0"){
	header('Location: http://www.naver.com'); exit();
}else{
	$site 		= $mDB->db_get_site_from_url($ConnHost,$url);
	
	//--- 사이트 설정 호출
	$SET_SITE 	= $mDB->db_get_site_set($ConnHost, $site);
	if($SET_SITE['ss_maint'] == "1"){
		if($SET_SITE['ss_maint_html'] != ""){
			echo $SET_SITE['ss_maint_html']; exit();
		}else{
			exit();
		}
	}
}

$MY_IPR 		= $FNC->UDF_Get_Ip("R");
$MY_IPF 		= $FNC->UDF_Get_Ip("F");


$isBlock = $mDB->db_get_blockinfo($ConnHost, $iu_site, "ip", $MY_IPR);
if($isBlock == true){
	header('Location: http://www.naver.com'); exit();
}
$isBlock = $mDB->db_get_blockinfo($ConnHost, $iu_site, "ip", $MY_IPF);
if($isBlock == true){
	header('Location: http://www.naver.com'); exit();
}


$iu_cash	= 0;
$iu_cash_c	= 0;
$iu_point	= 0;
$iu_level	= 0;
$go_memo = "1";

$site 		= $mDB->db_get_site_from_url($ConnHost,$url);
$arr_lang 	= $mDB->load_translate($ConnHost);
//--- 카지노 점검 설정
$is_open_baca = "_close";
$is_open_slot = "_close";

$games 		= $mDB->db_get_casino_game($ConnHost, $site);

$close_set = $mDB->db_get_snow_game($ConnHost);

$ip_shop = "0";

if($iu_idx != ""){
	//--- 현재위치 기록
	$mDB->db_user_tracker($ConnHost, $iu_site, $iu_id, $uri);
	
	//--- 사이트 설정 호출
	$SET_SITE 	= $mDB->db_get_site_set($ConnHost, $iu_site);
	
	//--- 회원정보 호출
	$SET_USER 	= $mDB->db_user_info($ConnHost, $iu_site, $iu_idx, $iu_id);
	
	//--- 레벨설정 호출
	$SET_LV 	= $mDB->db_level_info($ConnHost, $iu_site, $SET_USER['iu_level']);
	
	$SET_GAME 	= $mDB->db_get_casino_status($ConnHost, $site);
	$SET_SLOT 	= $mDB->db_get_theplus_status($ConnHost, $site);
	
	$iu_level 		= $SET_USER['iu_level'];
	$iu_bank 		= $SET_USER['iu_bank'];
	$iu_booknum 	= $SET_USER['iu_booknum'];
	$iu_cash 		= $SET_USER['iu_cash'];
	$iu_cash_c 		= $SET_USER['iu_cash_c'];
	$iu_point 		= $SET_USER['iu_point'];
	$iu_point = floor($iu_point);
	$sl_level_user 	= $SET_LV['sl_level_user'];
	$iu_master 		= $SET_USER['iu_master'];
	$is_login 		= true;
	
	if($iu_master != ""){
		$Pinfo = $mDB->db_info_partner($ConnHost, $site, "", $iu_master);
		$ip_shop = $Pinfo['ip_allow_mgr'];
	}
	$ip_shop = "0";
	
	$is_open_baca = "";
	$is_open_slot = "";
	
	if($SET_USER['iu_session'] != $sessionid){
		session_unset();
		session_destroy();
		header('Location: /index.php'); exit();
	}
	
	$memo_check = $_SERVER['REQUEST_URI'];
	if (strpos($memo_check,"memo.php") !== false or strpos($memo_check,"memo_view.php") !== false){
		$go_memo = "0";
	}
}else{
	//header('Location: /index.php'); exit();
	$is_login 	= false;
	//--- 개방형으로 변경할때 대비해서 넣어둔 코드(현재는 사용 안함)
	$site 		= $mDB->db_get_site_from_url($ConnHost,$url);
	$SET_SITE 	= $mDB->db_get_site_set($ConnHost, $site);
	$banks		= $mDB->db_info_bank($ConnHost, $site);
	$SET_GAME 	= $mDB->db_get_casino_status($ConnHost, $site);
}


$PageIdx 		= isset($_GET['Page']) 			? $FNC->UDF_XSS($_GET['Page']) 			: 1;	//Page Number
$PageSize 		= isset($_GET['PageSize']) 		? $FNC->UDF_XSS($_GET['PageSize']) 		: 20;	//Date Count in a Page
$PageCnt		= 10;	//Block Count
$Q_PGAE			= " LIMIT ".($PageIdx-1)*$PageSize.", ".$PageSize;


$site_name = $SET_SITE['ss_site'];


if($mdetect->isMobile()) {   
?>

<header id="header">
	<div class="mask" style="display: none;"></div>
		<div class="wrapper">
			<a class="icon-left-menu"><span class="icon-nav2"></span></a><a class="guestmail">비회원 문의</a><a class="logo"><img src="assets/image/logo_smgame.svg" alt="logo"></a>
		<div class="btn-box"><button class="signup-btn">회원가입</button><button class="login-btn">로그인</button></div>
	</div>
</header>

<?php } else { ?>
<div>
    <div class="header headerSuccess">
        <div class="headerWrapper v_deep_header">
            <div class="home_notice">
                <div class="notice_wrap">
                    <div class="noticeIcon"><img src="image/megaPhone.svg" alt="" /></div>
                    <div class="notice_text" style="width: 928px;">
                        <div class="vue3-marquee horizontal" style="
														--duration: 8s;
														--delay: 0s;
														--direction: normal;
														--pauseOnHover: running;
														--pauseOnClick: running;
														--pauseAnimation: running;
														--loops: infinite;
														--gradient-color: rgba(255, 255, 255, 1), rgba(255, 255, 255, 0);
														--gradient-length: 200px;
														--min-width: 100%;
														--min-height: auto;
														--orientation: scrollX;
														">
                            <div class="transparent-overlay" aria-hidden="true"></div>
                            <!---->
                            <div class="marquee">
                                <span>
                                    <p>※필 독※ 타계좌, 펌뱅킹(토스, 핀크, 카카오페이), ATM 이용시 무조건 반환되며(영수증첨부필수), 매입금시 공지된 계좌로 선입금 후 충전 신청바랍니다.</p>
                                </span>
                            </div>
                            <div class="marquee" aria-hidden="true">
                                <span>
                                    <p>※필 독※ 타계좌, 펌뱅킹(토스, 핀크, 카카오페이), ATM 이용시 무조건 반환되며(영수증첨부필수), 매입금시 공지된 계좌로 선입금 후 충전 신청바랍니다.</p>
                                </span>
                            </div>
                        </div>
                        <span class="calcDuration">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;※필 독※ 타계좌, 펌뱅킹(토스, 핀크, 카카오페이), ATM 이용시 무조건 반환되며(영수증첨부필수),
                            매입금시 공지된 계좌로 선입금 후 충전 신청바랍니다.
                        </span>
                    </div>
                </div>
            </div>

            <!-- Check Log in -->
            <?php if ($is_login) { ?>
			<div class="rightZone">
				<a class="moneyZone">
					<span class="icon-icconMoneyKOREA"></span>
					<h4><?=number_format($iu_cash,0)?></h4>
					<span class="icon-icconLOAD"></span>
					<div class="fundHoverFrame">
						<div class="fundHover" style="display: none;">
							<img src="assets/image/waiting.gif" alt="">
							<span>출금 대기 중..</span>
						</div>
						<div class="fundHover" style="display: none;">
							<img src="assets/image/waiting.gif" alt="">
							<span>입금 확인 중..</span>
						</div>
					</div>
				</a>
				<a class="moneyZone">
					<img src="assets/image/p-circle.png">
					<h4><?=number_format($iu_point,0)?></h4>
					<button class="pointBtn">전환</button>
				</a>
				<a class="moneyZone">
					<div class="vip-icon"><img src="assets/image/bded750e342c4665ab59d250c84a1afd.png" alt=""></div>
					<h4>일반</h4>
				</a>
				<div class="memberZone">
					<div class="pic">
						<a class="picFrame">
							<img src="/assets/image/memPic-0aae844c.svg" alt="">
						</a>
					</div>
					<a>
						<h4><?=$iu_nick?></h4>
					</a>
					<a class="btnM greyBtn _logout_">로그아웃</a>
				</div>
			</div>
                
            <?php } else { ?>
            <div class="rightZone">
                <a id="loginBtn" class="btnN loginIcon redB"><span class="icon-icconlogin"></span>로그인</a>
                <a id="regBtn" class="btnN signupIcon blueB"><span class="icon-icconReg"></span>회원가입</a>
                <a id="contactBtn" class="btn_p goUnmember"><span class="icon-icconMemberAsk"></span>비회원 문의</a>
            </div>
            <?php } ?>
            <!---->
        </div>
    </div>
</div>

<?php } ?>