<?php

class Router{

protected array $routes =[];

public $request;

public function __construct ($request){
  $this->request = $request;

  
  
 }

public function get($path, $callback){
  $this->routes['get'][$path] =$callback;
 
}

public function post($path, $callback){
  $this->routes['post'][$path] =$callback;
 
}
public function delete($path, $callback){
  $this->routes['delete'][$path] =$callback;
 
}
public function resolve(){
 $path =$this->request->getPath();
 $method=$this->request->getMethod();
  $callback =$this->routes[$method][$path]?? false;

 if($callback===false){

   return "Not found";
 }
  $callback[0] = new $callback[0]();
   return call_user_func($callback);

}

}