<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of statclass
 *
 * @author toshiba
 */
class statclass {
    //put your code here
    
    private $sitid;
    private $stname;
    private $cntid;
    
    public function getSitid() {
        return $this->sitid;
    }

    public function setSitid($sitid) {
        $this->sitid = $sitid;
        return $this;
    }

    public function getStname() {
        return $this->stname;
    }

    public function setStname($stname) {
        $this->stname = $stname;
        return $this;
    }

    public function getCntid() {
        return $this->cntid;
    }

    public function setCntid($cntid) {
        $this->cntid = $cntid;
        return $this;
    }


    
}

?>
