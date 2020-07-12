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

function myCredits_adminmenu($currentoption = 0, $breadcrumb = '') {
	echo "
    	<style type='text/css'>
    	#buttontop { float:left; width:100%; background: #e7e7e7; font-size:93%; line-height:normal; border-top: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; margin: 0; }
    	#buttonbar { float:left; width:100%; background: #e7e7e7 url('" . XOOPS_URL . "/modules/myCredits/images/bg.gif') repeat-x left bottom; font-size: 10px; line-height:normal; border-left: 1px solid black; border-right: 1px solid black; margin-bottom: 12px; }
    	#buttonbar ul { margin:0; margin-top: 15px; padding:0px 5px 0; list-style:none; }
		#buttonbar li { display:inline; margin:0; padding:0; }
		#buttonbar a { float:left; background:url('" . XOOPS_URL . "/modules/myCredits/images/left_both.gif') no-repeat left top; margin:0; padding:0 0 0 9px; border-bottom:1px solid #000; text-decoration:none; white-space: nowrap}
		#buttonbar a span { float:left; display:block; background:url('" . XOOPS_URL . "/modules/myCredits/images/right_both.gif') no-repeat right top; padding:5px 15px 4px 6px; font-weight:bold; color:#765; white-space: nowrap}
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
	$myts = &MyTextSanitizer::getInstance();

	$tblColors = Array_Fill(0,8,'');
	$tblColors[$currentoption] = 'current';

	if (file_exists(XOOPS_ROOT_PATH . '/modules/myCredits/language/' . $xoopsConfig['language'] . '/modinfo.php')) {
		include_once XOOPS_ROOT_PATH . '/modules/myCredits/language/' . $xoopsConfig['language'] . '/modinfo.php';
	} else {
		include_once XOOPS_ROOT_PATH . '/modules/myCredits/language/french/modinfo.php';
	}

	include 'menu.php';

	echo '<div id="buttontop">';
	echo '<table style="width: 100%; padding: 0;" cellspacing="0"><tr>';
	echo '<td style="font-size: 10px; text-align: left; color: #2F5376; padding: 0 6px; line-height: 18px;">';
	for( $i=0; $i<count($headermenu); $i++ ){
		echo '<a class="nobutton" href="' . $headermenu[$i]['link'] .'">' . $headermenu[$i]['title'] . '</a> ';
		if ($i < count($headermenu)-1) {
			echo "| ";
		}
	}
	echo '</td>';
	echo '<td style="font-size: 12px; text-align: right; color: #CC0000; padding: 0 6px; line-height: 18px; font-weight: bold;">' . $breadcrumb . '</td>';
	echo '</tr></table>';
	echo '</div>';

	echo '<div id="buttonbar">';
	echo "<ul>";

	for( $i=0; $i<count($adminmenu); $i++ ){
		echo '<li id="' . $tblColors[$i] . '"><a href="' . XOOPS_URL . '/modules/myCredits/' . $adminmenu[$i]['link'] . '"><span>' . $adminmenu[$i]['title'] . '</span></a></li>';
	}
	echo '</ul></div>';
    echo '<div style="float: left; width: 100%; text-align: center; margin: 0px; padding: 0px">';
}

function myCredits_adminfooter() {
	echo '<p/>';
	OpenTable();
	echo '<div style="text-align: right; vertical-align: center"><img src="../images/myCredits.gif" border="0" align="center" valign="absmiddle" />';
    echo sprintf(_AM_MYCREDITS_CREDIT,'<a href="http://wolfactory.wolfpackclan.com" target="_blank">WolFactory</a>', '<a href="http://www.dugris.info" target="_blank">DuGris</a>' );
    echo '</div>';
	CloseTable();
	echo '<p/>';
}

function myCredits_getModuleInfo() {
    static $myCreditsModule;
	if (!isset($myCreditsModule)) {
	    global $xoopsModule;
	    if (isset($xoopsModule) && is_object($xoopsModule) && $xoopsModule->getVar('dirname') == 'myCredits') {
	        $myCreditsModule =& $xoopsModule;
	    }
	    else {
	        $hModule = &xoops_gethandler('module');
	        $myCreditsModule = $hModule->getByDirname('myCredits');
	    }
	}
	return $myCreditsModule;
}

