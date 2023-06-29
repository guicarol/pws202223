<h2 class="text-left top-space">Novo Utilizador</h2>
<h2 class="top-space"></h2>
<td>
    <a href="index.php?c=user&a=index"
       class="btn btn-info" role="button">Voltar</a>
</td>
<div class="row">
    <div class="col-sm-12">
        <form action="./index.php?c=folhasobra&a=updateestado&folhaobra_id=<?=$folhaobra_id ?>" method="POST">
            <br>
            <label>Proprietário:</label>
            <input class="input-forms" type="text"  >
            <p>
            </p><br>
            <label>Cartão:</label>
            <input class="input-forms" type="number"  >
            <p>
            </p><br>
            <label>Código:</label>
            <input class="input-forms" type="number"  >
            <p>
            </p><br>
            <label>Validade:</label>
            <input class="input-forms" type="number"  >
            <p>
            </p><br>


            <input type="submit" value="Criar Cliente">
        </form>
    </div>
</div>
