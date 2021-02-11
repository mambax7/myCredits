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

use Xmf\Module\Admin;
use XoopsModules\Mycredits\{
    Helper
};
/** @var Admin $adminObject */
/** @var Helper $helper */


include dirname(__DIR__) . '/preloads/autoloader.php';

$moduleDirName = basename(dirname(__DIR__));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);
$helper = Helper::getInstance();
$helper->loadLanguage('common');
$helper->loadLanguage('feedback');

$pathIcon32 = Admin::menuIconPath('');
if (is_object($helper->getModule())) {
    //    $pathModIcon32 = $helper->getModule()->getInfo('modicons32');
    $pathModIcon32 = $helper->url($helper->getModule()->getInfo('modicons32'));
}

$adminmenu[] = [
    'title' => _MI_MYCREDITS_ADMIN,
    'link' => 'admin/index.php',
    'icon' => $pathIcon32 . '/home.png',
];

$adminmenu[] = [
    'title' => _MI_MYCREDITS_PERMS,
    'link' => 'admin/permissions.php',
    'icon' => $pathIcon32 . '/permissions.png',
];

//$adminmenu[] = [
//    'title' => _MI_MYCREDITS_MENU_01,
//    'link' => 'admin/main.php',
//    'icon' => $pathIcon32 . '/manage.png',
//];

//Feedback
//$adminmenu[] = [
//    'title' => constant('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_FEEDBACK'),
//    'link'  => 'admin/feedback.php',
//    'icon'  => $pathIcon32 . '/mail_foward.png',
//];

// Blocks Admin
$adminmenu[] = [
    'title' => constant('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS'),
    'link' => 'admin/blocksadmin.php',
    'icon' => $pathIcon32 . '/block.png',
];

if (is_object($helper->getModule()) && $helper->getConfig('displayDeveloperTools')) {
    $adminmenu[] = [
        'title' => constant('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_MIGRATE'),
        'link' => 'admin/migrate.php',
        'icon' => $pathIcon32 . '/database_go.png',
    ];
}

$adminmenu[] = [
    'title' => _MI_MYCREDITS_MENU_ABOUT,
    'link' => 'admin/about.php',
    'icon' => $pathIcon32 . '/about.png',
];


//$adminmenu[0]['title'] = _MI_MYCREDITS_ADMIN;
//$adminmenu[0]['link']  = 'admin/index.php';
//$adminmenu[1]['title'] = _MI_MYCREDITS_PERMS;
//$adminmenu[1]['link']  = 'admin/permissions.php';
//$adminmenu[2]['title'] = _MI_MYCREDITS_BLOCKS;
//$adminmenu[2]['link']  = 'admin/blocksadmin.php';

//if (isset($xoopsModule)) {
//    $headermenu[0]['title'] = _PREFERENCES;
//    $headermenu[0]['link']  = '../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $xoopsModule->getVar('mid');
//
//    $headermenu[1]['title'] = _AM_MYCREDITS_MODULE;
//    $headermenu[1]['link']  = XOOPS_URL . '/modules/mycredits/';
//
//    $headermenu[2]['title'] = _AM_MYCREDITS_UPDATE_MODULE;
//    $headermenu[2]['link']  = XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&op=update&module=' . $xoopsModule->getVar('dirname');
//}
