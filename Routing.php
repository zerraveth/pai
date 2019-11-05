<?php

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
        die('ok');
    }
}