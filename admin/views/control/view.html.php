<?php

defined('_JEXEC') or die('Access Restricted');

jimport('joomla.application.component.view');

class ControlViewControl extends JView {

    public function display($tpl = null) {
        JToolBarHelper::title(JText::_('COM_CONTROL_ADMINISTRATION_TITLE'), 'control');
        JToolBarHelper::preferences('com_control', '500');
        
        parent::display($tpl);
        
        $document = JFactory::getDocument();
        $document->setTitle(JText::_('COM_CONTROL_ADMINISTRATION'));
    }

}