<?php

include('inc/versions.php');

?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>SMGame Newtemplate V3 :: User Info</title>
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


    <style>
        .userInfoW {
            font-size: 16px;
            width: 55%;
            margin: 0 auto;
            padding: 30px;
            border: 1px solid #d7daf1;
            background-color: #f4f4f4;
            border-radius: 12px;
            box-shadow: 2px 4px 5px 1px #a7b5cc59, inset 0 0 6px 1px #ffffffbf;
        }

        .userInfoW .table_Uinfo .row.mb-2>td {
            padding: 8px 0;
        }

        .userInfoW .table_Uinfo .row {
            display: flex;
        }

        .userInfoW .table_Uinfo .row:has(td>button) {
            justify-content: center;
        }

        .userInfoW .table_Uinfo .row.mb-2>td:first-child {
            width: 30%;
            text-align: right;
        }

        .userInfoW .table_Uinfo .row.mb-2>td:nth-child(2) {
            width: 70%;
            text-align: left;
            margin-left: 10px;
        }

        .userInfoW .table_Uinfo .row.mb-2>td.right.info-group>input,
        .userInfoW .table_Uinfo .row.mb-2>td.right.info-group:not(:has(input)) {
            height: 37px;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            border-radius: 5px;
            color: #cc9a6c;

            border: 1px solid #dddddd !important;
            font-size: 16px;
            padding-left: 15px;
        }

        .userInfoW .table_Uinfo .row.mb-2>td.right.info-group:not(:has(input)) {
            background-color: #f7f7f7;
        }

        .userInfoW .table_Uinfo .row.mb-2>td.right.info-group>input {
            background-color: #ffffff;
        }

        .userInfoW .table_Uinfo .row.mb-2>td.right.info-group:has(input) {
            padding: 0;
        }

        button.btn-dark {
            height: 40px;
            padding: 0 47px;
            color: #ffffff;
            background-color: #555a6a;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            float: right;
            margin-top: 23px;
            cursor: pointer;
            border: 0px;
            transition: .2s ease-out;
        }
    </style>
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
                                                <div class="leftZone"><span class="icon-iiconLogoB"></span><span>마이페이지</span></div>
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                        <div class="main_content">
                                            <div class="main_content my">
                                                <div class="main_content_wrap main_content_wrap_notice deposit safe">
                                                    <div class="myFrame noticeFrame fundFrame">
                                                        <div class="subZone">
                                                            <ul>
                                                                <li class="fundList">
                                                                    <div>
                                                                        <div class="listZone listZoneA">
                                                                            <table>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="al subject">아이디</td>
                                                                                        <td class="al">userTest123</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="al subject">이전 비밀번호</td>
                                                                                        <td class="al">
                                                                                            <div class="input_content"><input type="password" placeholder="기존 비밀번호를 입력 하세요" name="oldPassword"></div><!---->
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="al subject">신규 비밀번호</td>
                                                                                        <td class="al">
                                                                                            <div class="input_content"><input type="password" placeholder="영문과 숫자 포함 6자 ~ 16자" name="newPassword"></div><!---->
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="al subject">신규 비밀번호 확인</td>
                                                                                        <td class="al">
                                                                                            <div class="input_content"><input type="password" placeholder="신규 비밀번호를 다시 입력 하세요" name="confirmPassword"></div><!---->
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="al subject">이전 출금 비밀번호</td>
                                                                                        <td class="al">
                                                                                            <div class="input_content"><input type="password" placeholder="이전 출금 비밀번호를 입력하세요" autocomplete="off" name="oldWithdrawalPassword"></div><!---->
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="al subject">신규 출금 비밀번호</td>
                                                                                        <td class="al">
                                                                                            <div class="input_content"><input type="password" placeholder="출금 비밀번호 ( 4-6자리, 숫자만 가능 )" autocomplete="off" name="newWithdrawalPassword"></div><!---->
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="al subject">은행 계좌 정보</td>
                                                                                        <td class="al">예금주: 이규빈 <div class="input_content selectUse"><input type="text" readonly=""></div>
                                                                                            <div class="input_content selectUse"><input type="text" name="bank" readonly=""></div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div class="btnZone"><a type="submit" disabled="false" class="goldLBtn blueLLineBtn02">정보수정</a></div>
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
        <div class="modals-container"></div>
        <!----><!---->
        <div class="modals-container"></div>
        <div id="login-container"></div>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/newv3.js?v=<?php echo $ver; ?>"></script>


</body>

</html>