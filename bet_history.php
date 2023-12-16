<?php

include('inc/versions.php');

?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>SMGame Newtemplate V3 :: Betting History</title>
    <base href=".">
    <meta name="renderer" content="webkit">
    <meta name="force-rendering" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="application-version" content="3.111.0">
    <meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="stylesheet" href="css/event.css?v=<?php echo $ver; ?>">
    <link rel="stylesheet" href="css/headtitle.css?v=<?php echo $ver; ?>">
    <link rel="stylesheet" href="css/newv3.css?v=<?php echo $ver; ?>">
    <link rel="stylesheet" href="css/datePickerUtil.css?v=<?php echo $ver; ?>">

    <script type="text/javascript" src="js/datePickerUtil.js?v=<?php echo $ver; ?>"></script>
    <script type="text/javascript" src="js/DateTimeRangePicker.js?v=<?php echo $ver; ?>"></script>
</head>

<body>

    <div id="app" class="webp">
        <div>
            <div class="allContent">
                <?php include('inc/sidemenu.php'); ?>

                <div class="rightContent homePage">
                    <div class="contents">
                        <div class="main_content_continer">
                            <?php include('inc/header.php'); ?>

                            <div>
                                <div class="main-content">
                                    <div class="">
                                        <div class="titlePic">
                                            <div class="titlePwrapper">
                                                <div class="leftZone"><span class="icon-iiconLogoB"></span><span>베팅내역</span></div>
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                        <div class="main_content">
                                            <div class="main_content v_deep_bet_history">
                                                <div class="main_content_wrap main_content_wrap_notice deposit">
                                                    <div class="fundFrame noticeFrame bHisFrame messageFrame">
                                                        <div class="tabZone">
                                                            <ul>
                                                                <li class="bethis-btn active" id="bethis_all"><span class="icon-icconALLnew"></span>
                                                                    <h4>모든 게임</h4>
                                                                </li>
                                                                <!-- <li class=""><span class="icon-icon-icconBALL01"></span>
                                                                    <h4>스포츠</h4>
                                                                </li> -->
                                                                <li class="bethis-btn" id="bethis_livecasino"><span class="icon-iiconDice"></span>
                                                                    <h4>카지노</h4>
                                                                </li>
                                                                <li class="bethis-btn" id="bethis_slot"><span class="icon-iiconSlote"></span>
                                                                    <h4>슬롯게임</h4>
                                                                </li>
                                                                <li class="bethis-btn" id="bethis_minigame"><span class="icon-iiconGame"></span>
                                                                    <h4>미니게임</h4>
                                                                </li>
                                                                <!-- <li class=""><span class="icon-icconVR"></span>
                                                                    <h4>가상게임</h4>
                                                                </li> -->
                                                            </ul>
                                                        </div>
                                                        <div class="firstFrame">
                                                            <div class="searchZone">
                                                                <div class="inputZone">
                                                                    <div class="input01-common input-set input_content">
                                                                        <div class="dp__main dp__theme_light" type="datetime" editable="false">
                                                                            <div><!---->
                                                                                <div class="dp__input_wrap"><!----><input class="dp__pointer dp__input_readonly dp__input dp__input_reg" inputmode="none" placeholder="" autocomplete="off" aria-label="Datepicker input">
                                                                                    <div><!----><!----></div><!----><!---->
                                                                                </div>
                                                                            </div><!---->
                                                                        </div>
                                                                    </div><span>~</span>
                                                                    <div class="input01-common input-set input_content">
                                                                        <div class="dp__main dp__theme_light" type="datetime" editable="false">
                                                                            <div><!---->
                                                                                <div class="dp__input_wrap"><!----><input class="dp__pointer dp__input_readonly dp__input dp__input_reg" inputmode="none" placeholder="" autocomplete="off" aria-label="Datepicker input">
                                                                                    <div><!----><!----></div><!----><!---->
                                                                                </div>
                                                                            </div><!---->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="moneyBtns">
                                                                    <div class="btnM btn-choose-common btn-set chooseBtn blueLLineBtn02">오늘</div>
                                                                    <div class="btnM btn-choose-common btn-set blueLLineBtn02">어제</div>
                                                                    <div class="btnM btn-choose-common btn-set blueLLineBtn02">7 일</div>
                                                                    <div class="btnM btn-choose-common btn-set blueLLineBtn02">15 일</div>
                                                                    <div class="btnM btn-choose-common btn-set blueLLineBtn02">30 일</div>
                                                                    <div class="btn-reset-common btn-set reset btnM search goldLLineBtn blueLBtn01">검색</div>
                                                                </div>
                                                            </div><!---->
                                                        </div>
                                                        <div class="subZone" id="bet-history-list">
                                                            <ul>
                                                                <li class="fundList">
                                                                    <div class="lobbyBtns LiveCasino bethislist_livecasino" style="visibility: hidden; position: absolute;">
                                                                        <div class="btnM chooseBtn">모든 게임</div>
                                                                        <div class="btnM">에볼루션</div>
                                                                        <div class="btnM">마이크로</div>
                                                                        <div class="btnM">프래그마틱</div>
                                                                        <div class="btnM">드림게이밍</div>
                                                                        <div class="btnM">더블유엠</div>
                                                                        <div class="btnM">BB 카지노</div>
                                                                        <div class="btnM">섹시 카지노</div>
                                                                        <div class="btnM">오리엔탈</div>
                                                                        <div class="btnM">올벳</div>
                                                                        <div class="btnM">YX</div>
                                                                        <div class="btnM">빅게이밍</div>
                                                                        <div class="btnM">아시아게임</div>
                                                                        <div class="btnM">게임 플레이</div>
                                                                        <div class="btnM">올벳( 보너스 )</div>
                                                                        <div class="btnM">Vivo</div>
                                                                    </div>
                                                                    <div class="lobbyBtns Slot bethislist_slot" style="visibility: hidden; position: absolute;">
                                                                        <div class="btnM chooseBtn">모든 게임</div>
                                                                        <div class="btnM">마이크로</div>
                                                                        <div class="btnM">GF 게이밍</div>
                                                                        <div class="btnM">에볼루션</div>
                                                                        <div class="btnM">하바네로</div>
                                                                        <div class="btnM">포켓게이밍</div>
                                                                        <div class="btnM">BBIN</div>
                                                                        <div class="btnM">스페이드게이밍</div>
                                                                        <div class="btnM">지리</div>
                                                                        <div class="btnM">TPG 슬롯</div>
                                                                        <div class="btnM">Ameba 슬롯</div>
                                                                        <div class="btnM">CQ9</div>
                                                                        <div class="btnM">게임 플레이</div>
                                                                        <div class="btnM">FC 슬롯</div>
                                                                        <div class="btnM">JDB</div>
                                                                    </div>
                                                                    <div class="lobbyBtns MiniGame bethislist_minigame" style="visibility: hidden; position: absolute;">
                                                                        <div class="btnM">모든 게임</div>
                                                                        <div class="btnM">파워볼</div>
                                                                        <div class="btnM">키노사다리</div>
                                                                        <div class="btnM">파워사다리</div>
                                                                        <div class="btnM">스피드키노</div>
                                                                    </div>
                                                                    <!-- <div class="lobbyBtns 가상게임" style="visibility: hidden; position: absolute;">
                                                                        <div class="btnM">모든 게임</div>
                                                                        <div class="btnM">가상 야구</div>
                                                                        <div class="btnM">가상농구</div>
                                                                        <div class="btnM">가상축구 아시안컵</div>
                                                                        <div class="btnM">가상축구 챔피언스컵</div>
                                                                        <div class="btnM">가상축구 유로컵</div>
                                                                        <div class="btnM">가상축구 리그컵</div>
                                                                        <div class="btnM">가상축구 내셔널컵</div>
                                                                        <div class="btnM">가상축구 월드컵</div>
                                                                        <div class="btnM">가상 테니스</div>
                                                                        <div class="btnM">가상 경마</div>
                                                                        <div class="btnM">가상 개경주</div>
                                                                        <div class="btnM">VWMF1</div>
                                                                        <div class="btnM">VWMF3</div>
                                                                        <div class="btnM">VWMF2</div>
                                                                    </div> -->
                                                                    <div class="listZone listZone01">
                                                                        <table class="">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="ac">베팅시간</th>
                                                                                    <th class="ac">베팅번호</th>
                                                                                    <th class="ac">제품사</th>
                                                                                    <th class="ac">게임유형</th>
                                                                                    <th class="ac" style="display: none;">경기시간</th>
                                                                                    <th class="ac" style="display: none;">리그명칭</th>
                                                                                    <th class="ac" style="display: none;">베팅 타입</th>
                                                                                    <th class="ac" style="display: none;">스코어</th>
                                                                                    <th class="ac">베팅금액</th>
                                                                                    <th class="ac" style="display: none;">배당</th>
                                                                                    <th class="ac" style="display: none;">적중예상<br>당첨금</th>
                                                                                    <th class="ac minWidthResult">당첨 /<br>미당첨</th>
                                                                                    <th class="ac">당첨금액</th>
                                                                                    <th class="ac" style="display: none;">게임결과</th>
                                                                                </tr><!---->
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="noData">
                                                                        <div style="" class="">
                                                                            <div class="noDataFrame">
                                                                                <div class="pic"><img src="/assets/image/noData-d5ec671e.png" alt="no-data"></div>
                                                                                <h2>데이터 없음</h2>
                                                                                <h3>Sorry, Check no data</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pager_block" style="display: none;">
                                                                        <div class="page-list">
                                                                            <ul class="pagination">
                                                                                <li class="first"><a href="javascript: void(0)"><span>처음</span></a></li>
                                                                                <li class="prev"><a href="javascript: void(0)"><span>이전</span></a></li>
                                                                                <li class="next"><a href="javascript: void(0)"><span>다음</span></a></li>
                                                                                <li class="last"><a href="javascript: void(0)"><span>끝</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php include('inc/footer.php'); ?>
                        </div>
                    </div>
                </div>

            </div>
            <!----><!---->
        </div>
        <!----><!---->

        <div class="modals-container"></div>
        <div id="login-container"></div>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/newv3.js?v=<?php echo $ver; ?>"></script>


</body>

</html>