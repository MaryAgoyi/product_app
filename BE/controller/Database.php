<?php



class Database{

  private $host = 'remotemysql.com;port=3306';
  private $db_name = 'rxnIQ88JID';
  private $username ='rxnIQ88JID';
  private $password = 'Ym0u2ef21s';
public $connection;



public function connect(){

    try {
   
        $this->connection = new PDO('mysql:host=' . $this->host.';dbname='. $this->db_name, $this->username,$this->password );
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      } catch(PDOException $exception) {
        echo "Connection Failed: " . $exception->getMessage();
        exit();
      }


return $this->connection;
}





}





