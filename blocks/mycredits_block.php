<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2004 <http://www.xoops.org/>
*
* Module: myCredits 1.0
* Licence : GPL
* Authors :
*           - solo (www.wolfpackclan.com/wolfactory)
*/

function b_mycredits_show($options)
{
    include_once (XOOPS_ROOT_PATH . '/modules/myCredits/include/common.php');
	global $xoopsConfig, $xoopsUser;
	if (file_exists(XOOPS_ROOT_PATH . '/modules/myCredits/language/' . $xoopsConfig['language'] . '/main.php')) {
		include_once XOOPS_ROOT_PATH . '/modules/myCredits/language/' . $xoopsConfig['language'] . '/main.php';
	} else {
		include_once XOOPS_ROOT_PATH . '/modules/myCredits/language/french/modinfo.php';
	}

	$block = array();
	$block['display'] = $options[0];
    $block['tips'] = $options[1];
    $block['show'] = $options[3];
    $block['delay'] = $options[4] * 1000;
    $block['height'] = $options[5];


    $block['admin_display']		= myCredits_getPermission('myCredits', 1);
    $block['version_display']	= myCredits_getPermission('myCredits', 2);
	$block['lang_admin'] 		= _MYCREDITS_ADMIN;
	$block['lang_public']		= _MYCREDITS_PUBLIC;
	$block['lang_module']		= _MYCREDITS_MODULE;
	$block['lang_name']			= _MYCREDITS_NAME;
	$block['lang_description']	= _MYCREDITS_DESCRIPTION;
	$block['lang_version']		= _MYCREDITS_VERSION;
	$block['lang_credits']		= _MYCREDITS_CREDITS;
	$block['lang_author']		= _MYCREDITS_AUTHOR;
	$block['lang_prev']			= _MYCREDITS_PREVIOUS;
	$block['lang_next']			= _MYCREDITS_NEXT;

    $block['credits'] = myCredits_getCredits( );
	return $block;
}

function b_mycredits_edit($options)
{
	$form  = "<table ORDER='0' width='100%'>";

// -----------------------------------------------------------------------------
	$selected = array_fill(0,4,''); ;
	$selected[$options[0]] = " selected='selected'";

	$form .= "<tr><td>" . _MB_MYCREDITS_DISPLAY . "</td><td>";
	$form .= "<select size='1' name='options[0]'>";
	$form .= "<option value='0' " . $selected[0] . ">" . _MB_MYCREDITS_LIST			. "</option>";
	$form .= "<option value='1' " . $selected[1] . ">" . _MB_MYCREDITS_BLOCK		. "</option>";
	$form .= "<option value='2' " . $selected[2] . ">" . _MB_MYCREDITS_SCROLL		. "</option>";
	$form .= "<option value='3' " . $selected[3] . ">" . _MB_MYCREDITS_MULTIPART	. "</option>";
	$form .= "</select></td></tr>";
    unset($selected);
// -----------------------------------------------------------------------------
// Block list options
    $form .= "<tr><td colspan='2'><br></td></tr>";
    $form .= "<tr><th colspan='2'>" . _MB_MYCREDITS_LIST_OPT . "</th></tr>";

	$form .= "<tr><td>" . _MB_MYCREDITS_TIPS . "</td><td>";
	$chk   = "";
	if ($options[1] == 0) {
		$chk = " checked='checked'";
	}
	$form .= "<input type='radio' name='options[1]' value='0'".$chk." />" . _NO ;
	$chk   = "";
	if ($options[1] == 1) {
		$chk = " checked='checked'";
	}
	$form .= "<input type='radio' name='options[1]' value='1'".$chk." />"._YES ;
    $form .= "</td></tr>";
	// -----------------------------------------------------------------------------
	$form .= "<tr><td>" . _MB_MYCREDITS_NBCHAR . "</td><td>";
	$form .= "<input type='text' name='options[2]' size='3' value='" . $options[2] . "' /></td></tr>";
    // -----------------------------------------------------------------------------
	$selected = array_fill(0,4,''); ;
	$selected[$options[3]] = " selected='selected'";

	$form .= "<tr><td>" . _MB_MYCREDITS_SHOW . "</td><td>";
	$form .= "<select size='1' name='options[3]'>";
	$form .= "<option value='0' " . $selected[0] . ">" . _MB_MYCREDITS_SHOW_TEXT	. "</option>";
	$form .= "<option value='1' " . $selected[1] . ">" . _MB_MYCREDITS_SHOW_IMAGES	. "</option>";
	$form .= "<option value='2' " . $selected[2] . ">" . _MB_MYCREDITS_SHOW_BOTH	. "</option>";
	$form .= "<option value='3' " . $selected[3] . ">" . _MB_MYCREDITS_SHOW_LOGO	. "</option>";
	$form .= "</select></td></tr>";
    unset($selected);

// -----------------------------------------------------------------------------
// Block scroll options
    $form .= "<tr><td colspan='2'><br></td></tr>";
    $form .= "<tr><th colspan='2'>" . _MB_MYCREDITS_SCROLL_OPT . "</th></tr>";

	$form .= "<tr><td>" . _MB_MYCREDITS_WAIT . "</td><td>";
	$form .= "<input type='text' name='options[4]' size='1' value='" . $options[4] . "' /></td></tr>";

// -----------------------------------------------------------------------------
// Block dynamic
    $form .= "<tr><td colspan='2'><br></td></tr>";
    $form .= "<tr><th colspan='2'>" . _MB_MYCREDITS_DYNAMIC_OPT . "</th></tr>";

	$form .= "<tr><td>" . _MB_MYCREDITS_HEIGHT . "</td><td>";
	$form .= "<input type='text' name='options[5]' size='3' value='" . $options[5] . "' /></td></tr>";

// -----------------------------------------------------------------------------
	$form .= "</table>";
	return $form;
}
?>