<?php

include_once('../class/mobiledetect.class.php');
$mdetect = new MobileDetect();

if ($mdetect->isMobile()) {
?>
<!-- Mobile -->
<div class="vfm vfm--inset vfm--fixed" show-modal="true" style="z-index: 1006;">
    <div class="vfm__overlay vfm--overlay vfm--absolute vfm--inset"></div>
    <div class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main popup-guestmail model-open" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
        <div class="vfm__content">
            
            <div class="model-inner">
                <div class="model-wrap">
                    <div class="pop-up-content"><!---->
                    <div class="close-btn" id="closePop"><span class="icon-close"></span></div>
                        <div class="account-problem-content">
                            <div class="titleP"><b>비회원 문의</b><span>Guest Mail Service</span></div>
                            <div class="input-area">
                                <form action="">
                                    <div class="input-list">
                                        <div class="list full-list">
                                            <div class="txt">성명：</div>
                                            <div class="input"><input name="Name" type="text" placeholder="이름을 입력해주세요."></div>
                                        </div>
                                    </div>
                                    <div class="input-list">
                                        <div class="list full-list">
                                            <div class="txt">연락처：</div>
                                            <div class="input"><input name="Mobile" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="전화 번호를 남겨주세요."></div>
                                        </div>
                                    </div>
                                    <div class="input-list">
                                        <div class="list full-list">
                                            <div class="txt">내용：</div><textarea name="Content" cols="30" rows="10" placeholder="문의 내용과 가입하신 아이디를 남겨주시면, 등록 된 휴대폰번호로 SMS 문자 혹은 전화를 통해 안내드리겠습니다."></textarea>
                                        </div>
                                    </div>
                                    <div class="btn-center"><button class="send-mail-button" type="button">
                                            <div>문의요청</div>
                                        </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--v-if-->
        </div>
    </div>
</div>

<?php } else { ?>
<!-- Desktop -->
<div class="vfm vfm--inset vfm--fixed" style="z-index: 1000;"><!--v-if-->
    <div class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main model-open NAV_nonmember" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
        <div class="vfm__content pupop_content fadeIn animated">
            <div class="popWrapper">
                <h5 class="XX" id="closePop"><span class="icon-iconCross"></span></h5>
                <div class="titlePic">
                    <div class="titlePwrapper">
                        <div class="leftZone"><span class="icon-iiconLogoB"></span>
                            <h4>SMGame</h4><span>비회원 문의</span>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="contentZone">
                    <div class="leftZone">
                        <div class="pic"><img src="/assets/image/popLogPic01-c8126568.png" alt=""></div>
                    </div>
                    <div class="rightZone">
                        <div class="up">
                            <div class="input_zone">
                                <div class="inputFrame">
                                    <div class="txtT">성명</div>
                                    <div class="input_content"><input name="Name" class="account txtColor010 bgColor09 bdColor03" placeholder="이름을 입력해주세요."></div>
                                </div>
                                <div class="inputFrame">
                                    <div class="txtT">연락처</div>
                                    <div class="input_content"><input name="Mobile" class="pw txtColor010 bgColor09 bdColor03" placeholder="전화 번호를 남겨주세요."></div>
                                </div>
                                <div class="inputFrame">
                                    <div class="txtT">내용</div>
                                    <div class="areaFrame"><textarea name="Content" class="Content txtColor010 bgColor09 bdColor03" placeholder="문의 내용과 가입하신 아이디를 남겨주시면, 등록 된 휴대폰번호로 SMS 문자 혹은 전화를 통해 안내드리겠습니다."></textarea></div>
                                </div>
                            </div>
                            <div class="btnZone">
                                <div class="btnFrame"><button class="btn_p goAlertMem greyBtn">문의요청</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--v-if-->
        </div>
    </div>
</div>
<?php } ?>