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

//InfoModule
$modversion['name'] = _MI_MYCREDITS_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _MI_MYCREDITS_DSC;
$modversion['credits'] = "<a href='http://www.wolfpackclan.com/wolfactory' target='_blank'>Wolfactory</a>, <a href='http://www.dugris.info' target='_blank'>dugris</a>";
$modversion['author'] = "Solo, DuGris";
$modversion['license'] = "GPL";
$modversion['image'] = "images/mycredits_slogo.png";
$modversion['dirname'] = "myCredits";

//Menu
$modversion['hasMain'] = 1;

//Admin
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['adminmenu'] = "admin/menu.php";

// Templates
$i = 1;
$modversion['templates'][$i]['file'] = 'mycredits_block_tips.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_block_item.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_collaps_admin.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_collaps_public.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_header.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_index_table.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_index_block.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_index_list.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_index_scroll.html';
$modversion['templates'][$i]['description'] = "";

//$i++;
//$modversion['templates'][$i]['file'] = 'mycredits_index_billboard.html';
//$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_index_multipart.html';
$modversion['templates'][$i]['description'] = "";

$i++;
$modversion['templates'][$i]['file'] = 'mycredits_footer.html';
$modversion['templates'][$i]['description'] = "";


// Blocks
$i = 1;
$modversion['blocks'][$i]['file'] = "mycredits_block.php";
$modversion['blocks'][$i]['name'] = _MI_MYCREDITS_BLOCK_LIST;
$modversion['blocks'][$i]['description']	= _MI_MYCREDITS_BLOCK_LIST_DESC;
$modversion['blocks'][$i]['show_func'] = "b_mycredits_show";
$modversion['blocks'][$i]['edit_func'] = "b_mycredits_edit";
$modversion['blocks'][$i]['options']	= "0|1|0|0|3|200";
$modversion['blocks'][$i]['template'] = 'mycredits_block.html';
$modversion['blocks'][$i]['can_clone'] = true ;

// Options
$i = 1;
$modversion['config'][$i]['name'] = 'mycredits_banner';
$modversion['config'][$i]['title'] = '_MI_MYCREDITS_INDEX_BANNER';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_INDEXDSC_BANNER';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 1;
$modversion['config'][$i]['options'] = array(_YES => 1, _NO => 0);

$i++;
$modversion['config'][$i]['name'] = 'mycredits_text';
$modversion['config'][$i]['title'] = '_MI_MYCREDITS_TEXTINDEX';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_TEXTINDEXDSC';
$modversion['config'][$i]['formtype'] = 'textarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = _MI_MYCREDITS_WELCOME;

$i++;
$modversion['config'][$i]['name'] = 'mycredits_public';
$modversion['config'][$i]['title'] = '_MI_MYCREDITS_PUBLIC';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_PUBLICDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 0;
$modversion['config'][$i]['options'] = array(_YES => 1, _NO => 0);

$i++;
$modversion['config'][$i]['name'] = 'mycredits_order';
$modversion['config'][$i]['title'] = '_MI_MYCREDITS_ORDER';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_ORDERDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'name';
$modversion['config'][$i]['options'] = array(
						'_MI_MYCREDITS_MID'		=> 'mid',
						'_MI_MYCREDITS_MNAME'	=> 'name',
						'_MI_MYCREDITS_MWEIGHT'	=> 'weight',
						'_MI_MYCREDITS_MDIRNAME'=> 'dirname',);

$i++;
$modversion['config'][$i]['name'] = 'mycredits_display';
$modversion['config'][$i]['title'] = '_MI_MYCREDITS_DISPLAY';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_DISPLAYDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'scroll';
$modversion['config'][$i]['options'] = array(
						'_MI_MYCREDITS_TABLE'		=> 'table',
						'_MI_MYCREDITS_LIST'		=> 'list',
						'_MI_MYCREDITS_BLOCK'		=> 'block',
						'_MI_MYCREDITS_SCROLL'		=> 'scroll',
//						'_MI_MYCREDITS_BILLBOARD'	=> 'billboard',
						'_MI_MYCREDITS_MULTIPART'	=> 'multipart',);

$i++;
$modversion['config'][$i]['name'] = 'mycredits_height';
$modversion['config'][$i]['title'] = '_MI_MYCREDITS_HEIGHT';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_HEIGHTDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 200;

$i++;
$modversion['config'][$i]['name'] = 'mycredits_delay';
$modversion['config'][$i]['title'] = '_MI_MYCREDITS_DELAY';
$modversion['config'][$i]['description'] = '_MI_MYCREDITS_DELAYDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 3;

// On Update
if( ! empty( $_POST['fct'] ) && ! empty( $_POST['op'] ) && $_POST['fct'] == 'modulesadmin' && $_POST['op'] == 'update_ok' && $_POST['dirname'] == $modversion['dirname'] ) {
	include dirname( __FILE__ ) . "/include/onupdate.inc.php" ;
}
?>