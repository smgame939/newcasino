<?php
    $logged_in = '0';
?>

<header id="header">
    <div class="mask" style="display: none;"></div>
    <div class="wrapper"><a class="icon-left-menu"><span class="icon-nav2"></span></a>
    
    <?php if ($logged_in !== '1') { ?>
        <a class="guestmail" id="contactBtn">비회원 문의</a>
    <?php } ?>

    <a href="/" class="logo"><img src="/assets/image/logo_smgame.svg" alt="logo"></a>

    <?php if ($logged_in === '1') { ?>
        <a class="icon-amount"><span class="icon-money"></span><div>0</div></a>
        <a class="refresh"><span class="icon-pw" style="display: none;"></span><img src="/assets/image/icon-refresh-6d6d11b4.svg" class="" alt=""></a>
    <?php } else { ?>
        <div class="btn-box">
            <button class="signup-btn" id="regBtn">회원가입</button>
            <button class="login-btn" id="loginBtn">로그인</button>
        </div><!----><!---->
    <?php } ?>
    </div>
</header>