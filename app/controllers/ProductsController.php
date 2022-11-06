<?php 

namespace app\controllers;

class ProductsController extends Controller {

    function __construct() {
        array_push($this->data["nav"], "dodatni Link");
    }

    function index() {
        $this->view("products", [
            
        ]);
    }

}
