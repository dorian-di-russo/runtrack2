<?php







if(isset($_COOKIE['user_id']))

{
    setcookie("user_id","1234",time()+36000);
    echo 'Votre id de session est le' . $_COOKIE['user_id'];

}





var_dump($_COOKIE['user_id']);
?>