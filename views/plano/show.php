<h1>Plano de Pagamentos</h1>
<h4>Valor a contrair: €<?= $this->getHTTPPostParam('credito');; ?></h4>
<h4>Número de Prestações: <?= $numPrest; ?></h4>
<h4>Data do empréstimo: <?= \Carbon\Carbon::now()->format('d-m-Y'); ?></h4>

<table border="1">
    <tr style="background-color: blue;">
        <th>Nº Prest</th>
        <th>Data</th>
        <th>Valor Prest.</th>
        <th>Valor em Divida</th>
    </tr>
    <?php
    $rows = count($planoPrestacoes);
    $cols = count($planoPrestacoes[0]);
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        $numdePrest = $i + 1;
        echo "<td style='background-color: blue'>" . $numdePrest . "</td>";
        for ($j = 0; $j < $cols; $j++) {
            echo "<td>" . $planoPrestacoes[$i][$j] . "</td>";
        }
        echo "</tr>";
    }

    ?>
</table>
<p>O valor da despesa é de <?= $despesa ?> e encontra-se incluida na primeira
    prestação <?= \Carbon\Carbon::now()->format('d-m-Y') ?></p>

<a href="index.php?c=auth&a=logout">Logout</a>