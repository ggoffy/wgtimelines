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
 * @version        $Id: 1.0 timelines.php 13070 Sat 2016-10-01 05:42:14Z XOOPS Development Team $
 */
defined('XOOPS_ROOT_PATH') || die('Restricted access');

/**
 * Class Object WgtimelinesTimelines
 */
class WgtimelinesTimelines extends XoopsObject
{
	/**
	 * Constructor 
	 *
	 * @param null
	 */
	public function __construct()
	{
		$this->initVar('tl_id', XOBJ_DTYPE_INT);
		$this->initVar('tl_name', XOBJ_DTYPE_TXTBOX);
		$this->initVar('tl_weight', XOBJ_DTYPE_INT);
		$this->initVar('tl_template', XOBJ_DTYPE_INT);
        $this->initVar('tl_sortby', XOBJ_DTYPE_INT);
        $this->initVar('tl_online', XOBJ_DTYPE_INT);
		$this->initVar('tl_submitter', XOBJ_DTYPE_INT);
		$this->initVar('tl_date_create', XOBJ_DTYPE_INT);
	}

	/**
	 * @static function &getInstance
	 *
	 * @param null
	 */
	public static function getInstance()
	{
		static $instance = false;
		if(!$instance) {
			$instance = new self();
		}
	}

	/**
	 * The new inserted $Id
	 */
	public function getNewInsertedIdTimelines()
	{
		$newInsertedId = $GLOBALS['xoopsDB']->getInsertId();
		return $newInsertedId;
	}

	/**
	 * Get form
	 *
	 * @param mixed $action
	 */
	public function getFormTimelines($action = false)
	{
		$wgtimelines = WgtimelinesHelper::getInstance();
		if($action === false) {
			$action = $_SERVER['REQUEST_URI'];
		}
		// Title
		$title = $this->isNew() ? sprintf(_AM_WGTIMELINES_TIMELINE_ADD) : sprintf(_AM_WGTIMELINES_TIMELINE_EDIT);
		// Get Theme Form
		xoops_load('XoopsFormLoader');
		$form = new XoopsThemeForm($title, 'form', $action, 'post', true);
		$form->setExtra('enctype="multipart/form-data"');
		// Form Text TlName
		$form->addElement(new XoopsFormText( _AM_WGTIMELINES_TIMELINE_NAME, 'tl_name', 50, 255, $this->getVar('tl_name') ), true);
		// Form Table Templates
        $templatesHandler = $wgtimelines->getHandler('templates');
		$cat_templateSelect = new XoopsFormSelect( _AM_WGTIMELINES_TIMELINE_TEMPLATE, 'tl_template', $this->getVar('tl_template'));
		$cat_templateSelect->addOptionArray($templatesHandler->getList());
		$form->addElement($cat_templateSelect, true);
		// Form Text tlSortBy
		$tlSortBy = $this->isNew() ? 0 : $this->getVar('tl_sortby');
        $tlSortBySelect = new XoopsFormSelect( _AM_WGTIMELINES_TIMELINE_SORTBY, 'tl_sortby', $tlSortBy);
        $tlSortBySelect->addOption(0, _AM_WGTIMELINES_TIMELINE_SORTBY_ASC);
        $tlSortBySelect->addOption(1, _AM_WGTIMELINES_TIMELINE_SORTBY_DESC);
        $form->addElement($tlSortBySelect);
        // Form Text TlWeight
        $timelinesHandler = $wgtimelines->getHandler('timelines');
		$tlWeight = $this->isNew() ? ($timelinesHandler->getCountTimelines() + 1) : $this->getVar('tl_weight');
        $form->addElement(new XoopsFormHidden('tl_weight', $tlWeight));
        // Form Radio Yes/No
		$tlOnline = $this->isNew() ? 0 : $this->getVar('tl_online');
		$form->addElement(new XoopsFormRadioYN( _AM_WGTIMELINES_TIMELINE_ONLINE, 'tl_online', $tlOnline));
		// Form Select User
		$form->addElement(new XoopsFormSelectUser( _AM_WGTIMELINES_TIMELINE_SUBMITTER, 'tl_submitter', false, $this->getVar('tl_submitter') ));
		// Form Text Date Select
		$tlDate_create = $this->isNew() ? 0 : $this->getVar('tl_date_create');
		$form->addElement(new XoopsFormTextDateSelect( _AM_WGTIMELINES_TIMELINE_DATE_CREATE, 'tl_date_create', '', $tlDate_create ), true);
		// To Save
		$form->addElement(new XoopsFormHidden('op', 'save'));
		$form->addElement(new XoopsFormButton('', 'submit', _SUBMIT, 'submit'));
		return $form;
	}