function myCredits_moduleoption($option, $repmodule='myCredits')
{
	global $xoopsModuleConfig, $xoopsModule;
	static $tbloptions= Array();
	if(is_array($tbloptions) && array_key_exists($option,$tbloptions)) {
		return $tbloptions[$option];
	}

	$retval=false;
	if (isset($xoopsModuleConfig) && (is_object($xoopsModule) && $xoopsModule->getVar('dirname') == $repmodule && $xoopsModule->getVar('isactive'))) {
		if(isset($xoopsModuleConfig[$option])) {
			$retval= $xoopsModuleConfig[$option];
		}
	} else {
		$module_handler =& xoops_gethandler('module');
		$module =& $module_handler->getByDirname($repmodule);
		$config_handler =& xoops_gethandler('config');
		if ($module) {
		    $moduleConfig =& $config_handler->getConfigsByCat(0, $module->getVar('mid'));
	    	if(isset($moduleConfig[$option])) {
	    		$retval= $moduleConfig[$option];
	    	}
		}
	}
	$tbloptions[$option]=$retval;
	return $retval;
}

function myCredits_getCredits( $mycredits_display = "list" ) {

	global $xoopsDB, $xoopsUser;
	$admin_display = myCredits_getPermission('myCredits', 1);
    $version_display = myCredits_getPermission('myCredits', 2);
    $mycredits_public = myCredits_moduleoption('mycredits_public');
    $mycredits_order = myCredits_moduleoption('mycredits_order');

    $module_handler =& xoops_gethandler('module');
    $moduleperm_handler =& xoops_gethandler('groupperm');
    $myts =& MyTextSanitizer::getInstance();

	$sql = "SELECT dirname FROM " . $xoopsDB->prefix("modules") . " ORDER BY " . $mycredits_order;
    $res = $xoopsDB->query($sql);

    while ($row= $xoopsDB->fetchArray($res)) {
		$mod = $module_handler->getByDirName($row['dirname']);
        $cpt = $mod->getVar('mid');

		$item['mid']			= $mod->getVar('mid');
		$item['name']			= $mod->getVar('name');
		$item['hasmain']		= $mod->getVar('hasmain');
		$item['weight']			= $mod->getVar('weight');
		$item['image']			= 'modules/' . $mod->getInfo('dirname') . '/' . $mod->getInfo('image');
        $item['logo'] 			= 'modules/' . $mod->getInfo('dirname') . '/' . $mod->getInfo('image');
        if( substr( XOOPS_VERSION , 6 , 3 ) == 2.0 && substr( XOOPS_VERSION , 10 , 2 ) >= 14 ) {
			$item['logo']		= 'modules/myCredits/images/modules/'. $mod->getInfo('dirname') . '.gif';
        }
		$item['dirname']		= $mod->getInfo('dirname');
		$item['version']		= round($mod->getVar('version')/100 , 2);
		$item['authors']		= $myts->makeTareaData4Show( $mod->getInfo('author') );
		$item['credit']			= $myts->makeTareaData4Show( $mod->getInfo('credits') );
		$item['description']	= $myts->makeTareaData4Show( $mod->getInfo('description') );
    	if ($mycredits_display == "list" || $mycredits_display == "scroll") {
			$item['authors']		= $mod->getInfo('author');
			$item['credit']		   	= $mod->getInfo('credits');
			$item['description']	= $mod->getInfo('description');
        	$item['version_display']= $version_display;

	        if ( $mycredits_display == "list" ) {
		        $tmp_xoopsTpl = new XoopsTpl();
				ob_start();
        		$tmp_xoopsTpl->assign("credits",	$item);

		   		$tmp_xoopsTpl->display('db:mycredits_block_tips.html');
				$dhtml_content = ob_get_contents() ;
				ob_end_clean();
	        } else {
		        $tmp_xoopsTpl = new XoopsTpl();
				ob_start();
        		$tmp_xoopsTpl->assign("credit",	$item);
				$tmp_xoopsTpl->assign("lang_admin",			_MYCREDITS_ADMIN);
				$tmp_xoopsTpl->assign("lang_public",		_MYCREDITS_PUBLIC);
				$tmp_xoopsTpl->assign("lang_module",		_MYCREDITS_MODULE);
				$tmp_xoopsTpl->assign("lang_name",			_MYCREDITS_NAME);
				$tmp_xoopsTpl->assign("lang_description",	_MYCREDITS_DESCRIPTION);
				$tmp_xoopsTpl->assign("lang_version",		_MYCREDITS_VERSION);
				$tmp_xoopsTpl->assign("lang_credits",		_MYCREDITS_CREDITS);
				$tmp_xoopsTpl->assign("lang_author",		_MYCREDITS_AUTHOR);
				$tmp_xoopsTpl->assign("admin_display",		$admin_display);
				$tmp_xoopsTpl->assign("version_display",	$version_display);

		   		$tmp_xoopsTpl->display('db:mycredits_block_item.html');
				$dhtml_content = ob_get_contents() ;
				ob_end_clean();
        	}
	        $item['dhtml_content'] = myCredits_remove_extra_linebreaks( str_replace("'",'"', $dhtml_content) );
    	}

		if ( $mycredits_public ) {
        	if ( ($mod->getVar('weight') == 0 && $mod->getVar('hasmain')==0 ) || ($mod->getVar('weight')==1 && $mod->getVar('hasmain')==0) ) {
            	$admin[ $cpt ] = $item;
            } else {
            	$item['weight']	= 1;
	        	$public[ $cpt ] = $item;
            }
        } else {
        	if ($mod->getVar('hasmain') == 0 || ($mod->getVar('weight')==0 && $mod->getVar('hasmain')==1) ) {
            	$admin[ $cpt ] = $item;
            } else {
				if ( $xoopsUser && $moduleperm_handler->checkRight('module_read', $mod->getVar('mid'), $xoopsUser->getGroups() ) ) {
		        	$public[ $cpt ] = $item;
				} elseif ( $moduleperm_handler->checkRight('module_read', $mod->getVar('mid'), XOOPS_GROUP_ANONYMOUS) ) {
		        	$public[ $cpt ] = $item;
	            }
            }
		}
        $cpt++;
	}
    if ($admin_display) {
	    $credits = array_merge ($admin, $public);
    } else {
    	$credits = $public;
    }
	return( $credits);
}

