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
class TeamsModel {
    //put your code here

    private $db = null;
    public function __construct() {
                $this->db = $GLOBALS['config']['database'];

    }

    public function GetAllTeams() {
        $Querry = "SELECT * From `team`";
        $result = $this->db->ReadData($Querry);
        return $result;
    }
    public function GetLeidingofTeam($TeamID) {
        $Querry = "SELECT * From `team_has_leiding` JOIN `leiding` ON team_has_leiding.leiding_id = leiding.id JOIN `rol` ON leiding.Rol_id = rol.id WHERE team_id = {$TeamID} ";
        if (isset($_GET['sort'])){
            $Querry .= " order by leiding.".$_GET['sort']."";
        }
        $result = $this->db->ReadData($Querry);
        return $result;
    }
    public function GetThisTeam($TeamID){
        $Querry = "SELECT * From `team` where id = $TeamID";
        $result = $this->db->ReadData($Querry);
        return $result;
    }
    public function CreateTeam($POST, $FILES) {
        $backReturn = "";
        $target_dir = APP_PATH . "/assets/images/";
        $target_file = $target_dir . basename($FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($POST["submit"])) {
            $check = getimagesize($FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $backReturn .= "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $backReturn .= "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $backReturn .= "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($FILES["fileToUpload"]["size"] > 500000) {
            $backReturn .= "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $backReturn .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $backReturn .= "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $backReturn .= "The file ". basename( $FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                $backReturn .= "Sorry, there was an error uploading your file.";
            }
        }
        return $backReturn;
    }
}
