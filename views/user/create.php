<form method="POST" action="index.php?c=user&a=store">
    Username: <input type="text" name="username" value="<?php if (isset($user)) {echo $user->username;} ?>"><br>
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('username'))) {
            foreach ($user->errors->on('username') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('username');
        }
    }
    ?>
    PassWord: <input type="text" name="password" value="<?php if (isset($user)) {echo $user->password;} ?>"><br>
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('password'))) {
            foreach ($user->errors->on('password') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('password');
        }
    }
    ?>
    Email: <input type="email" name="email" value="<?php if (isset($user)) {echo $user->email;} ?>"><br>
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('email'))) {
            foreach ($user->errors->on('email') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('email');
        }
    }
    ?>
    Telefone: <input type="number" name="telefone" value="<?php if (isset($user)) {echo $user->telefone;} ?>"><br>
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('telefone'))) {
            foreach ($user->errors->on('telefone') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('telefone');
        }
    }
    ?>
    Nif: <input type="number" name="nif" value="<?php if (isset($user)) {echo $user->nif;} ?>"><br>
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('nif'))) {
            foreach ($user->errors->on('nif') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('nif');
        }
    }
    ?>
    Morada: <input type="text" name="morada" value="<?php if (isset($user)) {echo $user->morada;} ?>"><br>
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('morada'))) {
            foreach ($user->errors->on('morada') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('morada');
        }
    }
    ?>
    Codigo Postal: <input type="text" name="codigopostal" value="<?php if (isset($user)) {echo $user->codigopostal;} ?>"><br>
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('codigopostal'))) {
            foreach ($user->errors->on('codigopostal') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('codigopostal');
        }
    }
    ?>
    Localidade: <input type="text" name="localidade" value="<?php if (isset($user)) {echo $user->localidade;} ?>"><br>
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('localidade'))) {
            foreach ($user->errors->on('localidade') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('localidade');
        }
    }
    ?>
    Role: <input type="text" name="role" value="<?php if (isset($user)) {echo $user->role;} ?>">
    <?php
    if(isset($user->errors)) {
        if (is_array($user->errors->on('role'))) {
            foreach ($user->errors->on('role') as $error) {
                echo $error . '<br>';
            }
        } else {
            echo $user->errors->on('role');
        }
    }
    ?>
    </p>
    <input type="submit" value="Criar">
</form>