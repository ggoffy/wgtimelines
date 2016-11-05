<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * wgTimelines module for xoops
 *
 * @copyright      module for xoops
 * @license        GPL 3.0 or later
 * @package        wgtimelines
 * @since          1.0
 * @min_xoops      2.5.7
 * @author         goffy (wedega.com) - Email:<webmaster@wedega.com> - Website:<http://xoops.wedega.com>
 * @version        $Id: 1.0 xoops_version.php 13070 Sat 2016-10-01 05:42:19Z XOOPS Development Team $
 */

// 
$dirname  = basename(__DIR__);
// ------------------- Informations ------------------- //
$modversion['name'] = _MI_WGTIMELINES_NAME;
$modversion['version'] = 1.0;
$modversion['description'] = _MI_WGTIMELINES_DESC;
$modversion['author'] = 'goffy (wedega.com)';
$modversion['author_mail'] = 'webmaster@wedega.com';
$modversion['author_website_url'] = 'http://xoops.wedega.com';
$modversion['author_website_name'] = 'XOOPS on Wedega';
$modversion['credits'] = 'XOOPS Development Team';
$modversion['license'] = 'GPL 3.0 or later';
$modversion['license_url'] = 'http://www.gnu.org/licenses/gpl-3.0.en.html';
$modversion['help'] = 'page=help';
$modversion['release_info'] = 'release_info';
$modversion['release_file'] = XOOPS_URL . '/modules/wgtimelines/docs/release_info file';
$modversion['release_date'] = '2016/09/27';
$modversion['manual'] = 'link to manual file';
$modversion['manual_file'] = XOOPS_URL . '/modules/wgtimelines/docs/install.txt';
$modversion['min_php'] = '5.5';
$modversion['min_xoops'] = '2.5.7';
$modversion['min_admin'] = '1.1';
$modversion['min_db'] = array('mysql' => '5.1', 'mysqli' => '5.1');
$modversion['image'] = 'assets/images/wgtimelines_logo.png';
$modversion['dirname'] = basename(__DIR__);
$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses/moduleadmin';
$modversion['sysicons16'] = '../../Frameworks/moduleclasses/icons/16';
$modversion['sysicons32'] = '../../Frameworks/moduleclasses/icons/32';
$modversion['modicons16'] = 'assets/icons/16';
$modversion['modicons32'] = 'assets/icons/32';
$modversion['demo_site_url'] = 'http://xoops.wedega.com';
$modversion['demo_site_name'] = 'Wedega Xoops Site';
$modversion['support_url'] = 'http://xoops.org/modules/newbb';
$modversion['support_name'] = 'Support Forum';
$modversion['module_website_url'] = 'xoops.wedega.com';
$modversion['module_website_name'] = 'XOOPS on Wedega';
$modversion['release'] = '09/27/2016';
$modversion['module_status'] = 'Beta 1';
$modversion['system_menu'] = 1;
$modversion['hasAdmin'] = 1;
$modversion['hasMain'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';
$modversion['onInstall'] = 'include/install.php';
$modversion['onUpdate'] = 'include/update.php';
// ------------------- Templates ------------------- //
// Admin
$modversion['templates'][] = array('file' => 'wgtimelines_admin_about.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgtimelines_admin_header.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgtimelines_admin_index.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgtimelines_admin_timelines.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgtimelines_admin_items.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgtimelines_admin_templates.tpl', 'description' => '', 'type' => 'admin');
$modversion['templates'][] = array('file' => 'wgtimelines_admin_footer.tpl', 'description' => '', 'type' => 'admin');
// User
$modversion['templates'][] = array('file' => 'wgtimelines_header.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_index.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_timelines_table.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_timelines_simple.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_timelines_colorful.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_timelines_cleanhtml.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_timelines_animated.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_timelines_bigpicture.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_timelines_slider.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_timelines_extended.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_breadcrumbs.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_rss.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_search.tpl', 'description' => '');
$modversion['templates'][] = array('file' => 'wgtimelines_footer.tpl', 'description' => '');
// ------------------- Mysql ------------------- //
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
// Tables
$modversion['tables'][1] = 'wgtimelines_timelines';
$modversion['tables'][2] = 'wgtimelines_items';
$modversion['tables'][3] = 'wgtimelines_templates';
// ------------------- Search ------------------- //
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'wgtimelines_search';
// ------------------- Submenu ------------------- //
$currdirname = isset($GLOBALS['xoopsModule'])&& is_object($GLOBALS['xoopsModule']) ? $GLOBALS['xoopsModule']->getVar('dirname') : 'system';
if ($dirname == $currdirname) {
    $subcount = 1 ;
    $pathname = XOOPS_ROOT_PATH. '/modules/'.$dirname;
    include_once $pathname . '/include/common.php';
    // Get instance of module
    $wgtimelines = WgtimelinesHelper::getInstance();
    // versions
    $timelinesHandler = $wgtimelines->getHandler('timelines');
    $timelines_crit = new CriteriaCompo();
    $timelines_crit->setSort('tl_weight ASC, tl_name');
    $timelines_crit->setOrder('ASC');
    $timelines_crit->add(new Criteria('tl_online', '1'));
    $timelines_rows = $timelinesHandler->getCount($timelines_crit);
    $timelines_arr = $timelinesHandler->getAll($timelines_crit);
        
    if ($timelines_rows > 1) {						
        foreach (array_keys($timelines_arr) as $i)
        {
            $modversion['sub'][$subcount]['name'] = $timelines_arr[$i]->getVar('tl_name');
            $modversion['sub'][$subcount++]['url'] = 'index.php?tl_id=' . $timelines_arr[$i]->getVar('tl_id') ;
        }
    }
}

// ------------------- Blocks ------------------- //
$b = 1;
// Timelines
$modversion['blocks'][$b]['file'] = 'timelines.php';
$modversion['blocks'][$b]['name'] = _MI_WGTIMELINES_TIMELINES_BLOCK_TIMELINE;
$modversion['blocks'][$b]['description'] = _MI_WGTIMELINES_TIMELINES_BLOCK_TIMELINE_DESC;
$modversion['blocks'][$b]['show_func'] = 'b_wgtimelines_timelines_show';
$modversion['blocks'][$b]['edit_func'] = 'b_wgtimelines_timelines_edit';
$modversion['blocks'][$b]['template'] = 'wgtimelines_block_timelines.tpl';
$modversion['blocks'][$b]['options'] = 'tl|25|0';
++$b;
unset($b);
// ------------------- Config ------------------- //
$c = 1;
// Keywords
$modversion['config'][$c]['name'] = 'keywords';
$modversion['config'][$c]['title'] = '_MI_WGTIMELINES_KEYWORDS';
$modversion['config'][$c]['description'] = '_MI_WGTIMELINES_KEYWORDS_DESC';
$modversion['config'][$c]['formtype'] = 'textbox';
$modversion['config'][$c]['valuetype'] = 'text';
$modversion['config'][$c]['default'] = 'wgtimelines, timelines, items, templates';
++$c;
// Editor
xoops_load('xoopseditorhandler');
$editorHandler          = XoopsEditorHandler::getInstance();
$modversion['config'][$c] = array(
    'name'        => 'wgtimelines_editor',
    'title'       => '_MI_WGTIMELINES_EDITOR',
    'description' => '_MI_WGTIMELINES_EDITOR_DESC',
    'formtype'    => 'select',
    'valuetype'   => 'text',
    'options'     => array_flip($editorHandler->getList()),
    'default'     => 'dhtmltextarea'
);
++$c;
// Admin pager
$modversion['config'][$c]['name'] = 'adminpager';
$modversion['config'][$c]['title'] = '_MI_WGTIMELINES_ADMIN_PAGER';
$modversion['config'][$c]['description'] = '_MI_WGTIMELINES_ADMIN_PAGER_DESC';
$modversion['config'][$c]['formtype'] = 'textbox';
$modversion['config'][$c]['valuetype'] = 'int';
$modversion['config'][$c]['default'] = 10;
++$c;
// User pager
$modversion['config'][$c]['name'] = 'userpager';
$modversion['config'][$c]['title'] = '_MI_WGTIMELINES_USER_PAGER';
$modversion['config'][$c]['description'] = '_MI_WGTIMELINES_USER_PAGER_DESC';
$modversion['config'][$c]['formtype'] = 'textbox';
$modversion['config'][$c]['valuetype'] = 'int';
$modversion['config'][$c]['default'] = 10;
++$c;
// Breadcrumbs
$modversion['config'][$c]['name'] = 'breadcrumbs';
$modversion['config'][$c]['title'] = '_MI_WGTIMELINES_BREADCRUMBS';
$modversion['config'][$c]['description'] = '_MI_WGTIMELINES_BREADCRUMBS_DESC';
$modversion['config'][$c]['formtype'] = 'yesno';
$modversion['config'][$c]['valuetype'] = 'int';
$modversion['config'][$c]['default'] = 1;
++$c;
// Bookmarks
$modversion['config'][$c]['name'] = 'bookmarks';
$modversion['config'][$c]['title'] = '_MI_WGTIMELINES_BOOKMARKS';
$modversion['config'][$c]['description'] = '_MI_WGTIMELINES_BOOKMARKS_DESC';
$modversion['config'][$c]['formtype'] = 'yesno';
$modversion['config'][$c]['valuetype'] = 'int';
$modversion['config'][$c]['default'] = 0;
++$c;
// Facebook Comments
$modversion['config'][$c]['name'] = 'facebook_comments';
$modversion['config'][$c]['title'] = '_MI_WGTIMELINES_FACEBOOK_COMMENTS';
$modversion['config'][$c]['description'] = '_MI_WGTIMELINES_FACEBOOK_COMMENTS_DESC';
$modversion['config'][$c]['formtype'] = 'yesno';
$modversion['config'][$c]['valuetype'] = 'int';
$modversion['config'][$c]['default'] = 0;
++$c;
// Disqus Comments
$modversion['config'][$c]['name'] = 'disqus_comments';
$modversion['config'][$c]['title'] = '_MI_WGTIMELINES_DISQUS_COMMENTS';
$modversion['config'][$c]['description'] = '_MI_WGTIMELINES_DISQUS_COMMENTS_DESC';
$modversion['config'][$c]['formtype'] = 'yesno';
$modversion['config'][$c]['valuetype'] = 'int';
$modversion['config'][$c]['default'] = 0;
++$c;