<?php


$i = 0;





//Pour chaque élément de tableau  "$_GET attribut  une variable "$key" au clés "value" au valeur de mon tableau. '<br />'
//$_GET Est un tableau généré un tableau généré automatiquement qui contient les données d'un formulaire quand on l'envoie
foreach ($_GET as $key => $value)

{
   
    $i++;
}

echo "$i";



?>


<form action="index.php" method="get">
        <label for="argument">Argument</label>
        <input type="text" id="argument" name="argument">
        <label for="argumentb">Argumentb</label>
        <input type="text" id="argumentb" name="argumentb">
        <input type="submit" value="submit" id >

</form>