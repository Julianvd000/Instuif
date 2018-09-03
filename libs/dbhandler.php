<?php

class DbHandler {
  private $conn;
  private $serverIP;
  private $port;
  private $databaseName;
  private $username;
  private $password;
  // Properties for the database

  function __construct() {
    // Starts when the class is called
    $this->serverIP = $GLOBALS['config']['db-ip'];
    $this->port = $GLOBALS['config']['db-port'];
    $this->databaseName = $GLOBALS['config']['db-name'];
    $this->username = $GLOBALS['config']['db-user'];
    $this->password = $GLOBALS['config']['db-password'];

    try {
      $conn = new PDO("mysql:host=$this->serverIP;port=$this->port;dbname=$this->databaseName", $this->username, $this->password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
      // To fix limit issue with prepared statement


      $this->conn = $conn;
      return("Succes");
    }
    catch (Exception $e) {
      return ("Connection failed: " . $e->getMessage());
    }
  }

    public function createdata($query, $queryValues) {
        try{
            $query = $this->conn->prepare($query);
            $query->bindParam($queryValues);
            $query->execute();
            $last_id = $this->conn->lastInsertId();
            return $last_id;
        } catch(PDOException $e) {
            return $e;
        }
    }


    public function ReadData($select) {
        try {
            $query = $this->conn->prepare($select);
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            return $e;
        }
    }

    public function UpdateData($query) {
        try {
            $query = $this->conn->prepare($query);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            return $e;
        }
    }

    public function DeleteData($query) {
        try {
            $query = $this->conn->prepare($query);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            return $e;
        }
    }

}
