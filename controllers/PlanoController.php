<?php

require_once 'models/CalculadoraPlano.php';
require_once 'controllers/Controller.php';

class PlanoController extends Controller
{
    public function __construct()
    {
        $this->authenticationFilter();
    }

    public function index()
    {

        $this->renderView('plano', 'index'); //chama a vista index do PlanoController

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