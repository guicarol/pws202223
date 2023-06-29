<h2 class="text-left top-space">Users Index</h2>
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
            <th><h3>Username</h3></th>
            <th><h3>NIF</h3></th>
            <th><h3>Email</h3></th>
            <th><h3>Role</h3></th>
            </thead>
            <tbody>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->username ?></td>
                    <td><?= $user->nif ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->role ?></td>
                    <td>
                        <a href="index.php?c=user&a=show&id=<?= $user->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=user&a=edit&id=<?= $user->id ?>"
                           class="btn btn-info" role="button">Edit</a>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar um novo Cliente</h3>
        <p>
            <a href="index.php?c=user&a=create_cliente" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div>