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

include_once( "admin_header.php" );
myCredits_adminmenu(0, _MI_MYCREDITS_ADMIN);

OpenTable();
$helpfile = XOOPS_ROOT_PATH . '/modules/myCredits/language/' . $xoopsConfig['language'] . '/help.html';
if ( file_exists($helpfile) ) {
	include ( $helpfile );
} else {
	include ( XOOPS_ROOT_PATH . '/modules/myCredits/language/english/help.html' );
}
CloseTable();

include_once( "admin_footer.php" );
?>