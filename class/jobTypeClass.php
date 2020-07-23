<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of jobTypeClass
 *
 * @author toshiba
 */
class jobTypeClass {
    //put your code here
    
    
    private $jtype_id;
    private $jtype_name;
    public function getJtype_id() {
        return $this->jtype_id;
    }

    public function setJtype_id($jtype_id) {
        $this->jtype_id = $jtype_id;
    }

    public function getJtype_name() {
        return $this->jtype_name;
    }

    public function setJtype_name($jtype_name) {
        $this->jtype_name = $jtype_name;
    }


}

?>
