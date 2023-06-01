<h2 class="text-left top-space">Empresa Edit</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <form action="./index.php?c=empresa&a=update&id=<?=$empresa->id?>" method="POST">
            <label for="designacaosocial">Designação Social:</label><br>
            <input class="input-forms" type="text" name="designacaosocial" value="<?=$empresa->designacaosocial?>"><br>
            <p><?php if(isset($empresa->errors)){ echo $empresa->errors->on('designacaosocial'); }?></p>
            <p></p>
            <label for="email">Email:</label><br>
            <input class="input-forms" type="text" name="email" value="<?=$empresa->email?>"><br>
            <p><?php if(isset($empresa->errors)){ echo $empresa->errors->on('email'); }?></p>
            <p></p>
            <label for="telefone">telefone:</label><br>
            <input class="input-forms" type="text" name="telefone" value="<?=$empresa->telefone?>"><br>
            <p><?php if(isset($empresa->errors)){ echo $empresa->errors->on('telefone'); }?></p>
            <p></p>
            <label for="nif">NIF:</label><br>
            <input class="input-forms" type="text" name="nif" value="<?=$empresa->nif?>"><br>
            <p><?php if(isset($empresa->errors)){ echo $empresa->errors->on('nif'); }?></p>
            <p></p>
            <label for="morada">Morada:</label><br>
            <input class="input-forms" type="text" name="morada" value="<?=$empresa->morada?>"><br>
            <p><?php if(isset($empresa->errors)){ echo $empresa->errors->on('morada'); }?></p>
            <p></p>
            <label for="codigopostal">Codigo-Postal:</label><br>
            <input class="input-forms" type="text" name="codigopostal" value="<?=$empresa->codigopostal?>"><br>
            <p><?php if(isset($empresa->errors)){ echo $empresa->errors->on('codigopostal'); }?></p>
            <p></p>
            <label for="localidade">Localidade:</label><br>
            <input class="input-forms" type="text" name="localidade" value="<?=$empresa->localidade?>"><br>
            <p><?php if(isset($empresa->errors)){ echo $empresa->errors->on('localidade'); }?></p>
            <label for="capitalsocial">Capital social:</label><br>
            <input class="input-forms" type="text" name="capitalsocial" value="<?=$empresa->capitalsocial?>"><br>
            <p><?php if(isset($empresa->errors)){ echo $empresa->errors->on('capitalsocial'); }?></p>
            <p></p>

            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
