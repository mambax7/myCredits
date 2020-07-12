<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2004 <http://www.xoops.org/>
*
* Module: myCredits 1.0
* Licence : GPL
* Authors :
*           - solo (www.wolfpackclan.com/wolfactory)
*			- DuGris (www.dugris.info)
*/

if (!defined("XOOPS_ROOT_PATH")) { die("XOOPS root path not defined"); }


if( !defined("MYCREDITS_DIRNAME") ){
	define("MYCREDITS_DIRNAME", 'myCredits');
}

if( !defined("MYCREDITS_URL") ){
	define("MYCREDITS_URL", XOOPS_URL . '/modules/' . MYCREDITS_DIRNAME . '/');
}

if( !defined("MYCREDITS_ROOT_PATH") ){
	define("MYCREDITS_ROOT_PATH", XOOPS_ROOT_PATH.'/modules/'.MYCREDITS_DIRNAME.'/');
}

if( !defined("MYCREDITS_IMAGE_URL") ){
	define("MYCREDITS_IMAGE_URL", MYCREDITS_URL . 'images/');
}

if( !defined("MYCREDITS_IMAGE_PATH") ){
	define("MYCREDITS_IMAGE_PATH", MYCREDITS_ROOT_PATH . 'images/');
}

if( !defined("MYCREDITS_IMAGE_UPLOAD_URL") ){
	define("MYCREDITS_IMAGE_UPLOAD_URL", XOOPS_URL . '/uploads/' . MYCREDITS_DIRNAME . '/');
}

if( !defined("MYCREDITS_IMAGE_UPLOAD_PATH") ){
	define("MYCREDITS_IMAGE_UPLOAD_PATH", MYCREDITS_ROOT_PATH . '/uploads/' . MYCREDITS_DIRNAME . '/');
}

$myts =& MyTextSanitizer::getInstance();

include_once(MYCREDITS_ROOT_PATH . "include/functions.php");

if (isset($HTTP_GET_VARS)) {
	foreach ($HTTP_GET_VARS as $k => $v) {
		$$k = $v;
	}
}

if (isset($HTTP_POST_VARS)) {
	foreach ($HTTP_POST_VARS as $k => $v) {
		$$k = $v;
	}
}
$myCreditModule = myCredits_getModuleInfo();
?>