	/**
	 * Get Values
	 */
	public function getValuesTimelines($keys = null, $format = null, $maxDepth = null)
	{
		$wgtimelines = WgtimelinesHelper::getInstance();
		$ret = $this->getValues($keys, $format, $maxDepth);
		$ret['id'] = $this->getVar('tl_id');
		$ret['name'] = $this->getVar('tl_name');
		$ret['weight'] = $this->getVar('tl_weight');
        $ret['sortby'] = $this->getVar('tl_sortby');
        if ($this->getVar('tl_sortby') == 1) {
            $ret['sortby_text'] = _AM_WGTIMELINES_TIMELINE_SORTBY_DESC;
        } else {
            $ret['sortby_text'] = _AM_WGTIMELINES_TIMELINE_SORTBY_ASC;
        }
        $ret['online'] = $this->getVar('tl_online');
		$templates = $wgtimelines->getHandler('templates');
		$template_obj = $templates->get($this->getVar('tl_template'));
		$ret['template'] = $template_obj->getVar('tpl_name');
		$ret['submitter'] = XoopsUser::getUnameFromId($this->getVar('tl_submitter'));
		$ret['date_create'] = formatTimeStamp($this->getVar('tl_date_create'), 's');
		return $ret;
	}

	/**
	 * Returns an array representation of the object
	 *
	 * @return array
	 */
	public function toArrayTimelines()
	{
		$ret = array();
		$vars = $this->getVars();
		foreach(array_keys($vars) as $var) {
			$ret[$var] = $this->getVar('"{$var}"');
		}
		return $ret;
	}
}

/**
 * Class Object Handler WgtimelinesTimelines
 */
class WgtimelinesTimelinesHandler extends XoopsPersistableObjectHandler
{
	/**
	 * Constructor 
	 *
	 * @param null|XoopsDatabase $db
	 */
	public function __construct(XoopsDatabase $db)
	{
		parent::__construct($db, 'wgtimelines_timelines', 'wgtimelinestimelines', 'tl_id', 'tl_name');
	}

	/**
	 * @param bool $isNew
	 *
	 * @return object
	 */
	public function create($isNew = true)
	{
		return parent::create($isNew);
	}

	/**
	 * retrieve a field
	 *
	 * @param int $i field id
	 * @return mixed reference to the {@link Get} object
	 */
	public function get($i = null, $fields = null)
	{
		return parent::get($i, $fields);
	}

	/**
	 * get inserted id
	 *
	 * @param null
	 * @return integer reference to the {@link Get} object
	 */
	public function getInsertId()
	{
		return $this->db->getInsertId();
	}

	/**
	 * Get Count Timelines in the database
	 */
	public function getCountTimelines($start = 0, $limit = 0, $sort = 'tl_weight ASC, tl_id', $order = 'ASC')
	{
		$crCountTimelines = new CriteriaCompo();
		$crCountTimelines = $this->getTimelinesCriteria($crCountTimelines, $start, $limit, $sort, $order);
		return parent::getCount($crCountTimelines);
	}

	/**
	 * Get All Timelines in the database
	 */
	public function getAllTimelines($start = 0, $limit = 0, $sort = 'tl_weight ASC, tl_id', $order = 'ASC')
	{
		$crAllTimelines = new CriteriaCompo();
		$crAllTimelines = $this->getTimelinesCriteria($crAllTimelines, $start, $limit, $sort, $order);
		return parent::getAll($crAllTimelines);
	}

	/**
	 * Get Criteria Timelines
	 */
	private function getTimelinesCriteria($crTimelines, $start, $limit, $sort, $order)
	{
		if ($start > 0) $crTimelines->setStart( $start );
		if ($limit > 0) $crTimelines->setLimit( $limit );
		$crTimelines->setSort( $sort );
		$crTimelines->setOrder( $order );
		return $crTimelines;
	}
}