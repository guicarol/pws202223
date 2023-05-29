<?php
require_once 'frontend/controllers/Controller.php';
require_once 'frontend/models/Auth.php';

class AuthController extends Controller
{

    public function index()
    {
        $this->renderView('auth', 'index');
    }

    public function login()
    {

        $username = $this->getHTTPPostParam('username');
        $password = $this->getHTTPPostParam('password');

        $auth = new Auth();

        if ($auth->CheckAuth($username, $password) == true) {
            $this->renderView('plano', 'index');
        } else {
            $this->renderView('auth', 'index');
        }
    }

    public function logout()
    {
        $auth = new Auth();
        $auth->logout();
        $this->renderView('auth', 'index');
    }
}