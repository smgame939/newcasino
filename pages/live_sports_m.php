<div id="app" data-v-app="" class="webp">
    <div><!---->
        <?php include('inc/sidemenu_m.php'); ?>
        <section data-v-56cc6f06="" id="out-wrapper" class="out-wrapper-minigame"><!---->
            <?php include('inc/header_m.php'); ?>
            <section data-v-56cc6f06="" id="content" class="">
                <div data-v-0fbe4765="" data-v-56cc6f06="" id="js_iframe_wrap" style="position: fixed;">
                    <div id="app" class="webp" data-v-app=""><!-- <AppMain /> -->
                       
                            <div class="main_content_continer" version="1.0.98" data-v-1e0c81da="">
                                <section class="euMode" data-v-1e0c81da="">
                                    <div class="wrapsport" data-v-1e0c81da=""><!--v-if--><!-- <ul class="tab-list" :style="{ 'margin-top': `-${scrollHeight}px` }"> -->
                                        <ul class="tab-list" data-v-1e0c81da="">
                                            <li id="live_sp" class="live-select active" data-v-1e0c81da=""><a data-v-1e0c81da="">스포츠실시간</a></li>
                                            <li id="live_eu" class="live-select" data-v-1e0c81da=""><a data-v-1e0c81da="">스포츠</a></li>
                                        </ul><!-- <div class="wrapper" id="wrapper-hide" :style="{ 'padding-bottom': `${scrollHeight}px` }"> -->
                                        <div class="wrapper" id="wrapper-hide" data-v-1e0c81da=""><!-- <keep-alive> --><!-- 快速設定賠率 --><!-- 模式開關 -->
                                            <div class="odds-setting-panel">
                                                <div class="odds-setting-content">
                                                    <div class="control-box"><!-- switch -->
                                                        <div class="switch-content"><label class="toggle"><input class="toggle-checkbox" type="checkbox" disabled="">
                                                                <div class="toggle-switch"></div><span class="toggle-label">퀵 베팅</span>
                                                            </label>
                                                            <p class="icon-quick-betrule quickbet-btn"></p>
                                                            <div class="stick-on hide"><!-- input on -->
                                                                <div class="on">
                                                                    <p>베팅금: 1,000</p><button class="confirm-edit">편집</button>
                                                                </div><!-- input edit -->
                                                                <div class="edit" style="display: none;"><input type="text" placeholder="" disabled=""><button class="confirm-amount">선택</button></div>
                                                            </div>
                                                        </div><!-- 設定 --><a href="javascript: void(0)" class="icon-setting"></a>
                                                        <div class="alarm odd-alarm hide"><span class="icon-alarm"></span>
                                                            <div>금액 수정후 베팅해주세요(단폴만 가능)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- 賠率變動時選擇 -->
                                            <div class="odds-change-panel" style="display: none;">
                                                <div class="head">
                                                    <p>배당율이 변경될 경우 :</p><span class="icon-close close-change-panel"></span>
                                                </div>
                                                <div class="container">
                                                    <div class="radio"><input type="radio" id="radio-0" name="movement" value="AlwaysAsk"><label for="radio-0" class="radio-label">항상 물어보기</label></div>
                                                    <div class="radio"><input type="radio" id="radio-1" name="movement" value="HigherOdds"><label for="radio-1" class="radio-label">더 높은 배당율로 수락</label></div>
                                                    <div class="radio"><input type="radio" id="radio-2" name="movement" value="AnyOdds"><label for="radio-2" class="radio-label">모든 배당율로 수락</label></div>
                                                </div>
                                            </div>
                                            <div class="tabZone" data-v-e64bad56="" data-v-3c23989a="">
                                                <div class="tabFrame" data-v-e64bad56="">
                                                    <ul data-v-e64bad56="">
                                                        <ul id="livesports_tab" class="tab-type" data-v-e64bad56="">
                                                            <li class="" data-v-e64bad56=""><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56="">0</span>
                                                                    <div class="tab-logo sp-tab-favorite" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56="">즐겨찾기</div>
                                                                </a></li>
                                                            <li class="active" data-v-e64bad56=""><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56="">388</span>
                                                                    <div class="tab-logo sp-tab-all" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56="">전체</div>
                                                                </a></li>
                                                            <li class="" data-v-e64bad56="" style="display: none;"><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56=""></span>
                                                                    <div class="tab-logo sp-tab-worldcup" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56=""></div>
                                                                </a></li>
                                                            <li class="" data-v-e64bad56=""><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56="">142</span>
                                                                    <div class="tab-logo sp-tab-soccer" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56="">축구</div>
                                                                </a></li>
                                                            <li class="" data-v-e64bad56=""><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56="">87</span>
                                                                    <div class="tab-logo sp-tab-basketball" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56="">농구</div>
                                                                </a></li>
                                                            <li class="" data-v-e64bad56=""><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56="">6</span>
                                                                    <div class="tab-logo sp-tab-baseball" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56="">야구</div>
                                                                </a></li>
                                                            <li class="" data-v-e64bad56=""><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56="">62</span>
                                                                    <div class="tab-logo sp-tab-volleyball" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56="">배구</div>
                                                                </a></li>
                                                            <li class="" data-v-e64bad56=""><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56="">46</span>
                                                                    <div class="tab-logo sp-tab-icehockey" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56="">아이스 하키</div>
                                                                </a></li><!-- esport start -->
                                                            <li class="" data-v-e64bad56=""><a data-v-e64bad56=""><span class="g-amount" data-v-e64bad56="">45</span>
                                                                    <div class="tab-logo sp-tab-esport" data-v-e64bad56=""></div>
                                                                    <div class="tab-name" data-v-e64bad56="">eSports</div>
                                                                </a></li><!-- esport end -->
                                                        </ul>
                                                    </ul>
                                                </div>
                                            </div><!--v-if-->
                                            <div class="chooseZone" data-v-3c23989a="">
                                                <div id="livesports_tab" class="tab-content-box sport-box sport-eu" data-v-3c23989a="">
                                                    <div id="tab1" class="tab-content" data-v-3c23989a="">
                                                        <div class="head-league" data-v-3c23989a="">
                                                            <p class="show-league"><span class="icon-filter"></span>리그</p><button class="sp-result">경기결과</button>
                                                        </div>
                                                        <div id="live-sports-tab"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="model-main popup-betcar" data-v-a74366be="">
                                                <div class="model-inner" data-v-a74366be="">
                                                    <div class="model-wrap" data-v-a74366be="">
                                                        <div class="pop-up-content" data-v-a74366be=""><!-- 關閉 -->
                                                            <div class="close-btn" data-v-a74366be=""><span class="icon-close" data-v-a74366be=""></span></div><!-- 關閉 --><!-- 標題 -->
                                                            <div class="head-top" data-v-a74366be="">
                                                                <div class="title-name" data-v-a74366be=""><b class="titleP" data-v-a74366be="">베팅카트</b></div>
                                                            </div><!-- tab -->
                                                            <div class="cart-tab" data-v-a74366be="">
                                                                <ul id="tabs_cart" class="tab-list" data-v-a74366be="">
                                                                    <li class="active" data-v-a74366be=""><a href="javascript:void(0);" data-v-a74366be="">베팅카트</a></li>
                                                                    <li class="" data-v-a74366be=""><a href="javascript:void(0);" data-v-a74366be="">베팅 기록</a></li>
                                                                </ul>
                                                            </div><!-- tab內容 -->
                                                            <div id="tab_cart" class="tab-content-betcart" data-v-a74366be=""><!-- Favorite -->
                                                                <div id="tab10" class="tab-content-cart" data-v-a74366be="">
                                                                    <div class="cart-btns" data-v-a74366be=""><button class="refresh" data-v-a74366be="">새로고침</button><button class="clear-all" data-v-a74366be="">모두 삭제</button></div>
                                                                    <div class="scroll-panel" data-v-a74366be="">
                                                                        <div class="main-content" data-v-a74366be="">
                                                                            <ul data-v-a74366be=""><!-- 一個大項--></ul>
                                                                        </div>
                                                                        <div class="main-content bet-panel" data-v-a74366be="">
                                                                            <ul data-v-a74366be="">
                                                                                <li data-v-a74366be=""><!-- header上方大項目 -->
                                                                                    <div class="head-panel" data-v-a74366be="">
                                                                                        <div class="info" data-v-a74366be=""><span data-v-a74366be="">선택폴더</span></div>
                                                                                        <div class="total-amount" data-v-a74366be="">0 폴더</div>
                                                                                    </div><!-- 詳細內容 -->
                                                                                    <div class="main-panel" data-v-a74366be="">
                                                                                        <div class="item" data-v-a74366be="">
                                                                                            <div class="list" data-v-a74366be=""><span data-v-a74366be="">배당율 합계</span><span class="odds" data-v-a74366be="">0.00</span></div>
                                                                                            <div class="list" data-v-a74366be=""><span data-v-a74366be="">당첨 예상금액</span><span class="odds win" data-v-a74366be="">0 원</span></div>
                                                                                            <div class="list" data-v-a74366be=""><span data-v-a74366be="">베팅 금액</span><input type="text" class="" placeholder="금액을 입력해주세요." disabled="" data-v-a74366be=""></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="num-keyboard-panel" data-v-a74366be="">
                                                                                    <div class="amount-btns" data-v-a74366be="">
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">1</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">2</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">3</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">4</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">5</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">6</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">7</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">8</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">9</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">MAX</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><span data-v-a74366be="">0</span></div>
                                                                                        <div class="as-btns" data-v-a74366be=""><img src="/assets/key-delet.57f9c95e.png" alt="" data-v-a74366be=""></div>
                                                                                    </div>
                                                                                    <div class="change-btns" data-v-a74366be=""><button class="" data-v-a74366be="">1만</button><button class="" data-v-a74366be="">5만</button><button class="" data-v-a74366be="">10만</button><input type="text" class="" placeholder="금액을 입력해주세요." data-v-a74366be="" style="display: none;"><input type="text" class="" placeholder="금액을 입력해주세요." data-v-a74366be="" style="display: none;"><input type="text" class="" placeholder="금액을 입력해주세요." data-v-a74366be="" style="display: none;"><button class="edit-btn" data-v-a74366be="">
                                                                                            <div data-v-a74366be="">수정</div><img class="edit" src="/assets/bet-check.cdb321f3.png" alt="" data-v-a74366be="" style="display: none;">
                                                                                        </button></div>
                                                                                    <p class="hint-txt" data-v-a74366be="" style="display: none;">배당, 베팅항목 및 유효성이 변경되었습니다</p>
                                                                                </li>
                                                                                <li class="num-keyboard-panel btns" data-v-a74366be=""><button class="cancel" data-v-a74366be="">금액리셋</button><button class="submit" data-v-a74366be=""><img src="/assets/bet-check.cdb321f3.png" data-v-a74366be=""><img src="/assets/loading.4a880ae5.gif" alt="" class="loading" data-v-a74366be="" style="display: none;"> 베팅하기</button></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="total-box-h" data-v-a74366be="">
                                                                            <div class="total-list" data-v-a74366be=""><span data-v-a74366be="">최소 베팅금액</span><b class="point" data-v-a74366be="">1,000 원</b></div>
                                                                            <div class="total-list" data-v-a74366be=""><span data-v-a74366be="">최대 베팅금액</span><b data-v-a74366be="">0 원</b></div>
                                                                        </div>
                                                                        <div class="cart-status-bar error" data-v-a74366be="" style="display: none;">
                                                                            <p data-v-a74366be=""><img src="/assets/animation_waiting.15170cb6.gif" alt="" data-v-a74366be="" style="display: none;"><img src="/assets/icon-success.0b3bf1a1.svg" alt="" data-v-a74366be="" style="display: none;"><img src="/assets/icon-error.f0c2208e.svg" alt="" data-v-a74366be=""> </p><span class="icon-arrow-right" data-v-a74366be=""></span>
                                                                        </div>
                                                                        <div class="spaceBar" data-v-a74366be="">&nbsp;</div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- 종합 TODO: -->
                                                            <div id="tab11" class="tab-content-cart" data-v-a74366be="" style="display: none;">
                                                                <div class="scroll-panel history-panel" data-v-a74366be="">
                                                                    <div class="main-content" data-v-a74366be="">
                                                                        <ul data-v-a74366be=""><!-- 一個大項--></ul>
                                                                    </div>
                                                                    <div class="spaceBar" data-v-a74366be="">&nbsp;</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-status-bar swift error" data-v-a74366be="" style="display: none;">
                                                <p data-v-a74366be=""><img src="/assets/animation_waiting.15170cb6.gif" alt="" data-v-a74366be="" style="display: none;"><img src="/assets/icon-success.0b3bf1a1.svg" alt="" data-v-a74366be="" style="display: none;"><img src="/assets/icon-error.f0c2208e.svg" alt="" data-v-a74366be=""> </p>
                                            </div><!--v-if--><!--v-if-->
                                            <div class="popup-toast">
                                                <div class="content">
                                                    <div class="box copy">
                                                        <p>복사성공</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="popup-toast">
                                                <div class="content">
                                                    <div class="box copy">
                                                        <p>새로고침 성공</p>
                                                    </div>
                                                </div>
                                            </div><!--v-if--><!--v-if--><!-- </keep-alive> -->
                                        </div>
                                    </div>
                                </section>
                            
                        </div>
                        <div class="modals-container"></div>
                    </div>
                </div>
            </section>
            <div data-v-56cc6f06="" id="promotion"></div><!----><!---->
        </section><!----><!----><!---->
        
            <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main popup-guestmail model-open" aria-expanded="false" role="dialog" aria-modal="true" tabindex="-1" style="display: none;">
                <div data-v-2836fdb5="" class="vfm__content">
                    <header data-v-77826c5e="" data-v-2836fdb5-s="" id="header">
                        <div data-v-77826c5e="" class="mask" style="display: none;"></div>
                        <div data-v-77826c5e="" class="wrapper"><a data-v-77826c5e="" class="icon-left-menu"><span data-v-77826c5e="" class="icon-nav2"></span></a><a data-v-77826c5e="" class="guestmail">비회원 문의</a><a data-v-77826c5e="" class="logo"><img data-v-77826c5e="" src="/assets/logo-e8d7a652.svg" alt="logo"></a>
                            <div data-v-77826c5e="" class="btn-box"><button data-v-77826c5e="" class="signup-btn">회원가입</button><button data-v-77826c5e="" class="login-btn">로그인</button></div><!----><!---->
                        </div>
                    </header>
                    <div data-v-2836fdb5-s="" class="model-inner">
                        <div data-v-2836fdb5-s="" class="model-wrap">
                            <div data-v-2836fdb5-s="" class="pop-up-content"><!---->
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
            <div class="login-container">1</div>
        </div>
        <div id="login-container"></div>
    </div>
    <div class="modals-container"></div>
</div>