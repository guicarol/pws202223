<h2 class="text-left top-space">Folhaobra Create</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">

        <div class="boxer">
            <div class="row" id="row1">
                <div class="col-3">
                    <h4>Empresa: <?= $empresa->designacaosocial ?>

                        <br>
                </div>
                <p>
                    <a href="index.php?c=user&a=select" class="btn btn-info"
                       role="button">Cliente</a>
                </p>
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

                        <div class="col">
                            <label>Referencia do serviço</label>

                        </div>
                        <div class="col-2">
                            <label>Quantidade</label>
                            <input type="number" name="quantidade" class="form-control" value="1" min="1">

                        </div>
                        <div class="col-2">
                            <label>Preço hora</label>

                            <input type="number" name="valor" class="form-control"
                                   value="">

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br><br><br>
                </form>

            </div>
        </div>
        <br>



        <br>
    </div>