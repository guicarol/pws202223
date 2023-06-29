<h3> Loged in as <?= $user->username ?></h3>
<h5> My role: <?= $user->role ?></h5>
<td>
    <a href="index.php?c=folhasobra&a=minhasfolhasobra"
       class="btn " role="button">Folhas obra</a>


    <a href="index.php?c=user&a=show&id=<?= $user->id ?>"
       class="btn" role="button">User</a>

    <a href="index.php?c=auth&a=logout"
       class="btn" role="button">Logout</a>

</td>