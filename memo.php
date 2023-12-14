<?php

include('inc/versions.php');

?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>SMGame Newtemplate V3 :: Memo</title>
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
        :root {
            --primary-button-bg: #7bc74d;
            --secondary-button-bg: #83bd75;
            --tertiary-button-bg: #6d67e4;
            --success-button-bg: #e6b31e;
            --next-button-bg: #2155cd;
            --support-button-bg: #4caf50;
            --danger-button-bg: #dd5353;
            --link-button-bg: #eee;
            --outline-button-bg: #ddd;
            --primary-button-font-color: #fff;
            --secondary-button-font-color: #fff;
            --success-button-font-color: #fff;
            --next-button-font-color: #fff;
            --danger-button-font-color: #fff;
            --link-button-font-color: #fff;
            --outline-button-font-color: #fff;
            --icon-notActive-color: #b0c4f3;
            --icon-Active-color: #225ff1;
            --border-radius-xs: .5rem;
            --border-radius-s: 1rem;
            --border-radius-m: 1.5rem;
            --color-table-bg-1: #ffffff;
            --color-table-header-1: transparent;
            --color-layer-body: #fff;
            --color-layer-alt-1: #262a34;
            --color-layer-alt-2: #2f3645;
            --color-layer-alt-3: #596070;
            --color-layer-alt-4: rgba(89, 96, 112, .5);
            --color-primary-1: #fdd835;
            --color-primary-2: #ffa000;
            --color-primary-3: #ffd149;
            --color-primary-4: #ffff7b;
            --color-primary-5: #ffffad;
            --color-secondary-1: #a153ff;
            --color-secondary-2: #2e0f6c;
            --color-secondary-3: #703bf5;
            --color-secondary-4: #c395ff;
            --color-secondary-5: #e6ceff;
            --color-error: #ff5e3a;
            --color-warning: #fdd835;
            --color-successfully: #1be176;
            --color-primary-gradient: linear-gradient(90deg, #ffa000, #ffff7b);
            --color-secondary-gradient: linear-gradient(90deg, #2e0f6c, #2e0f6c .01%, #712df5);
            --color-additional-gradient: linear-gradient(90deg, #11998e, #03dea9);
            --color-tertiary-gradient: linear-gradient(0deg, #000a12, rgba(0, 10, 18, 0));
            --color-tertiary-1: #fff;
            --color-tertiary-2: rgba(182, 189, 204, .4);
            --color-tertiary-3: rgba(182, 189, 204, .2);
            --color-tertiary-4: rgb(34 33 33);
            --color-tertiary-5: rgba(0, 10, 18, .2);
            --color-tertiary-6: rgba(0, 10, 18, .64);
            --color-text-body: #b6bdcc;
            --color-text-alt: #fff;
            --color-text-menu-default: var(--color-text-body);
            --color-text-menu-active: var(--color-primary-1);
            --color-text-link-default: var(--color-primary-3);
            --color-text-link-active: rgba(255, 209, 73, .7);
            --color-text-on-opposite-back: #000a12;
            --color-button-text-primary: var(--color-layer-body);
            --color-button-text-secondary: var(--color-primary-2);
            --color-button-text-tertiary: var(--color-secondary-1);
            --bg-extra: #2e313d;
            --color-hint: rgba(245, 245, 255, .45);
            --color-secondary: #b6bdcc;
            --color-base: #fafbff;
            --bg-base: #1b1f2e;
            --forum-btn-primary: #04599f;
            --forum-btn-secondary: #011627;
            --forum-btn-success: #60cf16;
            --forum-btn-danger: #e71d36;
            --forum-btn-warning: #ff9f1c;
            --forum-btn-info: #36d4d4;
            --bg-btn-search: #7286d3;
            --bg-btn-search-hover: #4b60b4;
            --color-btn-search: #eee;
            --color-btn-search-hover: #fff;
            --cui-link-color: #321fdb;
            --cui-link-hover-color: #2819af;
            --cui-code-color: #d63384;
            --cui-highlight-bg: #fff3cd;
            --select-bet-bg-hover-light: #bdbdbd;
            --select-bet-bg-hover-dark: #3a4058;
            --select-bet-bg-light: #a57bb9;
            --select-bet-color-light: #000;
            --select-bet-bg-dark: #32203b;
            --select-bet-color-dark: #afafaf;
            --homepage-content-bg: #fff;
            --alert-shadow: lightblue;
            --casino-color-primary: #597ef8;
            --cui-blue: #0d6efd;
            --cui-indigo: #6610f2;
            --cui-purple: #6f42c1;
            --cui-pink: #d63384;
            --cui-red: #dc3545;
            --cui-orange: #fd7e14;
            --cui-yellow: #ffc107;
            --cui-green: #198754;
            --cui-teal: #20c997;
            --cui-cyan: #0dcaf0;
            --cui-black: #000015;
            --cui-white: #fff;
            --cui-gray: #8a93a2;
            --cui-gray-dark: #636f83;
            --cui-gray-100: #ebedef;
            --cui-gray-200: #d8dbe0;
            --cui-gray-300: #c4c9d0;
            --cui-gray-400: #b1b7c1;
            --cui-gray-500: #9da5b1;
            --cui-gray-600: #8a93a2;
            --cui-gray-700: #768192;
            --cui-gray-800: #636f83;
            --cui-gray-900: #4f5d73;
            --cui-primary: #321fdb;
            --cui-secondary: #9da5b1;
            --cui-success: #2eb85c;
            --cui-info: #39f;
            --cui-warning: #1fc2db;
            --cui-danger: #e55353;
            --cui-light: #ebedef;
            --cui-dark: #4f5d73;
            --cui-primary-rgb: 50, 31, 219;
            --cui-secondary-rgb: 157, 165, 177;
            --cui-success-rgb: 46, 184, 92;
            --cui-info-rgb: 51, 153, 255;
            --cui-warning-rgb: 249, 177, 21;
            --cui-danger-rgb: 229, 83, 83;
            --cui-light-rgb: 235, 237, 239;
            --cui-dark-rgb: 79, 93, 115;
            --cui-white-rgb: 255, 255, 255;
            --cui-black-rgb: 0, 0, 21;
            --cui-body-color-rgb: 44, 56, 74;
            --cui-body-bg-rgb: 255, 255, 255;
            --cui-gradient: linear-gradient(180deg, rgba(255, 255, 255, .15), rgba(255, 255, 255, 0));
            --cui-body-color: rgba(44, 56, 74, .95);
            --cui-body-bg: #ffffff;
            --cui-border-color: #d8dbe0;
            --cui-border-color-translucent: rgba(0, 0, 21, .175);
            --cui-heading-color: unset;
            --cui-link-color: #321fdb;
            --cui-link-hover-color: #2819af;
            --cui-code-color: #d63384;
            --cui-highlight-bg: #fff3cd;
            --cui-header-nav-link-color: #5cc3fa;
            --cui-sidebar-bg-color: #3c4b64;
            --cui-bg-warning: #d5a439;
            --cui-footer-color: rgba(44, 56, 74, .95);
            --cui-footer-bg: #ebedef;
            --cui-footer-border-color: #d8dbe0;
            --cui-footer-border: 1px solid transparent;
            --sm-aside-width: 320px;
            --color-border-light-blue: #afbdcf;
            --bg-panel: #e1e1e1;
            --match-card-bg: rgb(239, 244, 254);
            --container-bg-rgb: 235, 237, 239;
            --casino-pedestal-border: #999;
            --casino-pedestal-bg: #999;
            --casino-pedestal-text: #000a12;
            --pageset-this-color: #686868;
            --tabs-gradient-bg-color: #dbebf7;
            --tabs-border-color: #fefefe;
            --tabs-gradient-active: linear-gradient(180deg, #565656, #dadadb);
            --tabs-gradient-main-active: linear-gradient(180deg, #3c4b64, #343452);
            --bodyBgColor: #fff;
            --sports-top-bg: #fff;
            --sports-top-bg-active: #4385f8;
            --sports-top-color-active: #fff;
            --header-bg-color: #353f4b;
            --header-color: #fffefe;
            --header-hover-color: #a4b8f9;
            --topmenu-bg: #fff;
            --topmenu-color: #515b7c;
            --topmenu-arrow-color: #969696;
            --topmenu-color-active: #4385f8;
            --footer-bg: #353f4b;
            --bgColor-00: #fff;
            --bgColor-01: #596371;
            --bgColor-02: #4385f8;
            --bgColor-03: #c9e7ff;
            --bgColor-04: #f4f7fe;
            --bgColor-05: #4867c9;
            --bgColor-06: #ffb100;
            --bgColor-07: #f6f7fa;
            --bgColor-08: #d4deff;
            --bgColor-09: #4d5666;
            --bgColor-10: #7d4cff;
            --bgColor-11: #2c2c34;
            --bgColor-12: #597ef8;
            --bgColor-13: #425eb8;
            --bgColor-14: #353f4b;
            --bgColor-15: #5a6372;
            --bgColor-16: #95a6bd;
            --bgColor-17: #b4bedc;
            --bgColor-18: #e1e1e1;
            --bgColor-19: #414c5c;
            --bgColor-20: #f3f3f3;
            --border-color-00: #fff;
            --border-color-01: #cfd0ea;
            --border-color-02: #3c4652;
            --border-color-03: #2e3740;
            --border-color-04: #d8dbe5;
            --border-color-05: #4385f8;
            --border-color-06: #ebecf3;
            --border-color-07: #cecfe9;
            --border-color-08: #597ef8;
            --border-color-09: #d7d4f1;
            --txtColor00: #fff;
            --txtColor01: #83838a;
            --txtColor02: #4385f8;
            --txtColor03: #000;
            --txtColor04: #40455a;
            --txtColor05: #404261;
            --txtColor06: #ed2736;
            --txtColor07: #a8a8aa;
            --txtColor08: #b4b4b4;
            --txtColor09: #cececd;
            --txtColor10: #515b7c;
            --txtColor11: #95a6bd;
            --txtColor12: #597ef8;
            --txtColor13: #7d783e;
            --txtColor14: #3552d3;
            --txtColor15: #da671a;
            --txtColor16: #6a7391;
            --txtColor17: #b27b46;
            --shadow01: #cbced8;
            --shadow02: #d4deff;
            --shadow03: #000;
            --shadow04: #2b3d7869;
            --linear-grad-bg01: linear-gradient(135deg, rgb(236, 241, 253) 0%, rgb(255, 255, 255) 15%, rgb(239, 243, 254) 20%, rgb(239, 243, 254) 100%);
            --dpswitches-bg-color: var(--bgColor-02);
            --dpswitches-label-color: #fff;
            --dpswitch-bg-color: #fff;
            --dpswitch-text-color: var(--txtColor00);
            --mini-game-header: #bdbdbd;
            --hud-color: 0, 255, 200;
            --hud--focus-color: 255, 255, 255;
            --provider-bg: #303c54;
            --marquee-bg-color: #939ab0;
            --marquee-text-color: #fff;
            --quickmenu-color: rgb(24 24 24 / 75%);
            --scrollbar-bg-color: rgb(0 0 0 / 40%);
            --blue-crayola: #597ef8;
            --glaucous: #7689ae;
            --charcoal: #353e49;
            --cool-gray: #949cb2;
            --alice-blue: #d9ecfd;
            --blue-crayola: hsla(226, 92%, 66%, 1);
            --glaucous: hsla(220, 26%, 57%, 1);
            --charcoal: hsla(213, 16%, 25%, 1);
            --cool-gray: hsla(224, 16%, 64%, 1);
            --alice-blue: hsla(208, 90%, 92%, 1);
            --blue-crayola: #597ef8;
            --glaucous: #7689ae;
            --charcoal: #353e49;
            --cool-gray: #949cb2;
            --alice-blue: #d9ecfd;
            --blue-crayola: hsla(226, 92%, 66%, 1);
            --glaucous: hsla(220, 26%, 57%, 1);
            --charcoal: hsla(213, 16%, 25%, 1);
            --cool-gray: hsla(224, 16%, 64%, 1);
            --alice-blue: hsla(208, 90%, 92%, 1);
            --blue-crayola: rgba(89, 126, 248, 1);
            --glaucous: rgba(118, 137, 174, 1);
            --charcoal: rgba(53, 62, 73, 1);
            --cool-gray: rgba(148, 156, 178, 1);
            --alice-blue: rgba(217, 236, 253, 1);
            --gradient-top: linear-gradient(0deg, #597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --gradient-right: linear-gradient(90deg, #597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --gradient-bottom: linear-gradient(180deg, #597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --gradient-left: linear-gradient(270deg, #597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --gradient-top-right: linear-gradient(45deg, #597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --gradient-bottom-right: linear-gradient(135deg, #597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --gradient-top-left: linear-gradient(225deg, #597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --gradient-bottom-left: linear-gradient(315deg, #597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --gradient-radial: radial-gradient(#597ef8ff, #7689aeff, #353e49ff, #949cb2ff, #d9ecfdff);
            --cui-nav-link-color: var(--cui-gray-900);
        }

        .table-board-blue2 {
            display: table;
            text-align: center;
            width: 100%;
        }

        .panel-body {
            width: 100%;
        }

        .subTitlev2 {
            color: var(--txtColor11)
        }

        .btnv2.xl,
        .btnv2.xs,
        .btnv2.s,
        .btnv2.l,
        .btnv2 {
            display: inline-block;
            cursor: pointer;
            color: #fff;
            border-radius: 2px;
            padding: 10px 20px;
            margin: 4px;
            font-size: 14px;
            font-weight: 500;
            font-family: var(--font-family);
            border: none;
            min-width: 7rem;
        }

        .btnv2 i {
            margin-right: 10px;
        }

        .btnv2.success {
            background-color: #60cf16;
            box-shadow: 0px 4px 0px #0e9220;
        }

        .btnv2.success:hover {
            background-color: #4eaf0d;
        }

        .btnv2.success:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.danger {
            background-color: #c0392b;
            box-shadow: 0px 4px 0px #962d22;
        }

        .btnv2.danger:hover {
            background-color: #ab3326;
        }

        .btnv2.danger:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.info {
            background-color: #3498db;
            box-shadow: 0px 4px 0px #217dbb;
        }

        .btnv2.info:hover {
            background-color: #258cd1;
        }

        .btnv2.info:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.warning {
            background-color: #f1c40f;
            box-shadow: 0px 4px 0px #c29d0b;
        }

        .btnv2.warning:hover {
            background-color: #dab10d;
        }

        .btnv2.warning:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.pink {
            background-color: #e74c3c;
            box-shadow: 0px 4px 0px #d62c1a;
        }

        .btnv2.pink:hover {
            background-color: #e43725;
        }

        .btnv2.pink:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.orange {
            background-color: #d35400;
            box-shadow: 0px 4px 0px #a04000;
        }

        .btnv2.orange:hover {
            background-color: #ba4a00;
        }

        .btnv2.orange:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.primary {
            background-color: #04599f;
            box-shadow: 0px 4px 0px #063c69;
        }

        .btnv2.primary:hover {
            background-color: #064d86;
        }

        .btnv2.primary:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.secondary {
            background-color: #7f8c8d;
            box-shadow: 0px 4px 0px #667273;
        }

        .btnv2.secondary:hover {
            background-color: #727f80;
        }

        .btnv2.secondary:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.black {
            background-color: #2c3e50;
            box-shadow: 0px 4px 0px #1a252f;
        }

        .btnv2.black:hover {
            background-color: #233140;
        }

        .btnv2.black:active {
            box-shadow: none;
            -webkit-transform: translateY(4px);
        }

        .btnv2.md {
            padding: 10px 25px;
            font-size: 14px;
        }

        .btnv2.l {
            padding: 15px 30px;
            font-size: 15.6px;
        }

        .btnv2.s {
            padding: 8px 20px;
            font-size: 11.7px;
        }

        .btnv2.xs {
            padding: 6px 12px;
            font-size: 10.4px;
        }

        .btnv2.xl {
            padding: 15px 40px;
            font-size: 18.2px;
        }

        .btnv2.flat {
            box-shadow: none;
        }

        .btnv2.flat:active {
            -webkit-transform: translateY(0);
        }

        .btnv2.pill {
            border-radius: 200px;
        }

        .btnv2.nr {
            border-radius: 0px;
        }

        .btnv2.shiny {
            position: relative;
            border-bottom: 1px solid rgba(255, 255, 255, 0.21);
            overflow: hidden;
        }

        .btnv2.shiny::before {
            content: "";
            width: 0px;
            height: 0px;
            border-style: solid;
            position: absolute;
            right: 0;
            top: 0;
            border-width: 0 70px 50px 0;
            border-color: transparent rgba(255, 255, 255, 0.16) transparent transparent;
        }

        nav div.btnv2 {
            margin: 10px 0 10px -4px;
            border-radius: 0px;
            border-left: 1px solid rgba(0, 0, 0, 0.2);
        }

        nav div.btnv2:first-of-type {
            border-top-left-radius: 2px;
            border-bottom-left-radius: 2px;
            border: none;
        }

        nav div.btnv2:last-of-type {
            border-top-right-radius: 2px;
            border-bottom-right-radius: 2px;
        }

        nav.v2 {
            width: 400px;
            margin: 0 auto;
        }

        nav.v2 div.btnv2 {
            margin: 0;
            border-radius: 0px;
            box-shadow: none;
            display: block;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        nav.v2 div.btnv2:first-of-type {
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
        }

        nav.v2 div.btnv2:last-of-type {
            border-bottom-right-radius: 2px;
            border-bottom-left-radius: 2px;
        }

        /* End New v2 Buttons */


        .my-3 {
            margin-top: 1rem !important;
            margin-bottom: 1rem !important;
        }

        .note-comment-blue2 {
            font-weight: 700;
        }

        .align-items-center {
            align-items: center !important;
        }

        .justify-content-between {
            justify-content: space-between !important;
        }

        .subTitlev2 {
            font-size: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 1rem 0 !important;
        }

        .table-header>div {
            background: linear-gradient(180deg, #dfd1c4 0%, #ffffff85 100%);
            border: 1px solid;
            border-color: #fff #fff #e5ded6 #ebe2d9;
        }


        .table-board-blue2 .w-5,
        .table-board-blue2 .wi-5 {
            width: calc(5% - 0px) !important
        }

        .table-board-blue2 .w-10,
        .table-board-blue2 .wi-10 {
            width: calc(10% - 0px) !important
        }

        .table-board-blue2 .w-15,
        .table-board-blue2 .wi-15 {
            width: calc(15% - 0px) !important
        }

        .table-board-blue2 .w-20,
        .table-board-blue2 .wi-20 {
            width: calc(20% - 0px) !important
        }

        .table-board-blue2 .w-25,
        .table-board-blue2 .wi-25 {
            width: calc(25% - 0px) !important
        }

        .table-board-blue2 .w-30,
        .table-board-blue2 .wi-30 {
            width: calc(30% - 0px) !important
        }

        .table-board-blue2 .w-40,
        .table-board-blue2 .wi-40 {
            width: calc(40% - 0px) !important
        }

        .table-board-blue2 .w-45,
        .table-board-blue2 .wi-45 {
            width: calc(45% - 0px) !important
        }

        .table-board-blue2 .w-50,
        .table-board-blue2 .wi-50 {
            width: calc(50% - 0px) !important
        }

        .table-board-blue2 .w-60,
        .table-board-blue2 .wi-60 {
            width: calc(60% - 0px) !important
        }

        .table-board-blue2 .w-75,
        .table-board-blue2 .wi-75 {
            width: calc(75% - 0px) !important
        }

        .table-board-blue2 .w-80,
        .table-board-blue2 .wi-80 {
            width: calc(80% - 0px) !important
        }

        .table-board-blue2 .w-90,
        .table-board-blue2 .wi-90 {
            width: calc(90% - 0px) !important
        }

        .table-board-blue2 .w-100,
        .table-board-blue2 .wi-100 {
            width: calc(100% - 0px) !important
        }

        .table-board-blue2 .tbl-row:not(:first-child) {
            border-bottom: 1px solid #e9e0d9;
        }


        .forum-tbl .el-row .table-board-tr .table-board-td._del_memo,
        .forum-tbl .tbl-row ._open_board_,
        .tbl-row:hover ._open_board_memo,
        [data-pagination] .pageset i {
            cursor: pointer
        }

        .forum-tbl .tbl-row .table-board-content {
            padding: 15px;
            box-shadow: -1px 1px 35px -7px rgba(132, 147, 163, 0.75);
            -webkit-box-shadow: -1px 1px 13px 0px rgb(228 217 206);
            -moz-box-shadow: -1px 1px 35px -7px rgba(132, 147, 163, 0.75);
            margin: 5px auto;
            background: #ffffff;
            border: 1px solid #ebe3db;
        }


        .table-header>div {
            height: 32px;
            line-height: 32px;


            float: left;
        }

        .tbl-row {
            position: relative;
            overflow: hidden;
            transition: all .2s ease-out;
        }

        .table-row {

            display: flex;
            flex-wrap: wrap;

        }

        .table-board-blue2 .table-board-tr>div {
            float: left;
            vertical-align: middle;
            text-align: center;
            line-height: 32px;
            border: 1px solid transparent;
            padding-top: 20px;
            padding-bottom: 20px;
        }


        .forum-tbl .el-row .table-board-tr .table-board-td._del_memo:hover .red-button1 {
            background-color: #ff000040;
        }

        .red-button1[role="button"] {
            background-color: #ea5455;
        }

        .table-header>div {
            text-align: center;
        }

        .table-board-tr .table-board-td .red-button1 {
            padding-left: 7px;
            padding-right: 7px;
            border-radius: 6px;
            display: inline-block;
            height: 25px;
            position: relative;
            line-height: 25px;
            color: #fff;
        }

        .forum-tbl .el-row .table-board-tr>.table-board-td-hoverable:hover,
        .table-board-blue2 .table-board-tr>div:hover {
            background-color: #fffcf4;
            border: 1px solid #d1b78f;
            color: var(--txtColor10);
        }



        .scroll-container {
            width: 100%;
            overflow: hidden;
        }

        .scroll-list {
            display: inline-flex;
            white-space: nowrap;
            animation: scroll 10s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }





        .table-board-blue2 .tbl-row:nth-child(odd) .table-board-td {
            background-color: #f4f4f4;
        }

        .clear_fix:after {
            content: "";
            display: table;
            clear: both;
        }


        .table-board-blue2 .table-board-tr>.table-board-td:not(:last-child) {
            border-left: 1px solid #e9e0d9;
        }

        .table-board-blue2 .table-board-tr>.table-board-td:last-child {
            border-right: 1px solid #e9e0d9;
            border-left: 1px solid #e9e0d9;
        }

        /* Initially hide all elements with class .box-column */
        .box-column {
            display: none;
        }

        /* Style for .box-column when it's displayed */
        .box-column.show {
            display: block;
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
                                                <div data-v-7f3aef84="" class="leftZone"><span data-v-f788cc95="" class="icon-iiconLogoB"></span><span data-v-f788cc95="">공지사항</span></div>
                                                <div data-v-7f3aef84="" class="line"></div>
                                            </div>
                                        </div>
                                        <div data-v-7f3aef84="" class="main_content">
                                            <div data-v-f788cc95="" class="v_deep_promotion">
                                                <div data-v-f788cc95="" class="main_content_wrap main_content_wrap_notice main_content_wrap_promotion">
                                                    <div data-v-f788cc95="" id="un-lobby" class="gameZoneA">


                                                        <div data-v-f788cc95="" class="slotZone" loading="false">
                                                            <ul>
                                                                <li class="slotLobby">
                                                                    <ul>
                                                                        <!---content_notice--->
                                                                        <div class="panel-body height-100-pro p-l-14 p-r-14 bg-black22 text-white" style="position: relative;">
                                                                            <div class="el-row f-s-14">
                                                                                <div>
                                                                                    <div class="el-row clear_fix">
                                                                                        <div class="el-row note-comment-blue2 d-flex align-items-center justify-content-between my-3 subTitlev2">
                                                                                            <div class="float-left f-w-700 f-s-16 p-t-11 subTitleWrapper">
                                                                                                <span>공지사항</span>
                                                                                            </div>
                                                                                            <div>
                                                                                                <button class="_memo_readall btn-read_All btnv2 pill shiny info">
                                                                                                    <i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i>전체읽기
                                                                                                </button>
                                                                                                <button class="_memo_delall cmnbtn btn-delete_all btnv2 pill shiny danger"><i class="fa-solid fa-trash" aria-hidden="true"></i>전체삭제</button>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-12 p-0 el-row">
                                                                                            <div class="table-board-blue2 forum-tbl">
                                                                                                <div class="table-header th-title  align-items-center m-0 p-0 clear_fix">
                                                                                                    <div class="text-center w-20">no</div>
                                                                                                    <div class="text-center w-60">제목</div>
                                                                                                    <div class="text-center w-20">날짜</div>

                                                                                                </div>


                                                                                                <div class="el-row tbl-row">
                                                                                                    <div class="table-board-tr el-row row_board clear_fix">
                                                                                                        <div class="text-center table-board-td-first w-20  table-board-td">
                                                                                                            30 </div>
                                                                                                        <div class="table-rowpicker _open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-60 memo_read table-board-td-hoverable" idx="653b1c1729aa9" vidx=".0.0.0.0_653b1c1729aa9">
                                                                                                            10월27일쪽지 </div>
                                                                                                        <div class="text-center table-board-td-first w-20  table-board-td">
                                                                                                            23/10/27 11:10 </div>

                                                                                                    </div>
                                                                                                    <div class="el-row box-column">
                                                                                                        <div id="653b1c1729aa9" class="collapse width-full table-board-content" style="display: block;">
                                                                                                            <div class="p-10 work-keep text-left el-row">
                                                                                                                <p>10월27일쪽지</p>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="el-row tbl-row">
                                                                                                    <div class="table-board-tr el-row row_board clear_fix">
                                                                                                        <div class="text-center table-board-td-first w-20  table-board-td">
                                                                                                            30 </div>
                                                                                                        <div class="table-rowpicker _open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-60 memo_read table-board-td-hoverable" idx="653b1c1729aa9" vidx=".0.0.0.0_653b1c1729aa9">
                                                                                                            10월27일쪽지 </div>
                                                                                                        <div class="text-center table-board-td-first w-20  table-board-td">
                                                                                                            23/10/27 11:10 </div>

                                                                                                    </div>
                                                                                                    <div class="el-row box-column">
                                                                                                        <div id="653b1c1729aa9" class="collapse width-full table-board-content" style="display: block;">
                                                                                                            <div class="p-10 work-keep text-left el-row">
                                                                                                                <p>10월27일쪽지</p>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="el-row tbl-row">
                                                                                                    <div class="table-board-tr el-row row_board clear_fix">
                                                                                                        <div class="text-center table-board-td-first w-20 table-board-td">
                                                                                                            30
                                                                                                        </div>
                                                                                                        <div class="table-rowpicker _open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-60 memo_read table-board-td-hoverable table-board-td" idx="653b1c1729aa9" vidx=".0.0.0.0_653b1c1729aa9">
                                                                                                            10월27일쪽지
                                                                                                        </div>
                                                                                                        <div class="text-center table-board-td-first w-20 table-board-td">
                                                                                                            23/10/27 11:10
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="el-row box-column">
                                                                                                        <div id="653b1c1729aa9" class="collapse width-full table-board-content"></div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="el-row tbl-row">
                                                                                                    <div class="table-board-tr el-row row_board clear_fix">
                                                                                                        <div class="text-center table-board-td-first w-20  table-board-td">
                                                                                                            30 </div>
                                                                                                        <div class="table-rowpicker _open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-60 memo_read table-board-td-hoverable" idx="653b1c1729aa9" vidx=".0.0.0.0_653b1c1729aa9">
                                                                                                            10월27일쪽지 </div>
                                                                                                        <div class="text-center table-board-td-first w-20  table-board-td">
                                                                                                            23/10/27 11:10 </div>

                                                                                                    </div>
                                                                                                    <div class="el-row box-column">
                                                                                                        <div id="653b1c1729aa9" class="collapse width-full table-board-content" style="display: block;">
                                                                                                            <div class="p-10 work-keep text-left el-row">
                                                                                                                <p>10월27일쪽지</p>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </ul>
                                                                    <!---->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div data-v-f788cc95="" class="pager_block">
                                                            <div class="page-list">
                                                                <ul class="pagination">
                                                                    <li class="first">
                                                                        <a href="javascript: void(0)">
                                                                            <span>
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">first</font>
                                                                                </font>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="prev">
                                                                        <a href="javascript: void(0)">
                                                                            <span>
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">before</font>
                                                                                </font>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="pages">
                                                                        <a href="javascript: void(0)" class="on">
                                                                            <span>
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">One</font>
                                                                                </font>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="next">
                                                                        <a href="javascript: void(0)">
                                                                            <span>
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">next</font>
                                                                                </font>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="last">
                                                                        <a href="javascript: void(0)">
                                                                            <span>
                                                                                <font style="vertical-align: inherit;">
                                                                                    <font style="vertical-align: inherit;">end</font>
                                                                                </font>
                                                                            </span>
                                                                        </a>
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

        <script>
            $(document).ready(function() {
                var $rowSelect = $(".table-rowpicker");
                var $boxColumns = $(".box-column");
                var animationSpeed = 500; // Adjust the animation speed as needed

                $rowSelect.on('click', function() {
                    var index = $rowSelect.index(this);
                    var $boxRow = $boxColumns.eq(index);

                    // Slide toggle the related element (.box-column) gradually
                    $boxRow.stop().animate({
                        height: 'toggle'
                    }, animationSpeed, function() {
                        $(this).toggleClass('show'); // Toggle 'show' class after animation
                    });

                    // Hide other elements with class .box-column by sliding them up
                    $boxColumns.not($boxRow).stop().animate({
                        height: 'hide'
                    }, animationSpeed, function() {
                        $(this).removeClass('show'); // Remove 'show' class after animation
                    });
                });
            });
        </script>



</body>

</html>