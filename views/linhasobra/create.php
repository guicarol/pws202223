
<h2 class="text-left top-space">Fatura Create</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">

        <form method="POST" action=<?php echo'./index.php?c=linhasobra&a=store&folhaobra='. $folhaobra->id?>
            <br>
            <div class="boxer">
                <div class="row"id="row1">
                    <div class="col-3">
                    <label for="cliente_id">Nome do cliente:</label>
                    <input type="text" name="cliente_id" class="form-control" value="<?= $folhaobra->user->username?>" disabled>
                    <br>
                    </div>
                </div>
            </div>

                <div class="card">
                    <div class="card-header">
                        <h4>Produtos</h4>
                    </div>
                    <div class="card-body">
                        <h5>Lista de produtos</h5>
                        <br>
                        <div id="product_form">
                            <div class="row">
                                <div class="col-2">
                                    <p></p>
                                    <button type="button" class="btn btn-sm btn-light shadow-sm">
                                        <a class="btn" href="./index.php?c=servico&a=escolher_produto&id_folhaobra=<?=$folhaobra->id?>">
                                            Procurar Produto
                                        </a>
                                    </button>
                                </div>
                                <div class="col">
                                    <label>Referencia do produto</label>
                                    <?php if(isset($servico)){?>
                                        <input type="text" name="referencia" class="form-control" value="<?=$servico->referencia?>">
                                        <p><?php
                                            if(isset($naoproduto) and $naoproduto) {
                                                echo 'Produto inexistente';
                                            }
                                            if(isset($linhafatura->errors)) {
                                                if (is_array($linhafatura->errors->on('produto_id'))) {
                                                    foreach ($linhafatura->errors->on('produto_id') as $error) {
                                                        echo $error .'<br>';
                                                    }
                                                } else {
                                                    echo $linhafatura->errors->on('produto_id');

                                                }
                                            }
                                            ?></p>
                                    <?php }else{ ?>
                                        <input type="text" name="referencia" class="form-control" value="">
                                        <p><?php
                                            if(isset($naoproduto) and $naoproduto) {
                                                echo 'Produto inexistente';
                                            }
                                            if(isset($linhafatura->errors)) {
                                                if (is_array($linhafatura->errors->on('produto_id'))) {
                                                    foreach ($linhafatura->errors->on('produto_id') as $error) {
                                                        echo $error .'<br>';
                                                    }
                                                } else {
                                                    echo $linhafatura->errors->on('produto_id');

                                                }
                                            }
                                            ?></p>
                                    <?php }?>

                                </div>
                                <div class="col-2">
                                    <label>Quantidade</label>
                                    <input type="number" name="quantidade" class="form-control" value="1" min="1">
                                    <p><?php
                                        if(isset($servico->errors)) {
                                            if (is_array($servico->errors->on('stock'))) {
                                                foreach ($servico->errors->on('stock') as $error) {
                                                    echo $error .'<br>';
                                                }
                                            } else {
                                                echo $servico->errors->on('stock');

                                            }
                                        }
                                        ?></p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="submit" class="btn btn-dark float-end mt-2" value="adicionar produto">
                        <br>
                        <br><br><br>
                        </form>

                        <?php if($linhasfatura != null){foreach ($linhasfatura as $linhafatura) { ?>
                            <div class="row">
                                <div class="col">
                                    <label>Descrição do produto</label>
                                    <input type="text" class="form-control" value="<?= $linhafatura->produto->descricao ?>" disabled>
                                </div>
                                <div class="col">
                                    <label>Referencia</label>
                                    <input type="text" class="form-control" value="<?= $linhafatura->produto->referencia ?>" disabled>
                                </div>
                                <div class="col">
                                    <label>Valor</label>
                                    <input type="text" class="form-control" value="<?= number_format($linhafatura->valor, 2); ?>€" disabled>
                                </div>
                                <div class="col">
                                    <label>Valor Iva</label>
                                    <input type="text" class="form-control" value="<?= number_format($linhafatura->valoriva, 2);?>€" disabled>
                                </div>
                                <div class="col">
                                    <label>Quantidade</label>
                                    <input type="number" class="form-control" value="<?= $linhafatura->quantidade ?>" disabled>
                                </div>
                                <div class="col">
                                    <p></p>
                                    <?php
                                        echo '<a href="router.php?c=linhasfatura&a=delete&id='. $linhafatura->id .'"
                                            class="btn btn-info" role="button">Apagar</a>';

                                    ?>
                                </div>
                            </div>
                        <?php } }?>
                    </div>
            </div>
            <br>

            <div class="boxer">
                <div class="row end" id="row1">
                    <div class="col-3">
                        <label for="valortotal">Valor total:</label>
                        <input type="text" name="valortotal" class="form-control" value="<?php if(isset($folhaobra)) { echo number_format($folhaobra->valortotal,2); }?>€" disabled>
                    </div>

                    <div class="col-3">
                        <label for="ivatotal">Iva total:</label>
                        <input type="text" name="ivatotal" class="form-control" value="<?php if(isset($folhaobra)) { echo number_format($folhaobra->ivatotal,2); }?>€" disabled>
                        <br>
                    </div>

                </div>
            </div>
            <?php if($folhaobra->valortotal > 0){?>
                <div class="row">
                    <div class="col-sm-10"></div>
                    <div class="col-sm-2">
                        <a class="nav-link" href="./router.php?c=fatura&a=updateestado&id=<?= $folhaobra->id ?>">
                            <button class="btn w-100 p-2 btn-info">Emitir fatura</button>
                        </a>
                    </div>
                </div>
            <?php }?>
            <br>
    </div>
    <br>
</div>