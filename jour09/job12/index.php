<?php


$bdd = mysqli_connect("localhost", 'root','','jour08');

$req = mysqli_query($bdd, "SELECT prenom,nom,naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");

$res= mysqli_fetch_all($req, MYSQLI_ASSOC);





var_dump($res);





?>



<table border="1"> 
    <thead>
    <thead>
            <?php foreach($res[0] as $key => $value){
                        echo "<th>$key</th>";
                    }
?>

    </thead>

    </thead>
    <tbody>
        <tr>
            <?php foreach($res[0] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>
        <tbody>

        <tr>
            <?php foreach($res[1] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>

        <tr>
            <?php foreach($res[2] as $key => $value){
                        echo "<td>$value</td>";
                    } ?> 
        </tr>
        <tr>
      