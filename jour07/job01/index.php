<?php
     session_start();  #start a session

    if ( !isset($_SESSION['count']))    
     {
     $_SESSION['count'] = 1; 
     }
     else
     {
     $_SESSION['count']++;
     }

     if(isset($_POST['reset']))

     {
         session_destroy();
     }



     
?>


<html>
<head>

</head>

<body>
<h2>vous avez visité <?php echo( $_SESSION['count'] ); ?> fois cette session</h2>
<form action='#' method="post">
    
    <input type="submit" name="reset" value="reset">
</form>

</body>
</html>