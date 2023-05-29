<h2 class="text-left top-space">Book Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th><h3>Id</h3></th>
            <th><h3>Referência</h3></th>
            <th><h3>Descricao</h3>
            </th>
            <th><h3>Preço hora</h3>

            <th><h3>User Actions</h3></th>
            </thead>
            <tbody>
            <?php foreach ($servicos as $servico) { ?>
                <tr>
                    <td><?= $servico->id ?></td>
                    <td><?= $servico->referencia ?></td>
                    <td><?= $servico->descricao ?></td>
                    <td><?= $servico->precohora ?></td>
                    <td><?= $servico->iva->percentagem ?></td>
                    <td>
                        <a href="index.php?c=book&a=show&id=<?= $servico->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=book&a=edit&id=<?= $servico->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=chapter&a=index&id=<?= $servico->id ?>"
                           class="btn btn-info" role="button">Chapter</a>
                        <a href="index.php?c=book&a=delete&id=<?= $servico->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new Book</h3>
        <p>
            <a href="index.php?c=servico&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->