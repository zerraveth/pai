<?php

require_once 'Controllers/BoardController.php';

class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'board' => [
                'controller' => 'BoardController',
                'action' => 'getLatestPhotos'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'index';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}