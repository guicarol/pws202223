<h2 class="text-left top-space">Criar Empresa</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <form action="./index.php?c=empresa&a=store" method="POST">

            <label for="designacaosocial">Designação Social:</label><br>
            <input class="input-forms" min="0" type="text" name="designacaosocial" value="<?php if(isset($empresas)) { echo $empresas->designacaosocial; }?>">
            <p><?php
                if(isset($empresas->errors)) {
                    if (is_array($empresas->errors->on('designacaosocial'))) {
                        foreach ($empresas->errors->on('designacaosocial') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $empresas->errors->on('designacaosocial');
                    }
                }
                ?>
            </p>

            <label for="email">Email:</label><br>
            <input class="input-forms" min="0" type="email" name="email" value="<?php if(isset($empresas)) { echo $empresas->email; }?>">
            <p><?php
                if(isset($empresas->errors)) {
                    if (is_array($empresas->errors->on('email'))) {
                        foreach ($empresas->errors->on('email') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $empresas->errors->on('email');
                    }
                }
                ?>
            </p>

            <label for="telefone">Telefone:</label><br>
            <input class="input-forms" min="0" type="number" name="telefone" value="<?php if(isset($empresas)) { echo $empresas->telefone; }?>">
            <p><?php
                if(isset($empresas->errors)) {
                    if (is_array($empresas->errors->on('telefone'))) {
                        foreach ($empresas->errors->on('telefone') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $empresas->errors->on('telefone');
                    }
                }
                ?>
            </p>

            <label for="nif">Nif:</label><br>
            <input class="input-forms" min="0" type="number" name="nif" value="<?php if(isset($empresas)) { echo $empresas->nif; }?>">
            <p><?php
                if(isset($empresas->errors)) {
                    if (is_array($empresas->errors->on('nif'))) {
                        foreach ($empresas->errors->on('nif') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $empresas->errors->on('nif');
                    }
                }
                ?>
            </p>

            <label for="morada">Morada:</label><br>
            <input class="input-forms" min="0" type="text" name="morada" value="<?php if(isset($empresas)) { echo $empresas->morada; }?>">
            <p><?php
                if(isset($empresas->errors)) {
                    if (is_array($empresas->errors->on('morada'))) {
                        foreach ($empresas->errors->on('morada') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $empresas->errors->on('morada');
                    }
                }
                ?>
            </p>

            <label for="codigopostal">Codigo Postal:</label><br>
            <input class="input-forms" min="0" type="text" name="codigopostal" value="<?php if(isset($empresas)) { echo $empresas->codigopostal; }?>">
            <p><?php
                if(isset($empresas->errors)) {
                    if (is_array($empresas->errors->on('codigopostal'))) {
                        foreach ($empresas->errors->on('codigopostal') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $empresas->errors->on('codigopostal');
                    }
                }
                ?>
            </p>

            <label for="localidade">Localidade:</label><br>
            <input class="input-forms" min="0" type="text" name="localidade" value="<?php if(isset($empresas)) { echo $empresas->localidade; }?>">
            <p><?php
                if(isset($empresas->errors)) {
                    if (is_array($empresas->errors->on('localidade'))) {
                        foreach ($empresas->errors->on('localidade') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $empresas->errors->on('localidade');
                    }
                }
                ?>
            </p>

            <label for="capitalsocial">Capital Social:</label><br>
            <input class="input-forms" min="0" type="text" name="capitalsocial" value="<?php if(isset($empresas)) { echo $empresas->capitalsocial; }?>">
            <p><?php
                if(isset($empresas->errors)) {
                    if (is_array($empresas->errors->on('capitalsocial'))) {
                        foreach ($empresas->errors->on('capitalsocial') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $empresas->errors->on('capitalsocial');
                    }
                }
                ?>
            </p>

            <input  type="submit" value="Criar Empresa">
        </form>
    </div>
</div>