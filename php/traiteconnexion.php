<?php

include'./db.php';


$email= $_POST['email'];
$password= $_POST['password'];
$confirmpassword= $_POST['confirmpassword'];

echo $email,$password;

$inserer = "INSERT INTO `mes_utilisateurs` (`email`, `password`, `confirmpassword`) VALUES ('$email', '$password', '$confirmpassword')";

if(mysqli_query($db,$inserer) == true){
    echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
}
    else
{
echo "Echec d'enregistrement";
}


echo "<br/>";

    header('location:acceuil.php');


?>