<?php

include_once('../class/mobiledetect.class.php');
$mdetect = new MobileDetect();

if ($mdetect->isMobile()) {
?>
<!-- Mobile -->
<div data-v-2836fdb5="" data-v-56cc6f06="" class="vfm vfm--inset vfm--fixed" show-modal="true" style="z-index: 1006;">
    <div data-v-2836fdb5="" class="vfm__overlay vfm--overlay vfm--absolute vfm--inset"></div>
    <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main popup-guestmail model-open" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
        <div data-v-2836fdb5="" class="vfm__content">
            
            <div data-v-2836fdb5-s="" class="model-inner">
                <div data-v-2836fdb5-s="" class="model-wrap">
                    <div data-v-2836fdb5-s="" class="pop-up-content"><!---->
                    <div data-v-2836fdb5-s="" class="close-btn"><span data-v-2836fdb5-s="" class="icon-close" id="closePop"></span></div>
                        <div data-v-2836fdb5-s="" class="account-problem-content">
                            <div data-v-2836fdb5-s="" class="titleP"><b data-v-2836fdb5-s="">비회원 문의</b><span data-v-2836fdb5-s="">Guest Mail Service</span></div>
                            <div data-v-2836fdb5-s="" class="input-area">
                                <form data-v-2836fdb5-s="" action="">
                                    <div data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-2836fdb5-s="" class="list full-list">
                                            <div data-v-2836fdb5-s="" class="txt">성명：</div>
                                            <div data-v-2836fdb5-s="" class="input"><input data-v-2836fdb5-s="" name="Name" type="text" placeholder="이름을 입력해주세요."></div>
                                        </div>
                                    </div>
                                    <div data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-2836fdb5-s="" class="list full-list">
                                            <div data-v-2836fdb5-s="" class="txt">연락처：</div>
                                            <div data-v-2836fdb5-s="" class="input"><input data-v-2836fdb5-s="" name="Mobile" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="전화 번호를 남겨주세요."></div>
                                        </div>
                                    </div>
                                    <div data-v-2836fdb5-s="" class="input-list">
                                        <div data-v-2836fdb5-s="" class="list full-list">
                                            <div data-v-2836fdb5-s="" class="txt">내용：</div><textarea data-v-2836fdb5-s="" name="Content" cols="30" rows="10" placeholder="문의 내용과 가입하신 아이디를 남겨주시면, 등록 된 휴대폰번호로 SMS 문자 혹은 전화를 통해 안내드리겠습니다."></textarea>
                                        </div>
                                    </div>
                                    <div data-v-2836fdb5-s="" class="btn-center"><button data-v-2836fdb5-s="" class="send-mail-button" type="button">
                                            <div data-v-2836fdb5-s="">문의요청</div>
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
<div data-v-2836fdb5="" data-v-5645eacc="" class="vfm vfm--inset vfm--fixed" style="z-index: 1000;"><!--v-if-->
    <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main model-open NAV_nonmember" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
        <div data-v-2836fdb5="" class="vfm__content pupop_content fadeIn animated">
            <div data-v-2836fdb5-s="" class="popWrapper">
                <h5 data-v-2836fdb5-s="" class="XX"><span data-v-2836fdb5-s="" class="icon-iconCross" id="closePop"></span></h5>
                <div data-v-2836fdb5-s="" class="titlePic">
                    <div data-v-2836fdb5-s="" class="titlePwrapper">
                        <div data-v-2836fdb5-s="" class="leftZone"><span data-v-2836fdb5-s="" class="icon-iiconLogoB"></span>
                            <h4 data-v-2836fdb5-s="">SMGame</h4><span data-v-2836fdb5-s="">비회원 문의</span>
                        </div>
                        <div data-v-2836fdb5-s="" class="line"></div>
                    </div>
                </div>
                <div data-v-2836fdb5-s="" class="contentZone">
                    <div data-v-2836fdb5-s="" class="leftZone">
                        <div data-v-2836fdb5-s="" class="pic"><img data-v-2836fdb5-s="" src="/assets/image/popLogPic01-c8126568.png" alt=""></div>
                    </div>
                    <div data-v-2836fdb5-s="" class="rightZone">
                        <div data-v-2836fdb5-s="" class="up">
                            <div data-v-2836fdb5-s="" class="input_zone">
                                <div data-v-2836fdb5-s="" class="inputFrame">
                                    <div data-v-2836fdb5-s="" class="txtT">성명</div>
                                    <div data-v-2836fdb5-s="" class="input_content"><input data-v-2836fdb5-s="" name="Name" class="account txtColor010 bgColor09 bdColor03" placeholder="이름을 입력해주세요."></div>
                                </div>
                                <div data-v-2836fdb5-s="" class="inputFrame">
                                    <div data-v-2836fdb5-s="" class="txtT">연락처</div>
                                    <div data-v-2836fdb5-s="" class="input_content"><input data-v-2836fdb5-s="" name="Mobile" class="pw txtColor010 bgColor09 bdColor03" placeholder="전화 번호를 남겨주세요."></div>
                                </div>
                                <div data-v-2836fdb5-s="" class="inputFrame">
                                    <div data-v-2836fdb5-s="" class="txtT">내용</div>
                                    <div data-v-2836fdb5-s="" class="areaFrame"><textarea data-v-2836fdb5-s="" name="Content" class="Content txtColor010 bgColor09 bdColor03" placeholder="문의 내용과 가입하신 아이디를 남겨주시면, 등록 된 휴대폰번호로 SMS 문자 혹은 전화를 통해 안내드리겠습니다."></textarea></div>
                                </div>
                            </div>
                            <div data-v-2836fdb5-s="" class="btnZone">
                                <div data-v-2836fdb5-s="" class="btnFrame"><button data-v-2836fdb5-s="" class="btn_p goAlertMem greyBtn">문의요청</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--v-if-->
        </div>
    </div>
</div>
<?php } ?>