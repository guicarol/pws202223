<div class="row">
    <div class="col">
        <form action="index.php?c=servico&a=escolha_servico&folhaobra_id=<?=$folhaobra_id?>" method="post">
            <div class="input-group mb-3">
                <input type="search" class="form-control" name="pesquisa" placeholder="Pesquisar serviço pela referência" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-secondary " type="button">&#128269;</button>
                </div>
            </div>
        </form>
    </div>
</div>
<h3 class="text-left top-space">Lista de serviços</h3>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th class="text-center"><h3>Referência</h3></th>
            <th class="text-center"><h3>Descrição</h3></th>
            <th class="text-center"><h3>Preço</h3></th>
            <th class="text-center"><h3>Iva</h3></th>
            <th class="text-center"><h3></h3></th>
            </thead>
            <tbody>
            <?php foreach ($servicos as $servico) { ?>
                <tr>
                    <td class="text-center"><?=$servico->referencia?></td>
                    <td class="text-center"><?=$servico->descricao?></td>
                    <td class="text-center"><?=$servico->precohora?>€</td>
                    <td class="text-center"><?= $servico->iva->percentagem?> %</td>
                    <td class="text-center">
                        <a href="index.php?c=linhasobra&a=create&folhaobra_id=<?=$folhaobra_id?>&servico_id=<?=$servico->id?>"
                           class="btn btn-info" role="button">Adicionar serviço</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>