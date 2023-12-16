<?php
// Your existing conditions to set $site_name based on $_SERVER['HTTP_HOST']
if ($_SERVER['HTTP_HOST'] == "s1.smcagame.com") {
    $site_name = "design1";
} elseif ($_SERVER['HTTP_HOST'] == "s2.smcagame.com") {
    $site_name = "design2";
} elseif ($_SERVER['HTTP_HOST'] == "s3.smcagame.com") {
    $site_name = "design3";
} elseif ($_SERVER['HTTP_HOST'] == "s4.smcagame.com") {
    $site_name = "design4";
} elseif ($_SERVER['HTTP_HOST'] == "s5.smcagame.com") {
    $site_name = "design5";
} elseif ($_SERVER['HTTP_HOST'] == "s6.smcagame.com") {
    $site_name = "design6";
} elseif ($_SERVER['HTTP_HOST'] == "s7.smcagame.com") {
    $site_name = "design7";
} elseif ($_SERVER['HTTP_HOST'] == "s8.smcagame.com") {
    $site_name = "design8";
} elseif ($_SERVER['HTTP_HOST'] == "s9.smcagame.com") {
    $site_name = "design9";
} elseif ($_SERVER['HTTP_HOST'] == "s10.smcagame.com") {
    $site_name = "design10";
} elseif ($_SERVER['HTTP_HOST'] == "smcagame.com") {
    $site_name = "MUL";
}
else {
    // Default value if none of the conditions match
    $site_name = "default";
}

// Additional condition to check if $site_name is "test" and set $logo accordingly
if ($site_name == "test") {
    $logo = "smgame";
} elseif ($site_name == "MUL") {
    $logo = "MUL";
} else {
    // Assign $site_name to $logo if it's not "test" or "MUL"
    $logo = $site_name;
}


$lang = "ko"; // Default language
// Check if the 'lang' parameter exists in the URL
if (isset($_GET['lang'])) {
    $langParam = $_GET['lang'];  

    if ($langParam === "ko") {
        $lang = "ko";
    } elseif ($langParam === "") {
		$lang = "";
    } elseif ($langParam === "en") {
        $lang = "en";
    } elseif ($langParam === "zh") {
        $lang = "zh";
    } elseif ($langParam === "km") {
        $lang = "km";
    } elseif ($langParam === "vn") {
        $lang = "vn";
    } elseif ($langParam === "th") {
        $lang = "th";
    } elseif ($langParam === "ru") {
        $lang = "ru";
    } 
}

// image version
$img_ver = '111';
?>
