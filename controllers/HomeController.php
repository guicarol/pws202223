<?php
require_once 'Controller.php';

class HomeController extends Controller
{
    public function index()
    {
        $auth = new Auth();
        $user = $auth->getUser();

        if ($user->role == 'Cliente') {
            $this->renderView('home', 'index_user', ['user' => $user]);
        } elseif ($user->role == 'Admin'||'Funcionario') {
            $this->renderView('home', 'index', ['user' => $user]);

        }
    }

}