<?php

require_once './models/Auth.php';
require_once 'controllers/Controller.php';

class AuthController extends Controller
{

    public function index()
    {
        $this->renderView('auth','index');
    }

    public function login()
    {
        $auth = new Auth();
        $sessao = $auth->checkAuth($_POST['username'], ($_POST['password']));
        if($sessao) {
            $user = $auth ->getUser();
            $_SESSION['id']=$user->id;
            switch ($user->role){
                case 'Cliente':
                    $this->redirectToRoute('home', 'index');
                    break;
                case 'Funcionario':

                case 'Admin':
                    $this->redirectToRoute('home', 'index');
            }
        } else{
            $this->redirectToRoute('auth', 'index');
        }
    }

    public function logout()
    {
        $auth = new Auth();
        $auth->logout();

        require_once 'views/auth/index.php';

    }

    public function loginFilter()
    {
        $auth = new Auth();
        if(!$auth->isLoggedin()){
            header('Location: ./router.php?'.INVALID_ACCESS_ROUTE);
        }
    }

}

