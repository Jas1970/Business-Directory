<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of distclass
 *
 * @author toshiba
 */
class distclass {
   
    private $distid;
    private $distname;
    private $stid;
    
    public function getDistid() {
        return $this->distid;
    }

    public function setDistid($distid) {
        $this->distid = $distid;
        return $this;
    }

    public function getDistname() {
        return $this->distname;
    }

    public function setDistname($distname) {
        $this->distname = $distname;
        return $this;
    }

    public function getStid() {
        return $this->stid;
    }

    public function setStid($stid) {
        $this->stid = $stid;
        return $this;
    }

        //put your code here
}

?>
