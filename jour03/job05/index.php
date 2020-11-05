
<?php

$str = 'On n est pas le meilleur quand on le croit mais quand on le sait';
$tableau= ["voyelles","consonnes"];
preg_match_all('#([aeiouy])#i', $str, $matches);
 
echo count($matches[1]);

preg_match_all('#([bcdfghjklmnpqrstvwxz])#i', $str, $matches);
 
echo count($matches[1]);




?>