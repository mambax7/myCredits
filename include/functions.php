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
 * @param mixed $currentoption
 * @param mixed $breadcrumb
 */
function myCredits_adminmenu($currentoption = 0, $breadcrumb = '')
{
    echo "
        <style type='text/css'>
        #buttontop { float:left; width:100%; background: #e7e7e7; font-size:93%; line-height:normal; border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000; margin: 0; }
        #buttonbar { float:left; width:100%; background: #e7e7e7 url('" . XOOPS_URL . "/modules/mycredits/assets/images/bg.gif') repeat-x left bottom; font-size: 10px; line-height:normal; border-left: 1px solid #000000; border-right: 1px solid #000000; margin-bottom: 12px; }
        #buttonbar ul { margin:0; margin-top: 15px; padding:0px 5px 0; list-style:none; }
        #buttonbar li { display:inline; margin:0; padding:0; }
        #buttonbar a { float:left; background:url('" . XOOPS_URL . "/modules/mycredits/assets/images/left_both.gif') no-repeat left top; margin:0; padding:0 0 0 9px; border-bottom:1px solid #000; text-decoration:none; white-space: nowrap}
        #buttonbar a span { float:left; display:block; background:url('" . XOOPS_URL . "/modules/mycredits/assets/images/right_both.gif') no-repeat right top; padding:5px 15px 4px 6px; font-weight:bold; color:#765; white-space: nowrap}
        /* Commented Backslash Hack hides rule from IE5-Mac \*/
        #buttonbar a span {float:none;}
        /* End IE5-Mac hack */
        #buttonbar a:hover span { color:#333; }
        #buttonbar #current a { background-position:0 -150px; border-width:0; }
        #buttonbar #current a span { background-position:100% -150px; padding-bottom:5px; color:#333; }
        #buttonbar a:hover { background-position:0% -150px; }
        #buttonbar a:hover span { background-position:100% -150px; }
        </style>
    ";
    // global $xoopsDB, $xoopsModule, $xoopsConfig, $xoopsModuleConfig;
    global $xoopsModule, $xoopsConfig;
    $myts = MyTextSanitizer::getInstance();

    $tblColors                 = array_fill(0, 8, '');
    $tblColors[$currentoption] = 'current';

    xoops_loadLanguage('modinfo', 'mycredits');

    require dirname(__DIR__) . '/admin/menu.php';

    echo '<div id="buttontop">';
    echo '<table style="width: 100%; padding: 0;" cellspacing="0"><tr>';
    echo '<td style="font-size: 10px; text-align: left; color: #2F5376; padding: 0 6px; line-height: 18px;">';
    for ($i = 0, $iMax = count($headermenu); $i < $iMax; ++$i) {
        echo '<a class="nobutton" href="' . $headermenu[$i]['link'] . '">' . $headermenu[$i]['title'] . '</a> ';
        if ($i < count($headermenu) - 1) {
            echo '| ';
        }
    }
    echo '</td>';
    echo '<td style="font-size: 12px; text-align: right; color: #CC0000; padding: 0 6px; line-height: 18px; font-weight: bold;">' . $breadcrumb . '</td>';
    echo '</tr></table>';
    echo '</div>';

    echo '<div id="buttonbar">';
    echo '<ul>';

    for ($i = 0, $iMax = count($adminmenu); $i < $iMax; ++$i) {
        echo '<li id="' . $tblColors[$i] . '"><a href="' . XOOPS_URL . '/modules/mycredits/' . $adminmenu[$i]['link'] . '"><span>' . $adminmenu[$i]['title'] . '</span></a></li>';
    }
    echo '</ul></div>';
    echo '<div style="float: left; width: 100%; text-align: center; margin: 0px; padding: 0px">';
}

function myCredits_adminfooter()
{
    echo '<p>';
    OpenTable();
    echo '<div style="text-align: right; vertical-align: center"><img src="../images/myCredits.gif" border="0" align="center" valign="absmiddle">';
    echo sprintf(_AM_MYCREDITS_CREDIT, '<a href="http://wolfactory.wolfpackclan.com" target="_blank">WolFactory</a>', '<a href="http://www.dugris.info" target="_blank">DuGris</a>');
    echo '</div>';
    CloseTable();
    echo '<p>';
}

/**
 * @return FALSE|mixed|\XoopsModule
 */
