<?php


for ($i=1; $i <= 300; $i++) { 
    
    if ($i % 3 == 0 && $i % 5 == 0 ) 
    
        {
            echo "fizzbuzz";
            echo "<br>" ;
        }
    
        elseif ($i % 5 == 0)
    
        {
            echo "buzz";
            echo "<br>";
        }
      
        elseif ($i % 3 == 0)
    
        {
            echo "fizz";
            echo "<br>";
        }
        
    
        else
    
        {
            echo $i; 
            echo "<br>";
        }
    }
    

    ?>