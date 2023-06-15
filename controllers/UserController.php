<?php

require_once 'Controller.php';
require_once './models/User.php';

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        $this->renderView('user', 'index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'show', ['user' => $user]);
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (is_null($user)) {
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'edit', ['user' => $user]);
        }
    }

    public function update($id)
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

    public function create()
    {
        $this->renderView('user', 'create');
    }

    public function store()
    {
        $user = new User($this->getHTTPPost());
        if ($user->is_valid()) {
            $user->save();
            $this->redirectToRoute('user', 'index');
        } else {
            $this->renderView('user', 'create', ['user' => $user]);
        }
    }

    public function create_user()
    {
        //mostrar a vista create
        if ($this->getRole() == 'admin') {
            $this->renderView('user', 'create_user');
        } else {
            $this->redirectToRoute('user', 'create_cliente');
        }

    }

    public function store_user()
    {
        if ($this->getRole() == 'admin') {
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

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        $this->redirectToRoute('user', 'index');

    }

    public function select()
    {
        $users = User::find('all', array('conditions' => " role LIKE 'Cliente'"));

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('user', 'select', ['users' => $users]);

    }

    public function selectfilter()
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
}
