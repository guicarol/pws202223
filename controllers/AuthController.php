<?php

require_once './models/Auth.php';
require_once 'controllers/Controller.php';

class AuthController extends Controller
{

    public function index()
    {
        require_once './views/auth/index.php';
    }

    public function login()
    {
        $auth = new Auth();

        if ($auth->checkAuth($_POST['username'], $_POST['password']) == true) {

            header('Location: index.php?c=iva&a=index');
        } else {
            require_once 'views/auth/index.php';
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

    public function getRole()
    {
        $user = User::find([$_SESSION['id']]);

        return $user->role;
    }

}

