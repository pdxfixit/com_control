<?php

defined('_JEXEC') or die('Restricted access');

class ControlHelper {

    public function checkToken($token) {
        if (strtolower($token) == "ben")
            return true;
        return false;
    }

}
