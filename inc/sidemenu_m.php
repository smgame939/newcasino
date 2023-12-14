<?php
    $logged_in = '0';
?>

<nav class="slide-content-left"><!----><!---->
    <?php if ($logged_in === '1') { ?>
        <div class="point-list"><div class="p-amount"><span class="icon-p-point"></span><span>0</span></div><button>전환</button></div>
        <div class="vip-box"><div class="vip-icon"><img src="assets/image/vipicon1.png" alt=""></div><h4>일반</h4></div>
    <?php } else { ?>

    <?php } ?>
    <ul class="main-menu">
        
        <li>
            <a href="live_casino.php" aria-label="LiveCasino">
                <div class="icon"><img src="assets/image/Live.png" alt=""></div>
                <div class="txt">카지노</div>
            </a>
        </li>
        <li>
            <a href="slot.php" aria-label="Slot">
                <div class="icon"><img src="assets/image/Slot.png" alt=""></div>
                <div class="txt">슬롯</div>
            </a>
        </li>
        <li>
            <a href="mini_game.php" aria-label="MiniGame">
                <div class="icon"><img src="assets/image/Lottery.png" alt=""></div>
                <div class="txt">미니게임</div>
            </a>
        </li>
        
        <li>
            <a href="event.php" aria-label="promotion">
                <div class="icon"><img src="assets/image/Event.png" alt=""></div>
                <div class="txt">이벤트</div>
            </a>
        </li>
    </ul>
    <ul class="main-other-menu">
        <li>
            <a href="notice.php" aria-label="공지"><!----><span class="icon-notice"></span>
                <div>공지</div>
            </a>
        </li>
        <li>
            <a href="rules.php" aria-label="베팅규정"><!----><span class="icon-betrule"></span>
                <div>베팅규정</div>
            </a>
        </li>
        <li>
            <a href="memo.php" aria-label="쪽지"><!----><span class="icon-inbox"></span>
                <div>쪽지 (<span>0</span>) </div>
            </a>
        </li>
        <li>
            <a href="userinfo.php" aria-label="마이페이지"><!----><span class="icon-mypage"></span>
                <div>마이페이지</div>
            </a>
        </li>
        <li hidden>
            <a href="javascript: void(0)" aria-label="토너먼트">
                <div class="new-tag" style="display: none;"> New </div><span class="icon-rank"></span>
                <div>토너먼트</div>
            </a>
        </li>
        <li hidden>
            <a href="javascript: void(0)" aria-label="지인추천"><!----><span class="icon-referral"></span>
                <div>지인추천</div>
            </a>
        </li>
        <li hidden>
            <a href="javascript: void(0)" aria-label="출석부"><!----><span class="icon-signbonus"></span>
                <div>출석부</div>
            </a>
        </li>
        <li>
            <a href="javascript: void(0)" aria-label="쿠폰함"><!----><span class="icon-roulette"></span>
                <div>룰렛 쿠폰 (<span>0</span>) </div>
            </a>
        </li>
        <li>
            <a href="deposit.php" aria-label="입금"><!----><span class="icon-deposit"></span>
                <div>입금</div>
            </a>
        </li>
        <li>
            <a href="withdraw.php" aria-label="출금"><!----><span class="icon-withdraw"></span>
                <div>출금</div>
            </a>
        </li>
        <li>
            <a href="bet_history.php" aria-label="베팅내역"><!----><span class="icon-betlist"></span>
                <div>베팅내역</div>
            </a></li>
        <li><a href="point.php" aria-label="포인트 내역"><!----><span class="icon-point"></span>
                <div>포인트 내역</div>
            </a>
        </li>
        <li>
            <a href="javascript: void(0)" aria-label="잔액내역"><!----><span class="icon-balance"></span>
                <div>잔액내역</div>
            </a>
        </li>
        <li>
            <a href="javascript: void(0)" aria-label="고객센터"><!----><span class="icon-customer"></span>
                <div>고객센터</div>
            </a>
        </li>
        <li>
            <a href="javascript: void(0)" aria-label="공식채널 텔레그램"><!----><span class="icon-tg"></span>
                <div>공식채널 텔레그램</div>
            </a>
        </li>
        <li hidden>
            <a href="javascript: void(0)" aria-label=""><!----><span class="icon-tg"></span>
                <div></div>
            </a>
        </li><!---->
        
        <?php if ($logged_in === '1') {?>
            <li class="logout"><a aria-label="로그아웃">로그아웃</a></li>
        <?php } ?>
    </ul>
    <div class="language select-box"><select name="language">
            <option disabled="" value="">언어선택</option>
            <option value="ko-KR">한국어</option>
            <option value="zh-CN">简体中文</option>
            <option value="en-US">English</option>
        </select></div>
</nav>