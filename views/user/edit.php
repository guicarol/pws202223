<form method="POST" action="index.php?c=user&a=update&id=<?= $user->id ?>">
    Username: <input type="text" name="username" value="<?php if (isset($user)){echo $user->username;}?>">
    <?php if(isset($user->errors)){ echo $user->errors->on('username'); }?>
    <br>
    Email: <input type="text" name="email" value="<?php if (isset($user)){echo $user->email;}?>">
    <?php if(isset($user->errors)){ echo $user->errors->on('email'); }?>
    <br>
    Telefone: <input type="number" name="telefone" value="<?php if (isset($user)){echo $user->telefone;}?>">
    <?php if(isset($user->errors)){ echo $user->errors->on('telefone'); }?>
    <br>
    NIF: <input type="number" name="nif" value="<?php if (isset($user)){echo $user->nif;}?>">
    <?php if(isset($user->errors)){ echo $user->errors->on('nif'); }?>
    <br>
    Morada: <input type="text" name="morada" value="<?php if (isset($user)){echo $user->morada;}?>">
    <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
    <br>
    Codigo Postal: <input type="text" name="codigopostal" value="<?php if (isset($user)){echo $user->codigopostal;}?>">
    <?php if(isset($user->errors)){ echo $user->errors->on('codigopostal'); }?>
    <br>
    Localidade: <input type="text" name="localidate" value="<?php if (isset($user)){echo $user->localidade;}?>">
    <?php if(isset($user->errors)){ echo $user->errors->on('localidade'); }?>
    <br>
    Role: <select name="role">
        <option value="<?php if (isset($user)){echo $user->role;}?>">Admin</option>
        <option value="<?php if (isset($user)){echo $user->role;}?>">Funcionario</option>
        <option value="<?php if (isset($user)){echo $user->role;}?>">Cliente</option>
    </select>
    <?php if(isset($user->errors)){ echo $user->errors->on('role'); }?>
    <input type="submit" value="Alterar">
</form>