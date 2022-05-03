<?php



class GetProducts {
     private $connection;

     public function __construct($db){
          $this->connection =$db;
         
      }
	public function getProduct()  {
    
       
         $productArr = array();
        $query = "SELECT * FROM  product INNER JOIN furniture ON product.sku = furniture.sku
        " ;
             $stmt = $this->connection->prepare($query);
             $stmt->execute();
       
             while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                 extract($row);
         
                $dimension= $height ."x" . $width . "x" . $length;
                $postItem = array(
                 "sku" => $sku,
                 "name" => $name,
                 "price" => $price,
                 "metric"=>"dimension",
                  "unitValue"=> $dimension,
                  "unit" =>"",
                                        
                    
                 );
                 array_push($productArr, $postItem );
       }

       $query = "SELECT * FROM  product INNER JOIN dvd ON product.sku = dvd.sku
       " ;
            $stmt = $this->connection->prepare($query);
            $stmt->execute();
     
   
           
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($row);
        
              
               $postItem = array(
                     "sku" => $sku,
                    "name" => $name,
                    "price" => $price,
                    "metric"=>"size",
                     "unitValue"=> $size,
                     "unit" =>"MB",
                   
            
                   
                );
                array_push($productArr, $postItem );
             }


             $query = "SELECT * FROM  product INNER JOIN book ON product.sku = book.sku
             " ;
                  $stmt = $this->connection->prepare($query);
                  $stmt->execute();
           
                           
                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                      extract($row);
              
                    
                     $postItem = array(
                           "sku" => $sku,
                          "name" => $name,
                          "price" => $price,
                          "metric"=>"weight",
                           "unitValue"=> $weight,
                           "unit" =>"KG",
                         
                  
                         
                      );
                        array_push($productArr, $postItem );
                  }

       http_response_code(200);
  
        echo json_encode($productArr);
   
		
	}
}



