<form method="POST" action="index.php?c=chapter&a=store">
    <input type="hidden" name="book_id" value="<?= $book->id ?>">
<input type="text" name="name" placeholder="Name">
    <input type="submit" value="Criar">
</form>