function myCredits_getPermission($gperm_name, $id = 1) {
	static $groups;

	if (!isset($groups[$gperm_name]) || ($id != null && !isset($groups[$gperm_name][$id]))) {
		$myCreditModule = myCredits_getModuleInfo();
		//Get group permissions handler
		$gperm_handler =& xoops_gethandler('groupperm');

		//Get groups allowed for an item id
		$allowedgroups = $gperm_handler->getGroupIds($gperm_name, $id, $myCreditModule->getVar('mid'));
		$groups[$gperm_name][$id] = $allowedgroups;
	}

	global $xoopsUser;
    if (isset($groups[$gperm_name][$id])) {
    	if (is_object( $xoopsUser )) {
	    	foreach ( $xoopsUser->getGroups() as $group) {
		    	if ( in_array($group, $groups[$gperm_name][$id]) ) {
        			return true;
        		}
	        }
        } else {
	    	if ( in_array(XOOPS_GROUP_ANONYMOUS, $groups[$gperm_name][$id]) ) {
            	return true;
            }
        }
    }
	return false;

	//Return the permission array
//	return isset($groups[$gperm_name][$id]) ? $groups[$gperm_name][$id] : array();
}


function myCredits_remove_extra_linebreaks($mystring) {
	$new_string = urlencode ($mystring);
	$new_string = ereg_replace("%0D%0A", "", $new_string);
	$new_string = ereg_replace("%0D", "", $new_string);
	$new_string = ereg_replace("%0A", "", $new_string);
	$new_string = urldecode  ($new_string);
	return $new_string;
}
?>