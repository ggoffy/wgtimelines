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
 * @version        $Id: 1.0 admin.php 13070 Sat 2016-10-01 05:42:16Z XOOPS Development Team $
 */
// ---------------- Admin Index ----------------
define('_AM_WGTIMELINES_STATISTICS', "Statistics");
// There are
define('_AM_WGTIMELINES_THEREARE_TIMELINES', "There are <span class='bold'>%s</span> timelines in the database");
define('_AM_WGTIMELINES_THEREARE_ITEMS', "There are <span class='bold'>%s</span> items in the database");
define('_AM_WGTIMELINES_THEREARE_TEMPLATES', "There are <span class='bold'>%s</span> templates in the database");
// ---------------- Admin Files ----------------
// There aren't
define('_AM_WGTIMELINES_THEREARENT_TIMELINES', "There aren't timelines");
define('_AM_WGTIMELINES_THEREARENT_ITEMS', "There aren't items");
define('_AM_WGTIMELINES_THEREARENT_TEMPLATES', "There aren't templates");
// Save/Delete
define('_AM_WGTIMELINES_FORM_OK', "Successfully saved");
define('_AM_WGTIMELINES_FORM_DELETE_OK', "Successfully deleted");
define('_AM_WGTIMELINES_FORM_SURE_DELETE', "Are you sure to delete: <b><span style='color : Red;'>%s </span></b>");
define('_AM_WGTIMELINES_FORM_SURE_RENEW', "Are you sure to update: <b><span style='color : Red;'>%s </span></b>");
// Buttons
define('_AM_WGTIMELINES_ADD_TIMELINE', "Add New Timeline");
define('_AM_WGTIMELINES_ADD_ITEM', "Add New Item");
define('_AM_WGTIMELINES_ADD_TEMPLATE', "Add New Template");
// Lists
define('_AM_WGTIMELINES_TIMELINES_LIST', "List of Timelines");
define('_AM_WGTIMELINES_ITEMS_LIST', "List of Items");
define('_AM_WGTIMELINES_TEMPLATES_LIST', "List of Templates");
// ---------------- Admin Classes ----------------
// Timeline add/edit
define('_AM_WGTIMELINES_TIMELINE_ADD', "Add Timeline");
define('_AM_WGTIMELINES_TIMELINE_EDIT', "Edit Timeline");
// Elements of Timeline
define('_AM_WGTIMELINES_TIMELINE_ID', "Id");
define('_AM_WGTIMELINES_TIMELINE_NAME', "Name");
define('_AM_WGTIMELINES_TIMELINE_TEMPLATE', "Templates");
define('_AM_WGTIMELINES_TIMELINE_SORTBY', "Sort by");
define('_AM_WGTIMELINES_TIMELINE_SORTBY_ASC', "Year/Date ascending");
define('_AM_WGTIMELINES_TIMELINE_SORTBY_DESC', "Year/Date descending");
define('_AM_WGTIMELINES_TIMELINE_ONLINE', "Online");
define('_AM_WGTIMELINES_TIMELINE_SUBMITTER', "Submitter");
define('_AM_WGTIMELINES_TIMELINE_DATE_CREATE', "Date create");
// Item add/edit
define('_AM_WGTIMELINES_ITEM_ADD', "Add Item");
define('_AM_WGTIMELINES_ITEM_EDIT', "Edit Item");
// Elements of Item
define('_AM_WGTIMELINES_ITEM_ID', "Id");
define('_AM_WGTIMELINES_ITEM_TL_ID', "Timelines");
define('_AM_WGTIMELINES_ITEM_TITLE', "Title");
define('_AM_WGTIMELINES_ITEM_CONTENT', "Content");
define('_AM_WGTIMELINES_ITEM_IMAGE', "Image");
define('_AM_WGTIMELINES_FORM_UPLOAD_IMAGE_ITEMS', "Image in uploads images");
define('_AM_WGTIMELINES_ITEM_DATE', "Date");
define('_AM_WGTIMELINES_ITEM_YEAR', "Year");
define('_AM_WGTIMELINES_ITEM_SUBMITTER', "Submitter");
define('_AM_WGTIMELINES_ITEM_DATE_CREATE', "Date create");
// Template add/edit
define('_AM_WGTIMELINES_TEMPLATE_ADD', "Add Template");
define('_AM_WGTIMELINES_TEMPLATE_EDIT', "Edit Template");
// Elements of Template
define('_AM_WGTIMELINES_TEMPLATE_ID', "Id");
define('_AM_WGTIMELINES_TEMPLATE_NAME', "Name");
define('_AM_WGTIMELINES_TEMPLATE_DESC', "Description");
define('_AM_WGTIMELINES_TEMPLATE_FILE', "File");
define('_AM_WGTIMELINES_TEMPLATE_OPTIONS', "Options");
define('_AM_WGTIMELINES_TEMPLATE_VALID', "Apply");
define('_AM_WGTIMELINES_TEMPLATE_ADDOPT', "Add Option after saving");
define('_AM_WGTIMELINES_TEMPLATE_IMGPOS', "Image position on panel");
define('_AM_WGTIMELINES_TEMPLATE_IMGPOS_LEFT', "Left");
define('_AM_WGTIMELINES_TEMPLATE_IMGPOS_RIGHT', "Right");
define('_AM_WGTIMELINES_TEMPLATE_IMGPOS_ALTERNATE', "Alternately");
define('_AM_WGTIMELINES_TEMPLATE_IMGPOS_TOP', "Top");
define('_AM_WGTIMELINES_TEMPLATE_IMGPOS_BOTTOM', "Bottom");
define('_AM_WGTIMELINES_TEMPLATE_IMGSTYLE', "Image style");
define('_AM_WGTIMELINES_TEMPLATE_IMGSTYLE_ROUNDED', "Rounded");
define('_AM_WGTIMELINES_TEMPLATE_IMGSTYLE_CIRCLE', "Circle");
define('_AM_WGTIMELINES_TEMPLATE_IMGSTYLE_THUMB', "Thumbnail");
define('_AM_WGTIMELINES_TEMPLATE_TABLETYPE', "Table type");
define('_AM_WGTIMELINES_TEMPLATE_TABLEBORDERED', "Bordered");
define('_AM_WGTIMELINES_TEMPLATE_TABLESTRIPED', "Striped");
define('_AM_WGTIMELINES_TEMPLATE_TABLEHOVER', "Hover");
define('_AM_WGTIMELINES_TEMPLATE_TABLECONDENSED', "Condensed");
define('_AM_WGTIMELINES_TEMPLATE_BGCOLOR', "Background Color");
define('_AM_WGTIMELINES_TEMPLATE_FONTCOLOR', "Font Color");
define('_AM_WGTIMELINES_TEMPLATE_BADGECOLOR', "Badge Color");
define('_AM_WGTIMELINES_TEMPLATE_BADGESTYLE', "Badgestyle");
define('_AM_WGTIMELINES_TEMPLATE_BADGESTYLE_FULL', "Full");
define('_AM_WGTIMELINES_TEMPLATE_BADGESTYLE_CIRCLE', "Circle");
define('_AM_WGTIMELINES_TEMPLATE_BADGEFONTCOLOR', "Badge font color");
define('_AM_WGTIMELINES_TEMPLATE_NONE', "None");
define('_AM_WGTIMELINES_TEMPLATE_ORIENTATION', "Orientation");
define('_AM_WGTIMELINES_TEMPLATE_ORIENTATION_V', "vertical");
define('_AM_WGTIMELINES_TEMPLATE_ORIENTATION_H', "horizontal");
define('_AM_WGTIMELINES_TEMPLATE_DATESSPEED', "Speed changing date");
define('_AM_WGTIMELINES_TEMPLATE_ISSUESSPEED', "Appearing speed of items");
define('_AM_WGTIMELINES_TEMPLATE_ISSUESTRANSPARENCY', "Transparency of items");
define('_AM_WGTIMELINES_TEMPLATE_ISSUESTRANSPARENCYSPEED', "Speed of transparency");
define('_AM_WGTIMELINES_TEMPLATE_AUTOPLAY', "Autoplay");
define('_AM_WGTIMELINES_TEMPLATE_AUTOPLAY_DIRECTION', "Autoplay direction");
define('_AM_WGTIMELINES_TEMPLATE_AUTOPLAY_DIRECTION_FW', "forward");
define('_AM_WGTIMELINES_TEMPLATE_AUTOPLAY_DIRECTION_BW', "backward");
define('_AM_WGTIMELINES_TEMPLATE_AUTOPLAY_PAUSE', "Autoplay pause");
define('_AM_WGTIMELINES_TEMPLATE_ARROWKEYS', "Use arrow keys");
define('_AM_WGTIMELINES_TEMPLATE_STARTAT', "Start at item");
define('_AM_WGTIMELINES_TEMPLATE_LINECOLOR', "Line color");
define('_AM_WGTIMELINES_TEMPLATE_BORDERRADIUS', "Panel border radius");
define('_AM_WGTIMELINES_TEMPLATE_BORDERWIDTH', "Panel border width");
define('_AM_WGTIMELINES_TEMPLATE_BORDERSTYLE', "Panel border style");
define('_AM_WGTIMELINES_TEMPLATE_BORDERCOLOR', "Panel border color");
define('_AM_WGTIMELINES_TEMPLATE_BOXSHADOW', "Box shadow");
define('_AM_WGTIMELINES_TEMPLATE_BOXSHADOW_H', "Horizontal");
define('_AM_WGTIMELINES_TEMPLATE_BOXSHADOW_V', "Vertical");
define('_AM_WGTIMELINES_TEMPLATE_BOXSHADOW_BLUR', "Blur");
define('_AM_WGTIMELINES_TEMPLATE_BOXSHADOW_SPREAD', "Spread");
define('_AM_WGTIMELINES_TEMPLATE_BOXSHADOW_COLOR', "Shadow color");


// General
define('_AM_WGTIMELINES_FORM_UPLOAD', "Upload file");
define('_AM_WGTIMELINES_FORM_IMAGE_PATH', "Files in %s ");
define('_AM_WGTIMELINES_FORM_ACTION', "Action");
define('_AM_WGTIMELINES_FORM_EDIT', "Modification");
define('_AM_WGTIMELINES_FORM_DELETE', "Clear");
// ---------------- Admin Others ----------------
define('_AM_WGTIMELINES_MAINTAINEDBY', " is maintained by ");
// ---------------- End ----------------