<table class="table tablestriped">
    <form action="index.php?c=user&a=selectfilter" method="post">
        <div class="input-group mb-3">
            <input type="search" class="form-control" name="pesquisa" placeholder="Pesquisar Cliente pelo username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary " type="button">&#128269;</button>
            </div>
        </div>
    </form>
    <tbody>
    <?php foreach ($users as $user){ ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->username ?></td>

            <td>
                <a href="index.php?c=folhasobra&a=store&id_cliente=<?= $user->id ?>"
                   class="btn btn-info" role="button">Selecionar</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>