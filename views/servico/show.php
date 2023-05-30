<h2 class="text-left top-space">Book Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th><h3>Referência</h3></th>
            <th><h3>Descrição</h3>
            <th><h3>Preço hora</h3>
            <th><h3>Iva</h3></th>

            </th>
            </thead>
            <tbody>
            <tr>
                <td><?= $servico->referencia ?></td>
                <td><?= $servico->descricao ?></td>
                <td><?= $servico->precohora ?>€</td>
                <td><?= $servico->iva->percentagem ?> %</td>

            </tr>

            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=servico&a=index" class="btn btn-info"
               role="button">VOLTAR</a>
        </p>
    </div>
</div> <!-- /row -->