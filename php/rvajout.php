<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        include'./listerv.php';
        include'./db.php';

        $nom_de_famille = $_POST['nom_de_famille'];
        $sex = $_POST['sex'];
        $adresse_mail = $_POST['adresse_mail'];
        $date = $_POST['date'];
        $numero_tel= $_POST['numero_tel'];
       

        $inserer = "INSERT INTO `rendez_vouz` (`nom de famille`,`sex`, `adres-mail`, `date`,`numero-tel`) VALUES ('$nom_de_famille','$sex', '$adresse_mail', '$date','$numero_tel')";

        
        if(mysqli_query($db,$inserer) == true){
            echo "<pre><h3>Enregistrement bien reussi</h3></pre>"; 
        }
            else
        {
        echo "Echec d'enregistrement";
        }
       
        echo "<br/>";

        ("location: listerv.php");
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