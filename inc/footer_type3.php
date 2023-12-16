<style>
	.scroll-container {
	  width: 100%;
	  overflow: hidden;
	}

	.scroll-content {
	  white-space: nowrap;
	  animation: scroll 50s linear infinite;
	}
	@keyframes scroll {
	  0% {
		transform: translateX(100%);
	  }
	  100% {
		transform: translateX(-100%);
	  }
	}
</style>
<footer class="footer">
	<div id="footer_wrap">
		<div class="footer_help animated  slideInLeft">
			<h2>HELP</h2>
			<ul class="customer">
				<li>
					<a class="menu_btn" move="notice">
						<i class="fi fi-sr-question-square"></i>
						<p> <?=get_translate($arr_lang, '_user_notice', $lang)?> </p>
					</a>
				</li>
				<li>
					<a class="
					<?if($is_login == true){?>menu_btn
						<?}else{?>er
						<?}?>" move="faq">
						<i class="fi fi-sr-comment-alt"></i>
						<p> <?=get_translate($arr_lang, '_user_support', $lang)?> </p>
					</a>
				</li>
				<li>
					<a class="
					<?if($is_login == true){?>menu_btn
						<?}else{?>er
						<?}?>" move="message">
						<i class="fi fi-sr-envelope"></i>
						<p> <?=get_translate($arr_lang, '_user_memo', $lang)?> </p>
					</a>
				</li>
				<li>
					<a class="
					<?if($is_login == true){?>menu_btn
						<?}else{?>er
						<?}?>" move="message_write">
						<i class="fi fi-sr-edit"></i>
						<p> <?=get_translate($arr_lang, '_user_request_support', $lang)?> </p>
					</a>
				</li>
			</ul>
		</div>
		<div class="footer_info animated fadeInUp">
			<div class="footer_text">By accessing, continuing to use or navigation throughout this site you accept that we wile use certain browser cookies to improve your customer experience with us, <?= $site_name ?> only uses cookies which will improve your experience with us amd will not interfere with your privacy. <br>
				<br>
				<p class="footlast">COPYRIGHT ⓒ SMGAME ALL RIGHTS RESERVED</p>
			</div>
			<ul class="card">
				<li>
					<img src="/img/card_visa.png">
				</li>
				<li>
					<img src="/img/card_paypal.png">
				</li>
				<li>
					<img src="/img/card_exp.png">
				</li>
				<li>
					<img src="/img/card_master.png">
				</li>
			</ul>
		</div>
		
		<div class="footer_quicklinks animated slideInRight">
			<h2>QUICK LINKS</h2>
			<ul>
				<li>
					<a class="menu_btn menuitem-guide" move="guide"> <?= get_translate($arr_lang, '_game_guide', $lang) ?> <span class="sub fnt_roboto fw50GUIDE"></span>
					</a>
					</li> <? if ($ip_shop == '0') { ?> <? if ($SET_SITE['ss_page_deposit'] == '1') { ?> <li class="medium_sc">
						<a class="
						<? if ($is_login == true) { ?>menu_btn
							<? } else { ?>er
							<? } ?>  menuitem-deposit" move="deposit"> <?= get_translate($arr_lang, '_user_deposit', $lang) ?>
							<!--<span class="sub fnt_roboto fw500">DEPOSIT</span>--->
						</a>
						</li> <? } ?> <? if ($SET_SITE['ss_page_kdeposit'] == '1') { ?> <li class="medium_sc">
						<a class="
						<? if ($is_login == true) { ?>menu_btn
							<? } else { ?>er
							<? } ?>  menuitem-deposit" move="kdeposit">KING <?= get_translate($arr_lang, '_user_deposit', $lang) ?>
							<!--<span class="sub fnt_roboto fw500">DEPOSIT</span>--->
						</a>
						</li> <? } ?> <? if ($SET_SITE['ss_page_withdraw'] == '1') { ?> <li class="medium_sc">
						<a class="
						<? if ($is_login == true) { ?>menu_btn
							<? } else { ?>er
							<? } ?> menuitem-exchange" move="exchange"> <?= get_translate($arr_lang, '_user_withdraw', $lang) ?>
							<!--<span class="sub fnt_roboto fw500">WITHDRAW</span>--->
						</a>
					</li> <? } ?> <? } ?> <? if ($SET_SITE['ss_page_point'] == '1') { ?> <li class="medium_sc">
					<a class="
					<? if ($is_login == true) { ?>menu_btn
						<? } else { ?>er
						<? } ?> menuitem-point" move="point"> <?= get_translate($arr_lang, '_user_exchange', $lang) ?>
						<!--<span class="sub fnt_roboto fw500">EXCHANGE</span>--->
					</a>
					</li> <? } ?> <? if ($SET_SITE['ss_page_message'] == '1') { ?> <li class="medium_sc">
					<a class="
					<? if ($is_login == true) { ?>menu_btn
						<? } else { ?>er
						<? } ?> menuitem-message" move="message_write"> <? if ($ip_shop == '0') { ?> <?= get_translate($arr_lang, '_user_bank', $lang) ?> <? } else { ?> <?= get_translate($arr_lang, '_user_support', $lang) ?> <? } ?>
						<!-- <span class="sub fnt_roboto fw500">PAPER</span>--->
					</a>
					</li> <? } ?> <? if ($SET_SITE['ss_page_bet'] == '1') { ?> <li class="medium_sc">
					<a class="
					<? if ($is_login == true) { ?>menu_btn
						<? } else { ?>er
						<? } ?> menuitem-point" move="bet_casino"> <?= get_translate($arr_lang, '_bethistory_title', $lang) ?>
						<!--<span class="sub fnt_roboto fw500">EXCHANGE</span>--->
					</a>
					</li> <? } ?> <? if ($SET_SITE['ss_page_notice'] == '1') { ?> <li>
					<a class="menu_btn menuitem-_notice_" move="notice"> <?= get_translate($arr_lang, '_user_notice', $lang) ?>
						<!--<span class="sub fnt_roboto fw500">NOTICE</span>--->
					</a>
					</li> <? } ?> <li>
					<a class="medium_sc" href="
					<? if (strpos($url, 'smgame') !== false) { ?>https://p_
						<? } else { ?>https://partner.
					<? } ?>
					<?= $url ?>" target="new">파트너 </a>
				</li>
			</ul>
		</div>
		
	</div>
	<div class="footer_contact_info">
		<a href="#<?=$SET_SITE['ss_chat_kakaotalk']?>" class="btn_contact kakaotalk kakaotalk_bg fnt_roboto fw500">
			<i class="xi-kakaotalk xi-x"></i> KakaoTalk : 
                    <strong><?=$SET_SITE['ss_chat_kakaotalk']?></strong>
                </a>
			
		</a>
		<a href="https://telegram.me/<?=$SET_SITE['ss_chat_telegram']?>" target="_new" class="btn_contact telegram_bg fnt_roboto fw500">
			<i class="xi-telegram xi-x"></i> Telegram : <strong><?=$SET_SITE['ss_chat_telegram']?></strong>
		</a>
		<a href="#<?=$SET_SITE['ss_chat_line']?>" target="_new" class="btn_contact line_bg fnt_roboto fw500">
			<i class="xi-line xi-x"></i> LINE : <strong><?=$SET_SITE['ss_chat_line']?></strong>
		</a>
	</div>
	<div class="marquee scroll-container">
		<div class="marquee-content scroll-content">
			<div class="marquee-item">
				<img src="/img/live_logo1.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo2.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo3.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo5.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo6.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo7.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo8.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo9.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo10.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo11.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo12.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/druwa_footer.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo1.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo2.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo3.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo5.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo6.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo7.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo8.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo9.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo10.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo11.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo12.png?v=002" alt="">
			</div>
			<!---repeat logo provider--->
			<div class="marquee-item">
				<img src="/img/live_logo1.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo2.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo3.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo5.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo6.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo7.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo8.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo9.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo10.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo11.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo12.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/druwa_footer.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo1.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo2.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo3.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo5.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo6.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo7.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo8.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo9.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo10.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo11.png?v=002" alt="">
			</div>
			<div class="marquee-item">
				<img src="/img/live_logo12.png?v=002" alt="">
			</div>
		</div>
	</div>

</footer>


<script>
	$(document).ready(function () {
  function scrollContent() {
    $(".scroll-content").css("transform", "translateX(100%)");
    $(".scroll-content").animate({ transform: "translateX(-100%)" }, {
      duration: 1000000,  // Adjust the duration as needed
      easing: "linear",
      complete: function () {
        scrollContent();
      }
    });
  }

  scrollContent();
});

</script>