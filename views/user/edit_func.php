<h2 class="text-left top-space">Edit <?= $user->username ?></h2>
<h2 class="top-space"></h2>
<td>
    <a href="index.php?c=user&a=index"
       class="btn btn-info" role="button">Voltar</a>
</td>
<div class="row">
    <div class="col-sm-12">
        <form method="POST" action="index.php?c=user&a=update&id=<?= $user->id ?>">
            Username: <input type="text" name="username" disabled value="<?php if (isset($user)){echo $user->username;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('username'); }?>
            <br>
            Password: <input type="text" name="password"  value="<?php if (isset($user)){echo $user->password;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('password'); }?>
            <br>
            Email: <input type="text" name="email"  value="<?php if (isset($user)){echo $user->email;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('email'); }?>
            <br>
            Telefone: <input type="number" name="telefone" disabled value="<?php if (isset($user)){echo $user->telefone;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('telefone'); }?>
            <br>
            NIF: <input type="number" name="nif" disabled value="<?php if (isset($user)){echo $user->nif;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('nif'); }?>
            <br>
            Morada: <input type="text" name="morada" disabled value="<?php if (isset($user)){echo $user->morada;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
            <br>
            Codigo Postal: <input type="text" name="codigopostal" disabled value="<?php if (isset($user)){echo $user->codigopostal;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('codigopostal'); }?>
            <br>
            Localidade: <input type="text" name="localidade" disabled value="<?php if (isset($user)){echo $user->localidade;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('localidade'); }?>
            <br>
            Role:  <input type="text" name="role" disabled value="<?php if (isset($user)){echo $user->role;}?>">
            <?php if(isset($user->errors)){ echo $user->errors->on('role'); }?>
            <input type="submit" value="Alterar">
        </form>
    </div>
</div>
