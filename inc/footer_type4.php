<style>
	.footer-distributed {
    float: left;
    width: 100%;
	text-align:center;
	margin: 50px 0;
	}
	.owl-carousel .owl-item img.width_auto {
	width:100px;
	}
	.owl-carousel .owl-item img.d-inline_block {
	display:inline-block;
	vertical-align:middle;
	}
	
	.footer_info_type4 {
    text-align: center;
    float: left;
    width: 100%;
    padding: 50px 10px 0;
}

.footer_info_type4 .footer_text_type4 {
    max-width: 900px;
    margin: 16px auto;
	color: #ffffffb3;	
}


.footer_info_type4 .card > li {
    display: inline-block;
    background-color: white;
    border-radius: 3px;
}
.footer_bg {
    background-color: #65656526;
    width: 100%;
    height: 100%;
    overflow: hidden;
    margin-top: 100px;
    display: initial;
    float: left;
}

</style>
<footer class="footer_bg">
	<div class="footer_info_type4 animated fadeInUp">
		<div class="logo">
							<span class="img">
							<?
								$filePathGIF = $_SERVER['DOCUMENT_ROOT'] . "/img/logo/" . $site_name . ".gif";
								if (file_exists($filePathGIF)) { ?>
									<img class="no-logo" src="/img/logo/<?=$site_name?>.gif?v=005" height="55px">
								<? } else { ?>
									<img class="no-logo" src="/img/logo/<?=$site_name?>.png?v=005" height="55px">
								<? } ?>
							</span>
							<!-- <span class="text">CASINO<br>KKANBOO</span> -->
						</div>
			<div class="footer_text_type4">By accessing, continuing to use or navigation throughout this site you accept that we wile use certain browser cookies to improve your customer experience with us, <?= $site_name ?> only uses cookies which will improve your experience with us amd will not interfere with your privacy. <br>
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
<div class="footer-distributed">

	<!--Features Images-->
	<div class="owl-carousel owl-features">
		
		<div>
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo1.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo2.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo3.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo5.png" alt="image of the provider">
		</div>
		
		
		<div>
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo6.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo7.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo8.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo9.png" alt="image of the provider">
		</div>
		<div>
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo10.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo11.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo12.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo1.png" alt="image of the provider">
		</div>
		
		<div>
		<img class="responsive-img d-inline_block width_auto" src="/img/live_logo2.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo3.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo5.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo6.png" alt="image of the provider">
		</div>
		
		<div>
		<img class="responsive-img d-inline_block width_auto" src="/img/live_logo7.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo8.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo9.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo10.png" alt="image of the provider">
		</div>
		
		<div>
			
			
			
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo11.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/live_logo12.png" alt="image of the provider">
			<img class="responsive-img d-inline_block width_auto" src="/img/druwa_footer.png" alt="image of the provider">
			
		</div>
		
		
		
	</div>
	
	</div>
	
</div>
</footer>
