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

    <div id="app" data-v-app="" class="webp">
        <div>
            <div data-v-79613b41="" class="allContent">
                <?php include('inc/sidemenu.php'); ?>

                <div data-v-79613b41="" class="rightContent homePage">
                    <div data-v-79613b41="" class="contents">
                        <div data-v-79613b41="" class="main_content_continer">
                            <?php include('inc/header.php'); ?>

                            <div data-v-f788cc95="" data-v-6e4ca0c7="">
                                <div data-v-7f3aef84="" data-v-f788cc95="" class="main-content">
                                    <div data-v-7f3aef84="" class="">
                                        <div data-v-7f3aef84="" class="titlePic">
                                            <div data-v-7f3aef84="" class="titlePwrapper">
                                                <div data-v-7f3aef84="" class="leftZone"><span data-v-f788cc95="" class="icon-iiconLogoB"></span><span data-v-f788cc95="">입금</span></div>
                                                <div data-v-7f3aef84="" class="line"></div>
                                            </div>
                                        </div>
                                        <div data-v-7f3aef84="" class="main_content">
                                            <div data-v-f788cc95="" class="v_deep_promotion">
                                                <div data-v-f788cc95="" class="main_content_wrap main_content_wrap_notice main_content_wrap_promotion">
                                                    <div data-v-f788cc95="" class="gameZoneA">
                                                        Deposit
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