<?php
	
	$ver = '004';
	
?>
<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
		<title>SMGame Newtemplate V3 :: Notification</title>
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
			
		    --fa-style-family:
			"Noto Sans KR";
			--primary-button-bg:#7bc74d;
			--secondary-button-bg:#83bd75;
			--tertiary-button-bg:#6d67e4;
			--success-button-bg:#e6b31e;
			--next-button-bg:#2155cd;
			--support-button-bg:#4caf50;
			--danger-button-bg:#dd5353;
			--link-button-bg:#eee;
			--outline-button-bg:#ddd;
			--primary-button-font-color:#fff;
			--secondary-button-font-color:#fff;
			--success-button-font-color:#fff;
			--next-button-font-color:#fff;
			--danger-button-font-color:#fff;
			--link-button-font-color:#fff;
			--outline-button-font-color:#fff;
			--icon-notActive-color:#b0c4f3;
			--icon-Active-color:#225ff1;
			--border-radius-xs:.5rem;
			--border-radius-s:1rem;
			--border-radius-m:1.5rem;
			--color-table-bg-1:#ffffff;
			--color-table-header-1:transparent;
			--color-layer-body:#fff;
			--color-layer-alt-1:#262a34;
			--color-layer-alt-2:#2f3645;
			--color-layer-alt-3:#596070;
			--color-layer-alt-4:rgba(89,96,112,.5);
			--color-primary-1:#fdd835;
			--color-primary-2:#ffa000;
			--color-primary-3:#ffd149;
			--color-primary-4:#ffff7b;
			--color-primary-5:#ffffad;
			--color-secondary-1:#a153ff;
			--color-secondary-2:#2e0f6c;
			--color-secondary-3:#703bf5;
			--color-secondary-4:#c395ff;
			--color-secondary-5:#e6ceff;
			--color-error:#ff5e3a;
			--color-warning:#fdd835;
			--color-successfully:#1be176;
			--color-primary-gradient:linear-gradient(90deg,#ffa000,#ffff7b);
			--color-secondary-gradient:linear-gradient(90deg,#2e0f6c,#2e0f6c .01%,#712df5);
			--color-additional-gradient:linear-gradient(90deg,#11998e,#03dea9);
			--color-tertiary-gradient:linear-gradient(0deg,#000a12,rgba(0,10,18,0));
			--color-tertiary-1:#fff;
			--color-tertiary-2:rgba(182,189,204,.4);
			--color-tertiary-3:rgba(182,189,204,.2);
			--color-tertiary-4:rgb(34 33 33);
			--color-tertiary-5:rgba(0,10,18,.2);
			--color-tertiary-6:rgba(0,10,18,.64);
			--color-text-body:#b6bdcc;
			--color-text-alt:#fff;
			--color-text-menu-default:var(
			--color-text-body);
			--color-text-menu-active:var(
			--color-primary-1);
			--color-text-link-default:var(
			--color-primary-3);
			--color-text-link-active:rgba(255,209,73,.7);
			--color-text-on-opposite-back:#000a12;
			--color-button-text-primary:var(
			--color-layer-body);
			--color-button-text-secondary:var(
			--color-primary-2);
			--color-button-text-tertiary:var(
			--color-secondary-1);
			--bg-extra:#2e313d;
			--color-hint:rgba(245,245,255,.45);
			--color-secondary:#b6bdcc;
			--color-base:#fafbff;
			--bg-base:#1b1f2e;
			--forum-btn-primary:#04599f;
			--forum-btn-secondary:#011627;
			--forum-btn-success:#60cf16;
			--forum-btn-danger:#e71d36;
			--forum-btn-warning:#ff9f1c;
			--forum-btn-info:#36d4d4;
			--bg-btn-search:#7286d3;
			--bg-btn-search-hover:#4b60b4;
			--color-btn-search:#eee;
			--color-btn-search-hover:#fff;
			--cui-link-color:#321fdb;
			--cui-link-hover-color:#2819af;
			--cui-code-color:#d63384;
			--cui-highlight-bg:#fff3cd;
			--select-bet-bg-hover-light:#bdbdbd;
			--select-bet-bg-hover-dark:#3a4058;
			--select-bet-bg-light:#a57bb9;
			--select-bet-color-light:#000;
			--select-bet-bg-dark:#32203b;
			--select-bet-color-dark:#afafaf;
			--homepage-content-bg:#fff;
			--alert-shadow:lightblue;
			--casino-color-primary:#597ef8;
			--cui-blue:#0d6efd;
			--cui-indigo:#6610f2;
			--cui-purple:#6f42c1;
			--cui-pink:#d63384;
			--cui-red:#dc3545;
			--cui-orange:#fd7e14;
			--cui-yellow:#ffc107;
			--cui-green:#198754;
			--cui-teal:#20c997;
			--cui-cyan:#0dcaf0;
			--cui-black:#000015;
			--cui-white:#fff;
			--cui-gray:#8a93a2;
			--cui-gray-dark:#636f83;
			--cui-gray-100:#ebedef;
			--cui-gray-200:#d8dbe0;
			--cui-gray-300:#c4c9d0;
			--cui-gray-400:#b1b7c1;
			--cui-gray-500:#9da5b1;
			--cui-gray-600:#8a93a2;
			--cui-gray-700:#768192;
			--cui-gray-800:#636f83;
			--cui-gray-900:#4f5d73;
			--cui-primary:#321fdb;
			--cui-secondary:#9da5b1;
			--cui-success:#2eb85c;
			--cui-info:#39f;
			--cui-warning:#1fc2db;
			--cui-danger:#e55353;
			--cui-light:#ebedef;
			--cui-dark:#4f5d73;
			--cui-primary-rgb:50,31,219;
			--cui-secondary-rgb:157,165,177;
			--cui-success-rgb:46,184,92;
			--cui-info-rgb:51,153,255;
			--cui-warning-rgb:249,177,21;
			--cui-danger-rgb:229,83,83;
			--cui-light-rgb:235,237,239;
			--cui-dark-rgb:79,93,115;
			--cui-white-rgb:255,255,255;
			--cui-black-rgb:0,0,21;
			--cui-body-color-rgb:44,56,74;
			--cui-body-bg-rgb:255,255,255;
			--cui-gradient:linear-gradient(180deg,rgba(255,255,255,.15),rgba(255,255,255,0));
			--cui-body-color:rgba(44,56,74,.95);
			--cui-body-bg:#ffffff;
			--cui-border-color:#d8dbe0;
			--cui-border-color-translucent:rgba(0,0,21,.175);
			--cui-heading-color:unset;
			--cui-link-color:#321fdb;
			--cui-link-hover-color:#2819af;
			--cui-code-color:#d63384;
			--cui-highlight-bg:#fff3cd;
			--cui-header-nav-link-color:#5cc3fa;
			--cui-sidebar-bg-color:#3c4b64;
			--cui-bg-warning:#d5a439;
			--cui-footer-color:rgba(44,56,74,.95);
			--cui-footer-bg:#ebedef;
			--cui-footer-border-color:#d8dbe0;
			--cui-footer-border:1px solid transparent;
			--sm-aside-width:320px;
			--color-border-light-blue:#afbdcf;
			--bg-panel:#e1e1e1;
			--match-card-bg:rgb(239,244,254);
			--container-bg-rgb:235,237,239;
			--casino-pedestal-border:#999;
			--casino-pedestal-bg:#999;
			--casino-pedestal-text:#000a12;
			--pageset-this-color:#686868;
			--tabs-gradient-bg-color: #dbebf7;
			--tabs-border-color:#fefefe;
			--tabs-gradient-active:linear-gradient(180deg,#565656,#dadadb);
			--tabs-gradient-main-active:linear-gradient(180deg,#3c4b64,#343452);
			--bodyBgColor:#fff;
			--sports-top-bg:#fff;
			--sports-top-bg-active:#4385f8;
			--sports-top-color-active:#fff;
			--header-bg-color:#353f4b;
			--header-color:#fffefe;
			--header-hover-color:#a4b8f9;
			--topmenu-bg:#fff;
			--topmenu-color:#515b7c;
			--topmenu-arrow-color:#969696;
			--topmenu-color-active:#4385f8;
			--footer-bg:#353f4b;
			--bgColor-00:#fff;
			--bgColor-01:#596371;
			--bgColor-02:#4385f8;
			--bgColor-03:#c9e7ff;
			--bgColor-04:#f4f7fe;
			--bgColor-05:#4867c9;
			--bgColor-06:#ffb100;
			--bgColor-07:#f6f7fa;
			--bgColor-08:#d4deff;
			--bgColor-09:#4d5666;
			--bgColor-10:#7d4cff;
			--bgColor-11:#2c2c34;
			--bgColor-12:#597ef8;
			--bgColor-13:#425eb8;
			--bgColor-14:#353f4b;
			--bgColor-15:#5a6372;
			--bgColor-16:#95a6bd;
			--bgColor-17:#b4bedc;
			--bgColor-18:#e1e1e1;
			--bgColor-19:#414c5c;
			--bgColor-20:#f3f3f3;
			--border-color-00:#fff;
			--border-color-01:#cfd0ea;
			--border-color-02:#3c4652;
			--border-color-03:#2e3740;
			--border-color-04:#d8dbe5;
			--border-color-05:#4385f8;
			--border-color-06:#ebecf3;
			--border-color-07: #cecfe9;
			--border-color-08:#597ef8;
			--border-color-09:#d7d4f1;
			--txtColor00:#fff;
			--txtColor01:#83838a;
			--txtColor02:#4385f8;
			--txtColor03:#000;
			--txtColor04:#40455a;
			--txtColor05:#404261;
			--txtColor06:#ed2736;
			--txtColor07:#a8a8aa;
			--txtColor08:#b4b4b4;
			--txtColor09:#cececd;
			--txtColor10:#515b7c;
			--txtColor11:#95a6bd;
			--txtColor12:#597ef8;
			--txtColor13:#7d783e;
			--txtColor14:#3552d3;
			--txtColor15:#da671a;
			--txtColor16:#6a7391;
			--txtColor17:#b27b46;
			--shadow01:#cbced8;
			--shadow02:#d4deff;
			--shadow03:#000;
			--shadow04:#2b3d7869;
			--linear-grad-bg01: linear-gradient(135deg,rgb(236,241,253) 0%,rgb(255,255,255) 15%,rgb(239,243,254) 20%,rgb(239,243,254) 100%);
			--dpswitches-bg-color:var(
			--bgColor-02);
			--dpswitches-label-color:#fff;
			--dpswitch-bg-color:#fff;
			--dpswitch-text-color:var(
			--txtColor00);
			--mini-game-header:#bdbdbd;
			--hud-color:0,255,200;
			--hud--focus-color:255,255,255;
			--provider-bg:#303c54;
			--marquee-bg-color:#939ab0;
			--marquee-text-color:#fff;
			--quickmenu-color:rgb(24 24 24 / 75%);
			--scrollbar-bg-color:rgb(0 0 0 / 40%);
			--blue-crayola:#597ef8;
			--glaucous:#7689ae;
			--charcoal:#353e49;
			--cool-gray:#949cb2;
			--alice-blue:#d9ecfd;
			--blue-crayola:hsla(226,92%,66%,1);
			--glaucous:hsla(220,26%,57%,1);
			--charcoal:hsla(213,16%,25%,1);
			--cool-gray:hsla(224,16%,64%,1);
			--alice-blue:hsla(208,90%,92%,1);
			--blue-crayola:#597ef8;
			--glaucous:#7689ae;
			--charcoal:#353e49;
			--cool-gray:#949cb2;
			--alice-blue:#d9ecfd;
			--blue-crayola:hsla(226,92%,66%,1);
			--glaucous:hsla(220,26%,57%,1);
			--charcoal:hsla(213,16%,25%,1);
			--cool-gray:hsla(224,16%,64%,1);
			--alice-blue:hsla(208,90%,92%,1);
			--blue-crayola:rgba(89,126,248,1);
			--glaucous:rgba(118,137,174,1);
			--charcoal:rgba(53,62,73,1);
			--cool-gray:rgba(148,156,178,1);
			--alice-blue:rgba(217,236,253,1);
			--gradient-top:linear-gradient(0deg,#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
			--gradient-right:linear-gradient(90deg,#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
			--gradient-bottom:linear-gradient(180deg,#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
			--gradient-left:linear-gradient(270deg,#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
			--gradient-top-right:linear-gradient(45deg,#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
			--gradient-bottom-right:linear-gradient(135deg,#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
			--gradient-top-left:linear-gradient(225deg,#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
			--gradient-bottom-left:linear-gradient(315deg,#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
			--gradient-radial:radial-gradient(#597ef8ff,#7689aeff,#353e49ff,#949cb2ff,#d9ecfdff);
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
			
			.subTitlev2{color:var(--txtColor11)}
			
			.btnv2.xl, .btnv2.xs, .btnv2.s, .btnv2.l, .btnv2 {
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
			.btnv2.flat {box-shadow: none;}
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
			margin-top: 1rem!important;
			margin-bottom: 1rem!important;
			}
			.note-comment-blue2 {
			font-weight: 700;
			}
			.align-items-center {
			align-items: center!important;
			}
			.justify-content-between {
			justify-content: space-between!important;
			}
			.subTitlev2 {
			font-size: 1.25rem;
			display: flex;
			align-items: center;
			justify-content: space-between;
			margin: 1rem 0 !important;
			}
			
			.table-header > div {
    background: linear-gradient(180deg,#dfd1c4 0%,#ffffff85 100%);
    border: 1px solid #eaddcf;
			}
			
			
			.table-board-blue2 .w-5,.table-board-blue2 .wi-5{width:calc(5% - 6px)!important}
			.table-board-blue2 .w-10,.table-board-blue2 .wi-10{width:calc(10% - 6px)!important}
			.table-board-blue2 .w-15,.table-board-blue2 .wi-15{width:calc(15% - 6px)!important}
			.table-board-blue2 .w-20,.table-board-blue2 .wi-20{width:calc(20% - 6px)!important}
			.table-board-blue2 .w-25,.table-board-blue2 .wi-25{width:calc(25% - 6px)!important}
			.table-board-blue2 .w-30,.table-board-blue2 .wi-30{width:calc(30% - 6px)!important}
			.table-board-blue2 .w-40,.table-board-blue2 .wi-40{width:calc(40% - 6px)!important}
			.table-board-blue2 .w-45,.table-board-blue2 .wi-45{width:calc(45% - 6px)!important}
			.table-board-blue2 .w-50,.table-board-blue2 .wi-50{width:calc(50% - 6px)!important}
			.table-board-blue2 .w-60,.table-board-blue2 .wi-60{width:calc(60% - 6px)!important}
			.table-board-blue2 .w-75,.table-board-blue2 .wi-75{width:calc(75% - 6px)!important}
			.table-board-blue2 .w-80,.table-board-blue2 .wi-80{width:calc(80% - 6px)!important}
			.table-board-blue2 .w-90,.table-board-blue2 .wi-90{width:calc(90% - 6px)!important}
			.table-board-blue2 .w-100,.table-board-blue2 .wi-100{width:calc(100% - 6px)!important}
			
			
			
			
			.forum-tbl .el-row .table-board-tr .table-board-td._del_memo,.forum-tbl .tbl-row ._open_board_,.tbl-row:hover ._open_board_memo,[data-pagination] .pageset i{cursor:pointer}
			.forum-tbl .tbl-row .table-board-content {
			padding: 15px;
			border-radius: 10px;
			box-shadow: -1px 1px 35px -7px rgba(132,147,163,0.75);
			-webkit-box-shadow: -1px 1px 13px 0px rgb(204 221 255);
			-moz-box-shadow: -1px 1px 35px -7px rgba(132,147,163,0.75);
			margin: 10px;
			width: calc(100% - 20px);
			}
			
			
			.table-header > div {
			height: 32px;
			line-height: 32px;
			border-radius: 5px;
			margin: 3px;
			float: left;
			}
			
			.tbl-row {
			position: relative;
			overflow: hidden;
			transition: all .2s ease-out;
			border-radius: 5px;
			}
			
			.row {
			
			display: flex;
			flex-wrap: wrap;
			
			}
			
			.table-board-blue2 .table-board-tr > div {
			float: left;
			vertical-align: middle;
			text-align: center;
			border: 1px solid #d8dbe5;
			border-radius: 5px;
			margin: 3px;
			line-height: 32px;
			}
			
			
			
			
			.forum-tbl .el-row .table-board-tr .table-board-td._del_memo:hover .red-button1 {
			background-color: #ff000040;
			}
			.red-button1[role="button"] {
    background-color: #ea5455;
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
													<div data-v-7f3aef84="" class="leftZone"><span data-v-f788cc95="" class="icon-iiconLogoB"></span><span data-v-f788cc95="">이벤트</span></div>
													<div data-v-7f3aef84="" class="line"></div>
												</div>
											</div>
											
											
											<div data-v-7f3aef84="" class="main_content" bis_skin_checked="1">
												<div data-v-f788cc95="" class="v_deep_promotion" >
													<div data-v-f788cc95="" class="main_content_wrap main_content_wrap_notice main_content_wrap_promotion" >
														<div data-v-f788cc95="" id="un-lobby" class="gameZoneA" >
															<div data-v-c619f736="" data-v-f788cc95="" class="tabZone" >
																<ul data-v-c619f736="">
																	<li data-v-c619f736="" class="active"><!---->
																		<h4 data-v-c619f736=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">All (9)</font></font></h4>
																	</li>
																	<li data-v-c619f736="" class=""><!---->
																		<h4 data-v-c619f736=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Membership (6)</font></font></h4>
																	</li>
																	<li data-v-c619f736="" class=""><!---->
																		<h4 data-v-c619f736=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sports (1)</font></font></h4>
																	</li>
																	<li data-v-c619f736="" class=""><!---->
																		<h4 data-v-c619f736=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Casino (1)</font></font></h4>
																	</li>
																	<li data-v-c619f736="" class=""><!---->
																		<h4 data-v-c619f736=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">slot (1)</font></font></h4>
																	</li>
																	<li data-v-c619f736="" class=""><!---->
																		<h4 data-v-c619f736=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ended Event (2)</font></font></h4>
																	</li>
																</ul>
															</div>
															<div data-v-f788cc95="" class="slotZone" loading="false" >
																<ul>
																	<li class="slotLobby">
																		<ul>
																			
																			
																			
																			<!---content_notice--->
																			<div class="panel-body height-100-pro p-l-14 p-r-14 bg-black22 text-white" style="position: relative;" >
																				<div class="el-row f-s-14" >
																					<div >
																						<div class="el-row  clear_fix" >
																							<div class="el-row note-comment-blue2 d-flex align-items-center justify-content-between my-3 subTitlev2" >
																								<div class="float-left f-w-700 f-s-16 p-t-11 subTitleWrapper" > 
																									<span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Message list</font></font></span>
																								</div>
																								<div >
																									<button class="_memo_readall btn-read_All btnv2 pill shiny info ">
																									<i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Read all                                    </font></font></button>
																									<button class="_memo_delall cmnbtn btn-delete_all btnv2 pill shiny danger "><i class="fa-solid fa-trash" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Delete all</font></font></button>
																								</div>
																								
																							</div>
																							
																							<div class="col-md-12 p-0 el-row" >
																								<div class="table-board-blue2 forum-tbl" >
																									<div class="table-header th-title row align-items-center m-0 p-0" >
																										<div class="text-center w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">no</font></font></div>
																										<div class="text-center w-50" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">title</font></font></div>
																										<div class="text-center w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hour</font></font></div>
																										<div class="text-center w-15" ></div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											30                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="653b1c1729aa9" vidx=".0.0.0.0_653b1c1729aa9" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											October 27th message                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/10/27 11:10                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_653b1c1729aa9" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="653b1c1729aa9" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">October 27th message</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											29                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="651a7745d0988" vidx=".0.0.0.0_651a7745d0988" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Internal member message test                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/10/02 16:54                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_651a7745d0988" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="651a7745d0988" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											28                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="651a70426bfa6" vidx=".0.0.0.0_651a70426bfa6" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Ha ha ha ha ha                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/10/02 16:24                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_651a70426bfa6" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="651a70426bfa6" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ha ha ha ha ha</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											27                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="651610fd974ee" vidx=".0.0.0.0_651610fd974ee" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											sdhserhte                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 08:49                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_651610fd974ee" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="651610fd974ee" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">rhadfgasdfg</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											26                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="65161051176b4" vidx=".0.0.0.0_65161051176b4" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											ggg                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 08:46                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_65161051176b4" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="65161051176b4" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">gggg</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											25                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="651604acbc5a0" vidx=".0.0.0.0_651604acbc5a0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Full test 4                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 07:56                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_651604acbc5a0" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="651604acbc5a0" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Full test 4</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											24                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6516031a03b6f" vidx=".0.0.0.0_6516031a03b6f" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Chuseok event information                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 07:50                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6516031a03b6f" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6516031a03b6f" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hello, this is Turnkey Operations Team.</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chuseok event from September 29th to September 30th 23:59</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20% off first purchase event is being held.</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thank you always and have a happy Chuseok</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6515fd4418557" vidx=".0.0.0.0_6515fd4418557" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Full test 3                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 07:25                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6515fd4418557" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6515fd4418557" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Full test 3</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											22                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6515fca32e161" vidx=".0.0.0.0_6515fca32e161" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Excluding all internal                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 07:22                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6515fca32e161" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6515fca32e161" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ㅁㄴㅇㅎㅎㅎㄷ</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6515f22cab9e0" vidx=".0.0.0.0_6515f22cab9e0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Full test 2                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 06:37                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6515f22cab9e0" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6515f22cab9e0" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Full test 2</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											20                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6515f0a8b20e6" vidx=".0.0.0.0_6515f0a8b20e6" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											adfgadfh                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 06:31                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6515f0a8b20e6" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6515f0a8b20e6" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">awegawesdf</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											19                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6515ecf3a2906" vidx=".0.0.0.0_6515ecf3a2906" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Full message test                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/09/29 06:15                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6515ecf3a2906" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6515ecf3a2906" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Full message test</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											18                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="64412797e9aa0" vidx=".0.0.0.0_64412797e9aa0" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											ㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇ                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/04/20 20:52                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_64412797e9aa0" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="64412797e9aa0" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇ</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											17                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6441240e7b3ea" vidx=".0.0.0.0_6441240e7b3ea" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											5                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/04/20 20:37                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6441240e7b3ea" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6441240e7b3ea" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											16                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="644123fc20605" vidx=".0.0.0.0_644123fc20605" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											111                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/04/20 20:37                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_644123fc20605" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="644123fc20605" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1111</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											15                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6437222b07cda" vidx=".0.0.0.0_6437222b07cda" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											12                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/04/13 06:27                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6437222b07cda" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6437222b07cda" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											14                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="63f0e87b40945" vidx=".0.0.0.0_63f0e87b40945" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											Hello, this is the management team.                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											23/02/19 00:02                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_63f0e87b40945" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="63f0e87b40945" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											13                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="613a05be723bb" vidx=".0.0.0.0_613a05be723bb" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											ㅇㅇㅇㅇㅇ                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/09/09 22:01                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_613a05be723bb" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="613a05be723bb" class="collapse width-full table-board-content"  style="display: block;"><div class="p-10 work-keep text-left el-row" >
																											<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ㅇㅇㅇㅇㅁㄴㅇㅊ ㄴㅁㅇ ㄴㄴㄹ ㄴㅇㅁ</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ㄴㅁㄹ&nbsp;</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mmm</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ㄹ ㄴㅁㅇ</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L&nbsp;</font></font></p><p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ㄴㅇㄹㄻㅇㄴㄹ&nbsp;</font></font></p></div>
																											
																											</div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											12                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6132eda561378" vidx=".0.0.0.0_6132eda561378" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											asdasd                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/09/04 12:53                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6132eda561378" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6132eda561378" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											11                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="6132ed4a48483" vidx=".0.0.0.0_6132ed4a48483" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											asdf                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/09/04 12:51                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_6132ed4a48483" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="6132ed4a48483" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											10                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="61248205f0777" vidx=".0.0.0.0_61248205f0777" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											branch test                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/08/24 14:22                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_61248205f0777" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="61248205f0777" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											9                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="612481f58239b" vidx=".0.0.0.0_612481f58239b" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											level test                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/08/24 14:21                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.0.0_612481f58239b" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="612481f58239b" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											8                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="61248107694a2" vidx=".0.0.100.2_61248107694a2" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											fdsafsaf                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/08/24 14:17                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.100.2_61248107694a2" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="61248107694a2" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											7                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="612480c5ac927" vidx=".0.0.100.2_612480c5ac927" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											ccc                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/08/24 14:16                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.100.2_612480c5ac927" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="612480c5ac927" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											6                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="61248000a36b7" vidx=".0.0.100.2_61248000a36b7" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											tesdtagnet2                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/08/24 14:13                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.100.2_61248000a36b7" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="61248000a36b7" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											5                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="61247f61e3325" vidx=".0.0.100.2_61247f61e3325" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											fdasfsaf                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/08/24 14:10                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.100.2_61247f61e3325" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="61247f61e3325" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<div class="el-row tbl-row" >
																										<div class="table-board-tr el-row row" >
																											<div class="text-center table-board-td-first w-15" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											4                                        </font></font></div>
																											<div class="_open_board_memo _board _view text-left table-board-td table-board-flex-field cursor w-50 memo_read table-board-td-hoverable" idx="61247eca49c92" vidx=".0.0.100.2_61247eca49c92" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											ㄹㄹㄹ                                        </font></font></div>
																											<div class="text-center table-board-td-first w-20" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
																											21/08/24 14:08                                        </font></font></div>
																											<div class="table-board-td display-center _del_memo w-15" idx=".0.0.100.2_61247eca49c92" >
																												<div class="red-button1 width-50  cursor" style="margin: 0px auto;" role="button" >
																												<span class="icon-iconTrash icon icon-custom-size trash-icon-svg"></span>											</div>
																												
																												
																											</div>
																										</div>
																										<div class="el-row" >
																											<div id="61247eca49c92" class="collapse width-full table-board-content" ></div>
																										</div>
																									</div>
																									<!--
																										<div class="el-row"  id ="61247eca49c92">
																										<div class="collapse width-full table-board-td-first" style="border:0px solid #000 !important; flex-direction: column;">
																										<div class="p-10 work-keep el-row">
																										쪽지함이 비었습니다.
																										</div>
																										</div>
																										</div>
																									-->
																								</div>
																							</div>
																							<div class="display-inlineblock width-full el-row" >
																								<div class="el-pagination is-background bet-history-paging-blue2 d-flex justify-content-center align-items-center" >
																									<span type="button" class="page_arrow-left btn-prev">
																										<i class="el-icon el-icon-arrow-left fa-solid fa-chevron-left" aria-hidden="true"></i>
																									</span>
																									
																									<div class="paging" data-pagination="" >
																										<ul class="el-pager ">
																											<li class="number pagination pageset px-2 active thispage " page="1" site="memo" disabled="disabled"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">One</font></font></li>
																										</ul>
																									</div>
																									<span type="button" class="page_arrow-right btn-next">
																										<i class="el-icon el-icon-arrow-right fa-solid fa-chevron-right" aria-hidden="true"></i>
																									</span>
																								</div>
																							</div>
																							
																							<script>
																								$(document).ready(function() {
																									if($('ul.el-pager').length < 1) {
																										$('.btn-prev').addClass('none');
																										$('.btn-next').addClass('none');
																										} else {
																										$('.btn-prev').removeClass('none');
																										$('.btn-next').removeClass('none');
																									}
																								});
																							</script>                        <!-- Vertical Space for mobile quickmenu -->
																							<div class="my-6 d-sm-none d-md-block" ></div>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			
																			
																			
																			
																		</ul><!---->
																	</li>
																</ul>
															</div>
															<div data-v-f788cc95="" class="pager_block" >
																<div class="page-list" >
																	<ul class="pagination">
																		<li class="first"><a href="javascript: void(0)"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">first</font></font></span></a></li>
																		<li class="prev"><a href="javascript: void(0)"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">before</font></font></span></a></li>
																		<li class="pages"><a href="javascript: void(0)" class="on"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">One</font></font></span></a></li>
																		<li class="next"><a href="javascript: void(0)"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">next</font></font></span></a></li>
																		<li class="last"><a href="javascript: void(0)"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">end</font></font></span></a></li>
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
					</div>
				</div>
			</div>
			<div class="modals-container"></div>
			<div id="login-container"></div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/newv3.js?v=<?php echo $ver; ?>"></script>
	</body>
</html>