<?php

// on inclus l base de donne
include 'db.php';


// GET permet d'envoiye les donnes dans une une lien url
// on vas les recuperer grace a la methode $get
$id = $_GET['id'];



// ensuite on fait la requete pour annuler

$result = mysqli_query($db, "delete from mes_joueurs where id =$id");
// si l'execution de ces requete on marcher on fait header location
//  qui nous permet de faire une redirection vers la page listpatiebt .php
header("Location:listepatient.php");
?>