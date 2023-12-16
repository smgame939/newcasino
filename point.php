<?php

include('inc/versions.php');

?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>SMGame Newtemplate V3 :: Exchange</title>
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
                                                <div class="leftZone"><span class="icon-iiconLogoB"></span><span>출금신청</span></div>
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                        <div class="main_content">
                                            <div class="main_content v_deep_member_point">
                                                <div class="main_content_wrap main_content_wrap_notice">
                                                    <div class="fundFrame noticeFrame myFrame point">
                                                        <div class="listZone listZoneA listPoint01">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="al subject">보유머니</td>
                                                                        <td class="al">0 원</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="al subject">보유 포인트</td>
                                                                        <td class="al fB">0 P </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="al subject">포인트 전환</td>
                                                                        <td class="al">
                                                                            <div class="inputFrame">
                                                                                <div class="input_content"><input id="point-exchange" type="text" pattern="[0-9]*" inputmode="numeric" class="" placeholder=""></div>
                                                                                <div class="moneyBtns">
                                                                                    <div class="btnM all">전체 포인트</div>
                                                                                    <div class="btnM">10,000 p </div>
                                                                                    <div class="btnM">30,000 p </div>
                                                                                    <div class="btnM">50,000 p </div>
                                                                                    <div class="btnM">100,000 p </div>
                                                                                    <div class="btnM">300,000 p </div>
                                                                                    <div class="btnM">500,000 p </div>
                                                                                    <div class="btnM">1,000,000 p </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="moneyBtns money-btns-point">
                                                                                <div class="btnM exchange">보유머니로 전환</div>
                                                                                <div class="btnM reset">초기화</div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div>
                                                            <div class="listZone noData listZone01 listPoint02">
                                                                <div class="title">포인트 내역</div>
                                                                <table>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ac" width="16%">시간</th>
                                                                            <th class="ac" width="20%">내용</th>
                                                                            <th class="ac" width="16%">유형</th>
                                                                            <th class="ac name" width="16%">포인트</th>
                                                                            <th class="ac" width="16%">더 보기</th>
                                                                            <th class="ac date" width="16%">메모</th>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
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