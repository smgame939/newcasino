<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED & ~E_USER_DEPRECATED);
error_reporting(E_ALL);

ini_set("session.use_trans_sid", 0);
ini_set("url_rewriter.tags",""); 
ini_set("session.save_path",$_SERVER['DOCUMENT_ROOT']."/_session");
ini_set("session.cache_expire", 43200);
ini_set("session.gc_maxlifetime", 43200);
ini_set("session.gc_probability", 1);
ini_set("session.gc_divisor", 1);
ini_set("session.cookie_httponly",1);
ini_set("short_open_tag",1);

if (isset($SESSION_CACHE_LIMITER)) 
    @session_cache_limiter($SESSION_CACHE_LIMITER);
else 
    @session_cache_limiter("no-cache, must-revalidate");

header('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');

session_start();
$sessionid = session_id();

define("_PHPVAR_", TRUE);
?>