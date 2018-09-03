<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TeamsModel
 *
 * @author jdijk
 */
class LeidingModel {
    //put your code here
    
    private $db = null;
    public function __construct() {
        $this->db = $GLOBALS['config']['database'];
        
    }
    
    
    public function GetLeiding() {
        $Querry = "SELECT * From `leiding`";
        $result = $this->db->ReadData($Querry);
        return $result;
    }
    public function GetInfo(){
        
    }
}
