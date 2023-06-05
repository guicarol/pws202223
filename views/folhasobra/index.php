<h2 class="text-left top-space">Folha obra Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
                <th class="text-center"><h3>Data</h3></th>
                <th class="text-center"><h3>Valor total</h3></th>
                <th class="text-center"><h3>Iva total</h3></th>
                <th class="text-center"><h3>Estado</h3></th>
                <th class="text-center"><h3>Empregado</h3></th>
                <th class="text-center"><h3>Cliente</h3></th>
            </thead>
            <tbody>
                <?php foreach ($folhasobras as $folhasobra) { ?>
                    <tr>
                        <td class="text-center"><?= date('Y/m/d H:i:s', strtotime($folhasobra->data)); ?></td>
                        <td class="text-center"><?= number_format($folhasobra->valortotal,2); echo'€'; ?></td>
                        <td class="text-center"><?= number_format($folhasobra->ivatotal,2); echo'€'; ?></td>
                        <td class="text-center"><?= $folhasobra->estado ?></td>
                        <td class="text-center"><?= $folhasobra->user->username ?></td>
                        <td class="text-center"><?= $folhasobra->user->username ?></td>
                        <td class="text-center">
                            <?php
                                if($folhasobra->estado == "em lançamento"){
                                    echo '<a href="index.php?c=linhasobra&a=create&folhaobra_id='. $folhasobra->id .'&servico_id=10"
                                            class="btn btn-info" role="button">Adicinar produto</a>';
                                }else if($folhasobra->estado == "emitida"){
                                    echo '<a target="_blank" href="index.php?c=linhasobra&a=imprimir&folhaobra_id='. $folhasobra->id .'&servico_id='.$folhasobra->sevico->id.'"
                                            class="btn btn-info" role="button">Imprimir</a>
                                          <a href="index.php?c=linhasobra&a=show&folhaobra_id   ='. $folhasobra->id .'"
                                            class="btn btn-info" role="button">show</a>';
                                }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="col-sm-6">
            <h3>Emitir </h3>
            <p>
                <a href="index.php?c=folhasobra&a=create" class="btn btn-info"
                   role="button">New</a>
            </p>
        </div>
    </div>
</div>