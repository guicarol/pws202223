<h2 class="text-left top-space">Folhaobra Create</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">

        <div class="boxer">
            <div class="row" id="row1">
                <div class="col-3">
                    <label for="cliente_id">Nome do cliente:</label>
                    <input type="text" name="cliente_id" class="form-control"
                           value="<?= $folhaobra->cliente->username ?>" disabled>
                    <br>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4>Serviços</h4>
            </div>
            <div class="card-body">
                <h5>Lista de serviços</h5>
                <br>
                <div id="product_form">
                    <div class="row">
                        <div class="col-2">
                            <p></p>
                            <button type="button" class="btn btn-sm btn-light shadow-sm">
                                <a class="btn"
                                   href="./index.php?c=servico&a=escolha_servico&folhaobra_id=<?= $folhaobra->id ?>">
                                    Procurar Serviço
                                </a>
                            </button>
                        </div>
                        <div class="col">
                            <form method="POST"
                                  action=<?php echo 'index.php?c=linhasobra&a=store&folhaobra_id=' . $folhaobra->id . '&servico_id=' . $servico->id ?>            <br>

                                <label>Referencia do serviço</label>
                                <?php if (isset($servico)) { ?>
                                    <input type="text" name="" class="form-control"  value="<?= $servico->referencia ?>">
                                    <p><?php
                                        if (isset($naoservico) and $naoservico) {
                                            echo 'Serviço inexistente';
                                        }
                                        if (isset($linhasobra->errors)) {
                                            if (is_array($linhasobra->errors->on('serviço_id'))) {
                                                foreach ($linhasobra->errors->on('servico_id') as $error) {
                                                    echo $error . '<br>';
                                                }
                                            } else {
                                                echo $linhasobra->errors->on('servico_id');

                                            }
                                        }
                                        ?></p>
                                <?php } ?>


                        </div>
                        <div class="col-2">
                            <label>Quantidade</label>
                            <input type="number" name="quantidade" class="form-control" value="1" min="1">
                            <p><?php
                                if (isset($servico->errors)) {
                                    if (is_array($servico->errors->on('stock'))) {
                                        foreach ($servico->errors->on('stock') as $error) {
                                            echo $error . '<br>';
                                        }
                                    } else {
                                        echo $servico->errors->on('stock');

                                    }
                                }
                                ?></p>
                        </div>
                        <div class="col-2">
                            <label>Preço hora</label>
                            <?php if (isset($servico)) { ?>
                                <input type="number" name="" class="form-control"  value="<?= $servico->precohora ?>">
                                <p><?php
                                    if (isset($naoservico) and $naoservico) {
                                        echo 'Serviço inexistente';
                                    }
                                    if (isset($linhasobra->errors)) {
                                        if (is_array($linhasobra->errors->on('serviço_id'))) {
                                            foreach ($linhasobra->errors->on('servico_id') as $error) {
                                                echo $error . '<br>';
                                            }
                                        } else {
                                            echo $linhasobra->errors->on('servico_id');

                                        }
                                    }
                                    ?></p>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" class="btn btn-dark float-end mt-2" value="adicionar serviço">
                <br>
                <br><br><br>
                </form>

                <?php if ($folhaobra->linhaobras != null) {
                    foreach ($folhaobra->linhaobras as $linhasobra) { ?>
                        <div class="row">
                            <div class="col">
                                <label>Descrição do serviço</label>
                                <input type="text" class="form-control" value="<?= $linhasobra->servico->descricao ?>"
                                       disabled>
                            </div>
                            <div class="col">
                                <label>Referencia</label>
                                <input type="text" class="form-control" value="<?= $linhasobra->servico->referencia ?>"
                                       disabled>
                            </div>
                            <div class="col">
                                <label>Valor</label>
                                <input type="text" class="form-control"
                                       value="<?= number_format($linhasobra->valor, 2); ?>€" disabled>
                            </div>
                            <div class="col">
                                <label>Valor Iva</label>
                                <input type="text" class="form-control"
                                       value="<?= number_format($linhasobra->servico->iva->percentagem, 2); ?>%"
                                       disabled>
                            </div>
                            <div class="col">
                                <label>Quantidade</label>
                                <input type="number" class="form-control" value="<?= $linhasobra->quantidade ?>"
                                       disabled>
                            </div>
                            <div class="col">
                                <p></p>
                                <?php
                                echo '<a href="index.php?c=linhasobra&a=delete&id=' . $linhasobra->id . '"
                                            class="btn btn-info" role="button">Apagar</a>';

                                ?>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
        <br>

        <div class="boxer">
            <div class="row end" id="row1">
                <div class="col-3">
                    <label for="valortotal">Valor total:</label>
                    <input type="text" name="valortotal" class="form-control" value="<?php if (isset($folhaobra)) {
                        echo number_format($folhaobra->valortotal, 2);
                    } ?>€" disabled>
                </div>

                <div class="col-3">
                    <label for="ivatotal">Iva total:</label>
                    <input type="text" name="ivatotal" class="form-control" value="<?php if (isset($folhaobra)) {
                        echo number_format($folhaobra->ivatotal, 2);
                    } ?>€" disabled>
                    <br>
                </div>

            </div>
        </div>
        <?php if ($folhaobra->valortotal > 0) { ?>
            <div class="row">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <a class="nav-link" href="./index.php?c=folhaobra&a=updateestado&id=<?= $folhaobra->id ?>">
                        <button class="btn w-100 p-2 btn-info">Emitir folha obra</button>
                    </a>

                </div>
            </div>
        <?php } ?>
        <br>
    </div>
    <br>
</div>