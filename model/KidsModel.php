<?php

/**
 *
 */
class KidsModel
{

  private $db;
  public $afbeeldingName;

      public function __construct()
    {
        $this->db = $GLOBALS['config']['database'];

     }

     public function createKidPhoto($fileArray)
     {
        $target_dir = __DIR__ . "/KidsPhotos/";
        $target_file = $target_dir . basename($fileArray["fileToUpload"]["name"]);
        $this->afbeeldingName = basename($fileArray["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($fileArray)) {
            $check = getimagesize($fileArray["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        // Check file size
        if ($fileArray["fileToUpload"]["size"] > 500000) {
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {

        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($fileArray["fileToUpload"]["tmp_name"], $target_file)) {
                return true;
            } else {
                return false;
            }
        }

     }
     public function createKid($postArray)
     {
       return true;


       $sql = "INSERT INTO `kids`(`voornaam`, `tussenvoegesel`, `achternaam`, `geboortedatum`, `straat`, `huisnummer`, `toevoeging`, `postcode`, `plaats`, `telefoon_ouder`, `email_ouder`, `afbeelding_naam`)
       VALUES (':voornaam', ':tussenvoegesel', ':achternaam', ':geboortedatum', ':straat', ':huisnummer', ':toevoeging', ':postcode', ':plaats', ':telefoon_ouder', ':email_ouder', ':afbeelding_naam')";
       $sqlValues = [
          ':voornaam' =>$postArray["firstName"],
          ':tussenvoegesel'=>$postArray["middleName"],
          ':achternaam'=>$postArray["lastName"],
          ':geboortedatum'=>$postArray["bday"],
          ':straat'=>$postArray["street"],
          ':huisnummer'=>$postArray["houseNumber"],
          ':toevoeging'=>$postArray["Added"],
          ':postcode'=>$postArray["zipCode"],
          ':plaats'=>$postArray["City"],
          ':telefoon_ouder'=>$postArray["cellPhone"],
          ':email_ouder'=> $postArray["Email"],
          ':afbeelding_naam' => $this->afbeeldingName
       ];
       $resultData = $this->db->createdata($sql, $sqlValues);
     }
}
