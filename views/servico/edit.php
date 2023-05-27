<form method="POST" action="index.php?c=book&a=update&id=<?= $book->id ?>">
    Name: <input type="text" name="name" value="<?php if (isset($book)){echo $book->name;}?>">
    <?php if(isset($book->errors)){ echo $book->errors->on('name'); }?>
    ISBN: <input type="number" name="isbn" value="<?php if (isset($book)){echo $book->isbn;}?>">
    <?php if(isset($book->errors)){ echo $book->errors->on('isbn'); }?>
    <label for="genres">Genre:</label><br>
    <select name="genre_id">
        <?php foreach($genres as $genre){?>
            <?php if($genre->id == $book->genre_id) { ?>
                <option value="<?= $genre->id?>" selected><?= $genre->name;
                    ?> </option>
            <?php }else { ?>
                <option value="<?= $genre->id?>"> <?= $genre->name;
                    ?></option>
            <?php }
        } ?>
    </select>
    <input type="submit" value="Alterar">
</form>