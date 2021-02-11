<?php

/**
 * XOOPS - PHP Content Management System
 * Copyright (c) 2004 <https://xoops.org>
 *
 * Module: myCredits 1.0
 * Licence : GPL
 * Authors :
 *           - solo (www.wolfpackclan.com/wolfactory)
 *            - DuGris (www.dugris.info)
 */
define('_MI_MYCREDITS_NAME', 'myCredits');
define('_MI_MYCREDITS_DSC', 'Credit page of your website');

// Admin Menus
define('_MI_MYCREDITS_ADMIN', 'Index');
define('_MI_MYCREDITS_PERMS', 'Permissions');
define('_MI_MYCREDITS_BLOCKS', 'Blocks & Groups');

//Menu
define('_MI_MYCREDITS_MENU_HOME', 'Home');
define('_MI_MYCREDITS_MENU_01', 'Admin');
define('_MI_MYCREDITS_MENU_ABOUT', 'About');

// Blocks
define('_MI_MYCREDITS_BLOCK_LIST', 'Modules list');
define('_MI_MYCREDITS_BLOCK_LIST_DESC', '');

//Config
define('_MI_MYCREDITS_EDITOR_ADMIN', 'Editor: Admin');
define('_MI_MYCREDITS_EDITOR_ADMIN_DESC', 'Select the Editor to use by the Admin');
define('_MI_MYCREDITS_EDITOR_USER', 'Editor: User');
define('_MI_MYCREDITS_EDITOR_USER_DESC', 'Select the Editor to use by the User');

//Help
define('_MI_MYCREDITS_DIRNAME', basename(dirname(__DIR__, 2)));
define('_MI_MYCREDITS_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('_MI_MYCREDITS_BACK_2_ADMIN', 'Back to Administration of ');
define('_MI_MYCREDITS_OVERVIEW', 'Overview');

//define('_MI_MYCREDITS_HELP_DIR', __DIR__);

//help multi-page
define('_MI_MYCREDITS_DISCLAIMER', 'Disclaimer');
define('_MI_MYCREDITS_LICENSE', 'License');
define('_MI_MYCREDITS_SUPPORT', 'Support');

// Options
define('_MI_MYCREDITS_TEXTINDEX', 'Introduction text');
define('_MI_MYCREDITS_TEXTINDEXDSC', 'Introduction text for your homepage');
define('_MI_MYCREDITS_WELCOME', 'Welcome to myCredits, the credit page for your website. Here are all the contributors to this website');

define('_MI_MYCREDITS_INDEX_BANNER', 'Index Banner');
define('_MI_MYCREDITS_INDEXDSC_BANNER', 'Display a banner on your default index page. Leave empty to display nothing.');

define('_MI_MYCREDITS_PUBLIC', 'Display modules');
define('_MI_MYCREDITS_PUBLICDSC', 'Order=0 as public module');

define('_MI_MYCREDITS_ORDER', 'Display the modules sorted by');
define('_MI_MYCREDITS_ORDERDSC', '');
define('_MI_MYCREDITS_MID', 'Module ID');
define('_MI_MYCREDITS_MNAME', 'Name');
define('_MI_MYCREDITS_MWEIGHT', 'Weight');
define('_MI_MYCREDITS_MDIRNAME', 'Dir name');

define('_MI_MYCREDITS_DISPLAY', 'Dislay mode');
define('_MI_MYCREDITS_DISPLAYDSC', '');
define('_MI_MYCREDITS_TABLE', 'Table');
define('_MI_MYCREDITS_LIST', 'List');
define('_MI_MYCREDITS_BLOCK', 'Block');
define('_MI_MYCREDITS_SCROLL', '&nbsp;&nbsp;-&nbsp;Scroll');
define('_MI_MYCREDITS_MULTIPART', '&nbsp;&nbsp;-&nbsp;Multipart');
define('_MI_MYCREDITS_BILLBOARD', '&nbsp;&nbsp;-&nbsp;_MI_MYCREDITS_BILLBOARD');
define('_MI_MYCREDITS_NONE', '');

define('_MI_MYCREDITS_HEIGHT', 'Height of the dynamic blocks (in pixel)');
define('_MI_MYCREDITS_HEIGHTDSC', '');

define('_MI_MYCREDITS_DELAY', 'Delay before display of the following block (in second)');
define('_MI_MYCREDITS_DELAYDSC', '');
