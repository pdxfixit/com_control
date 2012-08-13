<?php

defined('_JEXEC') or die('Access Restricted');

jimport('joomla.application.component.model');

JTable::addIncludePath(JPATH_COMPONENT . DS . 'tables');

class ControlModelControl extends JModel {

    private $_table = null;

    public function __construct() {
        parent::__construct();
        $this->_table = & JTable::getInstance('Control', 'Table');
    }

}