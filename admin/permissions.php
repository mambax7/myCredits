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

include_once("admin_header.php");
include_once XOOPS_ROOT_PATH . '/class/xoopsform/grouppermform.php';

if ( !is_object($xoopsUser) or (is_object($xoopsUser) and !$xoopsUser->isadmin() ) ){
    redirect_header("javascript:history.go(-1)", 1, _NOPERM);
    exit;
}

$op = '';

foreach ($_POST as $k => $v) {
    ${$k} = $v;
}

foreach ($_GET as $k => $v) {
    ${$k} = $v;
}

$myts =& MyTextSanitizer::getInstance();
myCredits_adminmenu(1, _MI_MYCREDITS_PERMS);

$form_view = new XoopsGroupPermForm("", $xoopsModule->getVar('mid'), "myCredits", "");
$form_view->addItem(1, _AM_CREDITS_VIEW_ADMIN);
$form_view->addItem(2, _AM_CREDITS_VIEW_VERSION);

echo $form_view->render();
include_once( 'admin_footer.php' );
?>