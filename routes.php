<?php
require_once 'controllers/AuthController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/IvaController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/FolhaobraController.php';
require_once 'controllers/LinhaobraController.php';

return [
    'defaultRoute' => ['GET', 'AuthController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout']
    ],
    'empresa' => [
        'index' => ['GET', 'EmpresaController', 'index'],
        'create' => ['GET', 'EmpresaController', 'create'],
        'show' => ['GET', 'EmpresaController', 'show'],
        'edit' => ['GET', 'EmpresaController', 'edit'],
        'update' => ['POST', 'EmpresaController', 'update'],
        'store' => ['POST', 'EmpresaController', 'store'],
    ],
    'servico' => [
        'index' => ['GET', 'ServicoController', 'index'],
        'create' => ['GET', 'ServicoController', 'create'],
        'store' => ['POST', 'ServicoController', 'store'],
        'show' => ['GET', 'ServicoController', 'show'],
        'edit' => ['GET', 'ServicoController', 'edit'],
        'update' => ['POST', 'ServicoController', 'update'],
        'delete' => ['GET', 'ServicoController', 'delete'],
        'escolha_servico' => ['GET', 'ServicoController', 'escolha_servico'],

    ],
    'iva' => [
        'index' => ['GET', 'IvaController', 'index'],
        'create' => ['GET', 'IvaController', 'create'],
        'store' => ['POST', 'IvaController', 'store'],
        'show' => ['GET', 'IvaController', 'show'],
        'edit' => ['GET', 'IvaController', 'edit'],
        'update' => ['POST', 'IvaController', 'update'],
        'delete' => ['GET', 'IvaController', 'delete']
    ],
    'user' => [
        'index' => ['GET', 'UserController', 'index'],
        'select' => ['GET', 'UserController', 'select'],
        'selectfilter' => ['POST', 'UserController', 'selectfilter'],
        'create' => ['GET', 'UserController', 'create'],
        'store' => ['POST', 'UserController', 'store'],
        'show' => ['GET', 'UserController', 'show'],
        'edit' => ['GET', 'UserController', 'edit'],
        'update' => ['POST', 'UserController', 'update'],
        'delete' => ['GET', 'UserController', 'delete'],
        'index_all_user' => ['GET', 'UserController', 'index_all_user']
    ],
    'folhasobra' => [
        'index' => ['GET', 'FolhaobraController', 'index'],
        'create' => ['GET', 'FolhaobraController', 'create'],
        'store' => ['GET', 'FolhaobraController', 'store'],
        'show' => ['GET', 'FolhaobraController', 'show'],
        'edit' => ['GET', 'FolhaobraController', 'edit'],
        'update' => ['POST', 'FolhaobraController', 'update'],
        'delete' => ['GET', 'FolhaobraController', 'delete']
    ],
    'linhasobra' => [
        'index' => ['GET', 'LinhaobraController', 'index'],
        'create' => ['GET', 'LinhaobraController', 'create'],
        'store' => ['POST', 'LinhaobraController', 'store'],
        'show' => ['GET', 'LinhaobraController', 'show'],
        'edit' => ['GET', 'LinhaobraController', 'edit'],
        'update' => ['POST', 'LinhaobraController', 'update'],
        'delete' => ['GET', 'LinhaobraController', 'delete']
    ],
    'home' => [
        'index' => ['GET', 'HomeController', 'index']
    ]
];