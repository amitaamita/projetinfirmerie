<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/rv.css">
</head>
<body>
    <style>
    .container{
        background-color:#fff;
    }
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
    </style>
    <header>
     <div class="container">
            <img src="../img/treslogo_Plan de travail 1 copy.png" alt="logo" width="120px">
            <!-- <h3>infirmerie iSEPAT</h3> -->
         
            <div class="menu">
                <ul>
                <li><a href="acceuil.php">Acceuil</a></li>
                <li><a href="listerv.php">listes des rendez vous</a></li>
                    <li><a href="consultation.php">consultation</a></li>
                  
                    <li><a href="listepatient.php">listes des patients</a></li>
                    <li class="deconnexion"><a href="pourdeconnecter.php">Deconnexion</a></li>
                </ul>
            </div>
        </div>
        </header>
    <div class="containerse">
        <div class="formulaire">
        <h3>Prendre un rendez-vous</h3>
        <form action="rvajout.php" method="post" name="form1">
    
            <input placeholder="nom de famille"name="nom_de_famille" type="text" required="" class="nom-famille">
            <input placeholder="sex" name="sex" type="sex" required="" class="sex">
            <input placeholder="adres-mail "name="adresse_mail" type="text" required="" class="adre-mail">
            <input name="date" type="date" type="date" required="" class="date">

            <input placeholder="numero_tel "name="numero_tel" type="text" required="" class="nuumero_tel">
            <input type="submit"name="valider" value="soumetre">
            

        </form>
        </div>
        <!-- <div class="formulaire-image">
            <img src="/img/rvimage.jpg" alt="">
        </div> -->
    </div>
</body>
</html>