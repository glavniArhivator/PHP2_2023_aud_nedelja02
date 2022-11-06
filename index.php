<?php 

require "config.php";
//PHP PSR - standardi za pisanje koda

//Naziv klasa - Pascal case (ProductsController)
//naziv metoda - camelCase

//u url adresi - products/search

$controller = "HomeController";
$method = "index";

try {
    if(isset($_SERVER["PATH_INFO"])) {
        $pathInfo = $_SERVER["PATH_INFO"];
        //Prepoznavanje kontrolera
        if(isset(explode("/", $pathInfo)[1])) {
            $controllerName = ucfirst(strtolower(explode("/", $pathInfo)[1]));
            $controller = $controllerName . "Controller";
        }
        //Prepoznavanje metoda
        if(isset(explode("/", $pathInfo)[2])) {
            if((explode("/", $pathInfo)[2])) {
                $method = strtolower(explode("/", $pathInfo)[2]);
            }
        }
    }
    
    $controllerClass = "app\\controllers\\" . $controller;
    $controllerObj = new $controllerClass;
    
    $controllerObj->$method();
}catch(\Error $e) {
    //var_dump($e);
    //Logging greske (Log fajl/Baza) + (BugSnag)
    echo "<h1>404</h1>";
}

// echo "</br>";
// echo $method;
