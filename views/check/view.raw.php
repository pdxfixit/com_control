<?php

defined('_JEXEC') or die;

jimport('joomla.application.component.view');

class ControlViewCheck extends JView {

    public function display() {
        $items = $this->get('Items');
        $items = $this->_stripExtraData($items);
        echo json_encode($items);
    }

    private function _stripExtraData($items) {
        foreach ($items as $i => $data) {
            unset($data->update_site_id
                    , $data->extension_id
                    , $data->categoryid
                    , $data->element
                    , $data->type
                    , $data->folder
                    , $data->client_id
                    , $data->data
                    , $data->detailsurl);
        }
        return $items;
    }

}
