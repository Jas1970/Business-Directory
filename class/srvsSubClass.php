<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of srvsSubClass
 *
 * @author toshiba
 */
class srvsSubClass {
    //put your code here

    private $srvs_id;
    private $srvssub_id;
    private $srvssub_name;
    public function getSrvs_id() {
        return $this->srvs_id;
    }

    public function setSrvs_id($srvs_id) {
        $this->srvs_id = $srvs_id;
        return $this;
    }

    public function getSrvssub_id() {
        return $this->srvssub_id;
    }

    public function setSrvssub_id($srvssub_id) {
        $this->srvssub_id = $srvssub_id;
        return $this;
    }

    public function getSrvssub_name() {
        return $this->srvssub_name;
    }

    public function setSrvssub_name($srvssub_name) {
        $this->srvssub_name = $srvssub_name;
        return $this;
    }


}

?>
