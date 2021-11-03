<?php


$lignes= 0;

while ($lignes <=1337)

{
    echo $lignes . '<br />';
    $lignes++;


   if (($lignes==26)||($lignes==37)||($lignes==88)||($lignes==1111))
   {
    echo '<br />';
    $lignes = $lignes+1;
   }

    


}


?>