<?php


include_once "Router.php";
include_once "Request.php";

class Application{

public $router;
public $request;


public function __construct (){
  $this->request = new Request();
  
 $this->router = new Router($this->request);
    

}
public function run(){
echo $this->router->resolve();
 

}

}