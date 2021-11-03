<?php

    $m = 100;
    $l = 0;

    for ($l = 0; $l <=$m; $l++)
    {
        if ($l<=20)
        {
            echo "<i>$l</i></br>";
        }
        elseif(($l>=25) && ($l<=50))
        {
        echo "<u>$l</u></br>";
            if($l==41)
            {
                echo 'La Plateforme_<br/>';
                $l=$l+1;
            }
    }
            else 
                echo  $l . '<br>';
    }

?>