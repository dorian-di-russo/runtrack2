<?php

function oddCmp($input) 
{ 
    return ($input & 1); 
} 
  

function evenCmp($input) 
{ 
    return !($input & 1); 
} 


 
    $input = array(200, 204, 173, 98, 171, 404, 459);
      

    $odd = array_filter($input, "oddCmp"); 
      
  
    $even = array_filter($input, "evenCmp"); 
      
   
    $odd = array_values(array_filter($odd)); 
      

    $even = array_values(array_filter($even)); 
      
   
    echo 'Tableau impair :'; ?>
    <pre>
    <?php print_r ( $odd ) ?>
    </pre>

    <?php 
   
    echo 'Tableau pair :'; ?>
    <pre>
    <?php print_r ( $even ); ?>
    </pre>



?>