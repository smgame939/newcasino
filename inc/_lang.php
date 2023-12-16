<?php
	$lang 			= isset($_GET['lang'])  ? $_GET['lang'] : "ko";
	if($lang != ""){ 
		//$FNC->UDF_Set_Session("lang", $lang);
	}else{
		$lang			= $FNC->UDF_Get_Session("lang");
	}

	function get_translate($array, $key, $lang=""){
		if($lang == ""){
			//$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
			$lang = 'ko';
		}
		$_key_name = isset($array[$key][$lang]) ? $array[$key][$lang] : $array[$key]['en'];
		return $_key_name;
	}
?>