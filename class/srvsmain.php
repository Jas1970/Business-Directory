<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of srvsmain
 *
 * @author toshiba
 */
class srvsmain {
    
    private $srvsid;
    private $cname;
    private $cpname;
    private $add1;
    private $add2;
    private $city;
    private $dist;
    private $stat;
    private $cont;
    private $pin;
    private $tel;
    private $fax;
    private $mob;
    private $mail;
    private $web;
    private $tid;
    private $cno;
    private $amail;
	private $srvs_auth;

    public function getSrvsid() {
        return $this->srvsid;
    }

    public function setSrvsid($srvsid) {
        $this->srvsid = $srvsid;
    }

    public function getCname() {
        return $this->cname;
    }

    public function setCname($cname) {
        $this->cname = $cname;
    }

    public function getCpname() {
        return $this->cpname;
    }

    public function setCpname($cpname) {
        $this->cpname = $cpname;
    }

    public function getAdd1() {
        return $this->add1;
    }

    public function setAdd1($add1) {
        $this->add1 = $add1;
    }

    public function getAdd2() {
        return $this->add2;
    }

    public function setAdd2($add2) {
        $this->add2 = $add2;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }

    public function getDist() {
        return $this->dist;
    }

    public function setDist($dist) {
        $this->dist = $dist;
    }

    public function getStat() {
        return $this->stat;
    }

    public function setStat($stat) {
        $this->stat = $stat;
    }

    public function getCont() {
        return $this->cont;
    }

    public function setCont($cont) {
        $this->cont = $cont;
    }

    public function getPin() {
        return $this->pin;
    }

    public function setPin($pin) {
        $this->pin = $pin;
    }

    public function getTel() {
        return $this->tel;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }

    public function getFax() {
        return $this->fax;
    }

    public function setFax($fax) {
        $this->fax = $fax;
    }

    public function getMob() {
        return $this->mob;
    }

    public function setMob($mob) {
        $this->mob = $mob;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($mail) {
        $this->mail = $mail;
    }

    public function getWeb() {
        return $this->web;
    }

    public function setWeb($web) {
        $this->web = $web;
    }

    public function getTid() {
        return $this->tid;
    }

    public function setTid($tid) {
        $this->tid = $tid;
    }

    public function getCno() {
        return $this->cno;
    }

    public function setCno($cno) {
        $this->cno = $cno;
    }

    public function getAmail() {
        return $this->amail;
    }

    public function setAmail($amail) {
        $this->amail = $amail;
    }
	public function getSrvs_auth() {
   		return	$this->srvs_auth;
	 }
   public function setSrvs_auth($srvs_auth) {
   		$this->srvs_auth = $srvs_auth;
    }


    //put your code here
}

?>
