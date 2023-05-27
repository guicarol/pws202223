<?php

class CalculadoraPlano{
    function calculaPlano($credito, $numPrest)
    {
        $valorPrestMensal = round($credito / $numPrest, 2);
        $despesa = 40;

        for ($i = 0; $i < $numPrest; $i++) {
            $dataInicial = \Carbon\Carbon::now();
            $credito -= $valorPrestMensal;
            $dt = $dataInicial->addMonths($i);
            $planoPrestacoes[$i][0] = $dt->format('d-m-Y');
            if ($i == 0) {
                $planoPrestacoes[$i][1] = $valorPrestMensal + $despesa;
            } else {
                $planoPrestacoes[$i][1] = $valorPrestMensal;
            }
            $planoPrestacoes[$i][2] = round($credito, 2);
        }
        return $planoPrestacoes;
    }
}


?>