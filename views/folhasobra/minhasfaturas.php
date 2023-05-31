<h2 class="text-left top-space">Minhas faturas</h2>
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
                        <td class="text-center"><?= $folhaobra = $folhaobra;
                            date('Y/m/d H:i:s', strtotime($folhaobra->data)); ?></td>
                        <td class="text-center"><?= number_format($folhaobra->valortotal,2); echo'€'; ?></td>
                        <td class="text-center"><?= number_format($folhaobra->ivatotal,2); echo'€'; ?></td>
                        <td class="text-center"><?= $folhaobra->user_empregado->username ?></td>
                        <td class="text-center">
                            <?php
                            if($folhaobra->estado == "emitida"){
                                echo '<a target="_blank" href="index.php?c=folhaobra&a=imprimir&id_fatura='. $folhaobra->id .'"
                                        class="btn btn-info" role="button">Imprimir</a>
                                       <a href="index.php?c=folhaobra&a=show&id_fatura='. $folhaobra->id .'"
                                            class="btn btn-info" role="button">show</a>';
                            }
                            ?>
                        </td>
                        <?php } ?>
                    </tr>
            <?php } else { ?>
                <tr>
                    <td colspan="6" class="text-center "> Não tem nenhuma fatura</td>
                </tr
            <?php }  ?>
            </tbody>
        </table>
    </div>
</div>