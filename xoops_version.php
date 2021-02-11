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

$moduleDirName      = basename(__DIR__);
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

//InfoModule
$modversion['version']       = 2.00;
$modversion['module_status'] = 'Beta 1';
$modversion['release_date']  = '2021/02/10';
$modversion['name']          = _MI_MYCREDITS_NAME;
$modversion['description']   = _MI_MYCREDITS_DSC;
$modversion['credits']       = "<a href='http://www.wolfpackclan.com/wolfactory' target='_blank'>Wolfactory</a>, <a href='http://www.dugris.info' target='_blank'>dugris</a>";
$modversion['author']        = 'Solo, DuGris';
$modversion['license']       = 'GPL';
$modversion['dirname']       = $moduleDirName;
$modversion['modicons16']          = 'assets/images/icons/16';
$modversion['modicons32']          = 'assets/images/icons/32';
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['module_website_url']  = 'https://xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '7.2';
$modversion['min_xoops']           = '2.5.10';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = ['mysql' => '5.5'];
$modversion['system_menu']         = 1;
$modversion['adminindex']          = 'admin/index.php';
$modversion['adminmenu']           = 'admin/menu.php';
//Install/Uninstall Functions
//$modversion['onInstall']   = 'include/oninstall.php';
$modversion['onUpdate']    = 'include/onupdate.php';
//$modversion['onUninstall'] = 'include/onuninstall.php';

// ------------------- Help files ------------------- //
$modversion['help']        = 'page=help';
$modversion['helpsection'] = [
    ['name' => _MI_MYCREDITS_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_MYCREDITS_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_MYCREDITS_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_MYCREDITS_SUPPORT, 'link' => 'page=support'],
];

//Menu
$modversion['hasMain'] = 1;

//Admin
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

// Templates
$i                                          = 1;
$modversion['templates'][$i]['file']        = 'mycredits_block_tips.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_block_item.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_collaps_admin.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_collaps_public.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_header.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_index_table.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_index_block.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_index_list.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_index_scroll.tpl';
$modversion['templates'][$i]['description'] = '';

//$i++;
//$modversion['templates'][$i]['file'] = 'mycredits_index_billboard.tpl';
//$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_index_multipart.tpl';
$modversion['templates'][$i]['description'] = '';

$i++;
$modversion['templates'][$i]['file']        = 'mycredits_footer.tpl';
$modversion['templates'][$i]['description'] = '';

// Blocks
$i                                       = 1;
$modversion['blocks'][$i]['file']        = 'mycredits_block.php';
$modversion['blocks'][$i]['name']        = _MI_MYCREDITS_BLOCK_LIST;
$modversion['blocks'][$i]['description'] = _MI_MYCREDITS_BLOCK_LIST_DESC;
$modversion['blocks'][$i]['show_func']   = 'b_mycredits_show';
$modversion['blocks'][$i]['edit_func']   = 'b_mycredits_edit';
$modversion['blocks'][$i]['options']     = '0|1|0|0|3|200';
$modversion['blocks'][$i]['template']    = 'mycredits_block.tpl';
$modversion['blocks'][$i]['can_clone']   = true;

// Options
$i                                       = 1;
$modversion['config'][$i]['name']        = 'mycredits_banner';
$modversion['config'][$i]['title']       = '_MI_MYCREDITS_INDEX_BANNER';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_INDEXDSC_BANNER';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = [_YES => 1, _NO => 0];

$i++;
$modversion['config'][$i]['name']        = 'mycredits_text';
$modversion['config'][$i]['title']       = '_MI_MYCREDITS_TEXTINDEX';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_TEXTINDEXDSC';
$modversion['config'][$i]['formtype']    = 'textarea';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = _MI_MYCREDITS_WELCOME;

$i++;
$modversion['config'][$i]['name']        = 'mycredits_public';
$modversion['config'][$i]['title']       = '_MI_MYCREDITS_PUBLIC';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_PUBLICDSC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 0;
$modversion['config'][$i]['options']     = [_YES => 1, _NO => 0];

$i++;
$modversion['config'][$i]['name']        = 'mycredits_order';
$modversion['config'][$i]['title']       = '_MI_MYCREDITS_ORDER';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_ORDERDSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'name';
$modversion['config'][$i]['options']     = [
    '_MI_MYCREDITS_MID'      => 'mid',
    '_MI_MYCREDITS_MNAME'    => 'name',
    '_MI_MYCREDITS_MWEIGHT'  => 'weight',
    '_MI_MYCREDITS_MDIRNAME' => 'dirname',
];

$i++;
$modversion['config'][$i]['name']        = 'mycredits_display';
$modversion['config'][$i]['title']       = '_MI_MYCREDITS_DISPLAY';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_DISPLAYDSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'scroll';
$modversion['config'][$i]['options']     = [
    '_MI_MYCREDITS_TABLE'     => 'table',
    '_MI_MYCREDITS_LIST'      => 'list',
    '_MI_MYCREDITS_BLOCK'     => 'block',
    '_MI_MYCREDITS_SCROLL'    => 'scroll',
    //                        '_MI_MYCREDITS_BILLBOARD'    => 'billboard',
    '_MI_MYCREDITS_MULTIPART' => 'multipart',
];

$i++;
$modversion['config'][$i]['name']        = 'mycredits_height';
$modversion['config'][$i]['title']       = '_MI_MYCREDITS_HEIGHT';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_HEIGHTDSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 200;

$i++;
$modversion['config'][$i]['name']        = 'mycredits_delay';
$modversion['config'][$i]['title']       = '_MI_MYCREDITS_DELAY';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_DELAYDSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 3;

// On Update
if (!empty($_POST['fct']) && !empty($_POST['op']) && 'modulesadmin' === $_POST['fct'] && 'update_ok' === $_POST['op'] && $_POST['dirname'] == $modversion['dirname']) {
    require __DIR__ . '/include/onupdate.php';
}

// default admin editor
xoops_load('XoopsEditorHandler');
$editorHandler = \XoopsEditorHandler::getInstance();
$editorList    = array_flip($editorHandler->getList());

$modversion['config'][] = [
    'name'        => 'editorAdmin',
    'title'       => '_MI_MYCREDITS_EDITOR_ADMIN',
    'description' => '_MI_MYCREDITS_EDITOR_ADMIN_DESC',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'default'     => 'dhtmltextarea',
    'options'     => $editorList,
];

$modversion['config'][] = [
    'name'        => 'editorUser',
    'title'       => '_MI_MYCREDITS_EDITOR_USER',
    'description' => '_MI_MYCREDITS_EDITOR_USER_DESC',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'default'     => 'dhtmltextarea',
    'options'     => $editorList,
];

/**
 * Make Sample button visible?
 */
$modversion['config'][] = [
    'name'        => 'displaySampleButton',
    'title'       => 'CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON',
    'description' => 'CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON_DESC',
    'formtype'    => 'yesno',
    'valuetype'   => 'int',
    'default'     => 0,
];

/**
 * Show Developer Tools?
 */
$modversion['config'][] = [
    'name'        => 'displayDeveloperTools',
    'title'       => 'CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS',
    'description' => 'CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS_DESC',
    'formtype'    => 'yesno',
    'valuetype'   => 'int',
    'default'     => 0,
];
