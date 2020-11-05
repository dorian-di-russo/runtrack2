<?php

$i = 0;

foreach ($_POST as $key => $value)

{
    $i++;
}

    echo "$i";

?>




<form action="index.php" method="post">

        <label for="argument">Argument</label>
        <input type="text" id="argument" name="argument">
        <label for="argumentb">Argumentb</label>
        <input type="text" id="argumentb" name="argumentb">
        <label for="argumentc">Argumentb</label>
        <input type="text" id="argumentc" name="argumentc">
        <input type="submit" value="submit" id >
        

</form>