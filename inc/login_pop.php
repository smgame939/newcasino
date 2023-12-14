<?php

include_once('../class/mobiledetect.class.php');
$mdetect = new MobileDetect();

if ($mdetect->isMobile()) {
?>
    <!-- Mobile Login Popup -->
    <div data-v-2836fdb5="" data-v-c6087bcb="" class="vfm vfm--inset vfm--fixed" style="z-index: 1006;">
        <div data-v-2836fdb5="" class="vfm__overlay vfm--overlay vfm--absolute vfm--inset"></div>
        <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main popup-login model-open" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
            <div data-v-2836fdb5="" class="vfm__content modal-content">
                
                <div data-v-2836fdb5-s="" class="model-inner modal-fade-in">
                    <div data-v-2836fdb5-s="" class="model-wrap">
                        <div data-v-2836fdb5-s="" class="pop-up-content">
                            <div data-v-2836fdb5-s="" class="login-content">
                                <div data-v-2836fdb5-s="" class="close-btn"><span data-v-2836fdb5-s="" class="icon-close" id="closePop"></span></div>
                                <div data-v-2836fdb5-s="" class="input-area">
                                    <form data-v-2836fdb5-s="">
                                        <div data-v-2836fdb5-s="" class="input-list">
                                            <div data-v-2836fdb5-s="" class="list">
                                                <div data-v-2836fdb5-s="" class="txt"><span data-v-2836fdb5-s="" class="icon-id"></span></div><input name="account" type="text" placeholder="아이디" required="">
                                            </div><!---->
                                        </div>
                                        <div data-v-2836fdb5-s="" class="input-list">
                                            <div data-v-2836fdb5-s="" class="list">
                                                <div data-v-2836fdb5-s="" class="txt"><span data-v-2836fdb5-s="" class="icon-pw"></span></div><input data-v-2836fdb5-s="" type="password" placeholder="비밀번호" required="" name="password">
                                            </div><!---->
                                        </div>
                                        <div data-v-2836fdb5-s="" class="input-list security">
                                            <div data-v-2836fdb5-s="" class="list sec_key">
                                                <div data-v-2836fdb5-s="" class="txt"><span data-v-2836fdb5-s="" class="icon-login2"></span></div><input data-v-2836fdb5-s="" type="text" placeholder="보안문자" required="" name="security_key">
                                            </div><!---->
                                            <div data-v-2836fdb5-s="" class="list gen_key">
                                                <div data-v-2836fdb5-s="" class="txt gen_key">123456</div>
                                            </div><!---->
                                        </div>
                                        
                                        <div data-v-2836fdb5-s="" class="bgbtn-box"><button data-v-2836fdb5-s="" class="login-button btnColor06" type="submit">
                                                <div data-v-2836fdb5-s="">로그인</div>
                                            </button>
                                            <button data-v-2836fdb5-s="" class="signupnow-button btnColor03" type="button" onclick="$('#regBtn').click()">
                                                <div data-v-2836fdb5-s="">회원가입</div>
                                            </button>
                                            <button data-v-2836fdb5-s="" class="guestmail-button" type="button">
                                                <div data-v-2836fdb5-s="">비회원 문의</div>
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
    <!-- Desktop Login Popup -->
    <div data-v-2836fdb5="" data-v-19390e9d="" data-v-5645eacc="" class="vfm vfm--inset vfm--fixed" style="z-index: 1000;"><!--v-if-->
        <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none NAV_log" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
            <div data-v-2836fdb5="" class="vfm__content pupop_content fadeIn animated">
                <div data-v-19390e9d="" data-v-2836fdb5-s="" class="popWrapper">
                    <h5 data-v-19390e9d="" data-v-2836fdb5-s="" class="XX"><span data-v-19390e9d="" data-v-2836fdb5-s="" class="icon-iconCross" id="closePop"></span></h5>
                    <div data-v-19390e9d="" data-v-2836fdb5-s="" class="leftZone">
                        <div data-v-19390e9d="" data-v-2836fdb5-s="" class="pic"><img data-v-19390e9d="" data-v-2836fdb5-s="" src="/assets/image/popLogPic-0dd00175.png" alt=""></div>
                    </div>
                    <div data-v-19390e9d="" data-v-2836fdb5-s="" class="rightZone">
                        <div data-v-19390e9d="" data-v-2836fdb5-s="" class="top"><img data-v-19390e9d="" data-v-2836fdb5-s="" src="/assets/image/logo-6995bb1c.svg" alt=""></div>
                        <div data-v-19390e9d="" data-v-2836fdb5-s="" class="title">
                            <h2 data-v-19390e9d="" data-v-2836fdb5-s="">로그인</h2>
                        </div>
                        <form data-v-19390e9d="" data-v-2836fdb5-s="" name="login">
                            <div data-v-19390e9d="" data-v-2836fdb5-s="" class="up">
                                <div data-v-19390e9d="" data-v-2836fdb5-s="" class="input_zone">
                                    <div data-v-19390e9d="" data-v-2836fdb5-s="" class="inputFrame">
                                        <div data-v-19390e9d="" data-v-2836fdb5-s="" class="txtT">아이디</div>
                                        <div data-v-19390e9d="" data-v-2836fdb5-s="" class="input_content"><input data-v-19390e9d="" name="account" type="text" class="account txtColor010 bgColor09 bdColor03" placeholder="아이디" required="">
                                            <div data-v-19390e9d="" data-v-2836fdb5-s="" class="check"></div><!---->
                                        </div>
                                    </div>
                                    <div data-v-19390e9d="" data-v-2836fdb5-s="" class="inputFrame">
                                        <div data-v-19390e9d="" data-v-2836fdb5-s="" class="txtT">비밀번호</div>
                                        <div data-v-19390e9d="" data-v-2836fdb5-s="" class="input_content"><input data-v-19390e9d="" data-v-2836fdb5-s="" class="pw txtColor010 bgColor09 bdColor03" type="password" placeholder="비밀번호" name="password"><!----></div>
                                    </div>
                                </div>

                                <div data-v-19390e9d="" data-v-2836fdb5-s="" class="btnZone">
                                    <div data-v-19390e9d="" data-v-2836fdb5-s="" class="btnFrame"><button data-v-19390e9d="" data-v-2836fdb5-s="" type="submit" class="btn_p">로그인</button><button data-v-19390e9d="" data-v-2836fdb5-s="" type="button" class="btn_p goUnmember blueB">비회원 문의</button></div>
                                    <div data-v-19390e9d="" data-v-2836fdb5-s="" class="txtZone"><a data-v-19390e9d="" data-v-2836fdb5-s=""></a><a data-v-19390e9d="" data-v-2836fdb5-s="" class="goREG">아직 계정이 없습니까?<span data-v-19390e9d="" data-v-2836fdb5-s="" onclick="$('#regBtn').click()">여기에서 회원가입하기</span></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--v-if-->
            </div>
        </div>
    </div>
<?php } ?>