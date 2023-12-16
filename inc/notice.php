<div id="row_wrap">
	<!-- Start NOTICE Section-->
	<div class="animated fadeInUp notice_mobile">
		<ul id="vticker" class="recent_list line_notice row_td" name="notice_view">
			<?
				$sql = "SELECT in_idx,in_title,in_reg FROM info_notice WHERE in_site='$site' AND in_type='2' AND in_hide='0' ORDER BY in_reg DESC";
				$result = $ConnHost->query($sql);
				while($notice = $result->fetch_assoc()){
					$in_reg = date("Y-m-d", strtotime($notice['in_reg']));
					
					if(mb_strlen($notice['in_title']) > 14 ){
						$in_title = mb_substr($notice['in_title'], 0, 15)."...";
						}else{
						$in_title = $notice['in_title'];
					}?>
					<li class="_view" idx="
					<?=$notice['in_idx']?>">
						<span class="label"> <?=get_translate($arr_lang, '_user_notice', $lang)?> </span>
						<div class="notice_left has-enough-space" style="overflow-wrap: normal; white-space: nowrap; overflow: hidden;">
							<a class="row_td" id="notice_title" name="notice_view">
								<span> <?=$in_title?> </span>
								<span class="date fnt_roboto fw400" style="color:#fff"> <?=$in_reg?> </span>
							</a>
						</div>
					</li>
			<?}?>
		</ul>
	</div>
	<!-- End NOTICE Section-->
</div>