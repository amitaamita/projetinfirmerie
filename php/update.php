<?php
include 'db.php';

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $group_sanguin = $_POST['group_sanguin'];
    $sex = $_POST['filiere'];
    $sex = $_POST['tension'];
    $sex = $_POST['temperature'];
    $sex = $_POST['diagnostic'];
    $sex = $_POST['observaton'];


    // Mettre à jour les informations de l'étudiant dans la base de données
    $sql = "UPDATE mes_joueurs SET prenom='$prenom', nom='$nom', 
    age='$age', sex='$sex',group_sanguin='$group_sanguin', filiere='$filiere',tension='$tension', temperature='$temperature',diagnostic='$diagnostic',observation='$observation' WHERE id=$id";

    if (mysqli_query($db,$sql)) {
        echo "Étudiant mis à jour avec succès";
        header("Location: listepatient.php");
    } else {
        echo "Erreur: " . $sql . "<br>";
    }
} else {
    echo "Aucun identifiant d'étudiant spécifié";
}

mysqli_close($conn);
header("location:../listepatient.php");
?>
