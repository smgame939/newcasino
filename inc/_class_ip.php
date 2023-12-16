<?php
class ClassIP{
	
	function get_url($url){
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$output = curl_exec($ch);

		curl_close($ch);
		return $output;
	}
	
	function UDF_Get_Random($min,$max){
		return mt_rand($min,$max);
	}
	
	function UDF_Ip_Info($db, $ip){
		//--- https://freegeoip.app/json/110.54.242.74
		//	{"ip":"110.54.242.74","country_code":"PH","country_name":"Philippines","region_code":"40","region_name":"Calabarzon","city":"Santa Rosa","zip_code":"1215",
		// "time_zone":"Asia/Manila","latitude":14.5606,"longitude":121.0726,"metro_code":0}

		//--- https://api.ip.sb/geoip/110.54.242.74
		//	{"ip":"110.54.242.74","country_code":"PH","country":"Philippines",		"region_code":"40","organization":"Globe Telecom","longitude":121.0571,"city":"Carmona",
		// "timezone":"Asia\/Manila","isp":"Globe Telecom","offset":28800,"region":"Calabarzon","asn":132199,"asn_organization":"Globe Telecom Inc.","latitude":14.31,
		// "postal_code":"4116","continent_code":"AS",}
		$arr = [];
		$arr[0] = "https://freegeoip.app/json/{IP}";
		$arr[1] = "https://api.ip.sb/geoip/{IP}";
		
		
		$sql = "SELECT * FROM info_ip WHERE ii_query='$ip'";
		$result = $db->query($sql);
		if($result->num_rows > 0){
			$rows = $result->fetch_assoc();
			return $rows;
		}else{
			
			$idx = self::UDF_Get_Random(0,count($arr) - 1);
			$url = $arr[$idx];
			
			$url = str_replace("{IP}",$ip,$url);
			$resp = self::get_url($url);
			$json = json_decode($resp, true);
			if($idx == 0){
				$ii_query 			= $json['ip'];
				$ii_countrycode 	= $json['country_code'];
				$ii_country 		= $json['country_name'];
				$ii_region 			= $json['region_code'];
				$ii_regionname 		= $json['region_name'];
				$ii_city 			= $json['city'];
				$ii_zip 			= $json['zip_code'];
				$ii_timezone 		= $json['time_zone'];
				$ii_lat 			= $json['latitude'];
				$ii_lon 			= $json['longitude'];
			}
			if($idx == 1){
				$ii_query 			= $json['ip'];
				$ii_countrycode 	= $json['country_code'];
				$ii_country 		= $json['country'];
				$ii_region 			= $json['region_code'];
				$ii_regionname 		= $json['region'];
				$ii_city 			= $json['city'];
				$ii_zip 			= $json['postal_code'];
				$ii_timezone 		= $json['timezone'];
				$ii_lat 			= $json['latitude'];
				$ii_lon 			= $json['longitude'];
			}
			$data = [];
			$data['ii_query'] = $ii_query;
			$data['ii_countrycode'] = $ii_countrycode;
			$data['ii_country'] = $ii_country;
			$data['ii_region'] = $ii_region;
			$data['ii_regionname'] = $ii_regionname;
			$data['ii_city'] = $ii_city;
			$data['ii_zip'] = $ii_zip;
			$data['ii_timezone'] = $ii_timezone;
			$data['ii_lat'] = $ii_lat;
			$data['ii_lon'] = $ii_lon;
			
			if($ii_query != ""){
				
				$isql = "INSERT INTO info_ip SET 
					ii_city  			= '$ii_city', 
					ii_country  		= '$ii_country', 
					ii_countrycode  	= '$ii_countrycode', 
					ii_lat  			= '$ii_lat', 
					ii_lon  			= '$ii_lon', 
					ii_query  			= '$ii_query', 
					ii_region  			= '$ii_region', 
					ii_regionname  		= '$ii_regionname', 
					ii_timezone  		= '$ii_timezone', 
					ii_zip  			= '$ii_zip', 
					ii_update  			= ''
				";
				$db->query($isql);
			}
			
			return $data;
		}

	}
	
}
$mIP = new ClassIP();
?>