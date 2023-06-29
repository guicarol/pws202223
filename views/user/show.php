<h2 class="text-left top-space">User: <?=$user->username?></h2>
<h2 class="top-space"></h2>
<td>
    <a href="index.php?c=home&a=index"
       class="btn btn-info" role="button">Voltar</a>
</td>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th class="text-center"><h3>Email</h3></th>
            <th class="text-center"><h3>Telefone</h3></th>
            <th class="text-center"><h3>Nif</h3></th>
            <th class="text-center"><h3>Morada</h3></th>
            <th class="text-center"><h3>Codigo postal</h3></th>
            <th class="text-center"><h3>Localidade</h3></th>
            <th class="text-center"><h3></h3></th>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><?=$user->email?></td>
                    <td class="text-center"><?=$user->telefone?></td>
                    <td class="text-center"><?=$user->nif?></td>
                    <td class="text-center"><?=$user->morada?></td>
                    <td class="text-center"><?=$user->codigopostal?></td>
                    <td class="text-center"><?=$user->localidade?></td>
            </tbody>
        </table>
    </div>

</div>
