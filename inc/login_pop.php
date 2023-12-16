<?php

include_once('../class/mobiledetect.class.php');
$mdetect = new MobileDetect();

if ($mdetect->isMobile()) {
?>
    <!-- Mobile Login Popup -->
    <div class="vfm vfm--inset vfm--fixed" style="z-index: 1006;">
        <div class="vfm__overlay vfm--overlay vfm--absolute vfm--inset"></div>
        <div class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main popup-login model-open" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
            <div class="vfm__content modal-content">
                
                <div class="model-inner modal-fade-in">
                    <div class="model-wrap">
                        <div class="pop-up-content">
                            <div class="login-content">
                                <div class="close-btn" id="closePop"><span class="icon-close"></span></div>
                                <div class="input-area">
                                    <form>
                                        <div class="input-list">
                                            <div class="list">
                                                <div class="txt"><span class="icon-id"></span></div><input name="account" type="text" placeholder="아이디" required="">
                                            </div>
                                        </div>
                                        <div class="input-list">
                                            <div class="list">
                                                <div class="txt"><span class="icon-pw"></span></div><input type="password" placeholder="비밀번호" required="" name="password">
                                            </div><!---->
                                        </div>
                                        <div class="input-list security">
                                            <div class="list sec_key">
                                                <div class="txt"><span class="icon-login2"></span></div><input type="text" placeholder="보안문자" required="" name="security_key">
                                            </div><!---->
                                            <div class="list gen_key">
                                                <div class="txt gen_key">123456</div>
                                            </div><!---->
                                        </div>
                                        
                                        <div class="bgbtn-box"><button class="login-button btnColor06" type="submit">
                                                <div>로그인</div>
                                            </button>
                                            <button class="signupnow-button btnColor03" type="button" onclick="$('#regBtn').click()">
                                                <div>회원가입</div>
                                            </button>
                                            <button class="guestmail-button" type="button">
                                                <div>비회원 문의</div>
                                            </button>
										</div>
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
    <div class="vfm vfm--inset vfm--fixed" style="z-index: 1000;"><!--v-if-->
        <div class="vfm__container vfm--absolute vfm--inset vfm--outline-none NAV_log" aria-expanded="true" role="dialog" aria-modal="true" tabindex="-1" style="">
            <div class="vfm__content pupop_content fadeIn animated">
                <div class="popWrapper">
                    <h5 class="XX" id="closePop"><span class="icon-iconCross"></span></h5>
                    <div class="leftZone">
                        <div class="pic"><img src="/assets/image/popLogPic-0dd00175.png" alt=""></div>
                    </div>
                    <div class="rightZone">
                        <div class="top"><img src="/assets/image/logo-6995bb1c.svg" alt=""></div>
                        <div class="title">
                            <h2 >로그인</h2>
                        </div>
                        <form id="frm2" name="login">
                            <div class="up">
                                <div class="input_zone">
                                    <div class="inputFrame">
                                        <div class="txtT">아이디</div>
                                        <div class="input_content"><input name="U_ID" type="text" class="account txtColor010 bgColor09 bdColor03" placeholder="아이디" required="" value="">
                                            <div class="check"></div>
                                        </div>
                                    </div>
                                    <div class="inputFrame">
                                        <div class="txtT">비밀번호</div>
                                        <div class="input_content"><input class="pw txtColor010 bgColor09 bdColor03" type="password" placeholder="비밀번호" name="U_PW"  value=""  ref="frm2"></div>
                                    </div>
                                </div>

                                <div class="btnZone">
                                    <div class="btnFrame"><button type="button" class="btn_p _LOGIN_"  ref="frm2">로그인</button><button type="button" class="btn_p goUnmember blueB">비회원 문의</button></div>
                                    <div class="txtZone"><a></a><a class="goREG">아직 계정이 없습니까?<span onclick="$('#regBtn').click()">여기에서 회원가입하기</span></a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		function Login(frm) {
			$.ajax({
				url: '/post/Login.php',
				type: 'POST',
				data: $("#" + frm).serialize(),
				success: function(data) {
					if (data == "success") {
						location.href = "/index.php";
					} else {
						$("input[name='U_ID']").val("");
						$("input[name='U_PW']").val("");
						alert(data);
					}
				}
			});
		}

		$("input[name='U_PW']").keydown(function(key) {
			var frm = $(this).attr("ref");
			if (key.keyCode == 13) {
				Login(frm);
			}
		});

		$("._LOGIN_").on('click', function(e) {
			var frm = $(this).attr("ref");
			Login(frm);
		});
	</script>
<?php } ?>