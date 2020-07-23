<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of jobIndsClass
 *
 * @author toshiba
 */
class jobIndsClass {
    //put your code here
    
    private $jobinds_id;
    private $jobinds_name;
    
    public function getJobinds_id() {
        return $this->jobinds_id;
    }

    public function setJobinds_id($jobinds_id) {
        $this->jobinds_id = $jobinds_id;
    }

    public function getJobinds_name() {
        return $this->jobinds_name;
    }

    public function setJobinds_name($jobinds_name) {
        $this->jobinds_name = $jobinds_name;
    }


    
}

?>
