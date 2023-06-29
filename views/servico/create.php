
<td>
    <a href="index.php?c=servico&a=index"
       class="btn btn-info" role="button">Voltar</a>
</td>
<form method="POST" action="index.php?c=servico&a=store">
    Referencia: <input type="text" name="referencia" value="<?php if (isset($servico)) {
        echo $servico->referencia;
    } ?>">
    Descricao: <input type="text" name="descricao" value="<?php if (isset($servico)) {
        echo $servico->descricao;
    } ?>">
    Preço hora: <input type="number" name="precohora" value="<?php if (isset($servico)) {
        echo $servico->precohora;
    } ?>">

    <?php if (isset($servico->errors)) {
        echo $servico->errors->on('referencia');
    } ?>
    <p><?php
        if (isset($servico->errors)) {
            if (is_array($servico->errors->on('precohora'))) {
                foreach ($servico->errors->on('precohora') as $error) {
                    echo $error . '<br>';
                }
            } else {
                echo $servico->errors->on('precohora');
            }
        }
        ?>
    </p>

    <label for="iva_id">Iva:</label>
    <select name="iva_id">
        <?php foreach($ivas as $iva){?>
            <option value="<?= $iva->id?>"> <?= $iva->percentagem; ?> %</option>
        <?php } ?>
    </select>
    <input type="submit" value="Criar">
</form>