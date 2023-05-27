<h2 class="text-left top-space">Book Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped">
            <thead>
            <th><h3>Id</h3></th>
            <th><h3>Name</h3></th>
            <th><h3>ISBN</h3>
            <th><h3>ISBN</h3>

            </th>
            </thead>
            <tbody>
            <tr>
                <td><?= $book->id ?></td>
                <td><?= $book->name ?></td>
                <td><?= $book->isbn ?></td>

            </tr>

            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=book&a=index" class="btn btn-info"
               role="button">VOLTAR</a>
        </p>
    </div>
</div> <!-- /row -->