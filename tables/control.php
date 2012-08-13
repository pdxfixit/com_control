<?php

defined('_JEXEC') or die('Access Restricted');

class TableControl extends JTable {

	public $user_id = null;
	public $updated = null;
	public $stuff = '0';
	
	public function __construct(&$db) {
		parent::__construct('#__control', 'id', $db);
	}
  
}
