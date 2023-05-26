<?php
require_once 'controller/AuthController.php';
require_once 'controller/PlanoController.php';
require_once 'controller/HomeController.php';
require_once 'controller/BookController.php';

return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout']
    ],
    'plano'=>[
        'index' => ['GET','PlanoController','index'],
        'show' => ['POST','PlanoController','show']
    ],
    'book'=>[
        'index' => ['GET','BookController','index'],
        'create' => ['GET','BookController','create'],
        'store' => ['POST','BookController','store'],
        'show' => ['GET','BookController','show'],
        'edit' => ['GET','BookController','edit'],
        'update' => ['POST','BookController','update'],
        'delete' => ['GET','BookController','delete']
    ],
    'home'=>[
        'index' => ['GET', 'HomeController', 'index']
    ]
];