function myCredits_getModuleInfo()
{
    static $myCreditsModule;
    if (!isset($myCreditsModule)) {
        global $xoopsModule;
        if (isset($xoopsModule) && is_object($xoopsModule) && 'myCredits' === $xoopsModule->getVar('dirname')) {
            $myCreditsModule = &$xoopsModule;
        } else {
            $hModule         = xoops_getHandler('module');
            $myCreditsModule = $hModule->getByDirname('myCredits');
        }
    }

    return $myCreditsModule;
}

/**
 * @param        $option
 * @param string $repmodule
 * @return bool|mixed
 */
function myCredits_moduleoption($option, $repmodule = 'myCredits')
{
    global $xoopsModuleConfig, $xoopsModule;
    static $tbloptions = [];
    if (is_array($tbloptions) && array_key_exists($option, $tbloptions)) {
        return $tbloptions[$option];
    }

    $retval = false;
    if (isset($xoopsModuleConfig) && (is_object($xoopsModule) && $xoopsModule->getVar('dirname') == $repmodule && $xoopsModule->getVar('isactive'))) {
        if (isset($xoopsModuleConfig[$option])) {
            $retval = $xoopsModuleConfig[$option];
        }
    } else {
        /** @var \XoopsModuleHandler $moduleHandler */
        $moduleHandler = xoops_getHandler('module');
        $module        = $moduleHandler->getByDirname($repmodule);
        /** @var \XoopsConfigHandler $configHandler */
        $configHandler = xoops_getHandler('config');
        if ($module) {
            $moduleConfig = $configHandler->getConfigsByCat(0, $module->getVar('mid'));
            if (isset($moduleConfig[$option])) {
                $retval = $moduleConfig[$option];
            }
        }
    }
    $tbloptions[$option] = $retval;

    return $retval;
}

/**
 * @param string $mycredits_display
 * @return array
 */
