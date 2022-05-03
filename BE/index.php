<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET, POST, DELETE");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once "./src/Application.php";
include_once "./controller/Controller.php";

 $app =new Application();



$app->router->post('/',[Controller::class, 'createProduct']);

$app->router->get('/',[Controller::class, 'getProduct']);

$app->router->delete('/',[Controller::class, 'deleteProduct']);
$app->run();

