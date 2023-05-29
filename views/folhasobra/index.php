<h2 class="text-left top-space">Fatura Index</h2>
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
                        <td class="text-center"><?= $folhasobra->user_empregado->username ?></td>
                        <td class="text-center"><?= $folhasobra->user_cliente->username ?></td>
                        <td class="text-center">
                            <?php
                                if($folhasobra->estado == "em lançamento"){
                                    echo '<a href="router.php?c=linhasfatura&a=create&id_fatura='. $folhasobra->id .'"
                                            class="btn btn-info" role="button">Adicinar produto</a>';
                                }else if($folhasobra->estado == "emitida"){
                                    echo '<a target="_blank" href="router.php?c=fatura&a=imprimir&id_fatura='. $folhasobra->id .'"
                                            class="btn btn-info" role="button">Imprimir</a>
                                          <a href="router.php?c=fatura&a=show&id_fatura='. $folhasobra->id .'"
                                            class="btn btn-info" role="button">show</a>';
                                }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>