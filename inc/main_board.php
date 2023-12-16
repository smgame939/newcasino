<?
include_once($_SERVER['DOCUMENT_ROOT']."/inc/database.php");

$mDB = new ClassDB();
$lang		= $FNC->UDF_Get_Session("lang") != "" ? $FNC->UDF_Get_Session("lang") : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$arr_lang = $mDB->load_translate($ConnHost);
$url = $FNC->UDF_Get_Host();
$site 		= $mDB->db_get_site_from_url($ConnHost,$url);
$site_set 		= $mDB->db_get_site_set($ConnHost,$site);

//--- 메인입금
$m_deposit 	= $mDB->db_main_deposit($ConnHost, $site);
//--- 메인출금
$m_withdraw = $mDB->db_main_withdraw($ConnHost, $site);
?>
<link rel="stylesheet" href="/css/simpleTabs.css">
<script src="/js/jquery.totemticker.js"></script>
<div id="recent_wrap">
	<dl>
		<?if($site_set['ss_page_record'] == "1"){?>
		<dd class="animated slideInLeft live-container">
			<div class="title"><?=get_translate($arr_lang, '_live_deposit', $lang)?> <strong class="fnt_roboto fw400">REALTIME</strong>
			</div>
			<ul id="vtickera" class="recent_list" style="overflow: hidden;">
<?
	for($i=0; $i<count($m_deposit); $i){
		$m_id 		= $m_deposit[$i]['ic_id'];
		$m_amount 	= $m_deposit[$i]['ic_amount'];
		$m_reg 		= $m_deposit[$i]['ic_reg'];
		
		$m_id = substr($m_id, 0, 2) . "****";
?>
				<li style="margin-top: 0px;">
					<a>
						<span class="date"><?=date("Y-m-d", strtotime($m_reg))?></span>
						<span class="amount"><?=number_format($m_amount,0)?></span>
						<span class="name"><?=$m_id?></span>
					</a>
				</li>
<?
		$i++;
	}
?>				
			</ul>
		</dd>
		<dd class="animated fadeInUp live-container">
			<div class="title"><?=get_translate($arr_lang, '_live_withdraw', $lang)?> <strong class="fnt_roboto fw400">REALTIME</strong></div>
			<ul id="vtickerb" class="recent_list" style="overflow: hidden;">
<?
	for($i=0; $i<count($m_withdraw); $i){
		$m_id 		= $m_withdraw[$i]['ic_id'];
		$m_amount 	= $m_withdraw[$i]['ic_amount'];
		$m_reg 		= $m_withdraw[$i]['ic_reg'];
		
		$m_id = substr($m_id, 0, 2) . "****";
?>
				<li style="margin-top: 0px;">
					<a>
						<span class="date"><?=date("Y-m-d", strtotime($m_reg))?></span>
						<span class="amount"><?=number_format($m_amount,0)?></span>
						<span class="name"><?=$m_id?></span>
					</a>
				</li>
<?
		$i++;
	}
?>					
				
			</ul>
		</dd>
		<?}?>
		<dd class="animated slideInRight live-container">
			<div class="tabs">
				<div class="simpleTabs_contents">
					<div data-st-title="<?=get_translate($arr_lang, '_user_notice', $lang)?> <strong>NOTICE</strong>" class="active" style="display: block;">
						<div class="recent_list row_td" name="notice_view"> 
<?
	$sql = "SELECT in_idx,in_title,in_reg FROM info_notice WHERE in_site='$site' AND in_type='0' AND in_hide='0' ORDER BY in_reg DESC LIMIT 5";
	$result = $ConnHost->query($sql);
	while($notice = $result->fetch_assoc()){
		$in_reg = date("Y-m-d", strtotime($notice['in_reg']));
		
		if(mb_strlen($notice['in_title']) > 9 ){
			$in_title = mb_substr($notice['in_title'], 0, 10)."...";
		}else{
			$in_title = $notice['in_title'];
		}
?>
							<a id="notice_title" class="_view" idx="<?=$notice['in_idx']?>">
								<span class="subject"><?=$in_title?></span>
								<span class="date"><?=$in_reg?></span>
							</a>
	<?}?>
						</div>
					</div>
				</div>
			</div>
		</dd>
	</dl>
</div>