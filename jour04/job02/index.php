
<?php


$i = 0;

$tableau= ["arguments","valeurs"];


//Pour chaque élément de tableau  "$_GET attribut  une variable "$key" au clés "value" au valeur de mon tableau. '<br />'
//$_GET Est un tableau généré un tableau généré automatiquement qui contient les données d'un formulaire quand on l'envoie
foreach ($_GET as $key => $value)

{
   
    
}
?>

<!DOCTYPE html>
<style type="text/css">
table

{
        display: flex;
        justify-content: center;
}
</style>
   
    <table>
        <tr>
            <th><?php echo $tableau[0]; ?></th>
            <th><?php echo $tableau[1]; ?></th>
            

        </tr>
        <tr>
            
            <td><?php $i=0;
             foreach ($_GET as $key => $value)

        {
                                $i++;
                                
                                echo $key. '<br />';
                                
                                } ?></td>
            <td><?php
             $i=0;
             foreach ($_GET as $key => $value)

        {
                                $i++;
                                
                                echo $value. '<br />';
                                
                                } ?></td>
            
        </tr>
     

     
        
    </table>

</html>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

  
 

<form action="index.php" method="get">
        <label for="argument">Argument</label>
        <input type="text" id="argument" name="argument">

        <label for="argumentb">Argumentb</label>
        <input type="text" id="argumentb" name="argumentb">
       
        
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
        <input type="submit" value="submit">
</form>


