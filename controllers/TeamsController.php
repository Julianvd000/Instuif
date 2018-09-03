<?php
    require_once APP_PATH. '/model/TeamsModel.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TeamsController
 *
 * @author jdijk
 */
class TeamsController {
    private $TeamsModel;
    private $teams;
    public function __construct() {
        $this->TeamsModel = new TeamsModel();
        $this->teams = $this->TeamsModel->GetAllTeams();
    }
    public function overview(){


        loadView("theme/header");
        loadView("Teams/overview", ['teams' => $this->teams]);
        loadView("theme/footer");

    }
    public function overzichtTeam(){
        if(isset($_GET['team'])){
            $SelectedTeam = $_GET['team'];
            $teamLeiding = $this->TeamsModel->GetLeidingofTeam($SelectedTeam);
            $team = $this->TeamsModel->GetThisTeam($SelectedTeam);
        loadView("theme/header");
        loadView("Teams/overviewteam", ['teamLeiding' => $teamLeiding, 'team' => $team]);
        loadView("theme/footer");}

    }
    public function create(){
        loadView("theme/header");
        if(empty($_POST)){
           loadView("Teams/createTeam");
        }else{
         $last = $this->TeamsModel->CreateTeam($_POST, $_FILES);
           $newTeam = $this->TeamsModel->GetAllTeams($last);
           loadView("Teams/CreatedTeam", ['newTeam' => $newTeam]);
        }
        loadView("theme/footer");
        }
        
        public function update(){
        loadView("theme/header");
        if(isset($_POST)){
          }else{
         loadView("Teams/createteam");
        }
        loadView("theme/footer");
        }
        public function delete(){
        loadView("theme/header");

        loadView("theme/footer");
        }
        }
