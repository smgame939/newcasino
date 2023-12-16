<nav class="side_nav">
	<a class="btn_nav_close">
		<i class="xi-close xi-x"></i>
	</a>
	<div class="logo">
		<div class="img">
			<img src="/img/logo/smgame.gif">
		</div>
	</div>
	<div id="game_mobile">
		<ul>
			<li>
				<img class="sideimg_ live_casino" src="/img/game_mobile_bg1.png?v=02">
				<a class="title <?if($is_login == true){?>menu_btn<?}else{?>er<?}?>" move="game_livecasino">
					<div class="icon">
						<img src="/img/icon_game1.png">
					</div>
					<div class="text">
						<strong><?=get_translate($arr_lang, '_livecasino', $lang)?></strong>LIVE CASINO
					</div>
				</a>
			</li>
			<li>
				<img class="sideimg_ mini_game"  src="/img/game_mobile_bg4.png?v=02">
				<a class="title <?if($is_login == true){?>menu_btn<?}else{?>er<?}?>" move="game_mini">
					<div class="icon">
						<img src="/img/icon_game4.png?v=03">
					</div>
					<div class="text">
						<strong><?=get_translate($arr_lang, '_user_game_mini', $lang)?></strong>MINI GAME
					</div>
				</a>
			</li>
			<li>
				<img class="sideimg_ hotel_casino" src="/img/game_mobile_bg2.png?v=02">
				<a class="title <?if($is_login == true){?>menu_btn<?}else{?>er<?}?>" move="game_hotelcasino">
					<div class="icon">
						<img src="/img/icon_game2.png">
					</div>
					<div class="text">
						<strong><?=get_translate($arr_lang, '_user_game_hotel', $lang)?></strong>HOTEL CASINO
					</div>
				</a>
			</li>
			<li>
				<img class="sideimg_ slot_game" src="/img/game_mobile_bg3.png?v=02">
				<a class="title <?if($is_login == true){?>menu_btn<?}else{?>er<?}?>" move="game_slot">
					<div class="icon">
						<img src="/img/icon_game3.png">
					</div>
					<div class="text">
						<strong><?=get_translate($arr_lang, '_user_game_slot', $lang)?></strong>SLOT GAME
					</div>
				</a>
			</li>
		</ul>
	</div>
	<ul class="gnb_mobile">
		<li>
			<a class="menu_btn" move="message"><?=get_translate($arr_lang, '_user_bank', $lang)?> <span class="sub fnt_roboto fw500">SUPPERT</span></a>
		</li>
		<li>
			<a class="menu_btn" move="deposit"><?=get_translate($arr_lang, '_user_deposit', $lang)?> <span class="sub fnt_roboto fw500">DEPOSIT</span></a>
		</li>
		<li>
			<a class="menu_btn" move="exchange"><?=get_translate($arr_lang, '_user_withdraw', $lang)?> <span class="sub fnt_roboto fw500">WITHDRAW</span></a>
		</li>
		<li>
			<a class="menu_btn" move="point"><?=get_translate($arr_lang, '_user_exchange', $lang)?> <span class="sub fnt_roboto fw500">EXCHANGE</span></a>
		</li>
		<li>
			<a class="menu_btn" move="guide"><?=get_translate($arr_lang, '_game_guide', $lang)?> <span class="sub fnt_roboto fw50GUIDE">GUIDE</span></a>
		</li>
		<li>
			<a class="menu_btn" move="notice"><?=get_translate($arr_lang, '_user_notice', $lang)?> <span class="sub fnt_roboto fw500">NOTICE</span></a>
		</li>
	</ul>
	<h3>CUSTOMER</h3>
	<ul class="side_customer_menu">
		<li><a class="menu_btn" move="notice"><i class="xi-bell xi-x"></i><p><?=get_translate($arr_lang, '_user_notice', $lang)?></p></a></li>
		<li><a class="menu_btn" move="message_write"><i class="xi-message xi-x"></i><p><?=get_translate($arr_lang, '_user_request_support', $lang)?></p></a></li>
		<li><a class="menu_btn" move="faq"><i class="xi-at xi-x"></i><p><?=get_translate($arr_lang, '_user_support', $lang)?></p></a></li>
	</ul>
	<h3>CONTACT</h3>
	<a href="" class="btn_contact kakaotalk kakaotalk_bg fnt_roboto fw500">
		<i class="xi-kakaotalk xi-x"></i> KakaoTalk : <br>
		<strong></strong>
	</a>
	<a href="" class="btn_contact telegram_bg fnt_roboto fw500">
		<i class="xi-telegram xi-x"></i> Telegram : <strong>kbcasino</strong>
	</a>

	<div class="side_copy">ⓒRACE Casino. all right reserved.</div>
</nav>
