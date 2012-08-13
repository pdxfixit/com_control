<?php

// No direct access to this file
defined('_JEXEC') or die;

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by Control
$controller = JController::getInstance('Control');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
