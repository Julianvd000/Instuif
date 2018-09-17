<?php
  require_once APP_PATH . '/model/KidsModel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KidsController
 *
 * @author jdijk
 */
class KidsController {
  protected $model;
  protected $resultKid = false;
  protected $resultPhoto;

    public function __construct() {
      $this->model = new KidsModel();
      

}
  public function create(){
    $GLOBALS['config']['project-name'] = 'Kind inschrijven';
    if (isset($_POST["submit"])) {

      $this->resultKid = $this->model->createKid($_POST);
      $this->resultPhoto = $this->model->createKidPhoto($_FILES);
    }
      loadView("theme/header");
      if ($this->resultKid === true && $this->resultPhoto) {
        loadView("kids/kidsCreated");
      } else {
        loadView("kids/kids");
      }

      loadView("theme/footer");






      }
}
