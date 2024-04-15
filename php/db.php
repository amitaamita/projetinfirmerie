<?php
// pour ce connecter a la base de donne 
// cree une connexion avec la une fonction $db qui va prendre en argument ts les variable que nous avons cre   
    try {
        $db = mysqli_connect("localhost:3307","root","","joueur");

        
    } 
    // verifier la connexion s'il n.est pas etablie on met fail connection
    
    catch (Exception $th) {
        echo 'lerreur est : '. $th->getMessage();
    }



?>