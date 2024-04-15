<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/modifie.css">
</head>
<body>
    <style>
        body {
    background: url('../img/WhatsApp Image 2024-03-18 à 10.24.16_00878386.jpg')no-repeat;
   background-size: cover;
   /* padding: 50px 0 80px 0; */
   /* background-color: rgb(93, 189, 93); */
   /* display: flex; */
   align-items: center;
   justify-content: center;
     height: 5vh; 
}
form {
    /* background: url('../img/rvimage.jpg'); */
    /* display: flex;
    flex-direction: column; */
    background-color: rgba(255,255,255,0.06);
    padding: 1rem;
    padding:600px 100px;
    height:120px;
    border-radius: 20px;
    border-left:1px solid rgba(255,255,255,0.3);
    border-top:1px solid #000;
    -webkit-backdrop-filter: blur(10px);
    box-shadow: 20px 20px 20px -6px rgba(0,0,0,0.2);
    text-align:center;
    /* position:relative; */
    -webkit-transition: all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
   
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
    /* rgba(255,255,255,0.3); */
}
/* input:focus {
    border: 1px solid rgba(93, 189, 93);;
} */

input[type='submit'] {

    padding: 10px 10px;
    color: white;
    background-color: #7151a9;
    margin-top: 10px;
    border: 1px solid #fff;
    cursor: pointer;
}
input {
    display:flex;
}
form input {
    background:transparent;
    width:250px;
    padding:1rem;
    margin-bottom:2rem;
    border:none;
    border-left:1px solid rgba(255,255,255,0.3);
    border-top: 1px solid rgba(255,255,255,0.3);
    -webkit-backdrop-filter: blur(5px);
    backdrop-filter:blur(5px);
    box-shadow:4px 4px 60px rgba(0,0,0,0.2);
    text-align:center;
    position:relative;
    -webkit-transition:all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
    color:#fff;
    font-weight:500;
    font-family:'montserrat', sans-serif;
    -webkit-transition: all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
    text-shadow:2px 2px 4px rgba(0,0,0,0.2);
    border-radius:500px;
}
form input:hover{
    background:rgba(255,255,255,0.1);
    box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
}
form input[type="mail"]:focus,
form input[type="date"]:focus,
form input[type="text"]:focus{
    background:rgba(255,255,255,0.1);
    box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);

}
form input[type="submit"]{
    margin-top:-10px;
    margin-left:20px;
    width:150px;
    font-size:1rem;
}
form input[type="submit"]:hover{
    cursor: pointer;
}
form:hover{
    margin:4px;
}
::-webkit-input-placeholder{
    font-family:'montserrat', sans-serif;
    font-weight:800;
    color:#fff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
}
.formulaire{
    text-align: center;
    font-size: 700;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: white;
}
ul li a{
    color: #7151a9;
    font-weight: 900;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
} 
.block{
    gap: 20px;
    grid-template-columns: repeat(4,1fr );
    display: grid;
}   
    </style>
    <?php
    // inclure la base de donne
        include'./db.php';

        // if isset = si il,existe des information envoiye par la  ethode $get
        if(isset($_GET['id'])) {
            $id = $_GET['id'];


            // afficher les information des patients par une requete $sql
            $sql = "SELECT * FROM mes_joueurs WHERE id=$id";


            // et executer la requete par la variable $resultat
            $result = mysqli_query($db,$sql);

            // faire une boucle pour afficher les informations des utilisateur
            if (mysqli_num_rows($result) > 0) {
                $row = $result->fetch_assoc();
                $prenom = $row['prenom'];
                $nom = $row['nom'];
                $age = $row['age'];
                $sex = $row['sex'];
                $group_sanguin = $row['group_sanguin'];
                $filiere = $row['filiere'];
                $tension = $row['tension'];
                $temperature = $row['temperature'];
                $diagnostic = $row['diagnostic'];
                $observation = $row['observation'];

            } else {
                echo "Aucun étudiant trouvé";
            }
        } else {
            echo "Aucun identifiant d'étudiant spécifié";
        }
       
        ?>
        <button><a href="listepatient.php">retour</a></button>

    <form action="update.php" method="post" name="form1">
    
        <h4>Detail d'un patient</h4>
        <hr>
        <div class="block">
        <input type="hidden" name="id" value=<?php echo $id; ?>>

        <label for="prenom">Prenom</label>
        
        <input type="text" name="prenom" id="prenom" value=<?php echo $prenom ; ?>>


        <label for="nom">Nom</label>
    
        <input type="text" name="nom" id="nom" value=<?php echo $nom ; ?>>

        <label for="age">Age</label>
        <input type="text" name="age" id="age"  value=<?php echo $age ; ?>>

        <label for="sex">sex</label>
        <input type="text" name="sex" id="sex" value=<?php echo $sex ; ?>>

        <label for="group_sanguin">Group_sanguin</label>
        <input type="text" name="group_sanguin"  id="group_sanguin" value=<?php echo $group_sanguin; ?>>

        <label for="filiere">filiere</label>
        <input type="text" name="filiere" id="filiere"  value=<?php echo $filiere; ?>>

        <label for="tension">tension</label>
        <input type="text" name="tension" id="tension" value=<?php echo $tension; ?>>

        <label for="temperature">temperature</label>
        <input type="text" name="temperature" id="temperature"  value=<?php echo $temperature; ?>>

        <label for="diagnostic">diagnostic</label>
        <input type="text" name="diagnostic" id="diagnostic"  value=<?php echo $diagnostic; ?>>

        <label for="observation">observation</label>
        <input type="text" name="observation" id="observation"  value=<?php echo $observation; ?>>
    </div>
        <!-- <input type="submit" value="Modifier"> -->
    </form>
		
	</form>
    
</body>
</html>