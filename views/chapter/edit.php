<form method="POST" action="index.php?c=chapter&a=update&id=<?=$chapter->id?>">
    <input type="hidden" name="book_id" value="<?= $chapter->book_id ?>">
<input type="text" name="name" placeholder="Name">
    <input type="submit" value="Alterar">
</form>