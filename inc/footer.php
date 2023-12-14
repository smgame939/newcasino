<?php
include_once('class/mobiledetect.class.php');
include('inc/versions.php');
$mdetect = new MobileDetect();
?>

<div class="footer footer_notice">
    <div class="footerWrapper">
        <div class="topZone">
            <div class="leftZone">
                <div class="logos"><img src="./assets/image/logo_<?=$site_name?>.svg" alt=""></div>
                <div class="txt"> COPYRIGHT 2023, <?=$site_name?>. ALL RIGHTS RESERVED. GAMBLING CAN BE ADDICTIVE, PLEASE
                    PLAY RESPONSIBLY. FOR MORE INFORMATION ON SUPPORT TOOLS, PLEASE VISIT OUR RESPONSIBLE GAMBLING
                    PAGE<br>PAYMENT SUPPORTED BY </div>
                <div class="chatZone partner"></div>
            </div>
            <div class="footRframe">
                <div class="centerZone">
                    <div class="title"><?=$site_name?> <span>HELP</span></div>
                    <div class="content">
                        <ul>
                            <li class="iconANI"><a href="#"><span class="icon-iiconService icon-icconService01"></span>
                                    <div class="txt">고객센터</div>
                                </a></li><!---->
                            <li class="iconANI"><a href="#"><span class="icon-icconCooperation"></span>
                                    <div class="txt">파트너 제휴</div>
                                </a></li>
                            <li class="iconANI iconTG"><a href="#"><span class="icon-icconTELEGRAM"></span>
                                    <div class="txt">공식채널 텔레그램</div>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="rightZone01">
                    <div class="links">
                        <div class="title">회사소개</div>
                        <div class="content">
                            <div class="left01"><a>회사소개</a></div>
                        </div>
                    </div>
                    <div class="links">
                        <div class="title">베팅규정</div>
                        <div class="content">
                            <div class="left01"><a>카지노</a><a>슬롯</a><a>스포츠실시간</a><a>스포츠</a><a>미니게임</a><a>가상게임</a></div>
                        </div>
                    </div>
                    <div class="links">
                        <div class="title">게임소개</div>
                        <div class="content">
                            <div class="left01"><a>카지노</a><a>슬롯</a><a>스포츠실시간</a><a>스포츠</a><a>미니게임</a><a>가상게임</a></div>
                        </div>
                    </div>
                    <div class="links">
                        <div class="title">언어</div>
                        <div class="content">
                            <div class="left01"><a>한국어</a><a>简体中文</a><a>English</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="downZone">
            <div class="thirdLogo" width="100%" id="scrollContainer">
                <div class="footerLogo scrollContent">
                    <div class="third02"><img src="../image/ag_logo_color.png" alt="Logo 0"></div>
                    <div class="third03"><img src="../image/microgaming_logo_color.png" alt="Logo 1"></div>
                    <div class="third08"><img src="../image/pragmatic_logo_color.png" alt="Logo 2"></div>
                    <div class="third09"><img src="../image/pgsoft_logo_color.png" alt="Logo 3"></div>
                    <div class="third14"><img src="../image/bigtime_logo_color.png" alt="Logo 4"></div>
                    <div class="third07"><img src="../image/habanero_logo_color.png" alt="Logo 5"></div>
                    <div class="third12"><img src="../image/betradar_logo_color.png" alt="Logo 6"></div>
                    <div class="third10"><img src="../image/ameba_logo_color.png" alt="Logo 7"></div>
                    <div class="third04"><img src="../image/wm_logo_color.png" alt="Logo 8"></div>
                    <div class="third05"><img src="../image/og_logo_color.png" alt="Logo 9"></div>
                    <div class="third06"><img src="../image/allbet_logo_color.png" alt="Logo 10"></div>
                    <div class="third13"><img src="../image/dreamgaming_logo_color.png" alt="Logo 11"></div>
                    <div class="third02"><img src="../image/ag_logo_color.png" alt="Logo 12"></div>
                    <div class="third03"><img src="../image/microgaming_logo_color.png" alt="Logo 13"></div>
                    <div class="third08"><img src="../image/pragmatic_logo_color.png" alt="Logo 14"></div>
                    <div class="third09"><img src="../image/pgsoft_logo_color.png" alt="Logo 15"></div>
                    <div class="third14"><img src="../image/bigtime_logo_color.png" alt="Logo 16"></div>
                    <div class="third07"><img src="../image/habanero_logo_color.png" alt="Logo 17"></div>
                    <div class="third12"><img src="../image/betradar_logo_color.png" alt="Logo 18"></div>
                    <div class="third10"><img src="../image/ameba_logo_color.png" alt="Logo 19"></div>
                    <div class="third04"><img src="../image/wm_logo_color.png" alt="Logo 20"></div>
                    <div class="third05"><img src="../image/og_logo_color.png" alt="Logo 21"></div>
                    <div class="third06"><img src="../image/allbet_logo_color.png" alt="Logo 22"></div>
                    <div class="third13"><img src="../image/dreamgaming_logo_color.png" alt="Logo 23"></div>
                </div>
            </div>
        </div>
    </div>
    <div style="color:white">
        <?php
        /*
        if($mdetect->isMobile()){ 
            // Detect mobile/tablet  
            if($mdetect->isTablet()){ 
                echo 'Tablet Device Detected!<br/>'; 
            }else{ 
                echo 'Mobile Device Detected!<br/>'; 
            } 
             
            // Detect platform 
            if($mdetect->isiOS()){ 
                echo 'IOS'; 
            }elseif($mdetect->isAndroidOS()){ 
                echo 'ANDROID'; 
            } 
        }else{ 
            echo 'Desktop Detected!'; 
        }
    */
        ?>
    </div>
</div>