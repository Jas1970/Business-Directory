<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of propTypeClass
 *
 * @author toshiba
 */
class propTypeClass {
    //put your code here

    private $proptype_id;
    private $proptype_name;
    
    public function getProptype_id() {
        return $this->proptype_id;
    }

    public function setProptype_id($proptype_id) {
        $this->proptype_id = $proptype_id;
    }

    public function getProptype_name() {
        return $this->proptype_name;
    }

    public function setProptype_name($proptype_name) {
        $this->proptype_name = $proptype_name;
    }


    
}

?>
