<form method="POST" action="index.php?c=servico&a=update&id=<?= $servico->id ?>">
    Referencia: <input type="text" name="referencia" value="<?php if (isset($servico)){echo $servico->referencia;}?>">
    <?php if(isset($servico->errors)){ echo $servico->errors->on('referencia'); }?>
    Descricao: <input type="text" name="descricao" value="<?php if (isset($servico)){echo $servico->descricao;}?>">
    <?php if(isset($servico->errors)){ echo $servico->errors->on('descricao'); }?>
    Preço hora: <input type="number" name="precohora" value="<?php if (isset($servico)){echo $servico->precohora;}?>">
    <?php if(isset($servico->errors)){ echo $servico->errors->on('precohora'); }?>
    <label for="ivas">Iva:</label><br>
    <select name="iva_id">
        <?php foreach($ivas as $iva){?>
            <?php if($iva->id == $servico->iva_id) { ?>
                <option value="<?= $iva->id?>" selected><?= $iva->percentagem;
                    ?> </option>
            <?php }else { ?>
                <option value="<?= $iva->id?>"> <?= $iva->percentagem;
                    ?></option>
            <?php }
        } ?>
    </select>
    <input type="submit" value="Alterar">
</form>