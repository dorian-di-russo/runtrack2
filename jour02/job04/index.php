<?php
$l= 1;


while ($l <=100)

{
    
    $l++;

    if(!($l%5)&&(!($l%3)))

    {
       echo 'FizzBuzz' . '<br />';
    }
   


elseif(!($l%3))
 {
     echo 'Fizz' .  '<br />';
 }
 elseif(!($l%5))
 {
     echo 'buzz' . '<br />';
 }

 else
 {
     echo $l . '<br />';

 }



}


?>