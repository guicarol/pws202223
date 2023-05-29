<?php
require_once 'controllers/AuthController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/IvaController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/FolhaobraController.php';

return [
    'defaultRoute' => ['GET', 'AuthController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout']
    ],
    'empresa'=>[
        'index' => ['GET','EmpresaController','index'],
        'show' => ['GET','EmpresaController','show'],
        'edit' => ['GET','EmpresaController','edit'],
        'update' => ['POST','EmpresaController','update']
    ],
    'servico'=>[
        'index' => ['GET','ServicoController','index'],
        'create' => ['GET','ServicoController','create'],
        'store' => ['POST','ServicoController','store'],
        'show' => ['GET','ServicoController','show'],
        'edit' => ['GET','ServicoController','edit'],
        'update' => ['POST','ServicoController','update'],
        'delete' => ['GET','ServicoController','delete'],
        'escolha_servico' => ['POST','ServicoController','escolha_servico'],

    ],
    'iva'=>[
        'index' => ['GET','IvaController','index'],
        'create' => ['GET','IvaController','create'],
        'store' => ['POST','IvaController','store'],
        'show' => ['GET','IvaController','show'],
        'edit' => ['GET','IvaController','edit'],
        'update' => ['POST','IvaController','update'],
        'delete' => ['GET','IvaController','delete']
    ],
    'user'=>[
        'index' => ['GET','UserController','index'],
        'create' => ['GET','UserController','create'],
        'store' => ['POST','UserController','store'],
        'show' => ['GET','UserController','show'],
        'edit' => ['GET','UserController','edit'],
        'update' => ['POST','UserController','update'],
        'delete' => ['GET','UserController','delete']
    ],
    'folhasobra'=>[
        'index' => ['GET','FolhaobraController','index'],
        'create' => ['GET','FolhaobraController','create'],
        'store' => ['POST','FolhaobraController','store'],
        'show' => ['GET','FolhaobraController','show'],
        'edit' => ['GET','FolhaobraController','edit'],
        'update' => ['POST','FolhaobraController','update'],
        'delete' => ['GET','FolhaobraController','delete']
    ],
    'home'=>[
        'index' => ['GET', 'HomeController', 'index']
    ]
];