<?php
include('versions.php');
$currentPage = basename($_SERVER['PHP_SELF']);
$pgName = pathinfo($currentPage, PATHINFO_FILENAME);
?>
<!-- Sidemenu -->
<div class="LeftContent">
  <div class="logo">
    <a href="index.php">
      <img src="../assets/image/logo_<?= $site_name ?>.svg?v=<?= $ver ?>" class="bigLogo" alt="">
      <img src="../assets/image/logo_<?= $site_name ?>_s.svg?v=<?= $ver ?>" class="smallLogo" alt="">
    </a>
  </div>
  <div class="scrollFrame">
    <div class="leftMenu">
      <ul>
        <li class="menu01">
          <a href="live_casino.php" class="<?php echo $pgName === 'live_casino' ? 'active' : '' ?>" aria-label="카지노"><span class="icon-iiconDice"></span>
            <div class="hovePic"><img src="/image/menu_casino.png" alt=""></div>
            <div class="txt">카지노</div>
          </a>
        </li>
        <li class="menu02">
          <a href="slot.php" class="<?php echo $pgName === 'slot' ? 'active' : '' ?>" aria-label="슬롯"><span class="icon-iiconSlote"></span>
            <div class="hovePic"><img src="/image/menu_slot.png" alt=""></div>
            <div class="txt">슬롯</div>
          </a>
        </li>
        <li class="menu03">
          <a href="mini_game.php" class="<?php echo $pgName === 'mini_game' ? 'active' : '' ?>" aria-label="미니게임"><span class="icon-iiconGame"></span>
            <div class="hovePic"><img src="/image/menu_minigame.png" alt=""></div>
            <div class="txt">미니게임</div>
          </a>
        </li>

        <li class="menu07">
          <a href="event.php" class="<?php echo $pgName === 'event' ? 'active' : '' ?>" aria-label="이벤트"><span class="icon-iiconSpeaker"></span>
            <div class="hovePic"><img src="/image/menu_event.png" alt=""></div>
            <div class="txt">이벤트</div>
          </a>
        </li>
      </ul>
    </div>
    <div class="leftMenu leftMenu01">
      <ul>
        <li class="menu01">
          <a href="notice.php" class="" aria-label="공지">
            <span class="icon-iiconRing"></span>
            <div class="txt">공지</div>
          </a>
        </li>
        <li class="menu01">
          <a href="rules.php" class="" aria-label="베팅규정">
            <span class="icon-iiconPolicy"></span>
            <div class="txt">베팅규정</div>
          </a>
        </li>
        <li class="menu01">
          <a href="memo.php" class="" aria-label="쪽지">
            <span class="icon-iiconMail"></span>
            <div class="txt">쪽지 (<span class="number">0</span>) </div>
          </a>
        </li>
        <li class="menu01">
          <a href="userinfo.php" class="" aria-label="마이페이지">
            <span class="icon-iiconMember"></span>
            <div class="txt">마이페이지</div>
          </a>
        </li>
        <li class="menu01" hidden>
          <a href="javascript: void(0)" class="" aria-label="토너먼트">
            <span class="icon-icconRANK"></span>
            <div class="txt">토너먼트 <!----></div>
          </a>
        </li>
        <li class="menu01" hidden>
          <a href="javascript: void(0)" class="" aria-label="지인추천">
            <span class="icon-icon-icconReferral"></span>
            <div class="txt">지인추천</div>
          </a>
        </li>
        <li class="menu01" hidden>
          <a href="javascript: void(0)" class="" aria-label="출석부">
            <span class="icon-icconSignBonus"></span>
            <div class="txt">출석부</div>
          </a>
        </li>
        <li class="menu01">
          <a href="javascript: void(0)" class="" aria-label="쿠폰함">
            <span class="icon-iconWheel"></span>
            <div class="txt">룰렛 쿠폰 (<span class="number">0</span>) </div>
          </a>
        </li>
        <li class="menu01">
          <a href="deposit.php" class="" aria-label="입금">
            <span class="icon-iiconDeposit"></span>
            <div class="txt">입금</div>
          </a>
        </li>
        <li class="menu01">
          <a href="withdraw.php" class="" aria-label="출금">
            <span class="icon-iiconWithdraw"></span>
            <div class="txt">출금</div>
          </a>
        </li>
        <li class="menu01">
          <a href="bet_history.php" class="" aria-label="베팅내역">
            <span class="icon-iiconListA"></span>
            <div class="txt">베팅내역</div>
          </a>
        </li>
        <li class="menu01">
          <a href="point.php" class="" aria-label="포인트 내역">
            <span class="icon-icconPOINT"></span>
            <div class="txt">포인트 내역</div>
          </a>
        </li>
        <li class="menu01">
          <a href="javascript: void(0)" class="" aria-label="잔액내역">
            <span class="icon-iiconListB"></span>
            <div class="txt">잔액내역</div>
          </a>
        </li>
        <li class="menu01" hidden>
          <a href="javascript: void(0)" class="" aria-label="고객센터">
            <span class="icon-iiconService"></span>
            <div class="txt">고객센터</div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- End Sidemenu -->