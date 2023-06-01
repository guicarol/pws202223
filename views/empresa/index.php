<h2 class="text-left top-space">Empresa Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
                <th class="text-center"><h4>Designação Social</h4></th>
                <th class="text-center"><h4>Email</h4></th>
                <th class="text-center"><h4>Telefone</h4></th>
                <th class="text-center"><h4>Nif</h4></th>
                <th class="text-center"><h4>Morada</h4></th>
                <th class="text-center"><h4>Codigo Postal</h4></th>
                <th class="text-center"><h4>Localidade</h4></th>
                <th class="text-center"><h4>Capital Social</h4></th>
            </thead>
            <tbody>
            <?php foreach ($empresas as $empresa) { ?>
                    <tr>
                        <td><?=$empresa->designacaosocial?></td>
                        <td><?=$empresa->email?></td>
                        <td><?=$empresa->telefone?></td>
                        <td><?=$empresa->nif?></td>
                        <td><?=$empresa->morada?></td>
                        <td><?=$empresa->codigopostal?></td>
                        <td><?=$empresa->localidade?></td>
                        <td><?=$empresa->capitalsocial?></td>
                        <td>
                            <a href="index.php?c=empresa&a=edit&id=<?=$empresa->id ?>"
                               class="btn btn-info" role="button">Edit</a>
                        </td>
                    </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>