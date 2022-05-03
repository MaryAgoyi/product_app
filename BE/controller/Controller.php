<?php
include_once "Database.php";
include_once "GetProducts.php";
include_once "DeleteProduct.php";
include_once "../../src/Request.php";
include_once 'CreateProduct.php';

class Controller{

    private $db;
    public $request;
    public function __construct(){
        $database =new Database();
        $this->db = $database->connect();
        $this->request = new Request();
     }
    
   
public function getProduct(){
  
  
   $product = new GetProducts($this->db );
   $product-> getProduct();


}

public function createProduct(){
    $data=$this->request->getData();
    $products= new AllProduct($data);
    echo $products->createData();
		$methodName = $data->category;
		$methodClass = ucfirst($methodName);
     	$Create = new $methodClass($data);
	echo $Create->createData();
    return "hello from post controller";
    }
    public function deleteProduct(){
        $data=$this->request->getData();
       
        $delete = new DeleteProducts($data, $this->db);
        $delete -> deleteProduct();
       
        }

}