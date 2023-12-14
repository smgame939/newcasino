<?php
    $logged_in = '0';
?>

<header data-v-77826c5e="" data-v-c6087bcb="" id="header">
    <div data-v-77826c5e="" class="mask" style="display: none;"></div>
    <div data-v-77826c5e="" class="wrapper"><a data-v-77826c5e="" class="icon-left-menu"><span data-v-77826c5e="" class="icon-nav2"></span></a>
    
    <?php if ($logged_in !== '1') { ?>
        <a data-v-77826c5e="" class="guestmail" id="contactBtn">비회원 문의</a>
    <?php } ?>

    <a href="/" data-v-77826c5e="" class="logo"><img data-v-77826c5e="" src="/assets/image/logo_smgame.svg" alt="logo"></a>

    <?php if ($logged_in === '1') { ?>
        <a data-v-77826c5e="" class="icon-amount"><span data-v-77826c5e="" class="icon-money"></span><div data-v-77826c5e="">0</div></a>
        <a data-v-77826c5e="" class="refresh"><span data-v-77826c5e="" class="icon-pw" style="display: none;"></span><img data-v-77826c5e="" src="/assets/image/icon-refresh-6d6d11b4.svg" class="" alt=""></a>
    <?php } else { ?>
        <div data-v-77826c5e="" class="btn-box">
            <button data-v-77826c5e="" class="signup-btn" id="regBtn">회원가입</button>
            <button data-v-77826c5e="" class="login-btn" id="loginBtn">로그인</button>
        </div><!----><!---->
    <?php } ?>
    </div>
</header>