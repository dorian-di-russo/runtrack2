<?php

function leetspeak($str)

{
            for ($i=0;isset($str[$i]); $i++)

            { 
              if ($str[$i] == "a")

               {
                 $str[$i] = '4';
               }

               elseif ($str[$i] == "b")

               {
                 $str[$i] = '8';
               }
               elseif ($str[$i] == "e" )

               {
                 $str[$i] = '3';
               }

               elseif ($str[$i] == "g")

               {
                   $str[$i] = '6';
               }
               elseif ($str[$i] == 'l' )

               {
                   $str[$i] = '1';
               }
             
            }

return $str;

}


$speak = leetspeak('Et merse la zone');

echo $speak;

?>