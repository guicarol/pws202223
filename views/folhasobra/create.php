<table class="table tablestriped">

    <tbody>
    <?php foreach ($user as $user){ ?>
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
