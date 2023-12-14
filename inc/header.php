<?php 
    include_once('class/mobiledetect.class.php');
    include('inc/versions.php');
    $mdetect = new MobileDetect();

    // FOR LOG IN TESTING
    $logged_in = '0';

    if($mdetect->isMobile()) {   
?>

<header data-v-77826c5e="" data-v-c6087bcb="" id="header">
          <div data-v-77826c5e="" class="mask" style="display: none;"></div>
          <div data-v-77826c5e="" class="wrapper"><a data-v-77826c5e="" class="icon-left-menu"><span data-v-77826c5e="" class="icon-nav2"></span></a><a data-v-77826c5e="" class="guestmail">비회원 문의</a><a data-v-77826c5e="" class="logo"><img data-v-77826c5e="" src="assets/image/logo_smgame.svg" alt="logo"></a>
            <div data-v-77826c5e="" class="btn-box"><button data-v-77826c5e="" class="signup-btn">회원가입</button><button data-v-77826c5e="" class="login-btn">로그인</button></div><!----><!---->
          </div>
        </header>

<?php } else { ?>
<div data-v-5645eacc="" data-v-79613b41="">
    <div data-v-5645eacc="" class="header headerSuccess">
        <div data-v-5645eacc="" class="headerWrapper v_deep_header">
            <div data-v-95e6c9ff="" data-v-5645eacc="" class="home_notice">
                <div data-v-95e6c9ff="" class="notice_wrap">
                    <div data-v-95e6c9ff="" class="noticeIcon"><img data-v-95e6c9ff="" src="image/megaPhone.svg" alt="" /></div>
                    <div data-v-95e6c9ff="" class="notice_text" style="width: 928px;">
                        <div data-v-95e6c9ff="" class="vue3-marquee horizontal" style="
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
                                <span data-v-95e6c9ff="">
                                    <p>※필 독※ 타계좌, 펌뱅킹(토스, 핀크, 카카오페이), ATM 이용시 무조건 반환되며(영수증첨부필수), 매입금시 공지된 계좌로 선입금 후 충전 신청바랍니다.</p>
                                </span>
                            </div>
                            <div class="marquee" aria-hidden="true">
                                <span data-v-95e6c9ff="">
                                    <p>※필 독※ 타계좌, 펌뱅킹(토스, 핀크, 카카오페이), ATM 이용시 무조건 반환되며(영수증첨부필수), 매입금시 공지된 계좌로 선입금 후 충전 신청바랍니다.</p>
                                </span>
                            </div>
                        </div>
                        <span data-v-95e6c9ff="" class="calcDuration">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;※필 독※ 타계좌, 펌뱅킹(토스, 핀크, 카카오페이), ATM 이용시 무조건 반환되며(영수증첨부필수),
                            매입금시 공지된 계좌로 선입금 후 충전 신청바랍니다.
                        </span>
                    </div>
                </div>
            </div>

            <!-- Check Log in -->
            <?php if ($logged_in === '1') { ?>
                <div data-v-5645eacc="" class="rightZone"><a data-v-5645eacc="" class="moneyZone"><span data-v-5645eacc="" class="icon-icconMoneyKOREA"></span><h4 data-v-5645eacc="">0</h4><span data-v-5645eacc="" class="icon-icconLOAD"></span><div data-v-5645eacc="" class="fundHoverFrame"><div data-v-5645eacc="" class="fundHover" style="display: none;"><img data-v-5645eacc="" src="assets/image/waiting.gif" alt=""><span data-v-5645eacc="">출금 대기 중..</span></div><div data-v-5645eacc="" class="fundHover" style="display: none;"><img data-v-5645eacc="" src="assets/image/waiting.gif" alt=""><span data-v-5645eacc="">입금 확인 중..</span></div></div></a><a data-v-5645eacc="" class="moneyZone"><img data-v-5645eacc="" src="assets/image/p-circle.png"><h4 data-v-5645eacc="">0</h4><button data-v-5645eacc="" class="pointBtn">전환</button></a><a data-v-5645eacc="" class="moneyZone"><div data-v-5645eacc="" class="vip-icon"><img data-v-5645eacc="" src="assets/image/bded750e342c4665ab59d250c84a1afd.png" alt=""></div><h4 data-v-5645eacc="">일반</h4></a><div data-v-5645eacc="" class="memberZone"><div data-v-5645eacc="" class="pic"><a data-v-5645eacc="" class="picFrame"><img data-v-5645eacc="" src="/assets/image/memPic-0aae844c.svg" alt=""></a><!----></div><a data-v-5645eacc=""><h4 data-v-5645eacc="">UserTest123</h4></a><a data-v-5645eacc="" class="btnM greyBtn">로그아웃</a></div></div>
                
            <?php } else { ?>
            <div data-v-5645eacc="" class="rightZone">
                <a id="loginBtn" data-v-5645eacc="" class="btnN loginIcon redB"><span data-v-5645eacc="" class="icon-icconlogin"></span>로그인</a>
                <a id="regBtn" data-v-5645eacc="" class="btnN signupIcon blueB"><span data-v-5645eacc="" class="icon-icconReg"></span>회원가입</a>
                <a id="contactBtn" data-v-5645eacc="" class="btn_p goUnmember"><span data-v-5645eacc="" class="icon-icconMemberAsk"></span>비회원 문의</a>
            </div>
            <?php } ?>
            <!---->
        </div>
    </div>
</div>

<?php } ?>