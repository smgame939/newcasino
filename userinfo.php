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
                                                <div data-v-7f3aef84="" class="leftZone"><span data-v-f788cc95="" class="icon-iiconLogoB"></span><span data-v-f788cc95="">마이페이지</span></div>
                                                <div data-v-7f3aef84="" class="line"></div>
                                            </div>
                                        </div>
                                        <div data-v-7f3aef84="" class="main_content">
                                            <div data-v-f788cc95="" class="v_deep_promotion">
                                                <div data-v-f788cc95="" class="main_content_wrap main_content_wrap_notice main_content_wrap_promotion">
                                                    <div data-v-f788cc95="" class="gameZoneA">
                                                        <div id="user-container">
                                                            <div class="userInfoW">
                                                                <form class="member_infoForm mt-4" method="post" id="Proc_pw" name="Proc_pw" enctype="multipart/form-data">
                                                                    <table class="table_Uinfo">
                                                                        <tbody>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    아이디 :
                                                                                </td>
                                                                                <td class="right info-group ">
                                                                                    hello2020
                                                                                </td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    레벨 :
                                                                                </td>
                                                                                <td class="right info-group ">
                                                                                    1
                                                                                </td>
                                                                            </tr>

                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    닉네임 :
                                                                                </td>
                                                                                <td class="right info-group ">
                                                                                    jisoo
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    이름 :
                                                                                </td>
                                                                                <td class="right info-group ">
                                                                                    chen
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="row mb-2">

                                                                                <td class="userForm_label">
                                                                                    연락처 :
                                                                                <td class="right info-group ">
                                                                                    ***-****-1456
                                                                                </td>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">

                                                                                    은행 :
                                                                                </td>
                                                                                <td class="right info-group ">
                                                                                    Gwangju Bank
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    계좌번호 :
                                                                                </td>
                                                                                <td class="right info-group ">
                                                                                    ****-**6789
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    비밀번호 :
                                                                                </td>
                                                                                <td class="right info-group w-50">
                                                                                    <input type="password" name="IU_OLD_PW" id="IU_OLD_PW" autocomplete="off" value="" class="w-100 mx-0">
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    새 비밀번호 :
                                                                                </td>
                                                                                <td class="right info-group w-50"><input type="password" name="IU_NEW_PW" id="IU_NEW_PW" autocomplete="off" value="" class="w-100 mx-0">
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    새 비밀번호 확인 :
                                                                                </td>
                                                                                <td class="right info-group w-50">
                                                                                    <input type="password" name="IU_NEW_PW1" id="IU_NEW_PW1" autocomplete="off" value="" class="w-100 mx-0">
                                                                                </td>

                                                                            </tr>
                                                                            <tr class="row mb-2">
                                                                                <td class="d-flex justify-content-center pt-5">
                                                                                    <button type="submit" id="change_pw" class="btn-dark">
                                                                                        비밀번호 변경
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                            <input type="hidden" name="IU_ID" id="IU_ID" value=".0.0.0.0_hello2020">
                                                                        </tbody>
                                                                    </table>
                                                                </form>

                                                                <form class="member_infoForm" method="post" id="modify_birthday" name="modify_birthday" enctype="multipart/form-data">
                                                                    <table class="table_Uinfo">
                                                                        <tbody>
                                                                            <tr class="row mb-2">
                                                                                <td class="userForm_label">
                                                                                    생년월일 :
                                                                                </td>
                                                                                <td class="right info-group"><input type="text" name="IU_BIRTHDAY" id="IU_BIRTHDAY" autocomplete="off" value="" class="w-100 mx-0">
                                                                                </td>
                                                                            </tr>
                                                                            <input type="hidden" name="IU_ID" id="IU_ID" value=".0.0.0.0_hello2020">
                                                                            <tr class="row mb-2 mt-4">
                                                                                <td class="d-flex justify-content-center">
                                                                                    <button type="submit" id="change_birthday" class="btn-dark">
                                                                                        생년월일 변경
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </form>
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
                <!---->
                <div data-v-2836fdb5="" data-v-79613b41="" class="vfm vfm--inset vfm--fixed" style="z-index: 1000; display: none;">
                    <!--v-if-->
                    <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none NAV_ad" aria-expanded="false" role="dialog" aria-modal="true" tabindex="-1" style="display: none;">
                        <div data-v-2836fdb5="" class="vfm__content">
                            <div data-v-2836fdb5-s="" class="contentFrame">
                                <div data-v-2836fdb5-s="" class="">
                                    <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalOpen" style="top: 50px; left: 650px;">
                                        <h5 class="XX"><span class="icon-iconCross"></span></h5>
                                        <div class="reg">
                                            <div class="top"><img src="./virtual_sports_files/logo-6995bb1c.svg" alt="" /></div>
                                            <div class="content">
                                                <p>
                                                    <a href="https://www.kc-28.com/Promotion"><img style="width: 500px; height: 711px;" src="./virtual_sports_files/50bae93054254801a16bd7a856cbb77f.webp" /></a>
                                                </p>
                                            </div>
                                            <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-2836fdb5-s="" class="">
                                    <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalOpen" style="top: 50px; left: 1200px;">
                                        <h5 class="XX"><span class="icon-iconCross"></span></h5>
                                        <div class="reg">
                                            <div class="top"><img src="./virtual_sports_files/logo-6995bb1c.svg" alt="" /></div>
                                            <div class="content">
                                                <p><img width="500" src="./virtual_sports_files/1795c839abcb4afba336bdc1568f64f7.webp" height="711" /></p>
                                            </div>
                                            <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-2836fdb5-s="" class="">
                                    <div data-v-2836fdb5-s="" class="pupop_content pupop_registered modalOpen" style="top: 50px; left: 100px;">
                                        <h5 class="XX"><span class="icon-iconCross"></span></h5>
                                        <div class="reg">
                                            <div class="top"><img src="./virtual_sports_files/logo-6995bb1c.svg" alt="" /></div>
                                            <div class="content">
                                                <p><img width="500" src="./virtual_sports_files/3f67119499934924af52eadd1f1c8bd6.webp" height="711" /></p>
                                            </div>
                                            <div class="btnZone"><button class="btnP blueLBtn">오늘 하루 열지 않기</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--v-if-->
                        </div>
                    </div>
                </div>
            </div>
            <!----><!---->
        </div>
        <div class="modals-container"></div>
        <!----><!---->
        <div data-v-2836fdb5="" data-v-5645eacc="" class="vfm vfm--inset vfm--fixed" style="z-index: 1000; display: none;">
            <!--v-if-->
            <div data-v-2836fdb5="" class="vfm__container vfm--absolute vfm--inset vfm--outline-none model-main model-open NAV_nonmember" aria-expanded="false" role="dialog" aria-modal="true" tabindex="-1" style="display: none;">
                <div data-v-2836fdb5="" class="vfm__content pupop_content fadeIn animated">
                    <div data-v-2836fdb5-s="" class="popWrapper">
                        <h5 data-v-2836fdb5-s="" class="XX"><span data-v-2836fdb5-s="" class="icon-iconCross"></span></h5>
                        <div data-v-2836fdb5-s="" class="titlePic">
                            <div data-v-2836fdb5-s="" class="titlePwrapper">
                                <div data-v-2836fdb5-s="" class="leftZone">
                                    <span data-v-2836fdb5-s="" class="icon-iiconLogoB"></span>
                                    <h4 data-v-2836fdb5-s="">SMGame</h4>
                                    <span data-v-2836fdb5-s="">비회원 문의</span>
                                </div>
                                <div data-v-2836fdb5-s="" class="line"></div>
                            </div>
                        </div>
                        <div data-v-2836fdb5-s="" class="contentZone">
                            <div data-v-2836fdb5-s="" class="leftZone">
                                <div data-v-2836fdb5-s="" class="pic"><img data-v-2836fdb5-s="" src="./virtual_sports_files/popLogPic01-c8126568.png" alt="" /></div>
                            </div>
                            <div data-v-2836fdb5-s="" class="rightZone">
                                <div data-v-2836fdb5-s="" class="up">
                                    <div data-v-2836fdb5-s="" class="input_zone">
                                        <div data-v-2836fdb5-s="" class="inputFrame">
                                            <div data-v-2836fdb5-s="" class="txtT">성명</div>
                                            <div data-v-2836fdb5-s="" class="input_content"><input data-v-2836fdb5-s="" name="Name" class="account txtColor010 bgColor09 bdColor03" placeholder="이름을 입력해주세요." /></div>
                                        </div>
                                        <div data-v-2836fdb5-s="" class="inputFrame">
                                            <div data-v-2836fdb5-s="" class="txtT">연락처</div>
                                            <div data-v-2836fdb5-s="" class="input_content"><input data-v-2836fdb5-s="" name="Mobile" class="pw txtColor010 bgColor09 bdColor03" placeholder="전화 번호를 남겨주세요." /></div>
                                        </div>
                                        <div data-v-2836fdb5-s="" class="inputFrame">
                                            <div data-v-2836fdb5-s="" class="txtT">내용</div>
                                            <div data-v-2836fdb5-s="" class="areaFrame">
                                                <textarea data-v-2836fdb5-s="" name="Content" class="Content txtColor010 bgColor09 bdColor03" placeholder="문의 내용과 가입하신 아이디를 남겨주시면, 등록 된 휴대폰번호로 SMS 문자 혹은 전화를 통해 안내드리겠습니다."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-2836fdb5-s="" class="btnZone">
                                        <div data-v-2836fdb5-s="" class="btnFrame"><button data-v-2836fdb5-s="" class="btn_p goAlertMem greyBtn">문의요청</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--v-if-->
                    <div class="scroll-container">
                        <ul class="scroll-list">
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <!-- Add more list items here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modals-container"></div>
        <div id="login-container"></div>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/newv3.js?v=<?php echo $ver; ?>"></script>


</body>

</html>