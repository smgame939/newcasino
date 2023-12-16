<?php

include('inc/versions.php');

?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>SMGame Newtemplate V3 :: Balance History</title>
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
                                                <div class="leftZone"><span class="icon-iiconLogoB"></span><span>입금</span></div>
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                        <div class="main_content">
                                            <div class="main_content">
                                                <div class="main_content_wrap main_content_wrap_notice deposit balanceH">
                                                    <div class="fundFrame noticeFrame balanceFrame messageFrame">
                                                        <div class="firstFrame">
                                                            <div class="inputFrame">
                                                                <div class="info">
                                                                    <div class="txt">항목:</div>
                                                                </div>
                                                                <div class="input_content"><select>
                                                                        <option value="All">All</option>
                                                                        <option value="Account">입금</option>
                                                                        <option value="ThirdPartyPayment">페이먼트 입금</option>
                                                                        <option value="OnlineWithdraw">출금</option>
                                                                        <option value="Bonus">보너스</option>
                                                                        <option value="Discount">롤링콤프</option>
                                                                        <option value="AnyTimeDiscount">실시간 콤프</option>
                                                                        <option value="SignBonus">출석 쿠폰</option>
                                                                        <option value="BetPlaced">베팅</option>
                                                                        <option value="BetRollback">베팅취소</option>
                                                                        <option value="ContinuousWinLoseBonus">연패 이벤트</option>
                                                                        <option value="PaybackBonus">페이백</option>
                                                                        <option value="AgentBonus">총판 보너스</option>
                                                                        <option value="PointExchange">보유머니로 전환</option>
                                                                        <option value="ManualDeposit">관리자 입금</option>
                                                                        <option value="ManualWithdraw">관리자 출금</option>
                                                                        <option value="LuckyWheel">럭키 휠</option>
                                                                        <option value="BalanceRecycling">잔액회수</option>
                                                                        <option value="CouponBox">쿠폰함</option>
                                                                        <option value="Other">기타</option>
                                                                    </select></div>
                                                            </div>
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
                                                            </div>
                                                        </div>
                                                        <div class="subZone">
                                                            <ul>
                                                                <li class="fundList">
                                                                    <div class="listZone listZone01">
                                                                        <table>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="ac" width="20%">거래시간</th>
                                                                                    <th class="ac" width="15%">번호</th>
                                                                                    <th class="ac" width="20%">항목</th>
                                                                                    <th class="ac" width="15%">금액</th>
                                                                                    <th class="ac" width="15%">최종잔액</th>
                                                                                    <th class="ac" width="15%"><span>메모</span></th>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <div class="noData">
                                                                            <div style="" class="">
                                                                                <div class="noDataFrame">
                                                                                    <div class="pic"><img src="/assets/image/noData-d5ec671e.png" alt="no-data"></div>
                                                                                    <h2>데이터 없음</h2>
                                                                                    <h3>Sorry, Check no data</h3>
                                                                                </div>
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