<?php

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.controller');

class ControlController extends JController {

    public function display($cachable = false) {
        JRequest::setVar('view', JRequest::getCmd('view', 'control'));
        parent::display($cachable);
    }
    
}
