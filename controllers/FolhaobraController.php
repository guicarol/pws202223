<?php

require_once 'controllers/Controller.php';

class FolhaobraController extends Controller
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