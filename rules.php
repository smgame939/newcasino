<?php
    
    include('inc/versions.php');
    
?>

<!DOCTYPE html>
<html lang="ko-KR" style="--font-family: Noto Sans KR; --vh: 9.45px;">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
        <title>SMGame Newtemplate V3 :: Rules</title>
        <base href=".">
        <meta name="renderer" content="webkit">
        <meta name="force-rendering" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="application-version" content="3.111.0">
        <meta name="theme-color" content="#ffffff">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="stylesheet" href="css/newv3.css?v=<?php echo $ver; ?>">
        <link rel="stylesheet" href="css/index-sports.css?v=<?php echo $ver; ?>">
        <link rel="stylesheet" href="css/sport.css?v=<?php echo $ver; ?>">
        
        
        
        <style>
            
            #guide {width:100%;margin:0 auto;padding:40px 0 0 0;}
            #guide h2 {display:block;margin:0 0 18px 0;padding:0 20px;font-size:18px;font-weight:500;line-height:120px;border:solid 1px #f21972}
            #guide h3 {display:block;margin:0 0 8px 0;color:#15aacf;font-size:16px;font-weight:500;}
            #guide h4 {display:block;width:100%;margin:0 0 8px 0;color:#f21972;font-size:14px;font-weight:500;line-height:28px;text-align:center;background:#222;border:solid 1px #444;border-radius:3px;}
            #guide p {margin:0 0 24px 0;}
            
            #guide ul.guide_list {margin:0 0 24px 0;}
            #guide ul.guide_list li {display:block;margin:0 0 4px 0;padding:0 0 0 8px;background:url(../img/bullet.png?t=1) no-repeat 0 9px;}
            
            #guide .guide_info {margin:0 0 24px 0;color:#f75665;}
            #guide .guide_card {margin:0 0 18px 0;text-align:center;}
            #guide .guide_roulette {margin:0 0 18px 0;text-align:center;}
            #guide .guide_roulette img {width:100%;height:auto;}
            
            .guide_type {margin:0 0 24px 0;}
            .guide_type table {width:100%;margin:0 0 10px 0;border-collapse:collapse;border-spacing:0px;} 
            .guide_type table th,
            .guide_type table td {padding:12px 0;font-size:12px;text-align:center;border:solid 1px #444;}
            .guide_type table th {color:#f21972;font-weight:400;background:#222;}
            
            
            #guide ul.guide_bullet_list {margin:0 0 24px 0;}
            #guide ul.guide_bullet_list li {display:block;position:relative;margin:0 0 6px 0;padding:0 0 0 26px;}
            #guide ul.guide_bullet_list li .bullet {display:block;position:absolute;left:0;top:2px;width:17px;height:17px;color:#fff;font-size:10px;text-align:center;line-height:17px;background:#117cce;border-radius:50%;}
            #guide ul.guide_bullet_list li .sub {display:block;color:#15aacf}
            
            #guide .card_s {width:300px;height:auto;}
            #guide .card_b {width:450px;height:auto;}
            
        </style>
    </head>
    
    <body>
        <div id="app" data-v-app="" class="webp">
            <div>
                <div  class="allContent sportUse">
                    <?php include('inc/sidemenu.php'); ?>
                    <div  class="rightContent homePage">
                        <div  class="contents">
                            <div  class="main_content_continer">
                                <?php include('inc/header.php'); ?>
                                <div style="margin-top:70px;">
                                    <div class="main_content_continer" version="1.0.98"><!--v-if-->
                                        <div class="main_content SportContent" style="">
                                            <div class="main_content_wrap">
                                                <div class="sportFrame">
                                                    <div class="chooseZone01" style="height: 875px;">
                                                        <div class="title"><img src="image/sports/000iconChampion.3848bea6.png"> 베팅규정</div>
                                                        <div class="sideMenu">
                                                            <ul><!--  -->
                                                                <li class="bac">
                                                                    <span class="title">바카라(Baccarat)</span>
                                                                </li><!--  -->
                                                                 <li class="bac">
                                                                    <span class="title">블랙잭(Blackjack)</span>
                                                                </li><!--  -->
                                                                 <li class="bac">
                                                                    <span class="title">룰렛(Roulette)</span>
                                                                </li><!--  -->
                                                                 <li class="bac">
                                                                    <span class="title">슬롯머신(Slot Machine)</span>
                                                                </li><!--  -->
                                                                
                                                            </ul>
                                                        </div>
                                                        
                                                        <div class="subMenuBottom"></div>
                                                    </div>
                                                    
                                                    <div  class="right_main" style="float:left; width:80%;height:100vh;overflow:auto;" >
                                                        <div   class="main-content">
                                                            <div  class="">
                                                                <div  class="titlePic">
                                                                    <div  class="titlePwrapper">
                                                                        <div  class="leftZone"><span  class="icon-iiconLogoB"></span><span >베팅규정</span></div>
                                                                        <div  class="line"></div>
                                                                    </div>
                                                                </div>
                                                                <div  class="main_content">
                                                                    <div  class="v_deep_promotion">
                                                                        <div  class="main_content_wrap main_content_wrap_notice main_content_wrap_promotion">
                                                                            <div  id="un-lobby" class="gameZoneA">
                                                                                
                                                                                
                                                                                <div  class="slotZone" loading="false">
                                                                                    <ul>
                                                                                        <li class="slotLobby">
                                                                                            <ul>
                                                                                                <!---content_notice--->
                                                                                                <div class="panel-body height-100-pro p-l-14 p-r-14 bg-black22 text-white" style="position: relative;" >
                                                                                                    <div class="el-row f-s-14" >
                                                                                                        <div >
                                                                                                            <div class="el-row clear_fix" >
                                                                                                                <div class="el-row note-comment-blue2 d-flex align-items-center justify-content-between my-3 subTitlev2" >
                                                                                                                    <div class="float-left f-w-700 f-s-16 p-t-11 subTitleWrapper" >
                                                                                                                        <span>공지사항</span>
                                                                                                                    </div>
                                                                                                                    
                                                                                                                </div>
                                                                                                                
                                                                                                                <div id="guide" class="col-md-12 p-0 el-row" >
                                                                                                                    
                                                                                                                    <div class="simpleTabs_contents">
                                                                                                                        <div data-st-title="바카라(Baccarat)" class="active" style="display: block;">
                                                                                                                            <h2 style="background:url(./img/bg_baccarat.png?v=02) no-repeat right 50%;">바카라(Baccarat)</h2>
                                                                                                                            <h3>Card Value(카드의 가치)</h3>
                                                                                                                            <ul class="guide_list">
                                                                                                                                <li>Ace는 1로 계산합니다</li>
                                                                                                                                <li>King, Queen, Jack, 10은 0으로 계산합니다</li>
                                                                                                                                <li>그 외의 카드는 표면에 표시된 숫자로 계산합니다.</li>
                                                                                                                                <li>합이 10이상 일 경우에는 일의 자리만 계산 가능합니다.</li>
                                                                                                                            </ul>
                                                                                                                            <h3>배팅</h3>
                                                                                                                            <ul class="guide_list">
                                                                                                                                <li>게임시작전에 고객은 각 좌성 앞에 지정되어 있는 플레이어측, 뱅커측, Tie측 혹은 Pair측에 배팅을 완료하여야 합니다.</li>
                                                                                                                                <li>고객은 플레이어측과 뱅커측 동시에 배팅할 수 없습니다.</li>
                                                                                                                                <li>첫번째 카드가 딜링 된 후에 배팅의 수정 및 취소 등은 할 수 없습니다.</li>
                                                                                                                                <li>플레이어는 표시된 배팅 한도액을 준수하여야 합니다.</li>
                                                                                                                            </ul>
                                                                                                                            <h3>배당</h3>
                                                                                                                            <ul class="guide_list">
                                                                                                                                <li>플레이어츠이 승리할 경우 배팅 금액의 1:1로 Pay하며, 뱅커측이 승리할 경우 5%의 커미션이 발생합니다.</li>
                                                                                                                                <li>노 커미션 바카라의 경우 플레이어측이나 뱅커측이 승리한 경우 모두 1:1로 Pay하고 뱅커측이 "6"으로 승리한 경우. 1/2 Pay 합니다.</li>
                                                                                                                                <li>Tie 배팅에 당첨될 경우 배팅 금액의 8배를 Pay합니다.</li>
                                                                                                                                <li>Pair 배팅에 당첨될 경우 배팅 금액의 11배를 Pay합니다.</li>
                                                                                                                            </ul>
                                                                                                                            <h3>Player's Rule</h3>
                                                                                                                            <div class="guide_type">
                                                                                                                                <table>
                                                                                                                                    <tbody>
                                                                                                                                        <tr>
                                                                                                                                            <th>Player측 처음 2장의 카드 합</th>
                                                                                                                                            <th>하우스룰</th>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>0,1,2,3,4,5</td>
                                                                                                                                            <td>한장의 카드를 더 받음</td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>6,7</td>
                                                                                                                                            <td>Stand</td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>8,9 </td>
                                                                                                                                            <td>Naural</td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody>
                                                                                                                                </table>
                                                                                                                            </div>
                                                                                                                            <div class="guide_info">※ Stand : 카드를 더 이상 받지 않고 뱅커와 승부를 겨룹니다. <br> ※ Natual : 플레이어와 뱅커 모두 추가 카드를 더 이상 받지 않고 승부가 결정됩니다. </div>
                                                                                                                            <h3>Banker's Rule</h3>
                                                                                                                            <ul class="guide_list">
                                                                                                                                <li>플레이어측 처음 2장의 카드 합이 6또는 7에서 Stand할 경우, 뱅커측 처음 2장의 카드 합이 6이상이면 Stand하여 승부를 겨룹니다.</li>
                                                                                                                                <li>플레이어측 처음 2장의 카드 합이 6 또는 7에서 Stand할 경우, 뱅커측 처음 2장의 카드 합니 5이하이면 추가카드 한장을 받아 승부를 겨룹니다.</li>
                                                                                                                                <li>플레이어측 처음 2장의 카드 합이 5이하인 경우, 뱅커측 처음 2장의 카드 합이 2이하이면 양쪽 모두 추가카드 한장을 받아야 하지만, 뱅커측 처음 2장의카드 합이 3이상이면 다음의 Rule를 따릅니다.</li>
                                                                                                                            </ul>
                                                                                                                            <div class="guide_type">
                                                                                                                                <table>
                                                                                                                                    <tbody>
                                                                                                                                        <tr>
                                                                                                                                            <th>Banker측 <br>처음 2장의 카드 합 </th>
                                                                                                                                            <th>Player측 <br>세번째 카드가 아래의 경우 <br>추가 카드를 받음 </th>
                                                                                                                                            <th>Player측 <br>세번째 카드가 아래의 경우 <br>추가 카드를 받지 않음 </th>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>3</td>
                                                                                                                                            <td>0,1,2,3,4,5,6,7,9</td>
                                                                                                                                            <td>8</td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>4</td>
                                                                                                                                            <td>2,3,4,5,6,7</td>
                                                                                                                                            <td>0,1,8,9</td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>5</td>
                                                                                                                                            <td>4,5,6,7</td>
                                                                                                                                            <td>0,1,2,3,8,9</td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>6</td>
                                                                                                                                            <td>6,7</td>
                                                                                                                                            <td>0,1,2,3,4,5,8,9</td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>7</td>
                                                                                                                                            <td>Stand</td>
                                                                                                                                            <td>Stand</td>
                                                                                                                                        </tr>
                                                                                                                                        <tr>
                                                                                                                                            <td>8</td>
                                                                                                                                            <td>Natual</td>
                                                                                                                                            <td>Natual</td>
                                                                                                                                        </tr>
                                                                                                                                    </tbody>
                                                                                                                                </table>
                                                                                                                            </div>
                                                                                                                            <div class="guide_info">※ Stand : 카드를 더 이상 받지 않고 뱅커와 승부를 겨룹니다. <br> ※ Natual : 플레이어와 뱅커 모두 추가 카드를 더 이상 받지 않고 승부가 결정됩니다. </div>
                                                                                                                        </div>
                                                                                                                        <div data-st-title="블랙잭(Baackjack)">
                                                                                                                            <h2 style="background:url(./img/bg_blackjack.png) no-repeat right 50%;">블랙잭(Blackjack)</h2>
                                                                                                                            <h3>게임진행</h3>
                                                                                                                            <ul class="guide_list">
                                                                                                                                <li>딜러는 셔플 후 처음 4장의 카드를 Face Down으로 Burning 시킵니다.</li>
                                                                                                                                <li>딜러는 모든 플레이어가 배팅을 마치면 카드를 시계방향으로 두장씩 Face Up시켜 딜링하고 자신의 카드는 Face Down 딜링 후 첫번째 카드 한장만 Face Up합니다.</li>
                                                                                                                                <li>플레이어는 원하는 만큼의 카드를 추가로 받을 수 있습니다. <br> ※ 추가카드를 원하면 Hit, 멈출 경우 Stay 수신호를 합니다. 소프트(A6)에서는 받지 아니합니다. </li>
                                                                                                                                <li>합이 10이상일 경우에는 일의 자리만 계산합니다.</li>
                                                                                                                            </ul>
                                                                                                                            <h3>Card Value(카드의 가치)</h3>
                                                                                                                            <ul class="guide_list">
                                                                                                                                <li>Ace는 1또는 11로 계산합니다. King, Queen, Jack은 10으로 계산합니다.</li>
                                                                                                                                <li>그 외의 카드(10 포함)는 표면에 표시된 숫자로 계산합니다.</li>
                                                                                                                            </ul>
                                                                                                                            <h3>배팅</h3>
                                                                                                                            <h4>Blackjack블랙잭</h4>
                                                                                                                            <div class="guide_card">
                                                                                                                                <img src="./img/card1.png" class="card_s">
                                                                                                                            </div>
                                                                                                                            <p></p>
                                                                                                                            <center>처음 두장의 카드의 합이 21일 경우를 말함. 배팅금액의 1.5배의 Pay를 하게 됩니다.</center>
                                                                                                                            <p></p>
                                                                                                                            <h4>Bust버스트</h4>
                                                                                                                            <div class="guide_card">
                                                                                                                                <img src="./img/card2.png" class="card_b">
                                                                                                                            </div>
                                                                                                                            <p></p>
                                                                                                                            <center>카드 합이 21을 초과하는 경우를 말하며, 플레이어의 경우 Bust되면 배팅 금액을 잃게 되고, 딜러의 경우에는 고객에게 1:1 Pay를 하게 됩니다.</center>
                                                                                                                            <p></p>
                                                                                                                            <h4>Push푸시</h4>
                                                                                                                            <div class="guide_card">
                                                                                                                                <img src="./img/card3.png" class="card_b">
                                                                                                                            </div>
                                                                                                                            <p></p>
                                                                                                                            <center>플레이어와 딜어의 카드 합이 같은 경우를 말함. 서로 비기게 되어 배팅금액은 반환됩니다.</center>
                                                                                                                            <p></p>
                                                                                                                            <h4>Stand스탠드 / Stay스테이</h4>
                                                                                                                            <div class="guide_card">
                                                                                                                                <img src="./img/card4.png" class="card_s">
                                                                                                                            </div>
                                                                                                                            <p></p>
                                                                                                                            <center>플레이어가 추가 카드를 원하지 않을 경우 표현하는 의사표시 방법. 딜러의 경우 17이상이 되면 무조건 Stay해야 합니다.</center>
                                                                                                                            <p></p>
                                                                                                                            <h4>Hit히트</h4>
                                                                                                                            <div class="guide_card">
                                                                                                                                <img src="./img/card5.png" class="card_b">
                                                                                                                            </div>
                                                                                                                            <p></p>
                                                                                                                            <center>플레이어가 처음 두 장의 카드에 만족하지 않을 경우. 딜러에게 수신호를 통하여 추가 카드를 받을 수 있습니다.</center>
                                                                                                                            <p></p>
                                                                                                                            <h4>Insurance인슈어런스(보험금)</h4>
                                                                                                                            <div class="guide_card">
                                                                                                                                <img src="./img/card6.png" class="card_s">
                                                                                                                            </div>
                                                                                                                            <p></p>
                                                                                                                            <center>딜러의 오픈 카드가 Ace일 경우 플레이어는 배팅액의 1/2번위 내에서 보험금을 걸 수 있습니다. <br> 딜러의 오픈 카드가 Ace일 경우 플레이어는 배팅액의 1/2범위 내에서 보험금을 걸 수 있습니다. <br> 딜러가 블랙잭인 경우 : 보험금의 두 배를 받습니다. <br> 딜러가 블랙잭이 아닌 경우 : 보험금을 잃게 됩니다. </center>
                                                                                                                            <p></p>
                                                                                                                            <h4>Double Down더블 다운</h4>
                                                                                                                            <div class="guide_card">
                                                                                                                                <img src="./img/card7.png" class="card_s">
                                                                                                                            </div>
                                                                                                                            <p></p>
                                                                                                                            <center>플레이어는 처음 받은 카드의 합과 상관 없이 오직 한 장의 카드만 받는다는 조건으로 최초 배팅금액 한도내에서 추가로 배팅할 수 있습니다.</center>
                                                                                                                            <p></p>
                                                                                                                            <h4>Split스플릿</h4>
                                                                                                                            <div class="guide_card">
                                                                                                                                <img src="./img/card8.png" class="card_s">
                                                                                                                            </div>
                                                                                                                            <p></p>
                                                                                                                            <center>플레이어의 처음 두 장의 카드가 같은 숫자인 경우에는 두장의 카드를 나누어서 각각 배팅하여 게임을 진행할 수 있습니다. <br> 이때 배팅금액은 최초 배팅액과 동일한 금액이어야 합니다. <br> Ace는 1번, Ace외의 숫자는 3번 Split 가능합니다. <br> Ace Split시 추가카드 한장만 받을 수 있습니다. <br> Ace를 제외한 Split은 더블이 가능합니다. </center>
                                                                                                                            <p></p>
                                                                                                                        </div>
                                                                                                                        <div data-st-title="룰렛(Roulette)">
                                                                                                                            <h2 style="background:url(./img/bg_roulette.png) no-repeat right 50%;">룰렛(Roulette)</h2>
                                                                                                                            <h3>배팅</h3>
                                                                                                                            <ul class="guide_bullet_list">
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">1</span>모든 플레이어는 레이아웃의 정확한 지점에 배팅하여야 합니다.
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">2</span>딜러가 No More Bet이고 Call한 후의 배팅은 인정되지 않으며, 배팅 금액은 반환됩니다.
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">3</span>플레이어는 표시된 배팅 한도액을 준수하여야 합니다.
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                            <h3>배팅</h3>
                                                                                                                            <div class="guide_roulette">
                                                                                                                                <img src="./img/roulette_table.png">
                                                                                                                            </div>
                                                                                                                            <ul class="guide_bullet_list">
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">A</span>Staright Bet : Single Number Bet(배당률 1:35).
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">B</span>Split Bet : Two Number Bet(배당률 1:17) <span class="sub">칩스를 두 번호 사이의 선 위에 놓습니다(0과 00포함).</span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">C</span>Street Bet : Three Number Bett(배당률 1:11) <span class="sub">칩스를 레이아웃을 가로지르는 세가지 번호가 있는 선위에 높습니다.</span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">D</span>Square Bet : Corner Bet/Four Number Bett(배당률 1:8) <span class="sub">네가지 번호가 교차하는 중간선 위에 칩스를 놓습니다.</span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">E</span>Five Number Bett(배당률 1:6) <span class="sub">칩스를 1,2,3,4,00의 교차하는 선 위에 놓습니다</span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">F</span>Line Bet : Six Number Bett(배당률 1:5) <span class="sub">칩스를 두개의 street가 교차하는 선 위에 놓습니다.</span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">G</span>Collumn Bett(배당률 1:2) <span class="sub">칩스를 레이아웃 하단에 위치한 세 개 공간 중에 선택하여 놓습니다. <br> (이 배팅은 해당 공간의 상위 수직선상의 12개의 번호를 가리킵니다.) </span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">H</span>Dozen Bett(배당률 1:2) <span class="sub">칩스를 1st 12, 2nd 12, 3rd 12라고 표시된 지점에 놓습니다. <br> 1st 12는 1-12, 2nd 12는 13-34, 3rd 12는 25-36의 숫자를 말합니다. </span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">I</span>High/Low Number Bett(배당률 1:1) <span class="sub">1부터 18까지는 Low Number이며 19부터 36까지는 High Number입니다.</span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">J</span>Even / Odd Number Bet(배당률 1:1) <span class="sub">0과 00을 제외한 모든 번호는 짝수(Even)와 홀수(Odd)로 구분합니다.</span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">K</span>Color Bet : Red or Black Bet(배당률 1:1) <span class="sub">0과 00을 제외한 모든 번호는 적색(Red)과 흑색(Black)으로 구분합니다.</span>
                                                                                                                                </li>
                                                                                                                                <li>
                                                                                                                                    <span class="bullet">L</span>Courtesy Line Bet : 0.00(배당률 1:17) <span class="sub">2nd Dozen과 3rd Dozen 사이의 0과 00을 배팅한 것입니다.</span>
                                                                                                                                </li>
                                                                                                                            </ul>
                                                                                                                        </div>
                                                                                                                        <div data-st-title="슬롯머신(Slot Machine)">
                                                                                                                            <h2 style="background:url(./img/bg_slot.png) no-repeat right 50%;">슬롯머신(Slot Machine)</h2>
                                                                                                                            <h3>슬롯머신 게임이란?</h3>
                                                                                                                            <p>슬롯머신은 카지노에서 가장 인기있는 게임이다. <br> 딜러의 도움없이 간단히 스핀 조작으로 릴을 돌리기 때문에 특별한 기술이 필요없어서 초보자도 쉽게 할 수 있다. <br> 최신 슬롯머신 기계들은 실질적으로 플레이어들에게 속임수를 쓸 수 없으며 플레이어들이 규칙을 배우는 것이 매우 쉽고 상대적으로 카지노의 다른 게임들 보다 오랫동안 플레이하는 것이 가능하다 <br>
                                                                                                                                <br> 슬롯머신의 기본적이 규칙들은 예나 지금이나 변한 것이 거의 없다. <br> 아날로그 방식이든 컴퓨터로 하는 방식이든 일반적으로 릴에 있는 같은 숫자나 모양이 나란히 일치하게 되는 다양한 조합에 따라 당첨금을 받게된다. <br>
                                                                                                                                <br> 그러한 조함은 플레이어가 일정한 금액의 배팅을 하고 스핀을 돌림으로써 나타나게 되고, 배팅액, 일치하는 조함에 따라 돈을 잃거나 따게 된다. <br> 슬롯머신의 환수율은 80%-95%까지 라고 일반적으로 알려져 있다. <br>
                                                                                                                                <br> 플레이어들이 백만원을 게임에 사용했다면 그 중 80만원에서 95만원은 다시 플레이어가 돌려 받는다는 것이다. <br> 물론 이러한 환수율은 지역이나 최소배팅금액 등의 차이에 따라 약간의 변동이 있겠으나 일반적으로 보았을 경우는 90%정도의 환수율이라고 대부분 생각한다 <br>
                                                                                                                                <br> 나머지 10%는 카지노 회사에게 돌아간다.
                                                                                                                            </p>
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
                                                                                <div  class="pager_block">
                                                                                    <div class="page-list">
                                                                                        <ul class="pagination">
                                                                                            <li class="first">
                                                                                                <a href="javascript: void(0)">
                                                                                                    <span>
                                                                                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">first</font></font>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="prev">
                                                                                                <a href="javascript: void(0)">
                                                                                                    <span>
                                                                                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">before</font></font>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="pages">
                                                                                                <a href="javascript: void(0)" class="on">
                                                                                                    <span>
                                                                                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">One</font></font>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="next">
                                                                                                <a href="javascript: void(0)">
                                                                                                    <span>
                                                                                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">next</font></font>
                                                                                                    </span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li class="last">
                                                                                                <a href="javascript: void(0)">
                                                                                                    <span>
                                                                                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">end</font></font>
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
                                            </div><!--right_end-->
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="display: none;"><img src="image/sports/animation_waiting.c9998f51.gif" style="display: none;"><span class="icon-icconCheck01" style="display: none;"></span><span class="icon-icon-icconFailed" style="display: none;"></span> </div>
                            </div>
                        </div>
                        <div class="modals-container"></div>
                    </div>
                    
                </div>
            </div>
        </div><!---->
        
    </div><!----><!---->
</div>
<div class="modals-container"></div><!----><!---->
<div id="login-container"></div>
</div>
<div id="ytCinemaMessage" style="display: none;"></div>



</div>

<script src="js/jquery.min.js"></script>
<script src="js/toggleMenu.js"></script>
<script src="js/newv3.js?v=<?php echo $ver; ?>"></script>
</body>

</html>