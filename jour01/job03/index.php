<?php
$foo = true;
$foo1 = 0;
$foo2= 1.4;
$foo3= 'chaînes de caractères';
$tableau= ["type","nom","valeur"];
$type = 'gettype' 
?>
 <!DOCTYPE html>
    <style type="text/css">
    *
    {
        text-align: center;
        background-color: black;
        color: white;
    }

    

  td,th
    {
        height:100px;
        width: 200px;
        border: 1px solid;
        
    }

    table 
    {
        display: flex;
        justify-content:center;
        border-collapse: collapse;
    }
     </style>
    <table>
        <tr>
            <th><?php echo $tableau[0]; ?></th>
            <th><?php echo $tableau[1]; ?></th>
            <th><?php echo $tableau[2]; ?></th>

        </tr>   
        <tr>
            <td><?php echo gettype ($foo); ?></td>
            <td><?php echo  '$foo'; ?></td>
            <td><?php echo   $foo; ?></td>
            
        </tr>

        <tr>
            <td><?php echo  gettype ($foo1) ?></td>
            <td><?php echo  '$foo1'; ?></td>
            <td><?php echo  $foo1; ?></td>
        </tr>

        <tr>
            <td><?php echo  gettype ($foo2) ?></td>
            <td><?php echo  '$foo2'; ?></td>
            <td><?php echo  $foo2; ?></td>
        </tr>
         
        <tr>
            <td><?php echo  gettype ($foo3) ?></td>
            <td><?php echo  '$foo3'; ?></td>
            <td><?php echo     $foo3; ?></td>
        </tr>
        
    </table>

</html>