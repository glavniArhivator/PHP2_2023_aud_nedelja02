<?php 

namespace app\controllers;

use app\controllers\Controller;

class HomeController extends Controller {

    function index() {
        $this->json([
            "firstName" => "Petar",
            "lastName" => "Peric"
        ]);
    }

    function strana() {

        $this->view("home", [
            "username" => "pera",
            "firstName" => "Petar"
        ]);
    }

    function posts() {

        $posts = [
            [
                "id" => 1, "title" => "Post 1", "content" => "Content 1"
            ],
            [
                "id" => 2, "title" => "Post 2", "content" => "Content 2"
            ],
            [
                "id" => 3, "title" => "Post 3", "content" => "Content 3"
            ]
        ];

        $this->view("posts", [
            "objave" => $posts,
            "username" => "pera"
        ]);
    }


}
