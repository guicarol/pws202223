<?php

require_once 'controllers/AuthController.php';

class FolhaobraController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['Funcionario', 'Cliente', 'Admin']);

    }

    public function index()
    {
        $folhasobras = Folhaobra::all();


        $this->renderView('folhasobra', 'index', ['folhasobras' => $folhasobras]); //chama a vista index do FolhaobraController

    }

    public function create()
    {
        #find empresa

        $empresa = Empresas::find(1);

        //mostrar a vista create
        $this->renderView('folhasobra', 'create', ['empresa' => $empresa]);

    }

    public function store($id_cliente)
    {
//        $auth=new Auth();
        $folhaobra = new Folhaobra();
        $auth = new Auth();
        $folhaobra->data = \Carbon\Carbon::now();
        $folhaobra->estado = "em lançamento";
        $folhaobra->valortotal = 0;
        $folhaobra->ivatotal = 0;
        $folhaobra->user_id = $auth->getUser()->id;
        $folhaobra->cliente_id = $id_cliente;

        if ($folhaobra->is_valid()) {
            $folhaobra->save();
            //$this->redirectToRoute('linhasobra', 'create',['folhaobra' => $folhaobra]);
            $this->redirectToRoute('linhasobra', "index", ['folhaobra_id' => $folhaobra->id]);
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('folhaobra', 'create', ['folhaobra' => $folhaobra]);
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

    public function updatestado($id)
    {
        $folhaobra = Folhaobra::find([$id]);

        $folhaobra->estado = "emitida";

        if ($folhaobra->is_valid()) {
            $folhaobra->save();
            //redirecionar para o index
            $faturas = Folhaobra::all();
            $this->renderView('folhaobra', 'index', ['faturas' => $faturas]);
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('folhaobra', 'edit', ['folhaobra' => $folhaobra]);
        }

    }

    public function imprimir($folhaobra_id)
    {
        $folhaobra = Folhaobra::find($folhaobra_id);
        $linhasobra = Linhaobra::find('all', array('conditions' => "folhaobra_id LIKE '%$folhaobra_id'"));
        $empresa=Empresas::find(1);

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('folhasobra', 'imprimir', ['folhaobra' => $folhaobra,'linhasobra'=>$linhasobra,'empresa'=>$empresa]);

    }

    public function minhasfolhasobra()
    {
        $auth = new Auth();
        $user = $auth->getUser();


        $folhaobras = Folhaobra::find('all');

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('folhasobra', 'minhasfolhasobra', ['folhaobras' => $folhaobras]);


    }
}