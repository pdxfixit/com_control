<?php

defined('_JEXEC') or die;

require(JPATH_ADMINISTRATOR . '/components/com_installer/models/update.php');

class ControlModelUpdate extends InstallerModelUpdate {

    public function getListQuery() {
        $db = & $this->getDbo();
        $query = $db->getQuery(true);
        $query->select('*')->from($db->nq('#__updates'));
        // Filter by extension_id
        if ($eid = $this->getState('filter.extension_id')) {
            $query->where($db->nq('extension_id') . ' = ' . $db->q((int) $eid));
        } else {
            $query->where($db->nq('extension_id') . ' != ' . $db->q(0));
            $query->where($db->nq('extension_id') . ' != ' . $db->q(700));
        }
        return $query;
    }

}
