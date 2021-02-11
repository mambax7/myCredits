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

// General settings
require_once __DIR__ . '/header.php';

$GLOBALS['xoopsOption']['template_main'] = 'mycredits_index_' . $xoopsModuleConfig['mycredits_display'] . '.tpl';
require_once XOOPS_ROOT_PATH . '/header.php';

//Affiche le nom du module et le texte d'introduction
$xoopsTpl->assign('textindex', $myts->displayTarea($xoopsModuleConfig['mycredits_text']));

// Module Banner
$xoopsTpl->assign('banner', $xoopsModuleConfig['mycredits_banner']);
// block height
$xoopsTpl->assign('height', $xoopsModuleConfig['mycredits_height']);
// block delay
$xoopsTpl->assign('delay', (0 != $xoopsModuleConfig['mycredits_delay']) ? $xoopsModuleConfig['mycredits_delay'] * 1000 : 1000);

// Language defines
$xoopsTpl->assign('lang_admin', _MYCREDITS_ADMIN);
$xoopsTpl->assign('lang_public', _MYCREDITS_PUBLIC);
$xoopsTpl->assign('lang_module', _MYCREDITS_MODULE);
$xoopsTpl->assign('lang_name', _MYCREDITS_NAME);
$xoopsTpl->assign('lang_description', _MYCREDITS_DESCRIPTION);
$xoopsTpl->assign('lang_version', _MYCREDITS_VERSION);
$xoopsTpl->assign('lang_credits', _MYCREDITS_CREDITS);
$xoopsTpl->assign('lang_author', _MYCREDITS_AUTHOR);
$xoopsTpl->assign('lang_prev', _MYCREDITS_PREVIOUS);
$xoopsTpl->assign('lang_next', _MYCREDITS_NEXT);
$xoopsTpl->assign('tips', 1);

$admin_display = myCredits_getPermission('myCredits', 1);
$xoopsTpl->assign('admin_display', $admin_display);

$version_display = myCredits_getPermission('myCredits', 2);
$xoopsTpl->assign('version_display', $version_display);

$xoopsTpl->assign('credits', myCredits_getCredits($xoopsModuleConfig['mycredits_display']));

require_once XOOPS_ROOT_PATH . '/footer.php';
