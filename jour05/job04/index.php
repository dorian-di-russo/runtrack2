<?php




function calcule ($a , $b, $operation)

{
   if ($operation == "add")   // addition
   return ($a + $b);

   elseif ($operation == "mul" )  // multiplication
   return ($a * $b);

   elseif ($operation == "div" )  // division
   return ($a / $b);

   elseif ($operation = "soust")  // soustraction
   return ($a - $b);

   elseif ($operation = "reste") // reste de soustraction
   return ($a % $b);
   
}



$result = calcule(22, 4, "add");
echo $result;

?>