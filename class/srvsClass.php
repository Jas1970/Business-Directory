<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of srvsClass
 *
 * @author toshiba
 */
class srvsClass {
    //put your code here
    private $srvs_id;
    private $srvs_name;
    public function getSrvs_id() {
        return $this->srvs_id;
    }

    public function setSrvs_id($srvs_id) {
        $this->srvs_id = $srvs_id;
        return $this;
    }

    public function getSrvs_name() {
        return $this->srvs_name;
    }

    public function setSrvs_name($srvs_name) {
        $this->srvs_name = $srvs_name;
        return $this;
    }


}

?>
