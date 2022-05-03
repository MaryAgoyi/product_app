<?php

include_once 'Database.php';


abstract class Products {
  public $data;
  public $connection;
  public $sku; 
  public $name;
   public $price;
   public $size; 
   public $weight;
    public $length;
    public $width; 
   public $height;
  public function __construct($data) {
    $database =new Database();
    $this->connection = $database->connect();
    $this->data = $data;
  }
  abstract public function createData() : string;

 
}


class Book extends Products {
  private $refTable ="book";
  public function createData() : string {
    $this->sku=$this->data->sku; 
    $this->weight=$this->data->weight;
    try {
    $query = "INSERT INTO " . $this->refTable . "
    SET
      sku = :sku,
      weight = :weight";
  
    $stmt = $this->connection->prepare($query);
    $this->sku=htmlspecialchars(strip_tags($this->sku)); 
    $this->weight=htmlspecialchars(strip_tags($this->weight));

    $stmt->bindParam(":sku", $this->sku);
    $stmt->bindParam(":weight", $this->weight);
    
    $stmt->execute();
    echo "Book data entry successful: ";



   
      
    } catch(PDOException $exception) {
      echo "Book Data Entry Failed: " . $exception->getMessage();
      return false;
      exit();
    }
    return "this is book ";
  }
   
}

class Furniture extends Products {
  private $refTable ="furniture";


  public function createData() : string {
    $this->sku=$this->data->sku; 
    $this->width=$this->data->width;
    $this->height=$this->data->height;
    $this->length=$this->data->length; 
    try {
      
      $query = "INSERT INTO " . $this->refTable . "
      SET
         sku = :sku,
         width = :width,
         length = :length,
          height = :height";
    
      $stmt = $this->connection->prepare($query);
      $this->sku=htmlspecialchars(strip_tags($this->sku)); 
      $this->height=htmlspecialchars(strip_tags($this->height));
      $this->length=htmlspecialchars(strip_tags($this->length));
      $this->width=htmlspecialchars(strip_tags($this->width));
  
      $stmt->bindParam(":sku", $this->sku);
      $stmt->bindParam(":height", $this->height);
      $stmt->bindParam(":length", $this->length);
      $stmt->bindParam(":width", $this->width);
      
      $stmt->execute();
      echo "Furniture data entry successful: ";
  
  
  
       
        
      } catch(PDOException $exception) {
        echo "Furniture Data Entry Failed: " . $exception->getMessage();
        return false;
        exit();
      }
  
    return "this is furniture !";
  }
   
}

class Dvd extends Products {
  private $refTable ="dvd";
  public function createData() : string {
    $this->sku=$this->data->sku; 
    $this->size=$this->data->size;

    try {
     
      $query = "INSERT INTO " . $this->refTable . "
      SET
        sku = :sku,
        size = :size";
    
      $stmt = $this->connection->prepare($query);
      $this->sku=htmlspecialchars(strip_tags($this->sku)); 
      $this->size=htmlspecialchars(strip_tags($this->size));
  
      $stmt->bindParam(":sku", $this->sku);
      $stmt->bindParam(":size", $this->size);
      
      $stmt->execute();
      echo "dvd Table created successful: ";
  
  
  
       
        
      } catch(PDOException $exception) {
        echo "Product Table created Failed: " . $exception->getMessage();
        return false;
        exit();
      }
    return "this id dvd ";
  }
 
}

class AllProduct extends Products {
  private $table ="product";
  public function createData() : string {
    $this->sku=$this->data->sku; 
    $this->name=$this->data->name;
    $this->price=$this->data->price;
    echo $this->data->category;
    try {
      $query = "INSERT INTO " . $this->table . "
    SET
      sku = :sku,
      name = :name,
      price = :price ";
  
    $stmt = $this->connection->prepare($query);
    $this->sku=htmlspecialchars(strip_tags($this->sku)); 
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->price=htmlspecialchars(strip_tags($this->price));
    $stmt->bindParam(":sku", $this->sku);
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":price", $this->price);
       
   
    $stmt->execute();

    
    echo "product Table created successful: ";
        
      } catch(PDOException $exception) {
        echo "Product Table created Failed: " . $exception->getMessage();
        return false;
        exit();
      }



    return "this product" ;
  }
 

}

