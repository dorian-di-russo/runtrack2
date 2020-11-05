<?php

$i = 0;

$tableau= ["arguments","valeurs"];


foreach($_GET as $key => $value)

{

}

?>


<!DOCTYPE html>
<style type="text/css">
</style>
    <table>
        <tr>
            <th><?php echo $tableau[0]; ?></th>
            <th><?php echo $tableau[1]; ?></th>
        </tr>

        <tr>
            <td><?php $i=0;
             foreach ($_POST as $key => $value)

                {
                    $i++;

                    echo $key. '<br />';
                }
                ?></td>
                  <td><?php $i=0;
             foreach ($_POST as $key => $value)

                {
                    $i++;

                    echo $value. '<br />';
                }
                ?></td>
        </tr>
       
   

            




    </table>

    <form action="index.php" method="post">
        <label for="argument">Argument</label>
        <input type="text" id="argument" name="argument">

        <label for="argumentb">Argumentb</label>
        <input type="text" id="argumentb" name="argumentb">
       
        
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
        <input type="submit" value="submit">
</form>