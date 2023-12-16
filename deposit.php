<?php

include('inc/versions.php');

?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>SMGame Newtemplate V3 :: Deposit</title>
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
                                            <div class="main_content v_deep_deposit">
                                                <div class="main_content_wrap main_content_wrap_notice deposit">
                                                    <div>
                                                        <div class="fundFrame noticeFrame">
                                                            <div class="tabZone">
                                                                <ul>
                                                                    <li class="deposit-view active" id="_req_deposit">
                                                                        <h4>입금신청</h4>
                                                                    </li>
                                                                    <li class="deposit-view" id="_deposit_history">
                                                                        <h4>입금내역</h4>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="subZone" id="deposit-sub"></div>
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