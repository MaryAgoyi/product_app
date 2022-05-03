<?php



class Request{


public function getPath(){
$path = $_SERVER["REQUEST_URI"] ?? "/";
return $path;
}

public function getMethod(){
return strtolower($_SERVER['REQUEST_METHOD']);
}
public function getData(){

    
   $data = json_decode(file_get_contents("php://input"));

   
    return $data;
}



}