<h3> Loged in as <?= $user->username ?></h3>
<h5> My role: <?= $user->role ?></h5>
<td>
    <a href="index.php?c=folhasobra&a=index"
       class="btn " role="button">Folhas obra</a>
    <a href="index.php?c=iva&a=index"
       class="btn" role="button">IVA</a>
    <a href="index.php?c=empresa&a=show&id=1"
       class="btn" role="button">Empresa</a>
    <a href="index.php?c=user&a=index"
       class="btn" role="button">User</a>
    <a href="index.php?c=servico&a=index"
       class="btn" role="button">Servico</a>
    <a href="index.php?c=auth&a=logout"
       class="btn" role="button">Logout</a>

</td>