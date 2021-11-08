<?php




function occurences($str, $char)
{
    $x = 0; 
    for ($i=0; isset($str[$i]); $i++)    // création de l'index qui va parcourir le str de [$i] et incrémenter
     { 
         if ($char == $str[$i]) // si mon occurence est trouvé dans la phrase
          {
            $x++;               // je compe le nombre d'occurence
         }
    }
    return $x;                  // je retourne le nombre d'occurence 
}


$blbl = occurences('hello la plateforme','l');

echo $blbl;
?>