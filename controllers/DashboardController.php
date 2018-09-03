<?php
/**
 * Pages Controller
 */

require_once APP_PATH . '/model/DashboardModel.php';
class DashboardController
{

  /**
   * Action "overview"
   * URL: /index.php?controller=categorie&action=overview
   */
  protected $DashModel;
    public function __contruct(){
        $this->DashModel = new DashboardModel;
    }

  public function overview()
  {
      $GLOBALS['config']['project-name'] = 'Instuif Hoofdpagina';
      loadView('theme/header',['ShowMenu' => false]);
      loadView('login/Firstpage');
      loadView('theme/footer');
  }

  public function login(){
    $Postvaribles = $_POST;
    var_dump($this->DashModel);
    $loginResult = $this->DashModel->timeToLoginIn($Postvaribles);
    if ($loginResult === true) {
        header("Location: ./index.php?controller=teams&action=overview");
    }

  }

}
