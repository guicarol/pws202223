<h2 class="text-left top-space">Novo Utilizador</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <form action="./router.php?c=user&a=store_cliente" method="POST">
            <br>

            <label for="username">Username:</label><br>
            <input class="input-forms" type="text" name="username" value="<?php if(isset($cliente)) { echo $cliente->username; }?>">
            <p><?php
                if(isset($cliente->errors)) {
                    if (is_array($cliente->errors->on('username'))) {
                        foreach ($cliente->errors->on('username') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $cliente->errors->on('username');
                    }
                }
                ?>
            </p><br>
            <label for="password">Password:</label><br>
            <input class="input-forms" type="password" name="password" value="<?php if(isset($cliente)) { echo $cliente->password; }?>">
            <p><?php
                if(isset($cliente->errors)) {
                    if (is_array($cliente->errors->on('password'))) {
                        foreach ($cliente->errors->on('password') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $cliente->errors->on('password');
                    }
                }
                ?>
            </p><br>
                <label for="email">Email:</label><br>
                <input class="input-forms" type="text" name="email" value="<?php if(isset($cliente)) { echo $cliente->email; }?>">
            <p><?php
                if(isset($cliente->errors)) {
                    if (is_array($cliente->errors->on('email'))) {
                        foreach ($cliente->errors->on('email') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $cliente->errors->on('email');
                    }
                }
                ?>
            </p><br>
                <label for="telefone">Telefone:</label><br>
                <input class="input-forms" type="number" name="telefone" value="<?php if(isset($cliente)) { echo $cliente->telefone; }?>">
            <p><?php
                if(isset($cliente->errors)) {
                    if (is_array($cliente->errors->on('telefone'))) {
                        foreach ($cliente->errors->on('telefone') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $cliente->errors->on('telefone');
                    }
                }
                ?>
            </p><br>
                <label for="nif">Nif:</label><br>
                <input class="input-forms" type="number" name="nif" value="<?php if(isset($cliente)) { echo $cliente->nif; }?>">
            <p><?php
                if(isset($cliente->errors)) {
                    if (is_array($cliente->errors->on('nif'))) {
                        foreach ($cliente->errors->on('nif') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $cliente->errors->on('nif');
                    }
                }
                ?>
            </p><br>
                <label for="morada">Morada:</label><br>
                <input class="input-forms" type="text" name="morada" value="<?php if(isset($cliente)) { echo $cliente->morada; }?>">
            <p><?php
                if(isset($cliente->errors)) {
                    if (is_array($cliente->errors->on('morada'))) {
                        foreach ($cliente->errors->on('morada') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $cliente->errors->on('morada');
                    }
                }
                ?>
            </p><br>
                <label for="codigopostal">Código-Postal:</label><br>
                <input class="input-forms" type="text" name="codigopostal" value="<?php if(isset($cliente)) { echo $cliente->codigopostal; }?>">
            <p><?php
                if(isset($cliente->errors)) {
                    if (is_array($cliente->errors->on('codigopostal'))) {
                        foreach ($cliente->errors->on('codigopostal') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $cliente->errors->on('codigopostal');
                    }
                }
                ?>
            </p><br>
                <label for="localidade">Localidade:</label><br>
                <input class="input-forms" type="text" name="localidade" value="<?php if(isset($cliente)) { echo $cliente->localidade; }?>">
            <p><?php
                if(isset($cliente->errors)) {
                    if (is_array($cliente->errors->on('localidade'))) {
                        foreach ($cliente->errors->on('localidade') as $error) {
                            echo $error . '<br>';
                        }
                    } else {
                        echo $cliente->errors->on('localidade');
                    }
                }
                ?>
            </p><br>

            <input type="submit" value="Criar Cliente">
        </form>
    </div>
</div>
