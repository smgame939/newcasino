<?php
//rootkit shell firewall
if (stristr($_SERVER['QUERY_STRING'],"=http")||stristr($_SERVER['QUERY_STRING'],"DOCUMENT_ROOT")) exit;

function stripslashes_deep($var){
    return is_array($var) ? array_map('stripslashes_deep', $var) : stripslashes($var);
}
 
function mysql_real_escape_string_deep($var){
    return is_array($var) ? array_map('mysql_real_escape_string_deep', $var) : mysql_real_escape_string($var);
}
/*
if( get_magic_quotes_gpc() ){
    if( is_array($_POST) )
        $_POST = array_map( 'stripslashes_deep', $_POST );
    if( is_array($_GET) )
        $_GET = array_map( 'stripslashes_deep', $_GET );
}
*/
 
if( is_array($_POST) )
    //$_POST = array_map( 'mysql_real_escape_string_deep', $_POST );
if( is_array($_GET) )
    //$_GET = array_map( 'mysql_real_escape_string_deep', $_GET);



$REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
IF(($REQUEST_METHOD != "GET") AND ($REQUEST_METHOD != "POST")){
	exit();
}


define("_SQLXSS_", TRUE);
?>