<?php

defined('_JEXEC') or die;

include(JPATH_COMPONENT . '/helpers/control.php');

class ControlControllerUpdate extends JController {

    private $_jinput = null;
    private $_token = '';

    function __construct() {
        // Check for the token.
        $this->_jinput = JFactory::getApplication()->input;
        $this->_token = $this->_jinput->get('token', '', 'STRING');
        ControlHelper::checkToken($this->_token) or jexit(JText::_('JINVALID_TOKEN'));
        parent::__construct();
    }

    function check() {
        // Setup the Model & View
        $model = & $this->getModel('update');
        $view = & $this->getView('check', 'raw');
        $view->setModel($model, true);

        // Purge updates
        $model->purge();
        $model->enableSites();

        // Get the caching duration
        jimport('joomla.application.component.helper');
        $component = JComponentHelper::getComponent('com_installer');
        $params = $component->params;
        $cache_timeout = $params->get('cachetimeout', 6, 'int');
        $cache_timeout = 3600 * $cache_timeout;

        // Find updates
        $result = $model->findUpdates(0, $cache_timeout);
        
        // Display the view
        $view->display();
    }

    function update() {
        // Setup the Model and get the update ID
        $model = & $this->getModel('update');
        $uid = $this->_jinput->get('cid', array(), 'ARRAY');

        JArrayHelper::toInteger($uid, array());
        if ($model->update($uid)) {
            $cache = JFactory::getCache('mod_menu');
            $cache->clean();

            // ??
            return '1';
        } else {
            return '0';
        }
    }

}
