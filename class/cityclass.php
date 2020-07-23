<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cityclass
 *
 * @author toshiba
 */
class cityclass {
    //put your code here
    private $citid;
    private $citname;
    private $distid;
    
    public function getCitid() {
        return $this->citid;
    }

    public function setCitid($citid) {
        $this->citid = $citid;
        return $this;
    }

    public function getCitname() {
        return $this->citname;
    }

    public function setCitname($citname) {
        $this->citname = $citname;
        return $this;
    }

    public function getDistid() {
        return $this->distid;
    }

    public function setDistid($distid) {
        $this->distid = $distid;
        return $this;
    }
   
}

?>
