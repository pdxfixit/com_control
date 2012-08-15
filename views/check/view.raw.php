<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class ControlViewCheck extends JView {

    public function display($tpl = null) {
        $this->items = $this->get('Items');
        parent::display($tpl);
    }

}
