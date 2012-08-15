<?php

defined('_JEXEC') or die('Access Restricted');

jimport('joomla.application.component.view');

class ControlViewControl extends JView {

    public function display($tpl = null) {
        $app = JFactory::getApplication();
        $doc = JFactory::getDocument();
        
        $this->loadHelper('control');
        
        $params = $app->getParams();

        $doc->addStyleSheet($this->baseurl . '/components/com_control/assets/control.css');
        $doc->addStyleDeclaration('#control { display:none; }');   
        $doc->addScriptDeclaration('var control = true;');
        $doc->addScript('https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js');

        $this->assignRef('params', $params);
        
        parent::display($tpl);
    }

}
