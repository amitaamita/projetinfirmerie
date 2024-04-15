<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        include'./listepatient.php';
        include'./db.php';
// if isset = si il,existe des information envoiye par la  ethode $post
        $prenom = $_POST['nom'];
        $nom = $_POST['prenom'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $group_sanguin= $_POST['group_sanguin'];
        $filiere = $_POST['filiere'];
        $tension = $_POST['tension'];
        $temperature = $_POST['temperature'];
        $diagnostic = $_POST['diagnostic'];
        $observation = $_POST['observation'];


        // faire la requete de l'insertion
        $inserer = "INSERT INTO `mes_joueurs` (`nom`,`prenom`, `age`, `sex`,`group_sanguin`,`filiere`,`tension`, `temperature`, `diagnostic`,`observation`) VALUES ('$nom','$prenom', '$age', '$sex','$group_sanguin','$filiere','$tension', '$temperature', '$diagnostic','$observation')";

        if(mysqli_query($db,$inserer) == true){
            echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
        }
            else
        {
        echo "Echec d'enregistrement";
        }
       
        echo "<br/>";

        ("location: listepatient.php");
    ?>
    


        
<!-- 
        // if(mysqli_query($db,$inserer) == true){
        //     echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
        // }
        // header("location:./listepatient.php");
        //     // else
        // {
        // echo "Echec d'enregistrement";
        // }
        // echo "<br/>";
     -->





</body>
</html>