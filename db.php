<?php

class database{

    private  $servername = 'localhost';
    private   $username = 'juniortest';
    private  $password = 'juniortest';
    private $dbname = "juniortest";
    public  $pdo;
    public function __construct(){
        if(!isset($this->pdo)){
            try{
                $link = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
                $this->pdo = $link;
            }catch(PDOException $e){
                die("Failed to connect with database".$e->getMessage());
            }
        }
    }
}

?>

