<?php



class DeleteProducts{
    public $data;
    public $connection;
    public function __construct($data, $db) {
       
        $this->connection = $db;
        $this->data = $data;
      }
     
	public function deleteProduct()  {
       
            try {
            
                $delete= "'".implode("','",$this->data)."'";
                $sql = "DELETE FROM product WHERE sku IN  ($delete) ";
                $this->connection->exec($sql);
                echo "Record deleted successfully";
              } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
              }

  
		
	}
}

