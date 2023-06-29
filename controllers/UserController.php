<?php

require_once 'Controller.php';
require_once './models/User.php';

class UserController extends Controller
{

    public function __construct()
    {
        $auth = new Auth();
        $user = $auth->getUser();

        if ($user->role == 'Cliente') {
            $this->renderView('user', 'show', ['user' => $user]);
        }

    }

    public function index()
    {

        $this->authorizationFilter(['Admin','Funcionario']);

        $auth = new Auth();
        $user = $auth->getUser();

        if ($user->role == 'Funcionario') {
            $this->renderView('user', 'index', ['user' => $user]);
        } elseif ($user->role == 'Admin') {
            $users = User::all();
            $this->renderView('user', 'index_all_user', ['users' => $users]);
        }

    }

    public
    function show($id)
    {
        $auth = new Auth();
        $user = $auth->getUser();
        if ($user->role == 'Cliente' && $user->id == $id) {
            $this->renderView('user', 'show', ['user' => $user]);
        } else {
            $user = User::find($id);
            if (is_null($user)) {
                $this->redirectToRoute('user', 'index');
            } else {

                $this->renderView('user', 'show', ['user' => $user]);
            }
        }
    }


    public
    function edit($id)
    {

        $user = User::find($id);
        if (is_null($user)) {
            $this->redirectToRoute('user', 'index');
        } else {
            if ($user->role == 'Funcionario') {
                $this->renderView('user', 'edit_func', ['user' => $user]);

            } elseif ($user->role == 'Admin') {
                $this->renderView('user', 'edit', ['user' => $user]);
            }
        }
    }

    public
    function update($id)
    {
        $user = User::find($id);
        $user->update_attributes($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            //redirecionar para o index
            $this->redirectToRoute('user', 'index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('user', 'edit', ['user' => $user]);

        }
    }

    public
    function create()
    {
        $this->renderView('user', 'create');
    }

    public
    function store()
    {
        $user = new User($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'create', ['user' => $user]);
        }
    }

    public
    function create_user()
    {
        $auth = new Auth();
        $user = $auth->getUser();

        if ($user->role == 'Admin') {
            $this->renderView('user', 'create_user');
        } else {
            $this->redirectToRoute('user', 'create_cliente');
        }

    }

    public
    function store_user()
    {
        $auth = new Auth();
        $user = $auth->getUser();

        if ($user->role == 'Admin') {
            $user = new User();

            $user->username = $_POST['username'];
            if ($_POST['password'] != '') {
                $user->password = md5($_POST['password']);
            } else {
                $user->password = $_POST['password'];
            }
            $user->email = $_POST['email'];
            $user->telefone = $_POST['telefone'];
            $user->nif = $_POST['nif'];
            $user->morada = $_POST['morada'];
            $user->codigopostal = $_POST['codigopostal'];
            $user->localidade = $_POST['localidade'];
            $user->role = $_POST['role'];

            if ($user->is_valid()) {
                $user->save();
                //redirecionar para o index
                $this->redirectToRoute('user', 'index_all_user');
            } else {
                //mostrar vista edit passando o modelo como parâmetro
                $user->password = $_POST['password'];
                $this->renderView('user', 'create_user', ['cliente' => $user]);
            }
        } else {
            $this->redirectToRoute('user', 'create_user');
        }

    }

    public
    function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->redirectToRoute('user', 'index');

    }

    public
    function select()
    {
        $users = User::find('all', array('conditions' => " role LIKE 'Cliente'"));

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('user', 'select', ['users' => $users]);

    }

    public
    function selectfilter()
    {

        if (isset($_POST['pesquisa'])) {
            $pesquisa = $_POST['pesquisa'];
            $users = User::find('all', array('conditions' => "username LIKE '%$pesquisa%' and role LIKE 'Cliente'"));

        } else {
            $users = User::find('all', array('conditions' => " role LIKE 'Cliente'"));
        }

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('user', 'select', ['users' => $users]);

    }

    public
    function create_cliente()
    {
        //mostrar a vista create
        $auth = new Auth();
        $user = $auth->getUser();

        if ($user->role == 'Funcionario') {
            $this->renderView('user', 'create_cliente');
        } else {
            $this->redirectToRoute('user', 'create_user');
        }

    }

    public
    function store_cliente()
    {
        $auth = new Auth();
        $user = $auth->getUser();

        if ($user->role == 'Funcionario') {
            $cliente = new User();

            $cliente->username = $_POST['username'];
            if ($_POST['password'] != '') {
                $cliente->password = $_POST['password'];
            } else {
                $cliente->password = $_POST['password'];
            }
            $cliente->email = $_POST['email'];
            $cliente->telefone = $_POST['telefone'];
            $cliente->nif = $_POST['nif'];
            $cliente->morada = $_POST['morada'];
            $cliente->codigopostal = $_POST['codigopostal'];
            $cliente->localidade = $_POST['localidade'];
            $cliente->role = 'Cliente';

            if ($cliente->is_valid()) {
                $cliente->save();
                //redirecionar para o index
                $this->redirectToRoute('user', 'index');
            } else {
                //mostrar vista edit passando o modelo como parâmetro
                $cliente->password = $_POST['password'];
                $this->renderView('user', 'create_cliente', ['cliente' => $cliente]);
            }
        } else {
            $this->redirectToRoute('user', 'create_user');
        }
    }
}
