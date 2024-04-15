<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Joueurs</title>
    <link rel="stylesheet" href="css/listepatient.css">


</head>
<body>
    <style>
        * {
    /* margin: 0; */
    padding: 0;
    outline: 0;

}



table{
    /* background-color: #fff; */
    /* position: relative;
    margin-top:-50px;
    z-index: 1;
    left: 50%;
    top: -140px; 
    transform: translate(-50%, 50%); */
     /* width: 60%; */
    /* border-collapse: collapse; */
    /* border-spacing: 0; */ */
    /* border-radius: 12px 12px 0 0; */
    overflow: hidden;
    box-shadow: 0 2px 12px rgba(12, 3, 3, 0.3);
    text-align: center; */
    background-color: rgba(255,255,255,0.06);
padding: 600px;
border-radius: 6px ;



}

th,td {
    padding: 12px 15px;

}

thead {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-color: #7151a9;
    color: white;
    text-transform: uppercase;
    font-size: 18px;
}
.modifier {
    color: green;


}
.supprimer {
    color: #79153b;
    /* background-color: rgb(6, 77, 169); */
}

.ajout {
    color: darkseagreen;
}

td {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background:transparent;
}

tr:nth-child() {
    background-color: #b6b1b1;
    background:transparent;
}
header .container {
    display: flex;
    justify-content: space-around;
    align-items: center;

}

header .container .menu ul{
    display: flex;
    gap: 30px;
}


.menu ul li {
    list-style: none;

}

.menu ul li a {
    text-decoration: none;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 600;
}

.deconnexion{
    color: white;
    border: 1px solid peru;
    padding: 5px;
    background-color: rgba(220, 188, 9, 0.4);

    margin-top: -5px;
}
.container{
            background-color:
            /* #c7adff */
        }

.deconnexion:hover {
    background-color: #79153b;
}

.menu ul li a:hover {
    border-bottom: 1px solid;
}
th{
    margin:20px 10px;


}
table{
    /* background:transparent; */
    padding:20px 10px;
     background: url('../img/consultimg.jpg');
    /* display: flex;
    flex-direction: column; */;
    /* background-color: rgba(255,255,255,0.06); */
    padding: 1rem;
    /* padding:50px 300px; */
    height:320px;
    border-radius: 20px;
    border-left:1px solid rgba(255,255,255,0.3);
    /* border-top:1px solid #000; */
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 20px 20px 20px -6px rgba(0,0,0,0.2);
    text-align:center;
    /* position:relative; */
    -webkit-transition: all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;

   
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
    /* rgba(255,255,255,0.3); */


    rgba(255,255,255,0.06);
}
form th {
    background:transparent;
    width:50px;
    padding:5px;
    margin-bottom:2rem;
    border:none;
    border-left:1px solid rgba(255,255,255,0.3);
    border-top: 1px solid rgba(255,255,255,0.3);
    -webkit-backdrop-filter: blur(5px);
    backdrop-filter:blur(5px);
    box-shadow:4px 4px 60px rgba(0,0,0,0.2);
    text-align:center;
    position : relative;
    -webkit-transition:all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
    color:#fff;
    font-weight:500;
    font-family:'montserrat', sans-serif;
    -webkit-transition: all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
    text-shadow:2px 2px 4px rgba(0,0,0,0.2);
    border-radius:50px;
}
/* body {
background-color: #e8cd84;
display: flex;
align-items: center;
justify-content: center;
height: 100vh;
} */

table{

    background:rgba(255,255,255,0.06);
background-color: #fff;
padding: 100px;
border-radius: 60px ;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

}
td{
    background:transparent;
}
 .ajouter{
    color:black;
    padding-left:55%;
    margin-top:20px;
    margin-bottom:40px; */
     /* margin: 8px 0 8px 0 ; */
     cursor: pointer; 
     /* border-radius: 8px  ;
     background-color:#7151a9; */
     /* width: 10px; */

    /* background-color:#7151a9; */
     /* padding: 10px 10px; */
    

    /* padding: 10px 10px;
    color: white;
    background-color: #7151a9;
    margin-top: 10px;
    border: 1px solid #fff;
    cursor: pointer; */



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

        <div class="menu">
        <ul>
                      <li><a href="acceuil.php">Acceuil</a></li>
                        <li><a href="listerv.php">listes des rendez vous</a></li>
                    <li><a href="consultation.php">Consultation</a></li>
                    <li><a href="rv.php">Prendre un rendez</a></li>
                    <li class="deconnexion"><a href="pourdeconnecter.php">Deconnexion</a></li>
               
                </ul>

        </div>
</div>
 

<form action="">
<div class="ajouter">
    <?php
echo "<td><a class='ajouter' href=\"./consultation.php\">ajouter</a></td>";

?>
</div>


<header>

   

<table>

        <thead >
     
            <th>Nom</th>
            <th>Prenom</th>
            <th>Age</th>
            <th>sex</th>
            <th>group_sanguin</th>
            <th>filiere</th>
            <th>tension</th>
            <th>temperature</th>
            <th>diagnostic</th>
            <th>observation</th>
         
            <th colspan="3">action</th>     
        </thead>
</form>
    <?php
    // inclure la page de connexion db.php
            // include'./acceuil.php';  
            include'./db.php';

            // on affiche la liste des utilisateur

                $affichage = "SELECT * FROM mes_joueurs";

                // cre une variable result qui sera egal a mysqli_query qui aura pour argumenr $db la connexion
                //  que nous avons cree dans la base de donne et la requete affichage qu'on vient de cre
                $resultat = mysqli_query($db,$affichage);

                // nous allons faire une bouble qui vq qfficher tous les resultat
              

            foreach ($resultat as $value) {
                echo "<tr>";
                echo "<td>". $value['nom']. "</td>";
                echo "<td>". $value['prenom']. "</td>";
                echo "<td>". $value['age']. "</td>";
                echo "<td>". $value['sex']. "</td>";
                echo "<td>". $value['group_sanguin']. "</td>";
                echo "<td>". $value['filiere']. "</td>";
                echo "<td>". $value['tension']. "</td>";
                echo "<td>". $value['temperature']. "</td>";
                echo "<td>". $value['diagnostic']. "</td>";
                echo "<td>". $value['observation']. "</td>";
                
             

              
                echo "<td><a class='supprimer' href=\"./suprime.php?id=$value[id]\"
                    onClick=\"return confirm('Etes vous sur ?')\">Annuler</a></td>";  
                    echo "<td><a class='modifier' href=\"modifie.php?id=$value[id]\">Details</a></td>";

    
                  
               
                // echo "<td><a class='detail' href=\"./php/detail.php?id=$value[id]\">Details</a></td>";

                echo "</tr>"; 
            }  
            
        //     else{
        //         echo " <p class='message'>0 patient present !</p>";
        //     }
        //   ?>
         

        
    </table>

</body>
</html>
