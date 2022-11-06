<?php 

namespace app\controllers;

abstract class Controller {

    protected $data = [
        "nav" => [
            "link 1", "link 2", "link 3", "link 4"
        ]
    ];

    function __construct() {

    }

    protected function view($viewName, $data = null) {
        
        if($this->data) {
            extract($this->data);
        }

        if($data) {
            extract($data);
        }

        require "app\\views\\header.php";
        require "app\\views\\" . $viewName . ".php";
        require "app\\views\\footer.php";
    }

    protected function json($data) {
        header("Content-type: application/json");
        echo json_encode($data);
    }

}