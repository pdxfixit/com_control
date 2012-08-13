<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by Control
$controller = JController::getInstance('Control');

// Perform the Request task
try {
    $controller->execute(JRequest::getCmd('task', 'display'));
} catch (Exception $e) {
    //do something.
}

// Redirect if set by the controller
$controller->redirect();
