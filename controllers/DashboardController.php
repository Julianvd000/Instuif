<?php
/**
 * Pages Controller
 */

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


}
