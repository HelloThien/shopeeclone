<?php

class Database{
  
    private $host = "localhost";
    private $db_name = "shopcucmanh_dbi202";
    private $username = "root";
    private $password = "";
    public $conn;
    public $error;
  
    // get the database connection
    public function __construct(){
        $this->getConnection();
    }
    private function getConnection(){ 
         
        $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
        if(!$this->conn) $this->error= "Connection fail: $this->conn->connect_error ";
        
    }
    public function query($sql){
      $result =  mysqli_query($this->conn,$sql) ;
      if($result) return $result;
      else return false;
    }
}
 
 
?>