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

    public function __construct() {
      $this->model = new KidsModel();

}
   public function overview(){


        loadView("theme/header");

        loadView("theme/footer");

    }
    public function AanwezigOrAfwezig(){

        loadView("theme/header");

        loadView("theme/footer");


    }
    public function create(){
        loadView("theme/header");
        loadView("kids/kids");
        loadView("theme/footer");

        var_dump($_FILES);

        $resultKid = $this->model->createKid($_POST);
        $resultPhoto = $this->model->createKidPhoto($_FILES);

          if ($resultKid === true && $resultPhoto){
            loadView("kids/kidsCreated");
          }

        }
        public function update(){
        loadView("theme/header");

        loadView("theme/footer");
        }
        public function delete(){
        loadView("theme/header");

        loadView("theme/footer");
        }
}
