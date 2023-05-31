<?php

require_once 'controllers/AuthController.php';

class FolhaobraController extends AuthController
{
    public function __construct()
    {
        $this->authenticationFilter();
    }

    public function index()
    {
        $folhasobras=Folhaobra::all();

        $this->renderView('folhasobra', 'index',['folhasobras'=>$folhasobras]); //chama a vista index do FolhaobraController

    }

    public function create()
    {

            //mostrar a vista create
            $cliente = User::all();
            $this->renderView('folhasobra','create', ['user' => $cliente]);

    }

    public function store($id_cliente)
    {
        if($this->GetRole() != 'cliente'){
            $folhaobra = new Folhaobra();

            $folhaobra->estado = "em lançamento";
            $folhaobra->valortotal = 0;
            $folhaobra->ivatotal = 0;
            $folhaobra->user_id = $_SESSION['id'];
            $folhaobra->cliente_id = $id_cliente;

            if($folhaobra->is_valid()){
                $folhaobra->save();
                //$this->redirectToRoute('linhasfatura', 'create',['folhaobra' => $folhaobra]);
                $this->redirectToRoute('linhasobra', "create",['id_folhaobra'=>$folhaobra->id,'id_servico'=>0]);
            } else {
                //mostrar vista edit passando o modelo como parâmetro
                $this->renderView('folhaobra','create', ['folhaobra' => $folhaobra]);
            }
        }else {
            $this->redirectToRoute('auth', 'logout');
        }
    }

    public function show()
    {
        $credito = $this->getHTTPPostParam('credito');
        $numPrest = $this->getHTTPPostParam('nprest');
        $despesa = 40;

        $calculadoraPlano = new CalculadoraPlano();
        $planoPrestacoes = $calculadoraPlano->calculaPlano($credito, $numPrest);

        $this->renderView('plano', 'show', ['planoPrestacoes' => $planoPrestacoes, 'despesa' => $despesa, 'numPrest' => $numPrest]);

    }
}