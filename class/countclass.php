<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of countclass
 *
 * @author toshiba
 */
class countclass {
    
    private $cntid;
    private $cntname;
    public function getCntid() {
        return $this->cntid;
    }

    public function setCntid($cntid) {
        $this->cntid = $cntid;
        return $this;
    }

    public function getCntname() {
        return $this->cntname;
    }

    public function setCntname($cntname) {
        $this->cntname = $cntname;
        return $this;
    }

        
    //put your code here
}

?>
