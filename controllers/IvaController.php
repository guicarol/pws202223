<?php

require_once 'AuthController.php';

class IvaController extends AuthController
{

    public function __construct()
    {
        $this->authorizationFilter(['Funcionario','Admin']);

    }

    public function index()
    {
        $ivas = Iva::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('iva', 'index', ['ivas' => $ivas]);
    }

    public function show($id)
    {
        $iva = Iva::find($id);
        if (is_null($iva)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('iva','show', ['iva' => $iva]);
        }
    }

    public function create()
    {
        $this->renderView('iva','create');
    }

    public function store()
    {

        $iva = new Iva($this-> getHTTPPost());

        if($iva->is_valid()){
            $iva->save();

            $this->redirectToRoute('iva','index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('iva','create', ['iva' => $iva]);
        }
    }

    public function edit($id)
    {
        $iva = Iva::find($id);

        if (is_null($iva)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('iva','edit', [ 'iva' => $iva]);
        }
    }

    public function update($id)
    {
        $iva = Iva::find($id);
        $iva->update_attributes($this-> getHTTPPost());


        if($iva->is_valid()){
            $iva->save();
            //redirecionar para o index
            $ivas = Iva::all();
            $this->renderView('iva','index', ['ivas' => $ivas]);
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('iva','edit', ['iva' => $iva]);
        }
    }

}
