<h2 class="text-left top-space">Serviço Index</h2>
<h2 class="top-space"></h2>
<td>
    <a href="index.php?c=home&a=index"
       class="btn btn-info" role="button">Voltar</a>
</td>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th><h3>Id</h3></th>
            <th><h3>Referência</h3></th>
            <th><h3>Descricao</h3>
            </th>
            <th><h3>Preço hora</h3>

            <th><h3>Iva</h3></th>
            </thead>
            <tbody>
            <?php  foreach ($servicos as $servico) { ?>
                <tr>
                    <td><?= $servico->id ?></td>
                    <td><?= $servico->referencia ?></td>
                    <td><?= $servico->descricao ?></td>
                    <td><?= $servico->precohora ?> €</td>
                    <td><?= $servico->iva->percentagem ?> %</td>
                    <td>
                        <a href="index.php?c=servico&a=show&id=<?= $servico->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=servico&a=edit&id=<?= $servico->id ?>"
                           class="btn btn-info" role="button">Edit</a>

                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new Serviço</h3>
        <p>
            <a href="index.php?c=servico&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->