function myCredits_getCredits($mycredits_display = 'list')
{
    global $xoopsDB, $xoopsUser;
    $admin_display    = myCredits_getPermission('myCredits', 1);
    $version_display  = myCredits_getPermission('myCredits', 2);
    $mycredits_public = myCredits_moduleoption('mycredits_public');
    $mycredits_order  = myCredits_moduleoption('mycredits_order');

    /** @var \XoopsModuleHandler $moduleHandler */
    $moduleHandler = xoops_getHandler('module');
    /** @var \XoopsGroupPermHandler $grouppermHandler */
    $grouppermHandler = xoops_getHandler('groupperm');
    $myts             = MyTextSanitizer::getInstance();

    $sql = 'SELECT dirname FROM ' . $xoopsDB->prefix('modules') . ' ORDER BY ' . $mycredits_order;
    $res = $xoopsDB->query($sql);

    while (false !== ($row = $xoopsDB->fetchArray($res))) {
        $mod = $moduleHandler->getByDirname($row['dirname']);
        $cpt = $mod->getVar('mid');

        $item['mid']     = $mod->getVar('mid');
        $item['name']    = $mod->getVar('name');
        $item['hasmain'] = $mod->getVar('hasmain');
        $item['weight']  = $mod->getVar('weight');
        $item['image']   = 'modules/' . $mod->getInfo('dirname') . '/' . $mod->getInfo('image');
        $item['logo']    = 'modules/' . $mod->getInfo('dirname') . '/' . $mod->getInfo('image');
        if (2.0 == mb_substr(XOOPS_VERSION, 6, 3) && mb_substr(XOOPS_VERSION, 10, 2) >= 14) {
            $item['logo'] = 'modules/mycredits/assets/images/modules/' . $mod->getInfo('dirname') . '.gif';
        }
        $item['dirname']     = $mod->getInfo('dirname');
        $item['version']     = round($mod->getVar('version') / 100, 2);
        $item['authors']     = $myts->displayTarea($mod->getInfo('author'));
        $item['credit']      = $myts->displayTarea($mod->getInfo('credits'));
        $item['description'] = $myts->displayTarea($mod->getInfo('description'));
        if ('list' === $mycredits_display || 'scroll' === $mycredits_display) {
            $item['authors']         = $mod->getInfo('author');
            $item['credit']          = $mod->getInfo('credits');
            $item['description']     = $mod->getInfo('description');
            $item['version_display'] = $version_display;

            if ('list' === $mycredits_display) {
                $tmp_xoopsTpl = new XoopsTpl();
                ob_start();
                $tmp_xoopsTpl->assign('credits', $item);

                $tmp_xoopsTpl->display('db:mycredits_block_tips.tpl');
                $dhtml_content = ob_get_clean();
            } else {
                $tmp_xoopsTpl = new XoopsTpl();
                ob_start();
                $tmp_xoopsTpl->assign('credit', $item);
                $tmp_xoopsTpl->assign('lang_admin', _MYCREDITS_ADMIN);
                $tmp_xoopsTpl->assign('lang_public', _MYCREDITS_PUBLIC);
                $tmp_xoopsTpl->assign('lang_module', _MYCREDITS_MODULE);
                $tmp_xoopsTpl->assign('lang_name', _MYCREDITS_NAME);
                $tmp_xoopsTpl->assign('lang_description', _MYCREDITS_DESCRIPTION);
                $tmp_xoopsTpl->assign('lang_version', _MYCREDITS_VERSION);
                $tmp_xoopsTpl->assign('lang_credits', _MYCREDITS_CREDITS);
                $tmp_xoopsTpl->assign('lang_author', _MYCREDITS_AUTHOR);
                $tmp_xoopsTpl->assign('admin_display', $admin_display);
                $tmp_xoopsTpl->assign('version_display', $version_display);

                $tmp_xoopsTpl->display('db:mycredits_block_item.tpl');
                $dhtml_content = ob_get_clean();
            }
            $item['dhtml_content'] = myCredits_remove_extra_linebreaks(str_replace("'", '"', $dhtml_content));
        }

        if ($mycredits_public) {
            if ((0 == $mod->getVar('weight') && 0 == $mod->getVar('hasmain')) || (1 == $mod->getVar('weight') && 0 == $mod->getVar('hasmain'))) {
                $admin[$cpt] = $item;
            } else {
                $item['weight'] = 1;
                $public[$cpt]   = $item;
            }
        } elseif (0 == $mod->getVar('hasmain') || (0 == $mod->getVar('weight') && 1 == $mod->getVar('hasmain'))) {
                $admin[$cpt] = $item;
            } elseif ($xoopsUser && $grouppermHandler->checkRight('module_read', $mod->getVar('mid'), $xoopsUser->getGroups())) {
                    $public[$cpt] = $item;
                } elseif ($grouppermHandler->checkRight('module_read', $mod->getVar('mid'), XOOPS_GROUP_ANONYMOUS)) {
                    $public[$cpt] = $item;
            }

        $cpt++;
    }
    if ($admin_display) {
        $credits = array_merge($admin, $public);
    } else {
        $credits = $public;
    }

    return $credits;
}

/**
 * @param     $gperm_name
 * @param int $id
 * @return bool
 */
function myCredits_getPermission($gperm_name, $id = 1)
{
    static $groups;

    if (!isset($groups[$gperm_name]) || (null != $id && !isset($groups[$gperm_name][$id]))) {
        $myCreditModule = myCredits_getModuleInfo();
        //Get group permissions handler
        /** @var \XoopsGroupPermHandler $grouppermHandler */
        $grouppermHandler = xoops_getHandler('groupperm');

        //Get groups allowed for an item id
        $allowedgroups            = $grouppermHandler->getGroupIds($gperm_name, $id, $myCreditModule->getVar('mid'));
        $groups[$gperm_name][$id] = $allowedgroups;
    }

    global $xoopsUser;
    if (isset($groups[$gperm_name][$id])) {
        if (is_object($xoopsUser)) {
            foreach ($xoopsUser->getGroups() as $group) {
                if (in_array($group, $groups[$gperm_name][$id])) {
                    return true;
                }
            }
        } elseif (in_array(XOOPS_GROUP_ANONYMOUS, $groups[$gperm_name][$id])) {
                return true;
        }
    }

    return false;
    //Return the permission array
    //    return isset($groups[$gperm_name][$id]) ? $groups[$gperm_name][$id] : array();
}

/**
 * @param $mystring
 * @return string
 */
function myCredits_remove_extra_linebreaks($mystring)
{
    $new_string = urlencode($mystring);
    $new_string = mb_ereg_replace('%0D%0A', '', $new_string);
    $new_string = mb_ereg_replace('%0D', '', $new_string);
    $new_string = mb_ereg_replace('%0A', '', $new_string);
    $new_string = urldecode($new_string);

    return $new_string;
}
