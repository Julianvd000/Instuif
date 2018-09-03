<?php

/**
 *
 */
class DashboardModel
{

  private $db;
  public $currentDate;
          function __construct()
    {
        $this->db = $GLOBALS['config']['database'];
        $this->currentDate = date(l,z,M,Y);
     }

     public function GetDatum() {

         var_dump($currentDate);
     }
     public function timeToLoginIn($values)
     {

       return true;
     }

}
