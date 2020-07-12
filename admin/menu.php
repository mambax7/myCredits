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

$adminmenu[0]['title'] = _MI_MYCREDITS_ADMIN;
$adminmenu[0]['link'] = "admin/index.php";
$adminmenu[1]['title'] = _MI_MYCREDITS_PERMS;
$adminmenu[1]['link'] = "admin/permissions.php";
$adminmenu[2]['title'] = _MI_MYCREDITS_BLOCKS;
$adminmenu[2]['link'] = "admin/myblocksadmin.php";


if (isset($xoopsModule)) {
	$headermenu[0]['title'] = _PREFERENCES;
	$headermenu[0]['link'] = '../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $xoopsModule->getVar('mid');

	$headermenu[1]['title'] = _AM_MYCREDITS_MODULE;
	$headermenu[1]['link'] = XOOPS_URL . '/modules/myCredits/';

	$headermenu[2]['title'] = _AM_MYCREDITS_UPDATE_MODULE;
	$headermenu[2]['link'] = XOOPS_URL . "/modules/system/admin.php?fct=modulesadmin&op=update&module=" . $xoopsModule->getVar('dirname');
}
?>