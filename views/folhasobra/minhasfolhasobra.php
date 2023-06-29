<td>
    <a href="index.php?c=home&a=index"
       class="btn btn-info" role="button">Voltar</a>
</td>
<h2 class="text-left top-space">Minhas folhas obra</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
                <th class="text-center"><h3>Data</h3></th>
                <th class="text-center"><h3>Valor total</h3></th>
                <th class="text-center"><h3>Iva total</h3></th>
                <th class="text-center"><h3>Empregado</h3></th>
                <th class="text-center"><h3></h3></th>
            </thead>
            <tbody>

            <?php if($folhaobras != null){
                foreach ($folhaobras as $folhaobra) { ?>
                    <tr>
                        <td class="text-center"><?=
                            date('Y/m/d H:i:s', strtotime($folhaobra->data)); ?></td>
                        <td class="text-center"><?= number_format($folhaobra->valortotal,2); echo'€'; ?></td>
                        <td class="text-center"><?= number_format($folhaobra->ivatotal,2); echo'€'; ?></td>
                        <td class="text-center"><?= $folhaobra->user->username ?></td>
                        <td class="text-center">
                            <?php
                            if($folhaobra->estado == "emitida"){
                                echo '<a target="_blank" href="index.php?c=folhasobra&a=imprimir&folhaobra_id='. $folhaobra->id .'"
                                        class="btn btn-info" role="button">Imprimir</a>';
                            }else{
                                echo '
                                       <a href="index.php?c=folhasobra&a=pagar&folhaobra_id='. $folhaobra->id .'"
                                            class="btn btn-info" role="button">Pagar</a>';
                            }
                            ?>
                        </td>
                        <?php } ?>
                    </tr>
            <?php } else { ?>
                <tr>
                    <td colspan="6" class="text-center "> Não tem nenhuma folha de obra</td>
                </tr
            <?php }  ?>
            </tbody>
        </table>
    </div>
</div>